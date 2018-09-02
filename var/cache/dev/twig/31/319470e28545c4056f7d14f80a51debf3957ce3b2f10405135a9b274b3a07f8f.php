<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e05dbf3161ba4ce68323aa600022ff660d4960665e5306c806625708df45f3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_28691297b6563deecaeaaca5b7b254f30513c0ff0efb0c99e63dae107a67c1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28691297b6563deecaeaaca5b7b254f30513c0ff0efb0c99e63dae107a67c1a9->enter($__internal_28691297b6563deecaeaaca5b7b254f30513c0ff0efb0c99e63dae107a67c1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_edea665854b526ed85b23ac59c040187b01f85ee6ceea4150966e08adddef32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edea665854b526ed85b23ac59c040187b01f85ee6ceea4150966e08adddef32d->enter($__internal_edea665854b526ed85b23ac59c040187b01f85ee6ceea4150966e08adddef32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28691297b6563deecaeaaca5b7b254f30513c0ff0efb0c99e63dae107a67c1a9->leave($__internal_28691297b6563deecaeaaca5b7b254f30513c0ff0efb0c99e63dae107a67c1a9_prof);

        
        $__internal_edea665854b526ed85b23ac59c040187b01f85ee6ceea4150966e08adddef32d->leave($__internal_edea665854b526ed85b23ac59c040187b01f85ee6ceea4150966e08adddef32d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52b18d244a8b7f0a0dbfa7ae64488389d8ea2bdcfa199e96f938198e9c95b53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b18d244a8b7f0a0dbfa7ae64488389d8ea2bdcfa199e96f938198e9c95b53e->enter($__internal_52b18d244a8b7f0a0dbfa7ae64488389d8ea2bdcfa199e96f938198e9c95b53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54d75555b9982d63340614f179768c57354950be0228693c17cffc11ee872694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d75555b9982d63340614f179768c57354950be0228693c17cffc11ee872694->enter($__internal_54d75555b9982d63340614f179768c57354950be0228693c17cffc11ee872694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_54d75555b9982d63340614f179768c57354950be0228693c17cffc11ee872694->leave($__internal_54d75555b9982d63340614f179768c57354950be0228693c17cffc11ee872694_prof);

        
        $__internal_52b18d244a8b7f0a0dbfa7ae64488389d8ea2bdcfa199e96f938198e9c95b53e->leave($__internal_52b18d244a8b7f0a0dbfa7ae64488389d8ea2bdcfa199e96f938198e9c95b53e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
