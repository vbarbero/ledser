<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b9a02677ec4f33d088dd75d41725425792f9e2358ee1e859964149fc52c49819 extends Twig_Template
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
        $__internal_da0313a40d11cb325b89cce689055bc5f9d5d12f45735b4993e7e3475b778b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0313a40d11cb325b89cce689055bc5f9d5d12f45735b4993e7e3475b778b11->enter($__internal_da0313a40d11cb325b89cce689055bc5f9d5d12f45735b4993e7e3475b778b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8559a1e3e5e7f95e6c8f17ee0afb6796600bac948f2067cd332fba169b38b228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8559a1e3e5e7f95e6c8f17ee0afb6796600bac948f2067cd332fba169b38b228->enter($__internal_8559a1e3e5e7f95e6c8f17ee0afb6796600bac948f2067cd332fba169b38b228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_da0313a40d11cb325b89cce689055bc5f9d5d12f45735b4993e7e3475b778b11->leave($__internal_da0313a40d11cb325b89cce689055bc5f9d5d12f45735b4993e7e3475b778b11_prof);

        
        $__internal_8559a1e3e5e7f95e6c8f17ee0afb6796600bac948f2067cd332fba169b38b228->leave($__internal_8559a1e3e5e7f95e6c8f17ee0afb6796600bac948f2067cd332fba169b38b228_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
