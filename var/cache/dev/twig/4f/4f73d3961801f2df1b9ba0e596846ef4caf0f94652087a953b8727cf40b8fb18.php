<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7861bb56524e865d34fd4e41eccdccb11b05d911b281847d158e2e3864cf5c33 extends Twig_Template
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
        $__internal_243d0f368e1f6060422058dbe600cd43098a1ffb61493622c725dd3ab249cd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243d0f368e1f6060422058dbe600cd43098a1ffb61493622c725dd3ab249cd91->enter($__internal_243d0f368e1f6060422058dbe600cd43098a1ffb61493622c725dd3ab249cd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0e18a29a1664b2bde33a17ab8c179c98a4696930d0867527968d955f09c05726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e18a29a1664b2bde33a17ab8c179c98a4696930d0867527968d955f09c05726->enter($__internal_0e18a29a1664b2bde33a17ab8c179c98a4696930d0867527968d955f09c05726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_243d0f368e1f6060422058dbe600cd43098a1ffb61493622c725dd3ab249cd91->leave($__internal_243d0f368e1f6060422058dbe600cd43098a1ffb61493622c725dd3ab249cd91_prof);

        
        $__internal_0e18a29a1664b2bde33a17ab8c179c98a4696930d0867527968d955f09c05726->leave($__internal_0e18a29a1664b2bde33a17ab8c179c98a4696930d0867527968d955f09c05726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
