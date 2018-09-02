<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_2d60f91a9f0513a5464d3d99cd63b7c8e5e3acfd1a83f5311f3e0cfe6cb17561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42bb0face7f066712376e5280544b751afda34280fae8c44269ade63b8d6705f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42bb0face7f066712376e5280544b751afda34280fae8c44269ade63b8d6705f->enter($__internal_42bb0face7f066712376e5280544b751afda34280fae8c44269ade63b8d6705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_cc9208ad0dea04b46c408016c436fbc1a349adf59f232d775d2eabd2833cc056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9208ad0dea04b46c408016c436fbc1a349adf59f232d775d2eabd2833cc056->enter($__internal_cc9208ad0dea04b46c408016c436fbc1a349adf59f232d775d2eabd2833cc056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42bb0face7f066712376e5280544b751afda34280fae8c44269ade63b8d6705f->leave($__internal_42bb0face7f066712376e5280544b751afda34280fae8c44269ade63b8d6705f_prof);

        
        $__internal_cc9208ad0dea04b46c408016c436fbc1a349adf59f232d775d2eabd2833cc056->leave($__internal_cc9208ad0dea04b46c408016c436fbc1a349adf59f232d775d2eabd2833cc056_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41be3ecef18697d46eb3d4c758d6a12fb5624d1335121d13203c84d438019516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41be3ecef18697d46eb3d4c758d6a12fb5624d1335121d13203c84d438019516->enter($__internal_41be3ecef18697d46eb3d4c758d6a12fb5624d1335121d13203c84d438019516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9ae4dd276aaabefd41b252cd045dc94cfba63674ebb0fa3e66fb5a8e676eb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ae4dd276aaabefd41b252cd045dc94cfba63674ebb0fa3e66fb5a8e676eb33->enter($__internal_f9ae4dd276aaabefd41b252cd045dc94cfba63674ebb0fa3e66fb5a8e676eb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f9ae4dd276aaabefd41b252cd045dc94cfba63674ebb0fa3e66fb5a8e676eb33->leave($__internal_f9ae4dd276aaabefd41b252cd045dc94cfba63674ebb0fa3e66fb5a8e676eb33_prof);

        
        $__internal_41be3ecef18697d46eb3d4c758d6a12fb5624d1335121d13203c84d438019516->leave($__internal_41be3ecef18697d46eb3d4c758d6a12fb5624d1335121d13203c84d438019516_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
