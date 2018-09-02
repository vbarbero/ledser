<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7519eaee84e4e58448db507159e35d8ca3688b0e149bd6c52af2c1f174570d51 extends Twig_Template
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
        $__internal_80819f7a6e04a2bbacadbc4f319651b869be8b680fb5075450aa502134d706c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80819f7a6e04a2bbacadbc4f319651b869be8b680fb5075450aa502134d706c0->enter($__internal_80819f7a6e04a2bbacadbc4f319651b869be8b680fb5075450aa502134d706c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_37008a65f7044d060e12b8c0159a29f1218297f06ad3835e178d2e3a09d8f64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37008a65f7044d060e12b8c0159a29f1218297f06ad3835e178d2e3a09d8f64e->enter($__internal_37008a65f7044d060e12b8c0159a29f1218297f06ad3835e178d2e3a09d8f64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_80819f7a6e04a2bbacadbc4f319651b869be8b680fb5075450aa502134d706c0->leave($__internal_80819f7a6e04a2bbacadbc4f319651b869be8b680fb5075450aa502134d706c0_prof);

        
        $__internal_37008a65f7044d060e12b8c0159a29f1218297f06ad3835e178d2e3a09d8f64e->leave($__internal_37008a65f7044d060e12b8c0159a29f1218297f06ad3835e178d2e3a09d8f64e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
