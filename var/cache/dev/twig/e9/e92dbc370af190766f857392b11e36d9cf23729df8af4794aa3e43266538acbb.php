<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f53c1d380eb22ebcd99238c38806bb1fde5064ca1941f09fcdfb5d881f63d605 extends Twig_Template
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
        $__internal_697121d3f52ff5a04d881b5a904bfe4d52986efc6f9ca1c76b0e54d59316f33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697121d3f52ff5a04d881b5a904bfe4d52986efc6f9ca1c76b0e54d59316f33e->enter($__internal_697121d3f52ff5a04d881b5a904bfe4d52986efc6f9ca1c76b0e54d59316f33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_12eaca482a88fc39495538f6d6fb108cdb40c9f4b94fd2d1128faecc61242159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12eaca482a88fc39495538f6d6fb108cdb40c9f4b94fd2d1128faecc61242159->enter($__internal_12eaca482a88fc39495538f6d6fb108cdb40c9f4b94fd2d1128faecc61242159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_697121d3f52ff5a04d881b5a904bfe4d52986efc6f9ca1c76b0e54d59316f33e->leave($__internal_697121d3f52ff5a04d881b5a904bfe4d52986efc6f9ca1c76b0e54d59316f33e_prof);

        
        $__internal_12eaca482a88fc39495538f6d6fb108cdb40c9f4b94fd2d1128faecc61242159->leave($__internal_12eaca482a88fc39495538f6d6fb108cdb40c9f4b94fd2d1128faecc61242159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
