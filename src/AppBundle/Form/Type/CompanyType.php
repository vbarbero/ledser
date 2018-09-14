<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Company;
use AppBundle\Model\CompanyModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class CompanyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cif');
        $builder->add('name');
        $builder->add('autocomplete', TextType::class, ['mapped' => false, 'required'   => false]);
        $builder->add('address', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('city', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('province', TextType::class, ['attr' => ['readonly' => true]]);
        $builder->add('zip', TextType::class, ['attr' => ['readonly' => true]]);

        $builder->add('cnae');
        $builder->add('addressNumber');
        $builder->add('type', ChoiceType::class, ['choices' => CompanyModel::getTypeAsChoice()]);

        $builder->add('rating', ChoiceType::class, ['choices' => CompanyModel::getRatingAsChoice()]);
        $builder->add('facturacion', ChoiceType::class, ['choices' => CompanyModel::getFacturacionAsChoice()]);
        $builder->add('tipoClientes', ChoiceType::class, ['choices' => CompanyModel::getClienteAsChoice()]);
        $builder->add('tipoClientesTexto', TextType::class);
        $builder->add('banco', ChoiceType::class, ['choices' => CompanyModel::getSiNoAsChoice()]);
        $builder->add('saturan', ChoiceType::class, ['choices' => CompanyModel::getSiNoAsChoice()]);
        $builder->add('competencia', ChoiceType::class, ['choices' => CompanyModel::getSiNoAsChoice()]);
        $builder->add('competenciaTexto', TextType::class);
        $builder->add('plazo', ChoiceType::class, ['choices' => CompanyModel::getPlazoAsChoice()]);
        $builder->add('medioCobro', ChoiceType::class, ['choices' => CompanyModel::getMEdioCobroAsChoice(), 'multiple' => true]);

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
                    'data_class'         => Company::class,
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
        return 'company';
    }
}
