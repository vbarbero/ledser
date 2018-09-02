<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c49a0d2b860cda9ac65e5256552049ff242571f466633e74d3112101cc91b9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_400b138e36fbd4dd6b49f7c557a272e2c122bf8e41db4087caef92184f67755d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400b138e36fbd4dd6b49f7c557a272e2c122bf8e41db4087caef92184f67755d->enter($__internal_400b138e36fbd4dd6b49f7c557a272e2c122bf8e41db4087caef92184f67755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_49d88603f04aa2fd338ef0663f10858e1b2f0d371b445a99c8d13d93f419ea2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d88603f04aa2fd338ef0663f10858e1b2f0d371b445a99c8d13d93f419ea2b->enter($__internal_49d88603f04aa2fd338ef0663f10858e1b2f0d371b445a99c8d13d93f419ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_400b138e36fbd4dd6b49f7c557a272e2c122bf8e41db4087caef92184f67755d->leave($__internal_400b138e36fbd4dd6b49f7c557a272e2c122bf8e41db4087caef92184f67755d_prof);

        
        $__internal_49d88603f04aa2fd338ef0663f10858e1b2f0d371b445a99c8d13d93f419ea2b->leave($__internal_49d88603f04aa2fd338ef0663f10858e1b2f0d371b445a99c8d13d93f419ea2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cd6321dd288a1838da80313f0588e9836854c9d6576ebec6535b392dc8a8c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd6321dd288a1838da80313f0588e9836854c9d6576ebec6535b392dc8a8c48->enter($__internal_9cd6321dd288a1838da80313f0588e9836854c9d6576ebec6535b392dc8a8c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc1449dade7220ccf6a5e47bfbccdfe7d7a6e07960b0722f7eef8593f41de28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1449dade7220ccf6a5e47bfbccdfe7d7a6e07960b0722f7eef8593f41de28c->enter($__internal_bc1449dade7220ccf6a5e47bfbccdfe7d7a6e07960b0722f7eef8593f41de28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bc1449dade7220ccf6a5e47bfbccdfe7d7a6e07960b0722f7eef8593f41de28c->leave($__internal_bc1449dade7220ccf6a5e47bfbccdfe7d7a6e07960b0722f7eef8593f41de28c_prof);

        
        $__internal_9cd6321dd288a1838da80313f0588e9836854c9d6576ebec6535b392dc8a8c48->leave($__internal_9cd6321dd288a1838da80313f0588e9836854c9d6576ebec6535b392dc8a8c48_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_991277fbe4fe6ad20feec70a623001afb3237b66f635865d61b48a3c3dd5f134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991277fbe4fe6ad20feec70a623001afb3237b66f635865d61b48a3c3dd5f134->enter($__internal_991277fbe4fe6ad20feec70a623001afb3237b66f635865d61b48a3c3dd5f134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40eec1c1f8c1ffbb9de5f990fb13307a2e44f093d82b9604b289b334a29a11d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eec1c1f8c1ffbb9de5f990fb13307a2e44f093d82b9604b289b334a29a11d3->enter($__internal_40eec1c1f8c1ffbb9de5f990fb13307a2e44f093d82b9604b289b334a29a11d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_40eec1c1f8c1ffbb9de5f990fb13307a2e44f093d82b9604b289b334a29a11d3->leave($__internal_40eec1c1f8c1ffbb9de5f990fb13307a2e44f093d82b9604b289b334a29a11d3_prof);

        
        $__internal_991277fbe4fe6ad20feec70a623001afb3237b66f635865d61b48a3c3dd5f134->leave($__internal_991277fbe4fe6ad20feec70a623001afb3237b66f635865d61b48a3c3dd5f134_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4cadf0ba2d098a856b3994ce7d12a82c84c1232e014fb8a51695db87a25422c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cadf0ba2d098a856b3994ce7d12a82c84c1232e014fb8a51695db87a25422c->enter($__internal_a4cadf0ba2d098a856b3994ce7d12a82c84c1232e014fb8a51695db87a25422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb31f15903a95c08c4b2b467de4398b5eaf5708375f9c664bd042b7783b212e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb31f15903a95c08c4b2b467de4398b5eaf5708375f9c664bd042b7783b212e5->enter($__internal_bb31f15903a95c08c4b2b467de4398b5eaf5708375f9c664bd042b7783b212e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bb31f15903a95c08c4b2b467de4398b5eaf5708375f9c664bd042b7783b212e5->leave($__internal_bb31f15903a95c08c4b2b467de4398b5eaf5708375f9c664bd042b7783b212e5_prof);

        
        $__internal_a4cadf0ba2d098a856b3994ce7d12a82c84c1232e014fb8a51695db87a25422c->leave($__internal_a4cadf0ba2d098a856b3994ce7d12a82c84c1232e014fb8a51695db87a25422c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
