<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_770e21008de1991ddee05cb721ec9b4feb0b6ce451f99cf29bbdd96fbccb351e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_565a28dd5aa6821d6edc4370bbb870e665d170f9d9f69d5b6dbea46d298db824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565a28dd5aa6821d6edc4370bbb870e665d170f9d9f69d5b6dbea46d298db824->enter($__internal_565a28dd5aa6821d6edc4370bbb870e665d170f9d9f69d5b6dbea46d298db824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e4d97b6314f8713280eddd0b465d7a8c48cbf8f17ca282f1ec1f784931818aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d97b6314f8713280eddd0b465d7a8c48cbf8f17ca282f1ec1f784931818aa0->enter($__internal_e4d97b6314f8713280eddd0b465d7a8c48cbf8f17ca282f1ec1f784931818aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_565a28dd5aa6821d6edc4370bbb870e665d170f9d9f69d5b6dbea46d298db824->leave($__internal_565a28dd5aa6821d6edc4370bbb870e665d170f9d9f69d5b6dbea46d298db824_prof);

        
        $__internal_e4d97b6314f8713280eddd0b465d7a8c48cbf8f17ca282f1ec1f784931818aa0->leave($__internal_e4d97b6314f8713280eddd0b465d7a8c48cbf8f17ca282f1ec1f784931818aa0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cce17330c9e1d9e74a878c1f58930ff90c6ac8f09dada29aef5e0bee4bfce249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce17330c9e1d9e74a878c1f58930ff90c6ac8f09dada29aef5e0bee4bfce249->enter($__internal_cce17330c9e1d9e74a878c1f58930ff90c6ac8f09dada29aef5e0bee4bfce249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b7e64d733e7ca89b39695abd130cf2f321878b398f333bb52885f4fa01885aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7e64d733e7ca89b39695abd130cf2f321878b398f333bb52885f4fa01885aa->enter($__internal_4b7e64d733e7ca89b39695abd130cf2f321878b398f333bb52885f4fa01885aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4b7e64d733e7ca89b39695abd130cf2f321878b398f333bb52885f4fa01885aa->leave($__internal_4b7e64d733e7ca89b39695abd130cf2f321878b398f333bb52885f4fa01885aa_prof);

        
        $__internal_cce17330c9e1d9e74a878c1f58930ff90c6ac8f09dada29aef5e0bee4bfce249->leave($__internal_cce17330c9e1d9e74a878c1f58930ff90c6ac8f09dada29aef5e0bee4bfce249_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1da964dbf60e583a01d45345414989ee7caf6843d9ada26b5751b96c12c2c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1da964dbf60e583a01d45345414989ee7caf6843d9ada26b5751b96c12c2c5c->enter($__internal_c1da964dbf60e583a01d45345414989ee7caf6843d9ada26b5751b96c12c2c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f34b40290bd626a497e88a7f5c3d10b933fff336fb68d2981eacbd09f3daef71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34b40290bd626a497e88a7f5c3d10b933fff336fb68d2981eacbd09f3daef71->enter($__internal_f34b40290bd626a497e88a7f5c3d10b933fff336fb68d2981eacbd09f3daef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f34b40290bd626a497e88a7f5c3d10b933fff336fb68d2981eacbd09f3daef71->leave($__internal_f34b40290bd626a497e88a7f5c3d10b933fff336fb68d2981eacbd09f3daef71_prof);

        
        $__internal_c1da964dbf60e583a01d45345414989ee7caf6843d9ada26b5751b96c12c2c5c->leave($__internal_c1da964dbf60e583a01d45345414989ee7caf6843d9ada26b5751b96c12c2c5c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f04de6de2a0c19d802ea535838f59532b1261c82dc1ab97d08e400a92e1c09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f04de6de2a0c19d802ea535838f59532b1261c82dc1ab97d08e400a92e1c09f->enter($__internal_9f04de6de2a0c19d802ea535838f59532b1261c82dc1ab97d08e400a92e1c09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c50fab2a578496eb6f465a98c9bd613e000f3cb25953b79831b4e86116403678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50fab2a578496eb6f465a98c9bd613e000f3cb25953b79831b4e86116403678->enter($__internal_c50fab2a578496eb6f465a98c9bd613e000f3cb25953b79831b4e86116403678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c50fab2a578496eb6f465a98c9bd613e000f3cb25953b79831b4e86116403678->leave($__internal_c50fab2a578496eb6f465a98c9bd613e000f3cb25953b79831b4e86116403678_prof);

        
        $__internal_9f04de6de2a0c19d802ea535838f59532b1261c82dc1ab97d08e400a92e1c09f->leave($__internal_9f04de6de2a0c19d802ea535838f59532b1261c82dc1ab97d08e400a92e1c09f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
