<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', null, [
            'label' => 'Name',
        ])
        ->add('prenom', null, [
            'label' => 'First Name',
        ])
        ->add('email', null, [
            'label' => 'Email',
        ])
        ->add('sujet', null, [
            'label' => 'Subject',
        ])
        ->add('message', null, [
            'label' => 'Message',
        ])
            // ->add('createdAt', null, [
            //     'widget' => 'single_text',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
