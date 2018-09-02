<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a17fb08a1acee2767b42ee1c5abae00cb9f3a4cdb018339cd4a05df327b38928 extends Twig_Template
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
        $__internal_263b36700050bf2b8ae9fe0b6bc9359fdfa6050898772b58b122a9053dff2659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263b36700050bf2b8ae9fe0b6bc9359fdfa6050898772b58b122a9053dff2659->enter($__internal_263b36700050bf2b8ae9fe0b6bc9359fdfa6050898772b58b122a9053dff2659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1180b0113e6e7b2c8b79896176e6eac68f79864f7f8e6f285490ceb96caab5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1180b0113e6e7b2c8b79896176e6eac68f79864f7f8e6f285490ceb96caab5e6->enter($__internal_1180b0113e6e7b2c8b79896176e6eac68f79864f7f8e6f285490ceb96caab5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_263b36700050bf2b8ae9fe0b6bc9359fdfa6050898772b58b122a9053dff2659->leave($__internal_263b36700050bf2b8ae9fe0b6bc9359fdfa6050898772b58b122a9053dff2659_prof);

        
        $__internal_1180b0113e6e7b2c8b79896176e6eac68f79864f7f8e6f285490ceb96caab5e6->leave($__internal_1180b0113e6e7b2c8b79896176e6eac68f79864f7f8e6f285490ceb96caab5e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
