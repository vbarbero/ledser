<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_94997b28d090b79512a11a1c8a7ebb6c104783545fa1f093d3bc35e2b9020b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d132b141aec0f3ba035d61f73602d5a34941f2e128238aebd8cfadd355591c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d132b141aec0f3ba035d61f73602d5a34941f2e128238aebd8cfadd355591c78->enter($__internal_d132b141aec0f3ba035d61f73602d5a34941f2e128238aebd8cfadd355591c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0deb29a640bd97a390065e538f75eec228a26b2ca62b35f8ac46399156eb2fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0deb29a640bd97a390065e538f75eec228a26b2ca62b35f8ac46399156eb2fc4->enter($__internal_0deb29a640bd97a390065e538f75eec228a26b2ca62b35f8ac46399156eb2fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d132b141aec0f3ba035d61f73602d5a34941f2e128238aebd8cfadd355591c78->leave($__internal_d132b141aec0f3ba035d61f73602d5a34941f2e128238aebd8cfadd355591c78_prof);

        
        $__internal_0deb29a640bd97a390065e538f75eec228a26b2ca62b35f8ac46399156eb2fc4->leave($__internal_0deb29a640bd97a390065e538f75eec228a26b2ca62b35f8ac46399156eb2fc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97e7363881dbe9a0ccc00ffb589a7a9ae3d80233f7f932a43b4901d6dea538bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e7363881dbe9a0ccc00ffb589a7a9ae3d80233f7f932a43b4901d6dea538bd->enter($__internal_97e7363881dbe9a0ccc00ffb589a7a9ae3d80233f7f932a43b4901d6dea538bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff0fd5f8afdba78555cfee5427ffab82f160c2b803fd7d0347259a12be2ab18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0fd5f8afdba78555cfee5427ffab82f160c2b803fd7d0347259a12be2ab18c->enter($__internal_ff0fd5f8afdba78555cfee5427ffab82f160c2b803fd7d0347259a12be2ab18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ff0fd5f8afdba78555cfee5427ffab82f160c2b803fd7d0347259a12be2ab18c->leave($__internal_ff0fd5f8afdba78555cfee5427ffab82f160c2b803fd7d0347259a12be2ab18c_prof);

        
        $__internal_97e7363881dbe9a0ccc00ffb589a7a9ae3d80233f7f932a43b4901d6dea538bd->leave($__internal_97e7363881dbe9a0ccc00ffb589a7a9ae3d80233f7f932a43b4901d6dea538bd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b334c013a9928b6d60ad2ce19b93340de1f6ce41f3b5d66c8f4a0619920290c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b334c013a9928b6d60ad2ce19b93340de1f6ce41f3b5d66c8f4a0619920290c0->enter($__internal_b334c013a9928b6d60ad2ce19b93340de1f6ce41f3b5d66c8f4a0619920290c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20314314a38a0c1527449a7266555361c3c3464130a419578dc59300780ccafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20314314a38a0c1527449a7266555361c3c3464130a419578dc59300780ccafa->enter($__internal_20314314a38a0c1527449a7266555361c3c3464130a419578dc59300780ccafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_20314314a38a0c1527449a7266555361c3c3464130a419578dc59300780ccafa->leave($__internal_20314314a38a0c1527449a7266555361c3c3464130a419578dc59300780ccafa_prof);

        
        $__internal_b334c013a9928b6d60ad2ce19b93340de1f6ce41f3b5d66c8f4a0619920290c0->leave($__internal_b334c013a9928b6d60ad2ce19b93340de1f6ce41f3b5d66c8f4a0619920290c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
