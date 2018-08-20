<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label'     => 'Nombre',
                'attr'      => array('class' => 'form-control'),
                'required'  => true                
            ))
            ->add('email', TextType::class, array(
                'label'     => 'Correo electrónico',
                'attr'      => array('class' => 'form-control'),
                'required'  => true                
            ))
            ->add('phone', TextType::class, array(
                'label'     => 'Teléfono',
                'attr'      => array('class' => 'form-control'),
                'required'  => false                
            ))
            ->add('message', TextareaType::class, array(
                'attr'      => array('class' => 'form-control'),
                'required'  => true                
            ))
            ->add('interest', EntityType::class, array(
                'label'     => 'Servicio relacionado',
                'class'     =>  'AppBundle:Service', 
                'attr'      => array('class' => 'form-control'),
                'expanded'  =>  false
            ))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'contact';
    }


}