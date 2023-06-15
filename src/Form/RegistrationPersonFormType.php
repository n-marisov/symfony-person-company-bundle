<?php

namespace Maris\SymfonyBundle\PersonBundle\Form;


use Maris\SymfonyBundle\PersonBundle\Entity\Account;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationPersonFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //$terms  = $this->urlGenerator->generate("privacy_policy");
        $terms = "#";
        $builder
            ->add('person',PersonType::class)
            ->add('agreeTerms', CheckboxType::class, [
                "label" => "Я даю согласие на обработку моих персональных данных и согласен с <a href=\"{$terms}\">условиями предоставления услуг</a>",
                "label_html"=>true,
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Вы должны согласиться с нашими условиями для использования сервиса.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                "label" => "Пароль",
                'mapped' => false,
                'attr' => [
                    "id"=>"passwordInput",
                    "placeholder" => "Пароль",
                    'autocomplete' => 'off'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Пожалуйста, введите пароль',
                    ]),
                    new Length([
                        'min' => 6,
                        'max' => 4096,
                        'minMessage' => 'Ваш пароль должен содержать не менее {{ limit }} символов',
                        'maxMessage' => 'Ваш пароль должен содержать не более {{ limit }} символов',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
