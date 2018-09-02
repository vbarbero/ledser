<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f0af5574640d361d859d4ce349a4b7db61d63f03b206a2fbfb1213d905ddba35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2db99e680055bbef4f900d3fd601c5ee3b58ff9401c21a69b6d8995e47c136e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db99e680055bbef4f900d3fd601c5ee3b58ff9401c21a69b6d8995e47c136e8->enter($__internal_2db99e680055bbef4f900d3fd601c5ee3b58ff9401c21a69b6d8995e47c136e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a1fb3cac5779442974d9c7d7858d1a45fc1a4264ca5c3db8ebb41b5d982dff1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fb3cac5779442974d9c7d7858d1a45fc1a4264ca5c3db8ebb41b5d982dff1b->enter($__internal_a1fb3cac5779442974d9c7d7858d1a45fc1a4264ca5c3db8ebb41b5d982dff1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db99e680055bbef4f900d3fd601c5ee3b58ff9401c21a69b6d8995e47c136e8->leave($__internal_2db99e680055bbef4f900d3fd601c5ee3b58ff9401c21a69b6d8995e47c136e8_prof);

        
        $__internal_a1fb3cac5779442974d9c7d7858d1a45fc1a4264ca5c3db8ebb41b5d982dff1b->leave($__internal_a1fb3cac5779442974d9c7d7858d1a45fc1a4264ca5c3db8ebb41b5d982dff1b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ef8b7f6928a5e2a978e0fa4c8609d3ec56a8be60853cd96c28bee3f32a105a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8b7f6928a5e2a978e0fa4c8609d3ec56a8be60853cd96c28bee3f32a105a77->enter($__internal_ef8b7f6928a5e2a978e0fa4c8609d3ec56a8be60853cd96c28bee3f32a105a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_79912c7af6be2d413a33fb70bd2494d34b3454573cb54aa017c9c345b9535829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79912c7af6be2d413a33fb70bd2494d34b3454573cb54aa017c9c345b9535829->enter($__internal_79912c7af6be2d413a33fb70bd2494d34b3454573cb54aa017c9c345b9535829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_79912c7af6be2d413a33fb70bd2494d34b3454573cb54aa017c9c345b9535829->leave($__internal_79912c7af6be2d413a33fb70bd2494d34b3454573cb54aa017c9c345b9535829_prof);

        
        $__internal_ef8b7f6928a5e2a978e0fa4c8609d3ec56a8be60853cd96c28bee3f32a105a77->leave($__internal_ef8b7f6928a5e2a978e0fa4c8609d3ec56a8be60853cd96c28bee3f32a105a77_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e17b71a57adf8bdeddcc89176048ae4638f08a2cb34e89bb16e63d246db7d2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17b71a57adf8bdeddcc89176048ae4638f08a2cb34e89bb16e63d246db7d2e1->enter($__internal_e17b71a57adf8bdeddcc89176048ae4638f08a2cb34e89bb16e63d246db7d2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7efb131c25e6a752c3508952fac7cd2b1ad110bf9649b1c846926ed22d03146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7efb131c25e6a752c3508952fac7cd2b1ad110bf9649b1c846926ed22d03146->enter($__internal_e7efb131c25e6a752c3508952fac7cd2b1ad110bf9649b1c846926ed22d03146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e7efb131c25e6a752c3508952fac7cd2b1ad110bf9649b1c846926ed22d03146->leave($__internal_e7efb131c25e6a752c3508952fac7cd2b1ad110bf9649b1c846926ed22d03146_prof);

        
        $__internal_e17b71a57adf8bdeddcc89176048ae4638f08a2cb34e89bb16e63d246db7d2e1->leave($__internal_e17b71a57adf8bdeddcc89176048ae4638f08a2cb34e89bb16e63d246db7d2e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
