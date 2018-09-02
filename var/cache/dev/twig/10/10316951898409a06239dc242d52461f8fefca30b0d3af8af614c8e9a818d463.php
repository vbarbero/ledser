<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_55bd102b5757bc87c7aef124cbb443ed45a398585b8d1d4bc85bf0b722db6cb7 extends Twig_Template
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
        $__internal_57d6df23d695dc397a69a77965a7fbcefd322f3fb05520c2a258cd79ca3b40b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d6df23d695dc397a69a77965a7fbcefd322f3fb05520c2a258cd79ca3b40b0->enter($__internal_57d6df23d695dc397a69a77965a7fbcefd322f3fb05520c2a258cd79ca3b40b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e1a5627f5e885b8ebbde85bc96e0fdecd52c3cfa9b0cb8961f11bd4b98fbf0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a5627f5e885b8ebbde85bc96e0fdecd52c3cfa9b0cb8961f11bd4b98fbf0d3->enter($__internal_e1a5627f5e885b8ebbde85bc96e0fdecd52c3cfa9b0cb8961f11bd4b98fbf0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_57d6df23d695dc397a69a77965a7fbcefd322f3fb05520c2a258cd79ca3b40b0->leave($__internal_57d6df23d695dc397a69a77965a7fbcefd322f3fb05520c2a258cd79ca3b40b0_prof);

        
        $__internal_e1a5627f5e885b8ebbde85bc96e0fdecd52c3cfa9b0cb8961f11bd4b98fbf0d3->leave($__internal_e1a5627f5e885b8ebbde85bc96e0fdecd52c3cfa9b0cb8961f11bd4b98fbf0d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
