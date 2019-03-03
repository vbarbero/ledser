<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Company;
use AppBundle\Entity\Proposal;
use AppBundle\Entity\User;
use AppBundle\Entity\Agent;
use AppBundle\Repository\AgentRepository;
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
        $builder->add('company', EntityType::class, ['required' => false, 'class' => Company::class, 'choice_label' => 'name', 'query_builder' => function( CompanyRepository $er ) {
            return $er->getCompany();
        }]);
        
        $builder->add('agent', EntityType::class, ['class' => Agent::class, 'choice_label' => 'name', 'required' => false, 'query_builder' => function( AgentRepository $er ) {
            return $er->findAll();
        }]);
        $builder->add('user', EntityType::class, ['class' => User::class, 'choice_label' => 'username']);
        $builder->add('finalcial', EntityType::class, [
            'required' => false,
            'class' => Company::class,
            'choice_label' => 'name',
            'query_builder' => function( CompanyRepository $er ) {
                   return $er->getFinantial();
            }]);
        $builder->add('operationalType',ChoiceType::class, ['choices' => ProposalModel::getOperationalTypeAsChoice()]);
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
