<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d1f920c4479b8caa70ba81b77f9e01c8b12d47ee62275089b1a287b03abcc7d1 extends Twig_Template
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
        $__internal_cd16c4b02cee2dfc139ac15216d12ec387f5b2b00dc66afda52c963c43897c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd16c4b02cee2dfc139ac15216d12ec387f5b2b00dc66afda52c963c43897c8c->enter($__internal_cd16c4b02cee2dfc139ac15216d12ec387f5b2b00dc66afda52c963c43897c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a950376ed70aa6ca656d2a53222e8a6e51340aff8c77457f2e7afd072f96d62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a950376ed70aa6ca656d2a53222e8a6e51340aff8c77457f2e7afd072f96d62a->enter($__internal_a950376ed70aa6ca656d2a53222e8a6e51340aff8c77457f2e7afd072f96d62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cd16c4b02cee2dfc139ac15216d12ec387f5b2b00dc66afda52c963c43897c8c->leave($__internal_cd16c4b02cee2dfc139ac15216d12ec387f5b2b00dc66afda52c963c43897c8c_prof);

        
        $__internal_a950376ed70aa6ca656d2a53222e8a6e51340aff8c77457f2e7afd072f96d62a->leave($__internal_a950376ed70aa6ca656d2a53222e8a6e51340aff8c77457f2e7afd072f96d62a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
