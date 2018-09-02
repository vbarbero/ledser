<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9a9bc83f5ca0d8653f0c0aa2f144cbd572c6398e443fc618eb9b98b9e5bfb3f0 extends Twig_Template
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
        $__internal_f15374e6e00a62cc51e516f0befbbdb5ef3ddd01af171210c648e5bd4bf39472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15374e6e00a62cc51e516f0befbbdb5ef3ddd01af171210c648e5bd4bf39472->enter($__internal_f15374e6e00a62cc51e516f0befbbdb5ef3ddd01af171210c648e5bd4bf39472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8c6f3b875f52c871cefeb965ce046fd560991288a022cde2144e9112c2e1e35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6f3b875f52c871cefeb965ce046fd560991288a022cde2144e9112c2e1e35a->enter($__internal_8c6f3b875f52c871cefeb965ce046fd560991288a022cde2144e9112c2e1e35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f15374e6e00a62cc51e516f0befbbdb5ef3ddd01af171210c648e5bd4bf39472->leave($__internal_f15374e6e00a62cc51e516f0befbbdb5ef3ddd01af171210c648e5bd4bf39472_prof);

        
        $__internal_8c6f3b875f52c871cefeb965ce046fd560991288a022cde2144e9112c2e1e35a->leave($__internal_8c6f3b875f52c871cefeb965ce046fd560991288a022cde2144e9112c2e1e35a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
