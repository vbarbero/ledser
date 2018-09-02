<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d075d28d0ca71d4da0546414b609db545c460c01432ae097520c84ee0cf9bb69 extends Twig_Template
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
        $__internal_f232ea75de00af44197c0be3226fad014f3e20dcef3b442efa77909f63f5d92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f232ea75de00af44197c0be3226fad014f3e20dcef3b442efa77909f63f5d92a->enter($__internal_f232ea75de00af44197c0be3226fad014f3e20dcef3b442efa77909f63f5d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_794c70b6143cb05591759f50f82d648128e26a02fc3d63a56ee5e8fee60e1408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794c70b6143cb05591759f50f82d648128e26a02fc3d63a56ee5e8fee60e1408->enter($__internal_794c70b6143cb05591759f50f82d648128e26a02fc3d63a56ee5e8fee60e1408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f232ea75de00af44197c0be3226fad014f3e20dcef3b442efa77909f63f5d92a->leave($__internal_f232ea75de00af44197c0be3226fad014f3e20dcef3b442efa77909f63f5d92a_prof);

        
        $__internal_794c70b6143cb05591759f50f82d648128e26a02fc3d63a56ee5e8fee60e1408->leave($__internal_794c70b6143cb05591759f50f82d648128e26a02fc3d63a56ee5e8fee60e1408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
