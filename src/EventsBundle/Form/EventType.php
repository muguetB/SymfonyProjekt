<?php

namespace EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EventsBundle\Entity\Event;

class EventType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('name', TextType::class, array('label' => 'Nazwa wydarzenia: '))
                ->add('date', DateType::class, array('widget' => 'single_text', 'label' => 'Data wydarzenia: '))
                ->add('streets', TextType::class, array('label' => 'Ulice objęte wydarzeniem: '))
                ->add('description', TextareaType::class, array('label' => 'Opis wydarzenia: '))
                ->add('save', SubmitType::class, array('label' => 'Zapisz'));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => Event::class,
        ));
    }

}
