<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b62b2a2ab8db5a9f7bf6644683c8392bdd1f188d3211a36d47ebb8022c09190d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5345aa06433c1c97bdd7a05a87b474f5c24d0148960fe7fded05a7be8e21d027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5345aa06433c1c97bdd7a05a87b474f5c24d0148960fe7fded05a7be8e21d027->enter($__internal_5345aa06433c1c97bdd7a05a87b474f5c24d0148960fe7fded05a7be8e21d027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1435c89737bf951ce27deece8e5813247f103d5be0a8cc65d299400e507a7865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1435c89737bf951ce27deece8e5813247f103d5be0a8cc65d299400e507a7865->enter($__internal_1435c89737bf951ce27deece8e5813247f103d5be0a8cc65d299400e507a7865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5345aa06433c1c97bdd7a05a87b474f5c24d0148960fe7fded05a7be8e21d027->leave($__internal_5345aa06433c1c97bdd7a05a87b474f5c24d0148960fe7fded05a7be8e21d027_prof);

        
        $__internal_1435c89737bf951ce27deece8e5813247f103d5be0a8cc65d299400e507a7865->leave($__internal_1435c89737bf951ce27deece8e5813247f103d5be0a8cc65d299400e507a7865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
