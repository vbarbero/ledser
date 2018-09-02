<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Company;
use AppBundle\Entity\Contact;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('company', EntityType::class,
            ['class' => Company::class, 'choice_label' => 'name']);
        $builder->add('name');
        $builder->add('phone');
        $builder->add('email');
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
                    'data_class'         => Contact::class,
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
        return 'contact';
    }
}
