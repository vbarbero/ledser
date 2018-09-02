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
use AppBundle\Model\ReportModel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarFilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cif', EntityType::class, ['class' => Company::class, 'choice_label' => 'cif', 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('company', EntityType::class, ['class' => Company::class, 'choice_label' => 'name', 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('user', EntityType::class, ['class' => User::class, 'choice_label' => 'username', 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('dateFrom', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd', 'required' => false]);
        $builder->add('dateTo', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd', 'required' => false]);
        $builder->add('done', ChoiceType::class, ['choices' => ReportModel::getDoneAsChoice(), 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('phone', null, ['required' => false]);
        $builder->add('clientType', ChoiceType::class, ['choices' => ReportModel::getClientTypeAsChoice(), 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('actionType', ChoiceType::class, ['choices' => ReportModel::getActionAsChoice(), 'placeholder' => 'Choose an option', 'required' => false]);
        $builder->add('province',null, ['required' => false]);
        $builder->add('zip', null,['required' => false]);
        $builder->add('city',null, ['required' => false]);
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
                    'data_class'         => CalendarFilterModel::class,
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
        return 'calendar';
    }
}
