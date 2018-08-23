<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class MessageController extends Controller
{
   
    public function newAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm('AppBundle\Form\MessageType', $message);
        $form->handleRequest($request);

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle('Contacto | Accountyzer')
            ->addMeta('property', 'og:type', 'contact');

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('message_show', array('id' => $message->getId()));
        }

        return $this->render('message/messageContact.html.twig', array(
            'message' => $message,
            'form' => $form->createView(),
        ));
    }

    
    public function showAction(Message $message)
    {
        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle('Confirmación de Mensajes | Accountyzer')
            ->addMeta('property', 'og:type', 'contact');

        return $this->render('message/confirmContact.html.twig', array(
            'message' => $message,
        ));
    }

}
