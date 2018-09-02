<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ba8c12576342af02c58c04636becf6c9ba74ab295f542daad6c26f49dd39c91e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64b8cc4d3e72e2c24d214952a6d2a0e3ba93f3365d8fe81cb776f13f9c4b5a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b8cc4d3e72e2c24d214952a6d2a0e3ba93f3365d8fe81cb776f13f9c4b5a3c->enter($__internal_64b8cc4d3e72e2c24d214952a6d2a0e3ba93f3365d8fe81cb776f13f9c4b5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_db1e8bad9fad249121dba875d54b6e9d379e8adadce41171b6945be07bd05dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1e8bad9fad249121dba875d54b6e9d379e8adadce41171b6945be07bd05dd2->enter($__internal_db1e8bad9fad249121dba875d54b6e9d379e8adadce41171b6945be07bd05dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_64b8cc4d3e72e2c24d214952a6d2a0e3ba93f3365d8fe81cb776f13f9c4b5a3c->leave($__internal_64b8cc4d3e72e2c24d214952a6d2a0e3ba93f3365d8fe81cb776f13f9c4b5a3c_prof);

        
        $__internal_db1e8bad9fad249121dba875d54b6e9d379e8adadce41171b6945be07bd05dd2->leave($__internal_db1e8bad9fad249121dba875d54b6e9d379e8adadce41171b6945be07bd05dd2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
