<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_49acc52fc6b3ee9855c166fdd2c686777b05cc559b6d16903330b435cad6cc84 extends Twig_Template
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
        $__internal_55bc2ffb1c07b3d21b383056f73c6806e969e5173359b734fbb641497721c99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bc2ffb1c07b3d21b383056f73c6806e969e5173359b734fbb641497721c99f->enter($__internal_55bc2ffb1c07b3d21b383056f73c6806e969e5173359b734fbb641497721c99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b8d2b73dd9ad6a44cd371f34da06fd8a1177acb8cf3bed5cb52f530f8f4735fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d2b73dd9ad6a44cd371f34da06fd8a1177acb8cf3bed5cb52f530f8f4735fc->enter($__internal_b8d2b73dd9ad6a44cd371f34da06fd8a1177acb8cf3bed5cb52f530f8f4735fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_55bc2ffb1c07b3d21b383056f73c6806e969e5173359b734fbb641497721c99f->leave($__internal_55bc2ffb1c07b3d21b383056f73c6806e969e5173359b734fbb641497721c99f_prof);

        
        $__internal_b8d2b73dd9ad6a44cd371f34da06fd8a1177acb8cf3bed5cb52f530f8f4735fc->leave($__internal_b8d2b73dd9ad6a44cd371f34da06fd8a1177acb8cf3bed5cb52f530f8f4735fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
