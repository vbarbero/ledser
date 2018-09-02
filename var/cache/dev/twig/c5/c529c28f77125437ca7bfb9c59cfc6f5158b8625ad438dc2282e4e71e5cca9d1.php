<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_86ccc6b2f7b8f67e7ac0a6d97a7018ef38e8ebac74ed2cc4eec4d097c6394bc3 extends Twig_Template
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
        $__internal_2c19719fc04727172ac1e4f556a5bfaec4f80281c515f12c004217df268da057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c19719fc04727172ac1e4f556a5bfaec4f80281c515f12c004217df268da057->enter($__internal_2c19719fc04727172ac1e4f556a5bfaec4f80281c515f12c004217df268da057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3f7ae64e980970c359fe7cf028ce9f3c481cfb22acfe804ddef02f5e858ff072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7ae64e980970c359fe7cf028ce9f3c481cfb22acfe804ddef02f5e858ff072->enter($__internal_3f7ae64e980970c359fe7cf028ce9f3c481cfb22acfe804ddef02f5e858ff072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2c19719fc04727172ac1e4f556a5bfaec4f80281c515f12c004217df268da057->leave($__internal_2c19719fc04727172ac1e4f556a5bfaec4f80281c515f12c004217df268da057_prof);

        
        $__internal_3f7ae64e980970c359fe7cf028ce9f3c481cfb22acfe804ddef02f5e858ff072->leave($__internal_3f7ae64e980970c359fe7cf028ce9f3c481cfb22acfe804ddef02f5e858ff072_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
