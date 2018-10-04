<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('AppBundle:Service')->findAll();
        $services_detail = $em->getRepository('AppBundle:ServiceDetail')->findAll();

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle('Servicios | Accountyzer')
            ->addMeta('property', 'type', 'services');

        return $this->render('service/serviceIndex.html.twig', array(
            'services' => $services,
            'detail' => $services_detail
        ));
    }

    public function newAction(Request $request)
    {
        $service = new Service();
        $form = $this->createForm('AppBundle\Form\ServiceType', $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirectToRoute('service_show', array('id' => $service->getId()));
        }

        return $this->render('service/serviceNew.html.twig', array(
            'service' => $service,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Service $service)
    {
        $em = $this->getDoctrine()->getManager();

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
            ->setTitle($service->getName().' | Accountyzer')
            ->addMeta('property', 'description', $service->getDescription())
            ->addMeta('property', 'type', 'service');

        $deleteForm = $this->createDeleteForm($service);
        
        $all_services = $em->getRepository('AppBundle:Service')->findAll();
        $services_detail = $em->getRepository('AppBundle:ServiceDetail')->findAll();

        return $this->render('service/serviceShow.html.twig', array(
            'service' => $service,
            'allServices' => $all_services,
            'detail' => $services_detail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    public function editAction(Request $request, Service $service)
    {
        $deleteForm = $this->createDeleteForm($service);
        $editForm = $this->createForm('AppBundle\Form\ServiceType', $service);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('service_edit', array('id' => $service->getId()));
        }

        return $this->render('service/ServiceEdit.html.twig', array(
            'service' => $service,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Service $service)
    {
        $form = $this->createDeleteForm($service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($service);
            $em->flush();
        }

        return $this->redirectToRoute('service_index');
    }

    /**
     * Creates a form to delete a service entity.
     *
     * @param Service $service The service entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Service $service)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('service_delete', array('id' => $service->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}