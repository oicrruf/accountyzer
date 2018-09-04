<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

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
            ->add('about_us')
            ->add('vision')
            ->add('mission')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('map')
            ->add('phone')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
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
            ->add('map')
            ->add('phone')
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
}
