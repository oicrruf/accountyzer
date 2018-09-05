<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class InformationAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('about_us')
            ->add('vision')
            ->add('mission')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('map')
            ->add('phone')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('about_us', 'text', [
                'collapse' => true
            ])
            ->add('vision', 'text', [
                'collapse' => true
            ])
            ->add('mission', 'text', [
                'collapse' => true
            ])
            ->add('address', 'text', [
                'collapse' => true
            ])
            ->add('city', 'text', [
                'collapse' => true
            ])
            ->add('state', 'text', [
                'collapse' => true
            ])
            ->add('phone', 'text', [
                'collapse' => true
            ])
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('about_us')
            ->add('vision')
            ->add('mission')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('map', null, [
                'help' => 'Ancho y alto de mapa debe ser igual a: width="100%" height="100%"'
            ])
            ->add('phone', null, [
                'help' => 'Ingrese número telefónico sin agregregar +503'
            ])
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('about_us')
            ->add('vision')
            ->add('mission')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('map')
            ->add('phone')
        ;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
    }
}
