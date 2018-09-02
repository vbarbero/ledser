<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cc8ad5def2ecf98faec43805fe0c79fe9ea9e43a59a459a9b2c3253278f00195 extends Twig_Template
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
        $__internal_36776775d62deb833130647476825cb11f77e12e4c7effc80998b78c55fb8347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36776775d62deb833130647476825cb11f77e12e4c7effc80998b78c55fb8347->enter($__internal_36776775d62deb833130647476825cb11f77e12e4c7effc80998b78c55fb8347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1ce0594bf4a7684978f8a7396365170d4f818ad1f3b6d0c33c97ac402beda893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0594bf4a7684978f8a7396365170d4f818ad1f3b6d0c33c97ac402beda893->enter($__internal_1ce0594bf4a7684978f8a7396365170d4f818ad1f3b6d0c33c97ac402beda893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_36776775d62deb833130647476825cb11f77e12e4c7effc80998b78c55fb8347->leave($__internal_36776775d62deb833130647476825cb11f77e12e4c7effc80998b78c55fb8347_prof);

        
        $__internal_1ce0594bf4a7684978f8a7396365170d4f818ad1f3b6d0c33c97ac402beda893->leave($__internal_1ce0594bf4a7684978f8a7396365170d4f818ad1f3b6d0c33c97ac402beda893_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
