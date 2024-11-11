<?php

namespace App\Form;

use App\Entity\Recipe;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Nom de la recette :',
                'attr' => [
                    'placeholder' => 'Veuillez renseigner un nom de recette'
                ]
            ])
            ->add('description', TextType::class, [
                'label' => 'Description de la recette : ',
                'attr' => [
                    'placeholder' => 'Veuillez fournir une description de la recette'
                ]
            ])
            ->add('cooking_time', IntegerType::class, [
                'label' => 'Temps de cuisson (en minute) : ',
                'attr' => [
                    'min' => 1
                ]
            ])
            ->add('preparation_time', IntegerType::class, [
                'label' => 'Temps de préparation (en minute) :',
                'attr' => [
                    'min' => 1
                ]
            ])
            ->add('serving', NumberType::class, [
                'label' => 'Nombre de parts :',
                'html5' => true,
                'attr' => [
                    'min' => 1,
                    'max' => 20
                ]
            ])
            ->add('difficulty', ChoiceType::class, [
                'label' => 'Difficulté :',
                'choices' => [
                    'Facile' => 'facile',
                    'Moyenne' => 'moyenne',
                    'Élevée' => 'élevée'
                ]
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie :',
                'choices' => [
                    'Entrée' => 'entrée',
                    'Plat' => 'plat',
                    'Dessert' => 'dessert'
                ]
            ])
            ->add('created_at', null, [
                'label' => 'Date de création :',
                'widget' => 'single_text',
            ])
            ->add('picture', FileType::class, [
                'label' => 'Photo de la recette :',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuille télécharger une photo au format JPG, PNG ou WEBP'
                    ])
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
