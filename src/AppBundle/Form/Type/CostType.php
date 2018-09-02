<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Cost;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('total');
        $builder->add('tae');
        $builder->add('mensual');
        $builder->add('retencion');
        $builder->add('nominal');
        $builder->add('coste');
        $builder->add('liquido');
        $builder->add('retencionTotal');

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
                    'data_class'         => Cost::class,
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
        return 'cost';
    }
}
