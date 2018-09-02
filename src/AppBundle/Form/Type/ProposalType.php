<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Company;
use AppBundle\Entity\Proposal;
use AppBundle\Model\ProposalModel;
use AppBundle\Repository\CompanyRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProposalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('company', EntityType::class, ['class' => Company::class, 'choice_label' => 'name']);
        $builder->add('state', ChoiceType::class, ['choices' => ProposalModel::getStateAsChoice()]);
//        $builder->add('type', ChoiceType::class, ['choices' => ProposalModel::getTypeAsChoice()]);
        $builder->add('operationalType',ChoiceType::class, ['choices' => ProposalModel::getOperationalTypeAsChoice()]);
        $builder->add('rating', ChoiceType::class, ['choices' => ProposalModel::getRatingAsChoice()]);
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
                    'data_class'         => Proposal::class,
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
