<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a668c0b3b35260054951e62321d3563567d39f837f67c898fdb6f59b4bed5d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e2ceadb5ea3cf63f4bb42226a777c8a65dda0aa96ca5f8d9afc4045afb19505e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ceadb5ea3cf63f4bb42226a777c8a65dda0aa96ca5f8d9afc4045afb19505e->enter($__internal_e2ceadb5ea3cf63f4bb42226a777c8a65dda0aa96ca5f8d9afc4045afb19505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f140f89f997acc04113d55f003d07203fc957d468f799a249ab4eb48a7165b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f140f89f997acc04113d55f003d07203fc957d468f799a249ab4eb48a7165b13->enter($__internal_f140f89f997acc04113d55f003d07203fc957d468f799a249ab4eb48a7165b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ceadb5ea3cf63f4bb42226a777c8a65dda0aa96ca5f8d9afc4045afb19505e->leave($__internal_e2ceadb5ea3cf63f4bb42226a777c8a65dda0aa96ca5f8d9afc4045afb19505e_prof);

        
        $__internal_f140f89f997acc04113d55f003d07203fc957d468f799a249ab4eb48a7165b13->leave($__internal_f140f89f997acc04113d55f003d07203fc957d468f799a249ab4eb48a7165b13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45d12213b18ca44be8a17f2bf0ecaf05abe6679c59839a4570e3580779780c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d12213b18ca44be8a17f2bf0ecaf05abe6679c59839a4570e3580779780c32->enter($__internal_45d12213b18ca44be8a17f2bf0ecaf05abe6679c59839a4570e3580779780c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9d230039aae631c5ca198e14800b694cfaaba7461e7601232650fb905f1738f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d230039aae631c5ca198e14800b694cfaaba7461e7601232650fb905f1738f->enter($__internal_f9d230039aae631c5ca198e14800b694cfaaba7461e7601232650fb905f1738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f9d230039aae631c5ca198e14800b694cfaaba7461e7601232650fb905f1738f->leave($__internal_f9d230039aae631c5ca198e14800b694cfaaba7461e7601232650fb905f1738f_prof);

        
        $__internal_45d12213b18ca44be8a17f2bf0ecaf05abe6679c59839a4570e3580779780c32->leave($__internal_45d12213b18ca44be8a17f2bf0ecaf05abe6679c59839a4570e3580779780c32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
