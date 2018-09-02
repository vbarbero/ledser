<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a8dae2be48d2d752ecdfeef637847b1a8249753435833c58ddba463cefe6e8ca extends Twig_Template
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
        $__internal_f652658dbe8cacfce7e91f125434c33d0625c31b882f298830272c82168875cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f652658dbe8cacfce7e91f125434c33d0625c31b882f298830272c82168875cd->enter($__internal_f652658dbe8cacfce7e91f125434c33d0625c31b882f298830272c82168875cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b45e0161c9daa52c740fd58080716764197e091a5fcbabef520fc04430d10082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45e0161c9daa52c740fd58080716764197e091a5fcbabef520fc04430d10082->enter($__internal_b45e0161c9daa52c740fd58080716764197e091a5fcbabef520fc04430d10082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f652658dbe8cacfce7e91f125434c33d0625c31b882f298830272c82168875cd->leave($__internal_f652658dbe8cacfce7e91f125434c33d0625c31b882f298830272c82168875cd_prof);

        
        $__internal_b45e0161c9daa52c740fd58080716764197e091a5fcbabef520fc04430d10082->leave($__internal_b45e0161c9daa52c740fd58080716764197e091a5fcbabef520fc04430d10082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
