<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_496185e5a03764eed3ae3a11050864984dd4f167140ea28ed5c6e35cb8b29e40 extends Twig_Template
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
        $__internal_cf41546590ba6762da54f838ce8713ae81507c5086bf8cbcbacffdfe1cb7dd6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf41546590ba6762da54f838ce8713ae81507c5086bf8cbcbacffdfe1cb7dd6f->enter($__internal_cf41546590ba6762da54f838ce8713ae81507c5086bf8cbcbacffdfe1cb7dd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7e743b9a28057bf04bad5ecec1217a25a8e16b5670bd37b0702c84eab62d0d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e743b9a28057bf04bad5ecec1217a25a8e16b5670bd37b0702c84eab62d0d55->enter($__internal_7e743b9a28057bf04bad5ecec1217a25a8e16b5670bd37b0702c84eab62d0d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cf41546590ba6762da54f838ce8713ae81507c5086bf8cbcbacffdfe1cb7dd6f->leave($__internal_cf41546590ba6762da54f838ce8713ae81507c5086bf8cbcbacffdfe1cb7dd6f_prof);

        
        $__internal_7e743b9a28057bf04bad5ecec1217a25a8e16b5670bd37b0702c84eab62d0d55->leave($__internal_7e743b9a28057bf04bad5ecec1217a25a8e16b5670bd37b0702c84eab62d0d55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
