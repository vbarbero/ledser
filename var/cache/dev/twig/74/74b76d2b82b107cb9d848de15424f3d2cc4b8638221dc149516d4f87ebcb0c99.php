<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_04d36ce5f1cce169ac33e88b7fc0a7fcd0b9892145bd8f0cf7a3189b4e472e8a extends Twig_Template
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
        $__internal_80494cf8caebc5db9061a4dd94755da98eb75e20eb51e57b127d19c4d8361d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80494cf8caebc5db9061a4dd94755da98eb75e20eb51e57b127d19c4d8361d6b->enter($__internal_80494cf8caebc5db9061a4dd94755da98eb75e20eb51e57b127d19c4d8361d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1c7368a04c9a2a99418f585c58d57fa8463b8ace7cb2295d4eb4bfef7914c4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7368a04c9a2a99418f585c58d57fa8463b8ace7cb2295d4eb4bfef7914c4f1->enter($__internal_1c7368a04c9a2a99418f585c58d57fa8463b8ace7cb2295d4eb4bfef7914c4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_80494cf8caebc5db9061a4dd94755da98eb75e20eb51e57b127d19c4d8361d6b->leave($__internal_80494cf8caebc5db9061a4dd94755da98eb75e20eb51e57b127d19c4d8361d6b_prof);

        
        $__internal_1c7368a04c9a2a99418f585c58d57fa8463b8ace7cb2295d4eb4bfef7914c4f1->leave($__internal_1c7368a04c9a2a99418f585c58d57fa8463b8ace7cb2295d4eb4bfef7914c4f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
