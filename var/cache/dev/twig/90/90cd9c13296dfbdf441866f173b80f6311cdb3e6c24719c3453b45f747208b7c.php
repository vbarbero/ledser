<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4a78b09370d76bc1f0f07c0ef2bed9cdac14296849ab4e0ecfb2d92ab3dc5a2d extends Twig_Template
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
        $__internal_d6fea3ddeb36b8543446a754cfd36a535a6d903f563515ae91c5b3782439d2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fea3ddeb36b8543446a754cfd36a535a6d903f563515ae91c5b3782439d2b7->enter($__internal_d6fea3ddeb36b8543446a754cfd36a535a6d903f563515ae91c5b3782439d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_70ed3917e1c6b418e48abcf8bf04c896a613e9baaa87d3701e6b55ea1d61218a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ed3917e1c6b418e48abcf8bf04c896a613e9baaa87d3701e6b55ea1d61218a->enter($__internal_70ed3917e1c6b418e48abcf8bf04c896a613e9baaa87d3701e6b55ea1d61218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d6fea3ddeb36b8543446a754cfd36a535a6d903f563515ae91c5b3782439d2b7->leave($__internal_d6fea3ddeb36b8543446a754cfd36a535a6d903f563515ae91c5b3782439d2b7_prof);

        
        $__internal_70ed3917e1c6b418e48abcf8bf04c896a613e9baaa87d3701e6b55ea1d61218a->leave($__internal_70ed3917e1c6b418e48abcf8bf04c896a613e9baaa87d3701e6b55ea1d61218a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
