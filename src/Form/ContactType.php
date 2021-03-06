<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class,[
            "attr" => [
                "class"=> "form-control"
            ]
        ])
        ->add('prenom', TextType::class,[
            "attr" => [
                "class"=> "form-control"
            ]
        ])
        ->add('NomSociete', TextType::class,[
            "attr" => [
                "class"=> "form-control"
            ]
        ])
        ->add('mail', EmailType::class,[
            "attr" => [
                "class"=> "form-control"
            ]
        ])
        ->add('objet', TextType::class,[
            "attr" => [
                "class"=> "form-control"
            ]
        ])
        ->add('message', TextareaType::class,[
            "attr" => [
                "class"=> "form-control"
            ]
        ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}