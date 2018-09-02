<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_69a2babea1441aeb8bc03d2403256853321674067f2fea009b4f52776432b42a extends Twig_Template
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
        $__internal_c4672cecf7dbdf3fe0137c2c281b80523beed6b69d95a2faca64755fa4fc9467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4672cecf7dbdf3fe0137c2c281b80523beed6b69d95a2faca64755fa4fc9467->enter($__internal_c4672cecf7dbdf3fe0137c2c281b80523beed6b69d95a2faca64755fa4fc9467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3d54506dd87aacd65c8f5625ad551a09ec524d87caebc31977c8b696a3ce6fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d54506dd87aacd65c8f5625ad551a09ec524d87caebc31977c8b696a3ce6fc4->enter($__internal_3d54506dd87aacd65c8f5625ad551a09ec524d87caebc31977c8b696a3ce6fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c4672cecf7dbdf3fe0137c2c281b80523beed6b69d95a2faca64755fa4fc9467->leave($__internal_c4672cecf7dbdf3fe0137c2c281b80523beed6b69d95a2faca64755fa4fc9467_prof);

        
        $__internal_3d54506dd87aacd65c8f5625ad551a09ec524d87caebc31977c8b696a3ce6fc4->leave($__internal_3d54506dd87aacd65c8f5625ad551a09ec524d87caebc31977c8b696a3ce6fc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
