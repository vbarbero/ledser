<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_636a9663b0bf2edf918a92127835e4470d0b6da9f8e3944b800745a43786f11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8b2c65aaba26e4027bcb360498cceb91b08239aeddde2c5099fd26409bcee58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2c65aaba26e4027bcb360498cceb91b08239aeddde2c5099fd26409bcee58f->enter($__internal_8b2c65aaba26e4027bcb360498cceb91b08239aeddde2c5099fd26409bcee58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_e289f4ea1b5ea02809b2dd90835e1d0c0f613ea203f46ef943fb390a090378c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e289f4ea1b5ea02809b2dd90835e1d0c0f613ea203f46ef943fb390a090378c1->enter($__internal_e289f4ea1b5ea02809b2dd90835e1d0c0f613ea203f46ef943fb390a090378c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b2c65aaba26e4027bcb360498cceb91b08239aeddde2c5099fd26409bcee58f->leave($__internal_8b2c65aaba26e4027bcb360498cceb91b08239aeddde2c5099fd26409bcee58f_prof);

        
        $__internal_e289f4ea1b5ea02809b2dd90835e1d0c0f613ea203f46ef943fb390a090378c1->leave($__internal_e289f4ea1b5ea02809b2dd90835e1d0c0f613ea203f46ef943fb390a090378c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae216696d56d1e5ab95cf0449bb803e4814cfe0eaeaf5fd7df87d7e266869f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae216696d56d1e5ab95cf0449bb803e4814cfe0eaeaf5fd7df87d7e266869f2c->enter($__internal_ae216696d56d1e5ab95cf0449bb803e4814cfe0eaeaf5fd7df87d7e266869f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b436e12b83c5035b36958670ba6afb572ed7f955025ef87e5995cac25987f35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b436e12b83c5035b36958670ba6afb572ed7f955025ef87e5995cac25987f35f->enter($__internal_b436e12b83c5035b36958670ba6afb572ed7f955025ef87e5995cac25987f35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b436e12b83c5035b36958670ba6afb572ed7f955025ef87e5995cac25987f35f->leave($__internal_b436e12b83c5035b36958670ba6afb572ed7f955025ef87e5995cac25987f35f_prof);

        
        $__internal_ae216696d56d1e5ab95cf0449bb803e4814cfe0eaeaf5fd7df87d7e266869f2c->leave($__internal_ae216696d56d1e5ab95cf0449bb803e4814cfe0eaeaf5fd7df87d7e266869f2c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
