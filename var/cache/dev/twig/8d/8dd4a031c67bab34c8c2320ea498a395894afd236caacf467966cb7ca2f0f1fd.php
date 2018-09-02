<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a1d6c0759338ce1630a30fed91d8d9d497e4913fb337398e480117d2305f95da extends Twig_Template
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
        $__internal_0dc972f06e13d8279dd219220f0b6cb5059c06f83fb654389022b9bfa46798cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc972f06e13d8279dd219220f0b6cb5059c06f83fb654389022b9bfa46798cc->enter($__internal_0dc972f06e13d8279dd219220f0b6cb5059c06f83fb654389022b9bfa46798cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c7ada901c02df4f481affb032ec5a2b73be52591e3124872dde58c9d43e54f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ada901c02df4f481affb032ec5a2b73be52591e3124872dde58c9d43e54f88->enter($__internal_c7ada901c02df4f481affb032ec5a2b73be52591e3124872dde58c9d43e54f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0dc972f06e13d8279dd219220f0b6cb5059c06f83fb654389022b9bfa46798cc->leave($__internal_0dc972f06e13d8279dd219220f0b6cb5059c06f83fb654389022b9bfa46798cc_prof);

        
        $__internal_c7ada901c02df4f481affb032ec5a2b73be52591e3124872dde58c9d43e54f88->leave($__internal_c7ada901c02df4f481affb032ec5a2b73be52591e3124872dde58c9d43e54f88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
