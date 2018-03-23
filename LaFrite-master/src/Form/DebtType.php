<?php

namespace App\Form;

use App\Entity\Debt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DebtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('giver',TextType::class, array('required'=>false))
            ->add('receiver', TextType::class, array('required'=>false))
            ->add('nameDebtType', ChoiceType::class, array(
                'choices' => array(
                    'Fast-food' => array(
                        'Burger' => 'Burger',
                        'Sandwich' => 'Sandwich',
                        'Grec' => 'Grec',
                        'Bagel' => 'Bagel',
                    ),
                    'Boissons' => array(
                        'Boissons chaudes' => 'Boissons chaudes',
                        'Bubble tea' => 'Bubble tea',
                        'Apéro' => 'Apéro',
                        'Alcools forts' => 'Alcools forts',
                        'Softs' => 'Softs',
                        'Bières/Cocktails/Vins' => 'Bières/Cocktails/Vins',
                    ),

                    'Européen' => array(
                        'Italien' => 'Italien',
                        'Français' => 'Français',
                        'Espagnol' => 'Espagnol',
                        'Crêperie' => 'Crêperie',
                    ),

                    'Asiatique' => array(
                        'Chinois' => 'Chinois',
                        'Thaïlandais' => 'Thaïlandais',
                        'Coréen' => 'Coréen',
                        'Japonais' => 'Japonais',
                        'Indien' => 'Indien',
                    ),

                    'Sucré' => array(
                        'Patisseries' => 'Patisseries',
                        'Glaces' => 'Glaces',
                    ),

                ),

            ))
            ->add('debtDeadline', BirthdayType::class, array('required'=>false));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Debt::class,
        ]);
    }
}
