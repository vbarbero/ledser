<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c96c5a8a1638efe6289d796022bafb420221c49a83889fe7143a741b2c85cc75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b9a338808803033e2c0afa7213437d9fb4a2e2a150a98ea6a10d7fa4a85d2279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a338808803033e2c0afa7213437d9fb4a2e2a150a98ea6a10d7fa4a85d2279->enter($__internal_b9a338808803033e2c0afa7213437d9fb4a2e2a150a98ea6a10d7fa4a85d2279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_2b520423646fce182c54cb1be9cb5f6675d998875f5668d369d37f1c3e9048f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b520423646fce182c54cb1be9cb5f6675d998875f5668d369d37f1c3e9048f0->enter($__internal_2b520423646fce182c54cb1be9cb5f6675d998875f5668d369d37f1c3e9048f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9a338808803033e2c0afa7213437d9fb4a2e2a150a98ea6a10d7fa4a85d2279->leave($__internal_b9a338808803033e2c0afa7213437d9fb4a2e2a150a98ea6a10d7fa4a85d2279_prof);

        
        $__internal_2b520423646fce182c54cb1be9cb5f6675d998875f5668d369d37f1c3e9048f0->leave($__internal_2b520423646fce182c54cb1be9cb5f6675d998875f5668d369d37f1c3e9048f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6f33a3ed568f4e921c554d977d8bc39abcdd44ecdec9a2b4e532fd44bcb91cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f33a3ed568f4e921c554d977d8bc39abcdd44ecdec9a2b4e532fd44bcb91cd->enter($__internal_f6f33a3ed568f4e921c554d977d8bc39abcdd44ecdec9a2b4e532fd44bcb91cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f512d1bade12ddd31e98f4da97fc74681cf01410655b54e59d514162c97c196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f512d1bade12ddd31e98f4da97fc74681cf01410655b54e59d514162c97c196->enter($__internal_7f512d1bade12ddd31e98f4da97fc74681cf01410655b54e59d514162c97c196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7f512d1bade12ddd31e98f4da97fc74681cf01410655b54e59d514162c97c196->leave($__internal_7f512d1bade12ddd31e98f4da97fc74681cf01410655b54e59d514162c97c196_prof);

        
        $__internal_f6f33a3ed568f4e921c554d977d8bc39abcdd44ecdec9a2b4e532fd44bcb91cd->leave($__internal_f6f33a3ed568f4e921c554d977d8bc39abcdd44ecdec9a2b4e532fd44bcb91cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
