<?php

namespace App\Form;

use App\Entity\Catalogue;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CatalogueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class,[
                "attr" => [
                    "class"=> "form-control"
                ]
            ])
            ->add('description',TextareaType::class,[
                "attr" => [
                    "class"=> "form-control"
                ]
            ])
            ->add('imagePrincipale',FileType::class,[
                "attr" => [
                    "class"=> "form-control",
                    
                ],
                "required" => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Catalogue::class,
        ]);
    }
}