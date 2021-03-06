<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Proposal;
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

class CalculatorFakeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $tomorrow = new \DateTime();
        $tomorrow->modify("+1 day");
        $builder->add('formalizacion', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd',  'data' => new \DateTime("now")]);
        $builder->add('vencimiento', DateType::class, ['widget' => 'single_text',  'format' => 'yyyy-MM-dd',  'data' => $tomorrow]);
        $builder->add('dias', IntegerType::class, ['data' => 1]); //, 'attr' => ['readonly' => true]
        $builder->add('costeFinancieroCoste', TextType::class, ['mapped' => false, 'attr' => ['readonly' => true]]); //, 'attr' => ['readonly' => true]
        $builder->add('costeFinancieroLedserCoste', TextType::class, ['mapped' => false, 'attr' => ['readonly' => true]]); //, 'attr' => ['readonly' => true]
        $builder->add('costeTotalCoste', TextType::class, ['mapped' => false, 'attr' => ['readonly' => true]]); //, 'attr' => ['readonly' => true]
        $builder->add('ConPorcentaje', CheckboxType::class, ['mapped' => false, 'required' => false]);
        $builder->add('nominal');
        $builder->add('honorarios');
        $builder->add('extra');
        $builder->add('timbres');
        $builder->add('omf');
        $builder->add('mensajeria');
        $builder->add('burofax');
        $builder->add('gastos');
        $builder->add('porcentaje', TextType::class, ['required' => false ]);
        $builder->add('introduce', ChoiceType::class, ['choices' => ['' => '', 'tae' => 'tae', 'mensual' => 'mensual', 'total' => 'total', 'coste' => 'coste']]);
        $builder->add('introduce2', ChoiceType::class, ['choices' => ['' => '', 'costeFinanciero' =>'costeFinanciero','costeFinancieroLedser' => 'costeFinancieroLedser','costeTotal'=> 'costeTotal']]);
        $builder->add('existeTimbre', CheckboxType::class, ['mapped' => false, 'required' => false ]);
        $builder->add('boton', HiddenType::class, ['mapped' => false, 'required' => false ]);
        $builder->add('costeFinanciero', CostType::class);
        $builder->add('costeFinancieroLedser', CostType::class);
        $builder->add('costeTotal', CostType::class);
        $builder->add('proposal', EntityType::class, ['class' => Proposal::class, 'choice_label' => 'id']);
        $builder->add('proposal', EntityType::class, ['class' => Proposal::class, 'choice_label' => 'id']);
        $builder->add('proposal', EntityType::class, ['class' => Proposal::class, 'choice_label' => 'id']);
    }

    /**
     * Returns the firstName of this type.
     *
     * @return string The firstName of this type
     */
    public function getName()
    {
        return 'calculator';
    }
}
