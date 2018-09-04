<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Service;
use AppBundle\Entity\Information;

class IndexController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('AppBundle:Service')->findAll();
        $information = $em->getRepository('AppBundle:Information')->findAll();

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle('Inicio | Accountyzer')
            ->addMeta('property', 'og:type', 'home');

        return $this->render('index.html.twig', array(
            'services' => $services,
            'information' => $information
        ));
    }
    
}
