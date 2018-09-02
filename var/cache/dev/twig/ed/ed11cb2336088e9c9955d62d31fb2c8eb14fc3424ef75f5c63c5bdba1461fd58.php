<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_367b0e4529e17ef3c8c0d4540e23940ed941b7245e4f14dc5eb68d7f8dae78b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e8e488751f68cefcbf2e2578d525220a88e7f885ee95309447c5ed3d7a918616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e488751f68cefcbf2e2578d525220a88e7f885ee95309447c5ed3d7a918616->enter($__internal_e8e488751f68cefcbf2e2578d525220a88e7f885ee95309447c5ed3d7a918616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_540eb1644aa3270fa80bf77b7381af42589c87d7e59bdea50bb35eed97812e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540eb1644aa3270fa80bf77b7381af42589c87d7e59bdea50bb35eed97812e16->enter($__internal_540eb1644aa3270fa80bf77b7381af42589c87d7e59bdea50bb35eed97812e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e488751f68cefcbf2e2578d525220a88e7f885ee95309447c5ed3d7a918616->leave($__internal_e8e488751f68cefcbf2e2578d525220a88e7f885ee95309447c5ed3d7a918616_prof);

        
        $__internal_540eb1644aa3270fa80bf77b7381af42589c87d7e59bdea50bb35eed97812e16->leave($__internal_540eb1644aa3270fa80bf77b7381af42589c87d7e59bdea50bb35eed97812e16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_760d7cde1746565fb5601c50361b405c5da4211f1913b94f642405eae38bb1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760d7cde1746565fb5601c50361b405c5da4211f1913b94f642405eae38bb1bc->enter($__internal_760d7cde1746565fb5601c50361b405c5da4211f1913b94f642405eae38bb1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_049b0d0a479bf734e973eb0850c2667fdea7db1e05612db1fc9ec0559709038d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049b0d0a479bf734e973eb0850c2667fdea7db1e05612db1fc9ec0559709038d->enter($__internal_049b0d0a479bf734e973eb0850c2667fdea7db1e05612db1fc9ec0559709038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_049b0d0a479bf734e973eb0850c2667fdea7db1e05612db1fc9ec0559709038d->leave($__internal_049b0d0a479bf734e973eb0850c2667fdea7db1e05612db1fc9ec0559709038d_prof);

        
        $__internal_760d7cde1746565fb5601c50361b405c5da4211f1913b94f642405eae38bb1bc->leave($__internal_760d7cde1746565fb5601c50361b405c5da4211f1913b94f642405eae38bb1bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
