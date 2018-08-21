<?php 

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

/**
 * Types
 */

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

/**
 * Modelos relacionados
 */

use AppBundle\Entity\Service;

class ContactAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id', TextType::class, array(
                'disabled'  => 'true'
                ))
            ->add('name', TextType::class, array(
                'disabled'  => 'true'
                ))
            ->add('email', TextType::class, array(
                'disabled'  => 'true'
                ))
            ->add('phone', TextType::class, array(
                'disabled'  => 'true'
                )) 
            ->add('message', TextType::class, array(
                'disabled'  => 'true'
                )) 
            ->add('interest', EntityType::class, [
                'class' => Service::class,
                'disabled'  => 'true'
            ])
            ->add('answered', CheckboxType::class)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('phone')
            ->add('message')
            ->add('interest.name')
            ->add('answered')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('interest.name')
            ->add('answered')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('phone')
            ->add('message')
            ->add('interest.name')
            ->add('answered')
        ;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
    }
}