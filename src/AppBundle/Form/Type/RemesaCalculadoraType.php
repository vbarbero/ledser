<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Proposal;
use AppBundle\Form\Model\RemesaCalculadoraModel;
use AppBundle\Model\CalculatorModel;
use AppBundle\Repository\CompanyRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\DBAL\Types\FloatType;

class RemesaCalculadoraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('formalizacion', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd']);
        $builder->add('vencimiento', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd']);
        $builder->add('dias', IntegerType::class, ['data' => 1]); //, 'attr' => ['readonly' => true]
        $builder->add('drawee', EntityType::class, [
            'class' => Company::class,
            'choice_label' => 'name',
            'required' => false,
            'query_builder' => function( CompanyRepository $er ) {
                return $er->getDrawee();
            }]);
        $builder->add('nominal');
        $builder->add('costeFinanciero');
        $builder->add('costeUnitario');
        $builder->add('timbres');
        $builder->add('tae');

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
                    'data_class'         => RemesaCalculadoraModel::class,
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
        return 'calculadora';
    }
}
