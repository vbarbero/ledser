<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_eb46ac367af4ff7c6012bb468aa4ebd495b5a6ca0e1e1f6b094103ce5e83b79a extends Twig_Template
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
        $__internal_bf1eb5b977454ee5f1d99f7a91f6a6312d4ddc88144d8d234d2d4280a2b05bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1eb5b977454ee5f1d99f7a91f6a6312d4ddc88144d8d234d2d4280a2b05bbe->enter($__internal_bf1eb5b977454ee5f1d99f7a91f6a6312d4ddc88144d8d234d2d4280a2b05bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0c3053ccd2bd6b325225c45c3d717438b25673a6dd221d0a1dc963261d3c14b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3053ccd2bd6b325225c45c3d717438b25673a6dd221d0a1dc963261d3c14b3->enter($__internal_0c3053ccd2bd6b325225c45c3d717438b25673a6dd221d0a1dc963261d3c14b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bf1eb5b977454ee5f1d99f7a91f6a6312d4ddc88144d8d234d2d4280a2b05bbe->leave($__internal_bf1eb5b977454ee5f1d99f7a91f6a6312d4ddc88144d8d234d2d4280a2b05bbe_prof);

        
        $__internal_0c3053ccd2bd6b325225c45c3d717438b25673a6dd221d0a1dc963261d3c14b3->leave($__internal_0c3053ccd2bd6b325225c45c3d717438b25673a6dd221d0a1dc963261d3c14b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
