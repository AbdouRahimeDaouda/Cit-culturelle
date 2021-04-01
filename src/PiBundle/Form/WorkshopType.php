<?php

namespace PiBundle\Form;

use Doctrine\ORM\Mapping\Entity;
use PiBundle\Entity\Club;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkshopType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nbParticipant')->add('dateDebut')->add('dateFin')->add('description');
        $builder->add('Salle', EntityType::class, array(
            'class' => 'PiBundle:Salle',
            'choice_label'=>'nom',
        ));
        $builder->add('Club', EntityType::class, array(
            'required' => true,
            'class' => 'PiBundle:Club',
            'choice_label'=>'nom',
        ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PiBundle\Entity\Workshop'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pibundle_workshop';
    }


}
