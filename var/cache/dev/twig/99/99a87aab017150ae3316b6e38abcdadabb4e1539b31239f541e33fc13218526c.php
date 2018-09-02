<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45eebbb909a90e399a5b74fed6d0ec504f30cf582865f8086065d0179ee7be21 extends Twig_Template
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
        $__internal_fae6174656ca6b90a1037b4dc04dbc15b32547c4d57102a139f5c5d4c3ec5aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae6174656ca6b90a1037b4dc04dbc15b32547c4d57102a139f5c5d4c3ec5aaf->enter($__internal_fae6174656ca6b90a1037b4dc04dbc15b32547c4d57102a139f5c5d4c3ec5aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b2cadb02932f737173eb6b7cae4496ce8fb04f912b6a83f43a1b03936cc52c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cadb02932f737173eb6b7cae4496ce8fb04f912b6a83f43a1b03936cc52c1b->enter($__internal_b2cadb02932f737173eb6b7cae4496ce8fb04f912b6a83f43a1b03936cc52c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fae6174656ca6b90a1037b4dc04dbc15b32547c4d57102a139f5c5d4c3ec5aaf->leave($__internal_fae6174656ca6b90a1037b4dc04dbc15b32547c4d57102a139f5c5d4c3ec5aaf_prof);

        
        $__internal_b2cadb02932f737173eb6b7cae4496ce8fb04f912b6a83f43a1b03936cc52c1b->leave($__internal_b2cadb02932f737173eb6b7cae4496ce8fb04f912b6a83f43a1b03936cc52c1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
