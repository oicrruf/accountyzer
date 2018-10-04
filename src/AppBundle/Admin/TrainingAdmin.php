<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TrainingAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('goal')
            ->add('content')
            ->add('start_date')
            ->add('end_date')
            ->add('place')
            ->add('start_hour')
            ->add('end_hour')
            ->add('contact_phone')
            ->add('contact_email')
            ->add('target')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('goal')
            ->add('content')
            ->add('start_date')
            ->add('end_date')
            ->add('place')
            ->add('start_hour')
            ->add('end_hour')
            ->add('contact_phone')
            ->add('contact_email')
            ->add('target')
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
            ->add('name')
            ->add('goal')
            ->add('content')
            ->add('start_date')
            ->add('end_date')
            ->add('place')
            ->add('start_hour')
            ->add('end_hour')
            ->add('contact_phone')
            ->add('contact_email')
            ->add('target')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('goal')
            ->add('content')
            ->add('start_date')
            ->add('end_date')
            ->add('place')
            ->add('start_hour')
            ->add('end_hour')
            ->add('contact_phone')
            ->add('contact_email')
            ->add('target')
        ;
    }
}
