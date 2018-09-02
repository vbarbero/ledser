<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_faac128889665083e2cd6bea3c88b4775e419802c0905544d9a861e56a2d5e5f extends Twig_Template
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
        $__internal_2232990e8a5980ae80a29852cc1cf9f01269fd820c1da4566abcddfa5b4a1d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2232990e8a5980ae80a29852cc1cf9f01269fd820c1da4566abcddfa5b4a1d1d->enter($__internal_2232990e8a5980ae80a29852cc1cf9f01269fd820c1da4566abcddfa5b4a1d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3055efddfc2a132a5ea28b9d9d18a689828263c9dbd55a824593a2f7005f0d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3055efddfc2a132a5ea28b9d9d18a689828263c9dbd55a824593a2f7005f0d8c->enter($__internal_3055efddfc2a132a5ea28b9d9d18a689828263c9dbd55a824593a2f7005f0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2232990e8a5980ae80a29852cc1cf9f01269fd820c1da4566abcddfa5b4a1d1d->leave($__internal_2232990e8a5980ae80a29852cc1cf9f01269fd820c1da4566abcddfa5b4a1d1d_prof);

        
        $__internal_3055efddfc2a132a5ea28b9d9d18a689828263c9dbd55a824593a2f7005f0d8c->leave($__internal_3055efddfc2a132a5ea28b9d9d18a689828263c9dbd55a824593a2f7005f0d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
