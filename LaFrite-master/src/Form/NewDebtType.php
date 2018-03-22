<?php

namespace App\Form;

use App\Entity\Debt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewDebtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('giver', Textype::class, ['label'=>"Giver name"])
            ->add('receiver',Textype::class, ['label'=>"Receiver name"])
            ->add('nameDebtType')
            ->add('debtDeadline', Datetype::class)
            ->add('date', DateType::class, array(
                'widget' => 'single_text',

                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => false,

                // adds a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker'],
            ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Debt::class,
        ]);
    }
}
