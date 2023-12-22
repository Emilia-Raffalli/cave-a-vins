<?php

namespace App\Form;

use App\Entity\Bottle;
use App\Entity\DepartmentInStore;
use App\Entity\Region;
use App\Entity\WineType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BottleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description', TextareaType::class)
            ->add('date')
            ->add('Region', EntityType::class, [
                'class' => Region::class,
                'choice_label' => 'name',
            ])
            ->add('wineType', EntityType::class, [
                'class' => WineType::class,
                'choice_label' => 'name',
            ])
            ->add('departmentInStore', EntityType::class, [
                'class' => DepartmentInStore::class,
                'choice_label' => 'number',
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bottle::class,
        ]);
    }
}
