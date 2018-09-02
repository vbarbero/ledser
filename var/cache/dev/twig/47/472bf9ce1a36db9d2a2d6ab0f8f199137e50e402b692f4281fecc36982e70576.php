<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9b711ba97340d1becf345e3f847edef59534970292235af52e565120d3717f3c extends Twig_Template
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
        $__internal_2c1419b8b1378259df94a4ae8627df8051019664b83da2c639be044d6c8b999a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1419b8b1378259df94a4ae8627df8051019664b83da2c639be044d6c8b999a->enter($__internal_2c1419b8b1378259df94a4ae8627df8051019664b83da2c639be044d6c8b999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7a401692006cf03b8fc3291317c3523eb91f71dcf816e765c686faaef8d583ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a401692006cf03b8fc3291317c3523eb91f71dcf816e765c686faaef8d583ee->enter($__internal_7a401692006cf03b8fc3291317c3523eb91f71dcf816e765c686faaef8d583ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2c1419b8b1378259df94a4ae8627df8051019664b83da2c639be044d6c8b999a->leave($__internal_2c1419b8b1378259df94a4ae8627df8051019664b83da2c639be044d6c8b999a_prof);

        
        $__internal_7a401692006cf03b8fc3291317c3523eb91f71dcf816e765c686faaef8d583ee->leave($__internal_7a401692006cf03b8fc3291317c3523eb91f71dcf816e765c686faaef8d583ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
