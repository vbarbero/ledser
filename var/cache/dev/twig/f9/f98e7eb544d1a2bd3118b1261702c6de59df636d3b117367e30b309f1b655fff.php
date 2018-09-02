<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_abdb50299a954a60326d7f5a03526a30d24533d1a3ed1b84fe37ee4405403584 extends Twig_Template
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
        $__internal_0a9eb5bfd5dbf251aba2c59e7b649373c26a2d198e83829f8240d79847f94997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9eb5bfd5dbf251aba2c59e7b649373c26a2d198e83829f8240d79847f94997->enter($__internal_0a9eb5bfd5dbf251aba2c59e7b649373c26a2d198e83829f8240d79847f94997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_62bfbccf5fb136a7fab74b1e4f37c621201ecd0347db499367aac37a375bc284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bfbccf5fb136a7fab74b1e4f37c621201ecd0347db499367aac37a375bc284->enter($__internal_62bfbccf5fb136a7fab74b1e4f37c621201ecd0347db499367aac37a375bc284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0a9eb5bfd5dbf251aba2c59e7b649373c26a2d198e83829f8240d79847f94997->leave($__internal_0a9eb5bfd5dbf251aba2c59e7b649373c26a2d198e83829f8240d79847f94997_prof);

        
        $__internal_62bfbccf5fb136a7fab74b1e4f37c621201ecd0347db499367aac37a375bc284->leave($__internal_62bfbccf5fb136a7fab74b1e4f37c621201ecd0347db499367aac37a375bc284_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
