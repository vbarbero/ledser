<?php

/* AppBundle:Report:create.html.twig */
class __TwigTemplate_293cf5842b642aa0ecefcaf635b50dc39d8458dac681a97d81c0391fbd2dbfa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Report:create.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceaa9c523682f90b6bf98504077fbdaa08440456bbd34d2494216e43310e331b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaa9c523682f90b6bf98504077fbdaa08440456bbd34d2494216e43310e331b->enter($__internal_ceaa9c523682f90b6bf98504077fbdaa08440456bbd34d2494216e43310e331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:create.html.twig"));

        $__internal_54a0dbf64a0072878ff9bac83dd1823742b25ee20105df6625b260455d6cd5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a0dbf64a0072878ff9bac83dd1823742b25ee20105df6625b260455d6cd5d5->enter($__internal_54a0dbf64a0072878ff9bac83dd1823742b25ee20105df6625b260455d6cd5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceaa9c523682f90b6bf98504077fbdaa08440456bbd34d2494216e43310e331b->leave($__internal_ceaa9c523682f90b6bf98504077fbdaa08440456bbd34d2494216e43310e331b_prof);

        
        $__internal_54a0dbf64a0072878ff9bac83dd1823742b25ee20105df6625b260455d6cd5d5->leave($__internal_54a0dbf64a0072878ff9bac83dd1823742b25ee20105df6625b260455d6cd5d5_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_09dadd7eede3028d2fa1511c2dc692f320d5b67a8ba4c11d794ee4ca13f082fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dadd7eede3028d2fa1511c2dc692f320d5b67a8ba4c11d794ee4ca13f082fb->enter($__internal_09dadd7eede3028d2fa1511c2dc692f320d5b67a8ba4c11d794ee4ca13f082fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_05aa455e2fd9d60f986a6e5d83c790120f1acd7f9bb9ee6d13d8bf1f3b963d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aa455e2fd9d60f986a6e5d83c790120f1acd7f9bb9ee6d13d8bf1f3b963d79->enter($__internal_05aa455e2fd9d60f986a6e5d83c790120f1acd7f9bb9ee6d13d8bf1f3b963d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
    <style>
        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e17c6ba_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_bootstrap-datetimepicker.min_1.css");
            // line 21
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "e17c6ba"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 25
        echo "
";
        
        $__internal_05aa455e2fd9d60f986a6e5d83c790120f1acd7f9bb9ee6d13d8bf1f3b963d79->leave($__internal_05aa455e2fd9d60f986a6e5d83c790120f1acd7f9bb9ee6d13d8bf1f3b963d79_prof);

        
        $__internal_09dadd7eede3028d2fa1511c2dc692f320d5b67a8ba4c11d794ee4ca13f082fb->leave($__internal_09dadd7eede3028d2fa1511c2dc692f320d5b67a8ba4c11d794ee4ca13f082fb_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_79a6ec60f054c782edd77cf53c6bc9400004b21846adce41c80d87ae9c1b2895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a6ec60f054c782edd77cf53c6bc9400004b21846adce41c80d87ae9c1b2895->enter($__internal_79a6ec60f054c782edd77cf53c6bc9400004b21846adce41c80d87ae9c1b2895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29f59d58a6592acc09bc325857802d0b3df9c45007aaad568b46a9c3648acef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f59d58a6592acc09bc325857802d0b3df9c45007aaad568b46a9c3648acef6->enter($__internal_29f59d58a6592acc09bc325857802d0b3df9c45007aaad568b46a9c3648acef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Report</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 60
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "action", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "action", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "done", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "done", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "report", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "report", array()), 'widget');
        echo "
            </div>
        </div>
        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>

        ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_29f59d58a6592acc09bc325857802d0b3df9c45007aaad568b46a9c3648acef6->leave($__internal_29f59d58a6592acc09bc325857802d0b3df9c45007aaad568b46a9c3648acef6_prof);

        
        $__internal_79a6ec60f054c782edd77cf53c6bc9400004b21846adce41c80d87ae9c1b2895->leave($__internal_79a6ec60f054c782edd77cf53c6bc9400004b21846adce41c80d87ae9c1b2895_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e663a4e402186befadaebd4e9fff24b187d6cb08d132c7ac5842e820c8e25bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e663a4e402186befadaebd4e9fff24b187d6cb08d132c7ac5842e820c8e25bb0->enter($__internal_e663a4e402186befadaebd4e9fff24b187d6cb08d132c7ac5842e820c8e25bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ec05ebc0a38ba401a8efc281b17e0bb0621f984a7660cc7d92d2ac9fff4d041a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec05ebc0a38ba401a8efc281b17e0bb0621f984a7660cc7d92d2ac9fff4d041a->enter($__internal_ec05ebc0a38ba401a8efc281b17e0bb0621f984a7660cc7d92d2ac9fff4d041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-MM-dd',
            startDate: '-3d'
        });
    </script>
";
        
        $__internal_ec05ebc0a38ba401a8efc281b17e0bb0621f984a7660cc7d92d2ac9fff4d041a->leave($__internal_ec05ebc0a38ba401a8efc281b17e0bb0621f984a7660cc7d92d2ac9fff4d041a_prof);

        
        $__internal_e663a4e402186befadaebd4e9fff24b187d6cb08d132c7ac5842e820c8e25bb0->leave($__internal_e663a4e402186befadaebd4e9fff24b187d6cb08d132c7ac5842e820c8e25bb0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Report:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 100,  246 => 99,  241 => 98,  232 => 97,  218 => 92,  210 => 87,  204 => 84,  196 => 79,  190 => 76,  182 => 71,  176 => 68,  166 => 60,  163 => 59,  156 => 55,  148 => 50,  142 => 47,  134 => 42,  128 => 39,  122 => 36,  112 => 28,  103 => 27,  92 => 25,  87 => 23,  73 => 21,  69 => 18,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block styles %}
    {{ parent() }}
    <style>
        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    {% stylesheets
        'css/bootstrap-datetimepicker.min.css'
        filter='cssrewrite' output='css/compiled/app.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('../css/bootstrap-datetimepicker.min.css') }}\" />
    {#<link rel=\"stylesheet\" href=\"css/bootstrap-datetimepicker.min.css\" />#}

{% endblock %}
{% block content %}

    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Report</h2>

        </div>
    </div>
    <div class=\"row\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.company) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.company) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.user) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.user) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.date) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.date, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.action) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.action) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.done) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.done) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.report) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.report) }}
            </div>
        </div>
        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>

        {{ form_end(form) }}
    </div>

{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datepicker.es.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-MM-dd',
            startDate: '-3d'
        });
    </script>
{% endblock %}

{#{% block javascript %}#}
    {#{{ parent() }}#}
    {#{% javascripts '@AppBundle/Resources/public/js/bootstrap-datetimepicker.min.js' %}#}
        {#<script src=\"{{ asset_url }}\"></script>#}
    {#{% endjavascripts %}#}
      {#<script type=\"text/javascript\">#}
        {#\$(function () {#}
            {#\$('#datetimepicker1').datetimepicker({format: 'yyyy-mm-dd hh:ii'});#}
        {#});#}
    {#</script>#}

{#{% endblock %}#}", "AppBundle:Report:create.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Report/create.html.twig");
    }
}
