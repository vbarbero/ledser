<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_525312126c72c0c2660216256bede2ec118cbfe03a022a189abe5454a0c39596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fcc102619dd59b14c5931e62ce2223621f7696fdab525444c7c7caf630609efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc102619dd59b14c5931e62ce2223621f7696fdab525444c7c7caf630609efb->enter($__internal_fcc102619dd59b14c5931e62ce2223621f7696fdab525444c7c7caf630609efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_591d8e3c5ab2d81468568f3fdbeb72a760e091f50941c7b26df043a60060ce88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591d8e3c5ab2d81468568f3fdbeb72a760e091f50941c7b26df043a60060ce88->enter($__internal_591d8e3c5ab2d81468568f3fdbeb72a760e091f50941c7b26df043a60060ce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc102619dd59b14c5931e62ce2223621f7696fdab525444c7c7caf630609efb->leave($__internal_fcc102619dd59b14c5931e62ce2223621f7696fdab525444c7c7caf630609efb_prof);

        
        $__internal_591d8e3c5ab2d81468568f3fdbeb72a760e091f50941c7b26df043a60060ce88->leave($__internal_591d8e3c5ab2d81468568f3fdbeb72a760e091f50941c7b26df043a60060ce88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_008c406067da97daf376b6a80a1d2b9a9b36bd56b4ade0bc90ff4df6470de000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008c406067da97daf376b6a80a1d2b9a9b36bd56b4ade0bc90ff4df6470de000->enter($__internal_008c406067da97daf376b6a80a1d2b9a9b36bd56b4ade0bc90ff4df6470de000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cad6f0beee699857ac5e15b0f772921f403bbee08c735ef7035b5c24c7b7f6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad6f0beee699857ac5e15b0f772921f403bbee08c735ef7035b5c24c7b7f6a4->enter($__internal_cad6f0beee699857ac5e15b0f772921f403bbee08c735ef7035b5c24c7b7f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cad6f0beee699857ac5e15b0f772921f403bbee08c735ef7035b5c24c7b7f6a4->leave($__internal_cad6f0beee699857ac5e15b0f772921f403bbee08c735ef7035b5c24c7b7f6a4_prof);

        
        $__internal_008c406067da97daf376b6a80a1d2b9a9b36bd56b4ade0bc90ff4df6470de000->leave($__internal_008c406067da97daf376b6a80a1d2b9a9b36bd56b4ade0bc90ff4df6470de000_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
