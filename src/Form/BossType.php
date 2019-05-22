<?php


namespace App\Form;

use App\Model\Boss;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BossType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('salutation',
                ChoiceType::class,
                [
                    'choices' => [
                        'Male' => 0,
                        'Female' => 1,
                    ],
                    'expanded' => true,
                    'empty_data' => null,
                    'required' => false,
                    'placeholder' => null,
                ]
            )
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Boss::class,
        ]);
    }


}