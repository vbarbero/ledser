<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 6/02/18
 * Time: 1:33
 */

namespace AppBundle\Form\Type;

use AppBundle\Entity\Company;
use AppBundle\Entity\User;
use AppBundle\Form\Model\CalendarFilterModel;
use AppBundle\Form\Model\ProposalFilterModel;
use AppBundle\Model\ProposalModel;
use AppBundle\Model\ReportModel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProposalFilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('status', ChoiceType::class, ['choices' => ProposalModel::getStateAsChoice(), 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('from', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd', 'required' => false]);
        $builder->add('to', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd', 'required' => false]);
//        $builder->add('type', ChoiceType::class, ['choices' => ProposalModel::getTypeAsChoice(), 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('operationalType', ChoiceType::class, ['choices' => ProposalModel::getOperationalTypeAsChoice(), 'placeholder' => 'Choose an option', 'required' => false]);
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
                    'data_class'         => ProposalFilterModel::class,
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
        return 'proposal';
    }
}
