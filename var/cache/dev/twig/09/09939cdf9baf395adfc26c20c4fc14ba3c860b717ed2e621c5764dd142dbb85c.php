<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_219d53489ff11ef61a1228f4ee54b32e9f7b175e703f2267fc2cb3555fd7cb09 extends Twig_Template
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
        $__internal_0682f6602bf776db82a5d7c12970f8f0c7ff47c4066b08bd16d70697e98fa7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0682f6602bf776db82a5d7c12970f8f0c7ff47c4066b08bd16d70697e98fa7ec->enter($__internal_0682f6602bf776db82a5d7c12970f8f0c7ff47c4066b08bd16d70697e98fa7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_824678b47b7c1ce0c4e0c045e8182d576fde1e7406fc5c38b272286ed7a295e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824678b47b7c1ce0c4e0c045e8182d576fde1e7406fc5c38b272286ed7a295e2->enter($__internal_824678b47b7c1ce0c4e0c045e8182d576fde1e7406fc5c38b272286ed7a295e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0682f6602bf776db82a5d7c12970f8f0c7ff47c4066b08bd16d70697e98fa7ec->leave($__internal_0682f6602bf776db82a5d7c12970f8f0c7ff47c4066b08bd16d70697e98fa7ec_prof);

        
        $__internal_824678b47b7c1ce0c4e0c045e8182d576fde1e7406fc5c38b272286ed7a295e2->leave($__internal_824678b47b7c1ce0c4e0c045e8182d576fde1e7406fc5c38b272286ed7a295e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
