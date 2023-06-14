<?php

namespace Maris\SymfonyBundle\PersonBundle\Form;


use Maris\SymfonyBundle\PersonBundle\Entity\Person;
use Misd\PhoneNumberBundle\Form\Type\PhoneNumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('phone', PhoneNumberType::class,[
                "default_region" => "RU",
                "label"=>"Номер телефон",
                "attr" => [
                    "id"=>'phoneInput',
                    "placeholder" => "Номер телефон",
                    "autocomplete" => "off"
                ]
            ])
            ->add("personValue",TextType::class,[
                'mapped'=>false,
                'required'=>false,
                'label'=>"ФИО",
                'attr'=>[
                    "id"=>"fioInput",
                    "placeholder" => "ФИО",
                    'autocomplete' => 'off'
                ],
                'constraints'=>[
                    new NotBlank([
                        "message"=>"Поле не может быть пустым"
                    ])
                ]
            ])
            ->add('firstName',HiddenType::class)
            ->add('lastName',HiddenType::class)
            ->add('patronymic',HiddenType::class)
            ->add('gender',HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Person::class,
        ]);
    }
}
