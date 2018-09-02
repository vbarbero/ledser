<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_40d17781db8312746e5586d3346947e9b589949fd05a3932cfd9935367dcd7aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a5efb2c04353eaeaa881ef92bb2cbe92fb306487cb376cfd9da3c92b87ebe8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5efb2c04353eaeaa881ef92bb2cbe92fb306487cb376cfd9da3c92b87ebe8fe->enter($__internal_a5efb2c04353eaeaa881ef92bb2cbe92fb306487cb376cfd9da3c92b87ebe8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_ba019c5cf12521f0948414c6b6d49cea2fbdf071c47645b9b882a1235bfa2ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba019c5cf12521f0948414c6b6d49cea2fbdf071c47645b9b882a1235bfa2ef1->enter($__internal_ba019c5cf12521f0948414c6b6d49cea2fbdf071c47645b9b882a1235bfa2ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5efb2c04353eaeaa881ef92bb2cbe92fb306487cb376cfd9da3c92b87ebe8fe->leave($__internal_a5efb2c04353eaeaa881ef92bb2cbe92fb306487cb376cfd9da3c92b87ebe8fe_prof);

        
        $__internal_ba019c5cf12521f0948414c6b6d49cea2fbdf071c47645b9b882a1235bfa2ef1->leave($__internal_ba019c5cf12521f0948414c6b6d49cea2fbdf071c47645b9b882a1235bfa2ef1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9b98db0a7032cbc8cbc127e4c2e8e502a3eae86c4197acf8188119cbff39cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b98db0a7032cbc8cbc127e4c2e8e502a3eae86c4197acf8188119cbff39cbc->enter($__internal_f9b98db0a7032cbc8cbc127e4c2e8e502a3eae86c4197acf8188119cbff39cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87774cd6370f99331b19fae4d17e0878c695183ef9da4e0cf5578e0e2117b477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87774cd6370f99331b19fae4d17e0878c695183ef9da4e0cf5578e0e2117b477->enter($__internal_87774cd6370f99331b19fae4d17e0878c695183ef9da4e0cf5578e0e2117b477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_87774cd6370f99331b19fae4d17e0878c695183ef9da4e0cf5578e0e2117b477->leave($__internal_87774cd6370f99331b19fae4d17e0878c695183ef9da4e0cf5578e0e2117b477_prof);

        
        $__internal_f9b98db0a7032cbc8cbc127e4c2e8e502a3eae86c4197acf8188119cbff39cbc->leave($__internal_f9b98db0a7032cbc8cbc127e4c2e8e502a3eae86c4197acf8188119cbff39cbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
