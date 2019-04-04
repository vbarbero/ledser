<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Proposal;
use AppBundle\Form\Model\RemesaModel;
use AppBundle\Model\CalculatorModel;
use AppBundle\Repository\CompanyRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RemesaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('state', ChoiceType::class, ['choices' => CalculatorModel::getStateAsChoice()]);
        $builder->add('emision', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd']);
        $builder->add('nominal');
        $builder->add('honorarios');
        $builder->add('extra');
        $builder->add('omf');
        $builder->add('mensajeria');
            $builder->add('burofax');
            $builder->add('gastos');
            $builder->add('reason');
            $builder->add('proposal');
        $builder->add('calculadora', CollectionType::class, [
            'entry_type' => RemesaCalculadoraType::class,
            'entry_options' => ['label' => false],
            'allow_add' => true,
        ]);
        $builder->add('notice', CheckboxType::class, ['required' => false ]);
        $builder->add('noticeMessage', TextType::class, ['required' => false]); //, 'attr' => ['readonly' => true]
        $builder->add('costeFinancieroTotal');
        $builder->add('costeFinancieroTae');
        $builder->add('costeFinancieroMensual');
        $builder->add('costeFinancieroNominal');
        $builder->add('costeFinancieroCoste');
        $builder->add('costeFinancieroLiquido');
        $builder->add('costeFinancieroLedserTotal');

        $builder->add('costeFinancieroLedserTae');
        $builder->add('costeFinancieroLedserMensual');
        $builder->add('costeFinancieroLedserNominal');
        $builder->add('costeFinancieroLedserCoste');
        $builder->add('costeFinancieroLedserLiquido');
        $builder->add('costeTotalTotal');
        $builder->add('costeTotalTae');
        $builder->add('costeTotalMensual');
        $builder->add('costeTotalNominal');
        $builder->add('costeTotalCoste');

        $builder->add('costeTotalLiquido');
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
                    'data_class'         => RemesaModel::class,
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
        return 'remesa';
    }
}
