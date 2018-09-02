<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b988cc6d6e52aa71067153f42b37b889b1e20f281a7c1d7d80861bbaa6ce2fe5 extends Twig_Template
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
        $__internal_acfc2a729f84961fca83cee5387b840e188918c3ce6ded15020fa382bd8db15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfc2a729f84961fca83cee5387b840e188918c3ce6ded15020fa382bd8db15a->enter($__internal_acfc2a729f84961fca83cee5387b840e188918c3ce6ded15020fa382bd8db15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_18454991842b84be3bdd939b3e601725b0fc477505b4f3f2d50ce1c2fc1cf267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18454991842b84be3bdd939b3e601725b0fc477505b4f3f2d50ce1c2fc1cf267->enter($__internal_18454991842b84be3bdd939b3e601725b0fc477505b4f3f2d50ce1c2fc1cf267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_acfc2a729f84961fca83cee5387b840e188918c3ce6ded15020fa382bd8db15a->leave($__internal_acfc2a729f84961fca83cee5387b840e188918c3ce6ded15020fa382bd8db15a_prof);

        
        $__internal_18454991842b84be3bdd939b3e601725b0fc477505b4f3f2d50ce1c2fc1cf267->leave($__internal_18454991842b84be3bdd939b3e601725b0fc477505b4f3f2d50ce1c2fc1cf267_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
