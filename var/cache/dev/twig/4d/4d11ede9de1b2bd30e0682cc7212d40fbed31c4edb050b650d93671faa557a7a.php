<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bebe31e6f556d63df73211c6f6ea636583c341b7285df70a213c52db62d3e5fa extends Twig_Template
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
        $__internal_7ba8f0df1e12aebcecc8a1b7426c867333bd2b90bc3fe8f1eb48c824d0983a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba8f0df1e12aebcecc8a1b7426c867333bd2b90bc3fe8f1eb48c824d0983a51->enter($__internal_7ba8f0df1e12aebcecc8a1b7426c867333bd2b90bc3fe8f1eb48c824d0983a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a768eada47a6db86014c0122883188891925a7099fc8ef3d20873fc5209f7f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a768eada47a6db86014c0122883188891925a7099fc8ef3d20873fc5209f7f88->enter($__internal_a768eada47a6db86014c0122883188891925a7099fc8ef3d20873fc5209f7f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7ba8f0df1e12aebcecc8a1b7426c867333bd2b90bc3fe8f1eb48c824d0983a51->leave($__internal_7ba8f0df1e12aebcecc8a1b7426c867333bd2b90bc3fe8f1eb48c824d0983a51_prof);

        
        $__internal_a768eada47a6db86014c0122883188891925a7099fc8ef3d20873fc5209f7f88->leave($__internal_a768eada47a6db86014c0122883188891925a7099fc8ef3d20873fc5209f7f88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
