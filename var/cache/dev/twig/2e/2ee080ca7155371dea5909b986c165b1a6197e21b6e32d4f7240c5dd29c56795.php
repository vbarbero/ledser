<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1e84dcaa1619cfba68de4a2971acfde03569b3018cf840c32e9f54e8da008243 extends Twig_Template
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
        $__internal_a610d814f7521d8598e3d4b3cc4ad8a943c36ab8358f5d64007c8895c8f4a3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a610d814f7521d8598e3d4b3cc4ad8a943c36ab8358f5d64007c8895c8f4a3c8->enter($__internal_a610d814f7521d8598e3d4b3cc4ad8a943c36ab8358f5d64007c8895c8f4a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3e549957c2089fba8e0f1e3744ebc0ee8c1480a2a86832c4139ff8ea291b6c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e549957c2089fba8e0f1e3744ebc0ee8c1480a2a86832c4139ff8ea291b6c87->enter($__internal_3e549957c2089fba8e0f1e3744ebc0ee8c1480a2a86832c4139ff8ea291b6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a610d814f7521d8598e3d4b3cc4ad8a943c36ab8358f5d64007c8895c8f4a3c8->leave($__internal_a610d814f7521d8598e3d4b3cc4ad8a943c36ab8358f5d64007c8895c8f4a3c8_prof);

        
        $__internal_3e549957c2089fba8e0f1e3744ebc0ee8c1480a2a86832c4139ff8ea291b6c87->leave($__internal_3e549957c2089fba8e0f1e3744ebc0ee8c1480a2a86832c4139ff8ea291b6c87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
