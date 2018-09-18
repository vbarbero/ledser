<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Company;
use AppBundle\Entity\Report;
use AppBundle\Entity\User;
use AppBundle\Model\ReportModel;
use AppBundle\Repository\CompanyRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('company', EntityType::class, ['class' => Company::class, 'choice_label' => 'name', 'query_builder' => function( CompanyRepository $er ) {
            return $er->getCompaniesSorted();
        }]);
        $builder->add('user', EntityType::class, ['class' => User::class, 'choice_label' => 'username', 'placeholder' => 'Choose an option', 'required' => false, 'empty_data' => null,]);
        $builder->add('date', DateTimeType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd HH:mm']);
        $builder->add('action', ChoiceType::class, ['choices' => ReportModel::getActionAsChoice()]);
        $builder->add('done', ChoiceType::class, ['choices' => ReportModel::getDoneAsChoice()]);
        $builder->add('report', TextareaType::class);


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
                    'data_class'         => Report::class,
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
        return 'report';
    }
}
