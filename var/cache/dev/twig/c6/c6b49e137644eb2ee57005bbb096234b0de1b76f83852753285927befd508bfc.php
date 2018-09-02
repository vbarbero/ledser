<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_63ffd6a05755d63d211aa30ad12ff3cd0ed61574452f14094f363e74eaf01aff extends Twig_Template
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
        $__internal_efd55d2a45ceb90115a10504db17f039ee838cc9ec1534a595e34926ae8a5788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd55d2a45ceb90115a10504db17f039ee838cc9ec1534a595e34926ae8a5788->enter($__internal_efd55d2a45ceb90115a10504db17f039ee838cc9ec1534a595e34926ae8a5788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f3beff0a7ab690cf52f1a436aa9286fd0747485be5bb9055336917ea64c656c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3beff0a7ab690cf52f1a436aa9286fd0747485be5bb9055336917ea64c656c5->enter($__internal_f3beff0a7ab690cf52f1a436aa9286fd0747485be5bb9055336917ea64c656c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_efd55d2a45ceb90115a10504db17f039ee838cc9ec1534a595e34926ae8a5788->leave($__internal_efd55d2a45ceb90115a10504db17f039ee838cc9ec1534a595e34926ae8a5788_prof);

        
        $__internal_f3beff0a7ab690cf52f1a436aa9286fd0747485be5bb9055336917ea64c656c5->leave($__internal_f3beff0a7ab690cf52f1a436aa9286fd0747485be5bb9055336917ea64c656c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
