<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8e30735b86ce43a95f8dc727f73c1273159df44ff0e4374db102213ae97d98eb extends Twig_Template
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
        $__internal_6c10b023a2a883820fb66d0d7267fdf9c3dfd94282b0b80e565f195ff3e8cef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c10b023a2a883820fb66d0d7267fdf9c3dfd94282b0b80e565f195ff3e8cef2->enter($__internal_6c10b023a2a883820fb66d0d7267fdf9c3dfd94282b0b80e565f195ff3e8cef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_818450845cde9cdb0bd42df84eb9e96ded8de79b0c78261ef46169d140aca6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818450845cde9cdb0bd42df84eb9e96ded8de79b0c78261ef46169d140aca6a1->enter($__internal_818450845cde9cdb0bd42df84eb9e96ded8de79b0c78261ef46169d140aca6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6c10b023a2a883820fb66d0d7267fdf9c3dfd94282b0b80e565f195ff3e8cef2->leave($__internal_6c10b023a2a883820fb66d0d7267fdf9c3dfd94282b0b80e565f195ff3e8cef2_prof);

        
        $__internal_818450845cde9cdb0bd42df84eb9e96ded8de79b0c78261ef46169d140aca6a1->leave($__internal_818450845cde9cdb0bd42df84eb9e96ded8de79b0c78261ef46169d140aca6a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
