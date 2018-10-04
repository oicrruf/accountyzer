<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Training;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Training controller.
 *
 */
class TrainingController extends Controller
{
    /**
     * Lists all training entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle('Capacitaciones | Accountyzer')
            ->addMeta('property', 'type', 'training');
            //->addMeta('property', 'content', $training->getContent());

        $trainings = $em->getRepository('AppBundle:Training')->findAll();

        return $this->render('training/trainingIndex.html.twig', array(
            'trainings' => $trainings,
        ));
    }

    /**
     * Finds and displays a training entity.
     *
     */
    public function showAction(Training $training)
    {
        
        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle($training->getName().' | Accountyzer')
            ->addMeta('property', 'type', 'training')
            ->addMeta('property', 'content', $training->getContent());


        return $this->render('training/trainingShow.html.twig', array(
            'training' => $training,
        ));
    }
}
