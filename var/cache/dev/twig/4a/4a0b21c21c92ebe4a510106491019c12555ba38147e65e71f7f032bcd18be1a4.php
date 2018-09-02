<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cec244361b6262dcd008aeb14335c93c51584aa0b589485742f8e5a2802fcafa extends Twig_Template
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
        $__internal_9cc8b3ce4369acccdddff7490d657a28878e3cb3bff780b7f254ee7bcef98f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc8b3ce4369acccdddff7490d657a28878e3cb3bff780b7f254ee7bcef98f96->enter($__internal_9cc8b3ce4369acccdddff7490d657a28878e3cb3bff780b7f254ee7bcef98f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4ac0c61281ec4c31cedb8b7a40433f65320069509faac64c1d13e78eff69cb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac0c61281ec4c31cedb8b7a40433f65320069509faac64c1d13e78eff69cb01->enter($__internal_4ac0c61281ec4c31cedb8b7a40433f65320069509faac64c1d13e78eff69cb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9cc8b3ce4369acccdddff7490d657a28878e3cb3bff780b7f254ee7bcef98f96->leave($__internal_9cc8b3ce4369acccdddff7490d657a28878e3cb3bff780b7f254ee7bcef98f96_prof);

        
        $__internal_4ac0c61281ec4c31cedb8b7a40433f65320069509faac64c1d13e78eff69cb01->leave($__internal_4ac0c61281ec4c31cedb8b7a40433f65320069509faac64c1d13e78eff69cb01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
