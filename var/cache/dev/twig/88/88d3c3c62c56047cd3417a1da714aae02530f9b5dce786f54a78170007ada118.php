<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_3e2fc24edff29ed225f8820e6c7511f286798d280f7597b3bd7d91853a3f3d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30cd19443d24059f60af0d2da827160f2911c6783593956e4f5749f86568fc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30cd19443d24059f60af0d2da827160f2911c6783593956e4f5749f86568fc5b->enter($__internal_30cd19443d24059f60af0d2da827160f2911c6783593956e4f5749f86568fc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ade8c137a7d33970f5d145400ca9a34b106791b77c246b4c429548fa57b97d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade8c137a7d33970f5d145400ca9a34b106791b77c246b4c429548fa57b97d05->enter($__internal_ade8c137a7d33970f5d145400ca9a34b106791b77c246b4c429548fa57b97d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30cd19443d24059f60af0d2da827160f2911c6783593956e4f5749f86568fc5b->leave($__internal_30cd19443d24059f60af0d2da827160f2911c6783593956e4f5749f86568fc5b_prof);

        
        $__internal_ade8c137a7d33970f5d145400ca9a34b106791b77c246b4c429548fa57b97d05->leave($__internal_ade8c137a7d33970f5d145400ca9a34b106791b77c246b4c429548fa57b97d05_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c0f281a3fcf40e30e47185ad2ee2101b79d6f9f581339bd8ebb1f9746e2636e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0f281a3fcf40e30e47185ad2ee2101b79d6f9f581339bd8ebb1f9746e2636e->enter($__internal_4c0f281a3fcf40e30e47185ad2ee2101b79d6f9f581339bd8ebb1f9746e2636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1284ae8da46e0b4cd38b042875a8178637781cb7a1b01aeac0144c789970d813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1284ae8da46e0b4cd38b042875a8178637781cb7a1b01aeac0144c789970d813->enter($__internal_1284ae8da46e0b4cd38b042875a8178637781cb7a1b01aeac0144c789970d813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1284ae8da46e0b4cd38b042875a8178637781cb7a1b01aeac0144c789970d813->leave($__internal_1284ae8da46e0b4cd38b042875a8178637781cb7a1b01aeac0144c789970d813_prof);

        
        $__internal_4c0f281a3fcf40e30e47185ad2ee2101b79d6f9f581339bd8ebb1f9746e2636e->leave($__internal_4c0f281a3fcf40e30e47185ad2ee2101b79d6f9f581339bd8ebb1f9746e2636e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
