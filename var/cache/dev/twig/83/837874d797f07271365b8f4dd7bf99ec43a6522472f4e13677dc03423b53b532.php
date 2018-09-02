<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_924e7c290f94617dc6fea15fb011b18bfe6629faa6ccc72e09b09118d5729c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7fd591d24a8179c77393078d84c910120b8d66a6e0910e3e32c5db0bc349737e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd591d24a8179c77393078d84c910120b8d66a6e0910e3e32c5db0bc349737e->enter($__internal_7fd591d24a8179c77393078d84c910120b8d66a6e0910e3e32c5db0bc349737e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_d187cf884dc9c7d516980fc9d04877eb525748884ac50612cf9977b77b486957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d187cf884dc9c7d516980fc9d04877eb525748884ac50612cf9977b77b486957->enter($__internal_d187cf884dc9c7d516980fc9d04877eb525748884ac50612cf9977b77b486957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd591d24a8179c77393078d84c910120b8d66a6e0910e3e32c5db0bc349737e->leave($__internal_7fd591d24a8179c77393078d84c910120b8d66a6e0910e3e32c5db0bc349737e_prof);

        
        $__internal_d187cf884dc9c7d516980fc9d04877eb525748884ac50612cf9977b77b486957->leave($__internal_d187cf884dc9c7d516980fc9d04877eb525748884ac50612cf9977b77b486957_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaa268b4ac8fe99f00f033f1e5df0c7c268f8bed626ff42876beb5d5479cc0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa268b4ac8fe99f00f033f1e5df0c7c268f8bed626ff42876beb5d5479cc0ef->enter($__internal_eaa268b4ac8fe99f00f033f1e5df0c7c268f8bed626ff42876beb5d5479cc0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11df4fa64049a4ab5d3d60c98001f2e4c0abe058446e66c9f95995d1a22c1b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11df4fa64049a4ab5d3d60c98001f2e4c0abe058446e66c9f95995d1a22c1b00->enter($__internal_11df4fa64049a4ab5d3d60c98001f2e4c0abe058446e66c9f95995d1a22c1b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11df4fa64049a4ab5d3d60c98001f2e4c0abe058446e66c9f95995d1a22c1b00->leave($__internal_11df4fa64049a4ab5d3d60c98001f2e4c0abe058446e66c9f95995d1a22c1b00_prof);

        
        $__internal_eaa268b4ac8fe99f00f033f1e5df0c7c268f8bed626ff42876beb5d5479cc0ef->leave($__internal_eaa268b4ac8fe99f00f033f1e5df0c7c268f8bed626ff42876beb5d5479cc0ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
