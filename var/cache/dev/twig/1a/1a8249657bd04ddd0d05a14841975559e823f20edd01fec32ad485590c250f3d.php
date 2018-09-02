<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_209402244bc0587e6da3cc2680c424b1e786323da18b77520c63795c4be94751 extends Twig_Template
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
        $__internal_46d60932f5139f1ade7e1efd75276793e740cf68d09fea3c79899304f5678f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d60932f5139f1ade7e1efd75276793e740cf68d09fea3c79899304f5678f28->enter($__internal_46d60932f5139f1ade7e1efd75276793e740cf68d09fea3c79899304f5678f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_62a0438bb02e0fea9118f203c2e31e5e7814d3756f6a8cafd4e9735f53292cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a0438bb02e0fea9118f203c2e31e5e7814d3756f6a8cafd4e9735f53292cce->enter($__internal_62a0438bb02e0fea9118f203c2e31e5e7814d3756f6a8cafd4e9735f53292cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_46d60932f5139f1ade7e1efd75276793e740cf68d09fea3c79899304f5678f28->leave($__internal_46d60932f5139f1ade7e1efd75276793e740cf68d09fea3c79899304f5678f28_prof);

        
        $__internal_62a0438bb02e0fea9118f203c2e31e5e7814d3756f6a8cafd4e9735f53292cce->leave($__internal_62a0438bb02e0fea9118f203c2e31e5e7814d3756f6a8cafd4e9735f53292cce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
