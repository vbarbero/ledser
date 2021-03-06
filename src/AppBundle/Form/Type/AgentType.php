<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Agent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class AgentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dni');
        $builder->add('lastName');
        $builder->add('name');
        $builder->add('autocomplete', TextType::class, ['mapped' => false, 'required'   => false]);
        $builder->add('address', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('city', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('province', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('zip', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('addressNumber');

    }

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver the resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults(
                [
                    'data_class'         => Agent::class,
                ]
            );
    }

    /**
     * Returns the firstName of this type.
     *
     * @return string The firstName of this type
     */
    public function getName()
    {
        return 'agent';
    }
}
