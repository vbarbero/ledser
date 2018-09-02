<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5e88e26363c02e6818f62d7a2d2a8eb6327bc87311acf721acf82c968ac95ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fdd37d1941997f8500ed50fbe699de08a59610b3e43341dbe1a10f24b21f24d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd37d1941997f8500ed50fbe699de08a59610b3e43341dbe1a10f24b21f24d2->enter($__internal_fdd37d1941997f8500ed50fbe699de08a59610b3e43341dbe1a10f24b21f24d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8d90a15003d9b9c51f35cbfab12c976f3c55ce84616d513b7892eceb096d6a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d90a15003d9b9c51f35cbfab12c976f3c55ce84616d513b7892eceb096d6a98->enter($__internal_8d90a15003d9b9c51f35cbfab12c976f3c55ce84616d513b7892eceb096d6a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd37d1941997f8500ed50fbe699de08a59610b3e43341dbe1a10f24b21f24d2->leave($__internal_fdd37d1941997f8500ed50fbe699de08a59610b3e43341dbe1a10f24b21f24d2_prof);

        
        $__internal_8d90a15003d9b9c51f35cbfab12c976f3c55ce84616d513b7892eceb096d6a98->leave($__internal_8d90a15003d9b9c51f35cbfab12c976f3c55ce84616d513b7892eceb096d6a98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7992b492cebc1489b106cd47a59d3a8f831d12355a31a8e642721ddc739b2f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7992b492cebc1489b106cd47a59d3a8f831d12355a31a8e642721ddc739b2f66->enter($__internal_7992b492cebc1489b106cd47a59d3a8f831d12355a31a8e642721ddc739b2f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c98f059a4ae3a29d749059ac37e6e7d4e63f1d796ff7b7de22c0df7485407a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c98f059a4ae3a29d749059ac37e6e7d4e63f1d796ff7b7de22c0df7485407a3->enter($__internal_0c98f059a4ae3a29d749059ac37e6e7d4e63f1d796ff7b7de22c0df7485407a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0c98f059a4ae3a29d749059ac37e6e7d4e63f1d796ff7b7de22c0df7485407a3->leave($__internal_0c98f059a4ae3a29d749059ac37e6e7d4e63f1d796ff7b7de22c0df7485407a3_prof);

        
        $__internal_7992b492cebc1489b106cd47a59d3a8f831d12355a31a8e642721ddc739b2f66->leave($__internal_7992b492cebc1489b106cd47a59d3a8f831d12355a31a8e642721ddc739b2f66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
