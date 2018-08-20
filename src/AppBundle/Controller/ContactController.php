<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
   
    public function newAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm('AppBundle\Form\ContactType', $contact);
        $form->handleRequest($request);

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle('Contacto | Accountyzer')
            ->addMeta('property', 'og:type', 'contact');

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('message_show', array('id' => $contact->getId()));
        }

        return $this->render('contact/messageContact.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }

    
    public function showAction(Contact $contact)
    {
        return $this->render('contact/confirmContact.html.twig', array(
            'contact' => $contact,
        ));
    }

}
