<?php

/* base.html.twig */
class __TwigTemplate_1c9deae01e295be37e1b16e90426215d21f31b4eac6b5ee6d9ba98b64345b387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3c040b73dd7d0d120448937de22ae87823846aecb9d8b88b5a1974464bf94c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c040b73dd7d0d120448937de22ae87823846aecb9d8b88b5a1974464bf94c7->enter($__internal_e3c040b73dd7d0d120448937de22ae87823846aecb9d8b88b5a1974464bf94c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0491d59625c62257d13f7f40c32764ef6f33d0a3bf0aaafc0795e1dc7f9bee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0491d59625c62257d13f7f40c32764ef6f33d0a3bf0aaafc0795e1dc7f9bee6e->enter($__internal_0491d59625c62257d13f7f40c32764ef6f33d0a3bf0aaafc0795e1dc7f9bee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e3c040b73dd7d0d120448937de22ae87823846aecb9d8b88b5a1974464bf94c7->leave($__internal_e3c040b73dd7d0d120448937de22ae87823846aecb9d8b88b5a1974464bf94c7_prof);

        
        $__internal_0491d59625c62257d13f7f40c32764ef6f33d0a3bf0aaafc0795e1dc7f9bee6e->leave($__internal_0491d59625c62257d13f7f40c32764ef6f33d0a3bf0aaafc0795e1dc7f9bee6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9964e58218fb3e2a06e5b511beb2e8292c5efc127eaa9f213f080f9ee7542199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9964e58218fb3e2a06e5b511beb2e8292c5efc127eaa9f213f080f9ee7542199->enter($__internal_9964e58218fb3e2a06e5b511beb2e8292c5efc127eaa9f213f080f9ee7542199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_898e3faaa754b625b79d820441add49f4103f818ffcda6fcbd5443d7c6f5d438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898e3faaa754b625b79d820441add49f4103f818ffcda6fcbd5443d7c6f5d438->enter($__internal_898e3faaa754b625b79d820441add49f4103f818ffcda6fcbd5443d7c6f5d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_898e3faaa754b625b79d820441add49f4103f818ffcda6fcbd5443d7c6f5d438->leave($__internal_898e3faaa754b625b79d820441add49f4103f818ffcda6fcbd5443d7c6f5d438_prof);

        
        $__internal_9964e58218fb3e2a06e5b511beb2e8292c5efc127eaa9f213f080f9ee7542199->leave($__internal_9964e58218fb3e2a06e5b511beb2e8292c5efc127eaa9f213f080f9ee7542199_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6da89e8d628e7dc00f9a6c6d093aa2f841034a0f68887aa6c0172801fef450f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da89e8d628e7dc00f9a6c6d093aa2f841034a0f68887aa6c0172801fef450f6->enter($__internal_6da89e8d628e7dc00f9a6c6d093aa2f841034a0f68887aa6c0172801fef450f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08699107de18f270333c38c1faa16ced28f2fa37fef38f68dffdb0448458cb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08699107de18f270333c38c1faa16ced28f2fa37fef38f68dffdb0448458cb19->enter($__internal_08699107de18f270333c38c1faa16ced28f2fa37fef38f68dffdb0448458cb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08699107de18f270333c38c1faa16ced28f2fa37fef38f68dffdb0448458cb19->leave($__internal_08699107de18f270333c38c1faa16ced28f2fa37fef38f68dffdb0448458cb19_prof);

        
        $__internal_6da89e8d628e7dc00f9a6c6d093aa2f841034a0f68887aa6c0172801fef450f6->leave($__internal_6da89e8d628e7dc00f9a6c6d093aa2f841034a0f68887aa6c0172801fef450f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_60899a160cb2d1cb9e9fb880772ad865d0a2f09d1f8b61bb7f5f6b1cb161a265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60899a160cb2d1cb9e9fb880772ad865d0a2f09d1f8b61bb7f5f6b1cb161a265->enter($__internal_60899a160cb2d1cb9e9fb880772ad865d0a2f09d1f8b61bb7f5f6b1cb161a265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dbb3e9d2a11b35ea4aa3f76062058565b9be9ba80d3c7e4d44e8f86b3495ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbb3e9d2a11b35ea4aa3f76062058565b9be9ba80d3c7e4d44e8f86b3495ccb->enter($__internal_2dbb3e9d2a11b35ea4aa3f76062058565b9be9ba80d3c7e4d44e8f86b3495ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2dbb3e9d2a11b35ea4aa3f76062058565b9be9ba80d3c7e4d44e8f86b3495ccb->leave($__internal_2dbb3e9d2a11b35ea4aa3f76062058565b9be9ba80d3c7e4d44e8f86b3495ccb_prof);

        
        $__internal_60899a160cb2d1cb9e9fb880772ad865d0a2f09d1f8b61bb7f5f6b1cb161a265->leave($__internal_60899a160cb2d1cb9e9fb880772ad865d0a2f09d1f8b61bb7f5f6b1cb161a265_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dff29593340da352cc97947d486a78cbab82480a5bf8aac5f34ec8b8e96b726c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff29593340da352cc97947d486a78cbab82480a5bf8aac5f34ec8b8e96b726c->enter($__internal_dff29593340da352cc97947d486a78cbab82480a5bf8aac5f34ec8b8e96b726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_11adca09987e256b1b504becc5f6857559bfe670bb9d0e2e38248ad89e534f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11adca09987e256b1b504becc5f6857559bfe670bb9d0e2e38248ad89e534f93->enter($__internal_11adca09987e256b1b504becc5f6857559bfe670bb9d0e2e38248ad89e534f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_11adca09987e256b1b504becc5f6857559bfe670bb9d0e2e38248ad89e534f93->leave($__internal_11adca09987e256b1b504becc5f6857559bfe670bb9d0e2e38248ad89e534f93_prof);

        
        $__internal_dff29593340da352cc97947d486a78cbab82480a5bf8aac5f34ec8b8e96b726c->leave($__internal_dff29593340da352cc97947d486a78cbab82480a5bf8aac5f34ec8b8e96b726c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/ledser/app/Resources/views/base.html.twig");
    }
}
