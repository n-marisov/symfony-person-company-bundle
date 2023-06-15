<?php

namespace Maris\SymfonyBundle\PersonBundle\Form;

use Maris\SymfonyBundle\PersonBundle\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Форма для регистрации компании
 */
class RegistrationCompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder->add('legalForm',HiddenType::class);
        $builder->add('name',HiddenType::class);
        $builder->add('inn',HiddenType::class);
        $builder->add('kpp',HiddenType::class);
        $builder->add('ogrn',HiddenType::class);
        $builder->add('address',HiddenType::class);
        $builder->add("management",HiddenType::class);

    }

    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults([
            "data_class" => Company::class
        ]);
    }
}