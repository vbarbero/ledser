<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_30e664bdef14ae684448281da9de8ec1c2b47b2d039205a4da5d43690deb2e52 extends Twig_Template
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
        $__internal_0c6cb3650cbd0da4575c08b34f7b24ce8edaa2a8a0e79e60b7b03d262f18dc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6cb3650cbd0da4575c08b34f7b24ce8edaa2a8a0e79e60b7b03d262f18dc8d->enter($__internal_0c6cb3650cbd0da4575c08b34f7b24ce8edaa2a8a0e79e60b7b03d262f18dc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_85359a818e8328e6e7315a7ee7a9d3a5225b51a3932279d3b61621c54f44fe26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85359a818e8328e6e7315a7ee7a9d3a5225b51a3932279d3b61621c54f44fe26->enter($__internal_85359a818e8328e6e7315a7ee7a9d3a5225b51a3932279d3b61621c54f44fe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0c6cb3650cbd0da4575c08b34f7b24ce8edaa2a8a0e79e60b7b03d262f18dc8d->leave($__internal_0c6cb3650cbd0da4575c08b34f7b24ce8edaa2a8a0e79e60b7b03d262f18dc8d_prof);

        
        $__internal_85359a818e8328e6e7315a7ee7a9d3a5225b51a3932279d3b61621c54f44fe26->leave($__internal_85359a818e8328e6e7315a7ee7a9d3a5225b51a3932279d3b61621c54f44fe26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
