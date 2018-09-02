<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_59f010be31685d735ad3617a9827a23fc92f29f22d6e83955d8b26bb2f4a49e6 extends Twig_Template
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
        $__internal_39e730fdec9d72b601d080f06e8f2601d3b71c0b3d0072d774de72f255cf1416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e730fdec9d72b601d080f06e8f2601d3b71c0b3d0072d774de72f255cf1416->enter($__internal_39e730fdec9d72b601d080f06e8f2601d3b71c0b3d0072d774de72f255cf1416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a00e60cc91c56ea24dcce2ccf36bd6cd8ccfdcde10ed74abca351803e8587a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00e60cc91c56ea24dcce2ccf36bd6cd8ccfdcde10ed74abca351803e8587a25->enter($__internal_a00e60cc91c56ea24dcce2ccf36bd6cd8ccfdcde10ed74abca351803e8587a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_39e730fdec9d72b601d080f06e8f2601d3b71c0b3d0072d774de72f255cf1416->leave($__internal_39e730fdec9d72b601d080f06e8f2601d3b71c0b3d0072d774de72f255cf1416_prof);

        
        $__internal_a00e60cc91c56ea24dcce2ccf36bd6cd8ccfdcde10ed74abca351803e8587a25->leave($__internal_a00e60cc91c56ea24dcce2ccf36bd6cd8ccfdcde10ed74abca351803e8587a25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
