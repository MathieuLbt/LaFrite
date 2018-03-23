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
                    'Main Statuses' => array(
                        'Yes' => 'stock_yes',
                        'No' => 'stock_no',
                    ),
                    'Out of Stock Statuses' => array(
                        'Backordered' => 'stock_backordered',
                        'Discontinued' => 'stock_discontinued',
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
