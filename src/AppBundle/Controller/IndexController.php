<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Service;
use AppBundle\Entity\ServiceDetail;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('AppBundle:Service')->findAll();
        $services_detail = $em->getRepository('AppBundle:ServiceDetail')->findAll();

        return $this->render('index/index.html.twig', array(
            'services' => $services,
            'detail' => $services_detail
        ));
    }
    
}
