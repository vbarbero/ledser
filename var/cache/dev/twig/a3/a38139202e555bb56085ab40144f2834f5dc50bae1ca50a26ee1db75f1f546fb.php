<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3f91c4b0ce756e02a308ce288a0760c7ef756c9f706063714c1c47387b2e85e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_137778cd7c1a24c143a05af9a0bab3726667dd3b55e4049408f0e4eb7864fd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137778cd7c1a24c143a05af9a0bab3726667dd3b55e4049408f0e4eb7864fd64->enter($__internal_137778cd7c1a24c143a05af9a0bab3726667dd3b55e4049408f0e4eb7864fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c2bb2aea34c07c5be09574437b769cea212b8808609d55425011ca401da1c40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bb2aea34c07c5be09574437b769cea212b8808609d55425011ca401da1c40c->enter($__internal_c2bb2aea34c07c5be09574437b769cea212b8808609d55425011ca401da1c40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137778cd7c1a24c143a05af9a0bab3726667dd3b55e4049408f0e4eb7864fd64->leave($__internal_137778cd7c1a24c143a05af9a0bab3726667dd3b55e4049408f0e4eb7864fd64_prof);

        
        $__internal_c2bb2aea34c07c5be09574437b769cea212b8808609d55425011ca401da1c40c->leave($__internal_c2bb2aea34c07c5be09574437b769cea212b8808609d55425011ca401da1c40c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f0dce24f6d704bbe412af27a85f3d5be05401b8e82e04f0cecbe61ec508b53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0dce24f6d704bbe412af27a85f3d5be05401b8e82e04f0cecbe61ec508b53c->enter($__internal_1f0dce24f6d704bbe412af27a85f3d5be05401b8e82e04f0cecbe61ec508b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ddcb7fdb88ebf797dd7646150ba009a475f67caa4b7e4b318aae093fa646e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddcb7fdb88ebf797dd7646150ba009a475f67caa4b7e4b318aae093fa646e2e->enter($__internal_0ddcb7fdb88ebf797dd7646150ba009a475f67caa4b7e4b318aae093fa646e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0ddcb7fdb88ebf797dd7646150ba009a475f67caa4b7e4b318aae093fa646e2e->leave($__internal_0ddcb7fdb88ebf797dd7646150ba009a475f67caa4b7e4b318aae093fa646e2e_prof);

        
        $__internal_1f0dce24f6d704bbe412af27a85f3d5be05401b8e82e04f0cecbe61ec508b53c->leave($__internal_1f0dce24f6d704bbe412af27a85f3d5be05401b8e82e04f0cecbe61ec508b53c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7959879b9154143076fd901e6458170aeb29ec70bbaa6399bc8268167cf0f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7959879b9154143076fd901e6458170aeb29ec70bbaa6399bc8268167cf0f4e->enter($__internal_b7959879b9154143076fd901e6458170aeb29ec70bbaa6399bc8268167cf0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36e530d0bb96ea8202a7c2f374ae496b46aabbd730d4eaaee2fe5df2d6bd01b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e530d0bb96ea8202a7c2f374ae496b46aabbd730d4eaaee2fe5df2d6bd01b9->enter($__internal_36e530d0bb96ea8202a7c2f374ae496b46aabbd730d4eaaee2fe5df2d6bd01b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_36e530d0bb96ea8202a7c2f374ae496b46aabbd730d4eaaee2fe5df2d6bd01b9->leave($__internal_36e530d0bb96ea8202a7c2f374ae496b46aabbd730d4eaaee2fe5df2d6bd01b9_prof);

        
        $__internal_b7959879b9154143076fd901e6458170aeb29ec70bbaa6399bc8268167cf0f4e->leave($__internal_b7959879b9154143076fd901e6458170aeb29ec70bbaa6399bc8268167cf0f4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
