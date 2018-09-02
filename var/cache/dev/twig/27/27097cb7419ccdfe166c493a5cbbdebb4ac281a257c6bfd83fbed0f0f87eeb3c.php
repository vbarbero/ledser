<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9405cfda2572be6fbcc4eff70286d68192c242f2b48727d73c088c9957219c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343d039b71212cafc7111644e5fb81eb5ad355a75edf698eb0d72a4cec740460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343d039b71212cafc7111644e5fb81eb5ad355a75edf698eb0d72a4cec740460->enter($__internal_343d039b71212cafc7111644e5fb81eb5ad355a75edf698eb0d72a4cec740460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_66d952c40c7ba36d09db0b7d34c4172b278cd41a975afac2b2f6bf2ee5d620f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d952c40c7ba36d09db0b7d34c4172b278cd41a975afac2b2f6bf2ee5d620f8->enter($__internal_66d952c40c7ba36d09db0b7d34c4172b278cd41a975afac2b2f6bf2ee5d620f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_343d039b71212cafc7111644e5fb81eb5ad355a75edf698eb0d72a4cec740460->leave($__internal_343d039b71212cafc7111644e5fb81eb5ad355a75edf698eb0d72a4cec740460_prof);

        
        $__internal_66d952c40c7ba36d09db0b7d34c4172b278cd41a975afac2b2f6bf2ee5d620f8->leave($__internal_66d952c40c7ba36d09db0b7d34c4172b278cd41a975afac2b2f6bf2ee5d620f8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c494991407e01f0576a491a40bf3d89d52f0e38f95002362567bf69396a91ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c494991407e01f0576a491a40bf3d89d52f0e38f95002362567bf69396a91ba->enter($__internal_4c494991407e01f0576a491a40bf3d89d52f0e38f95002362567bf69396a91ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1c8d8d4d021f93a762924535ea5287b9f7a7d73337815590e085dcc43a9da5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8d8d4d021f93a762924535ea5287b9f7a7d73337815590e085dcc43a9da5c4->enter($__internal_1c8d8d4d021f93a762924535ea5287b9f7a7d73337815590e085dcc43a9da5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1c8d8d4d021f93a762924535ea5287b9f7a7d73337815590e085dcc43a9da5c4->leave($__internal_1c8d8d4d021f93a762924535ea5287b9f7a7d73337815590e085dcc43a9da5c4_prof);

        
        $__internal_4c494991407e01f0576a491a40bf3d89d52f0e38f95002362567bf69396a91ba->leave($__internal_4c494991407e01f0576a491a40bf3d89d52f0e38f95002362567bf69396a91ba_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27a0392a48238b718ab8a0cf16ef33a33fe175b1790bdc575d755755cb5d1901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a0392a48238b718ab8a0cf16ef33a33fe175b1790bdc575d755755cb5d1901->enter($__internal_27a0392a48238b718ab8a0cf16ef33a33fe175b1790bdc575d755755cb5d1901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_818e1dfffed2b56340954f50eca0d902aef33831c644833ea8a43d1fc5fc2e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818e1dfffed2b56340954f50eca0d902aef33831c644833ea8a43d1fc5fc2e34->enter($__internal_818e1dfffed2b56340954f50eca0d902aef33831c644833ea8a43d1fc5fc2e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_818e1dfffed2b56340954f50eca0d902aef33831c644833ea8a43d1fc5fc2e34->leave($__internal_818e1dfffed2b56340954f50eca0d902aef33831c644833ea8a43d1fc5fc2e34_prof);

        
        $__internal_27a0392a48238b718ab8a0cf16ef33a33fe175b1790bdc575d755755cb5d1901->leave($__internal_27a0392a48238b718ab8a0cf16ef33a33fe175b1790bdc575d755755cb5d1901_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_60b29cbc606f3e6c03d2988e35bffe3eacc3f4c9c2eba669d9e107cb66dc56da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b29cbc606f3e6c03d2988e35bffe3eacc3f4c9c2eba669d9e107cb66dc56da->enter($__internal_60b29cbc606f3e6c03d2988e35bffe3eacc3f4c9c2eba669d9e107cb66dc56da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bcaa3508aaa10ec4dc8a4bd73a0d0f547b797f6893f772540cf0c7df66ffbc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcaa3508aaa10ec4dc8a4bd73a0d0f547b797f6893f772540cf0c7df66ffbc12->enter($__internal_bcaa3508aaa10ec4dc8a4bd73a0d0f547b797f6893f772540cf0c7df66ffbc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bcaa3508aaa10ec4dc8a4bd73a0d0f547b797f6893f772540cf0c7df66ffbc12->leave($__internal_bcaa3508aaa10ec4dc8a4bd73a0d0f547b797f6893f772540cf0c7df66ffbc12_prof);

        
        $__internal_60b29cbc606f3e6c03d2988e35bffe3eacc3f4c9c2eba669d9e107cb66dc56da->leave($__internal_60b29cbc606f3e6c03d2988e35bffe3eacc3f4c9c2eba669d9e107cb66dc56da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
