<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class FormType extends AbstractType
{

    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => $this->translator->trans('form.firstname'),
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => $this->translator->trans('form.lastname'),
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('description', TextType::class, [
                'label' => $this->translator->trans('form.description'),
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => $this->translator->trans('form.submit'),
                'attr'=>[
                    'class'=>'btn btn-primary mt-2'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
