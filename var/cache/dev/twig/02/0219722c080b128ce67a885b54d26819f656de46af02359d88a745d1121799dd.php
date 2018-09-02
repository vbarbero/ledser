<?php

/* AppBundle:Proposal:editProposal.html.twig */
class __TwigTemplate_20df4bdc2e6eea857bc5b7a001a7a9a338f09504a370bf6a079db788799c54e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Proposal:editProposal.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6711a205ac4736220743df97d4734b0e3cd596499a080389ff051db29aedc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6711a205ac4736220743df97d4734b0e3cd596499a080389ff051db29aedc74->enter($__internal_c6711a205ac4736220743df97d4734b0e3cd596499a080389ff051db29aedc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:editProposal.html.twig"));

        $__internal_248ac20bca706dd44c652e3de67f54dde4044e81a79cc4dad16151a23e430458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248ac20bca706dd44c652e3de67f54dde4044e81a79cc4dad16151a23e430458->enter($__internal_248ac20bca706dd44c652e3de67f54dde4044e81a79cc4dad16151a23e430458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:editProposal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6711a205ac4736220743df97d4734b0e3cd596499a080389ff051db29aedc74->leave($__internal_c6711a205ac4736220743df97d4734b0e3cd596499a080389ff051db29aedc74_prof);

        
        $__internal_248ac20bca706dd44c652e3de67f54dde4044e81a79cc4dad16151a23e430458->leave($__internal_248ac20bca706dd44c652e3de67f54dde4044e81a79cc4dad16151a23e430458_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_050a3bd7f58cf54687e931ef942d35ccd6f9b8656c955226ad1f79a93db87e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050a3bd7f58cf54687e931ef942d35ccd6f9b8656c955226ad1f79a93db87e62->enter($__internal_050a3bd7f58cf54687e931ef942d35ccd6f9b8656c955226ad1f79a93db87e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_13fff6e07502f90009384627c6643ba684e7a667a86ca37f6d094dddbf662a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fff6e07502f90009384627c6643ba684e7a667a86ca37f6d094dddbf662a28->enter($__internal_13fff6e07502f90009384627c6643ba684e7a667a86ca37f6d094dddbf662a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_13fff6e07502f90009384627c6643ba684e7a667a86ca37f6d094dddbf662a28->leave($__internal_13fff6e07502f90009384627c6643ba684e7a667a86ca37f6d094dddbf662a28_prof);

        
        $__internal_050a3bd7f58cf54687e931ef942d35ccd6f9b8656c955226ad1f79a93db87e62->leave($__internal_050a3bd7f58cf54687e931ef942d35ccd6f9b8656c955226ad1f79a93db87e62_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_bafb9628865ee22a7d42509e5793014f94b236f49be2d1ed4896550ff29aa8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafb9628865ee22a7d42509e5793014f94b236f49be2d1ed4896550ff29aa8a7->enter($__internal_bafb9628865ee22a7d42509e5793014f94b236f49be2d1ed4896550ff29aa8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_85176a039fdb637e5507a70445eda5dad89aadf802962c5d8e306e3a206d4282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85176a039fdb637e5507a70445eda5dad89aadf802962c5d8e306e3a206d4282->enter($__internal_85176a039fdb637e5507a70445eda5dad89aadf802962c5d8e306e3a206d4282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Edit Proposal</h2>

        </div>
    </div>
    <div class=\"row\">
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rating", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rating", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reason", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reason", array()), 'widget');
        echo "
            </div>
        </div>


        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Edit</button>

        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_85176a039fdb637e5507a70445eda5dad89aadf802962c5d8e306e3a206d4282->leave($__internal_85176a039fdb637e5507a70445eda5dad89aadf802962c5d8e306e3a206d4282_prof);

        
        $__internal_bafb9628865ee22a7d42509e5793014f94b236f49be2d1ed4896550ff29aa8a7->leave($__internal_bafb9628865ee22a7d42509e5793014f94b236f49be2d1ed4896550ff29aa8a7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Proposal:editProposal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 66,  160 => 59,  154 => 56,  146 => 51,  140 => 48,  132 => 43,  126 => 40,  120 => 37,  111 => 30,  102 => 29,  91 => 25,  86 => 23,  72 => 21,  68 => 18,  50 => 4,  41 => 3,  11 => 1,);
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
            <h2>Edit Proposal</h2>

        </div>
    </div>
    <div class=\"row\">
    {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.state) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.state) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.rating) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.rating) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.reason) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.reason) }}
            </div>
        </div>


        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Edit</button>

        {{ form_end(form) }}
    </div>

{% endblock %}", "AppBundle:Proposal:editProposal.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/editProposal.html.twig");
    }
}
