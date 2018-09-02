<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9b4fd2095a31c2bf5f6739d09bb78e588b92d90f1eb0650de44f0135a69e84c3 extends Twig_Template
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
        $__internal_77a05e3842f210ab797e14ec32bf51360846176dd4bf4e8a11e6d4dbeae3ff10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a05e3842f210ab797e14ec32bf51360846176dd4bf4e8a11e6d4dbeae3ff10->enter($__internal_77a05e3842f210ab797e14ec32bf51360846176dd4bf4e8a11e6d4dbeae3ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5aed38f8ba230c764fdceb0652df7e79b018297d3fbf2baa72fa68f9f115c419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aed38f8ba230c764fdceb0652df7e79b018297d3fbf2baa72fa68f9f115c419->enter($__internal_5aed38f8ba230c764fdceb0652df7e79b018297d3fbf2baa72fa68f9f115c419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_77a05e3842f210ab797e14ec32bf51360846176dd4bf4e8a11e6d4dbeae3ff10->leave($__internal_77a05e3842f210ab797e14ec32bf51360846176dd4bf4e8a11e6d4dbeae3ff10_prof);

        
        $__internal_5aed38f8ba230c764fdceb0652df7e79b018297d3fbf2baa72fa68f9f115c419->leave($__internal_5aed38f8ba230c764fdceb0652df7e79b018297d3fbf2baa72fa68f9f115c419_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe86f27927c660f7ae3f1e16112d50d8007254bc387bc2a79b916ad1397332a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe86f27927c660f7ae3f1e16112d50d8007254bc387bc2a79b916ad1397332a4->enter($__internal_fe86f27927c660f7ae3f1e16112d50d8007254bc387bc2a79b916ad1397332a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ec0942690cce28636d1be77f009b57c9ef055e0054f600429bf721f4fa6de5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0942690cce28636d1be77f009b57c9ef055e0054f600429bf721f4fa6de5c1->enter($__internal_ec0942690cce28636d1be77f009b57c9ef055e0054f600429bf721f4fa6de5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ec0942690cce28636d1be77f009b57c9ef055e0054f600429bf721f4fa6de5c1->leave($__internal_ec0942690cce28636d1be77f009b57c9ef055e0054f600429bf721f4fa6de5c1_prof);

        
        $__internal_fe86f27927c660f7ae3f1e16112d50d8007254bc387bc2a79b916ad1397332a4->leave($__internal_fe86f27927c660f7ae3f1e16112d50d8007254bc387bc2a79b916ad1397332a4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_593fc9b2681bc4bc473a3e3d98fd3be886e1649692ff9b487ea615c97cd46f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593fc9b2681bc4bc473a3e3d98fd3be886e1649692ff9b487ea615c97cd46f53->enter($__internal_593fc9b2681bc4bc473a3e3d98fd3be886e1649692ff9b487ea615c97cd46f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b860e1f76e0f4b980edf634d86ff4fa0c61c1b5c5ed0faa9589ded1aa7a7b986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b860e1f76e0f4b980edf634d86ff4fa0c61c1b5c5ed0faa9589ded1aa7a7b986->enter($__internal_b860e1f76e0f4b980edf634d86ff4fa0c61c1b5c5ed0faa9589ded1aa7a7b986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b860e1f76e0f4b980edf634d86ff4fa0c61c1b5c5ed0faa9589ded1aa7a7b986->leave($__internal_b860e1f76e0f4b980edf634d86ff4fa0c61c1b5c5ed0faa9589ded1aa7a7b986_prof);

        
        $__internal_593fc9b2681bc4bc473a3e3d98fd3be886e1649692ff9b487ea615c97cd46f53->leave($__internal_593fc9b2681bc4bc473a3e3d98fd3be886e1649692ff9b487ea615c97cd46f53_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_91572a93e3f1fa16dcd0429f601a6b6567c18886fff1b116d5991dce40fa98f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91572a93e3f1fa16dcd0429f601a6b6567c18886fff1b116d5991dce40fa98f3->enter($__internal_91572a93e3f1fa16dcd0429f601a6b6567c18886fff1b116d5991dce40fa98f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bd641e3ce76fecafd0d142e08bc70e7c13f21334a6b431589815fac456336223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd641e3ce76fecafd0d142e08bc70e7c13f21334a6b431589815fac456336223->enter($__internal_bd641e3ce76fecafd0d142e08bc70e7c13f21334a6b431589815fac456336223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bd641e3ce76fecafd0d142e08bc70e7c13f21334a6b431589815fac456336223->leave($__internal_bd641e3ce76fecafd0d142e08bc70e7c13f21334a6b431589815fac456336223_prof);

        
        $__internal_91572a93e3f1fa16dcd0429f601a6b6567c18886fff1b116d5991dce40fa98f3->leave($__internal_91572a93e3f1fa16dcd0429f601a6b6567c18886fff1b116d5991dce40fa98f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
