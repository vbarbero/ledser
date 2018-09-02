<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5e301baf189d02df92053761a994de1d2c2e08ec37a6def14b08cf8e85713473 extends Twig_Template
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
        $__internal_ab9f28f57f66358158509e1dfe608563f7ae43219117cbd63dfa304c834965f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9f28f57f66358158509e1dfe608563f7ae43219117cbd63dfa304c834965f4->enter($__internal_ab9f28f57f66358158509e1dfe608563f7ae43219117cbd63dfa304c834965f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a6080946fd14368bdbd94bb26b6ddf3bc9b9f3dc336c09870e5e055e93bbf159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6080946fd14368bdbd94bb26b6ddf3bc9b9f3dc336c09870e5e055e93bbf159->enter($__internal_a6080946fd14368bdbd94bb26b6ddf3bc9b9f3dc336c09870e5e055e93bbf159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ab9f28f57f66358158509e1dfe608563f7ae43219117cbd63dfa304c834965f4->leave($__internal_ab9f28f57f66358158509e1dfe608563f7ae43219117cbd63dfa304c834965f4_prof);

        
        $__internal_a6080946fd14368bdbd94bb26b6ddf3bc9b9f3dc336c09870e5e055e93bbf159->leave($__internal_a6080946fd14368bdbd94bb26b6ddf3bc9b9f3dc336c09870e5e055e93bbf159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
