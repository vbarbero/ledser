<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2f1f80f8ee6a759589064c713630d53dbddc0c026752677c5befbfdfb7e4e800 extends Twig_Template
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
        $__internal_7606839b21a0f2c12252e058dd8fa6834e879aa64ac8e04a980c47e4b672bddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7606839b21a0f2c12252e058dd8fa6834e879aa64ac8e04a980c47e4b672bddd->enter($__internal_7606839b21a0f2c12252e058dd8fa6834e879aa64ac8e04a980c47e4b672bddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_483d2c586e0b931a9b068a1e4a6c4ee6ec9364fd21bd36c5bfcfac89c985546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483d2c586e0b931a9b068a1e4a6c4ee6ec9364fd21bd36c5bfcfac89c985546e->enter($__internal_483d2c586e0b931a9b068a1e4a6c4ee6ec9364fd21bd36c5bfcfac89c985546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7606839b21a0f2c12252e058dd8fa6834e879aa64ac8e04a980c47e4b672bddd->leave($__internal_7606839b21a0f2c12252e058dd8fa6834e879aa64ac8e04a980c47e4b672bddd_prof);

        
        $__internal_483d2c586e0b931a9b068a1e4a6c4ee6ec9364fd21bd36c5bfcfac89c985546e->leave($__internal_483d2c586e0b931a9b068a1e4a6c4ee6ec9364fd21bd36c5bfcfac89c985546e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
