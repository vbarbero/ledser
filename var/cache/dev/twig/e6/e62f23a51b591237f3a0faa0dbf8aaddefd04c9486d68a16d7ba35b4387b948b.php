<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_04f2a0eac0b6e2915ddd7ccb60a21ad9de07d1d9fe7cc3f7e748d40f7c763cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fd7f80fd0f8507c3d80d86d314d38bc6f1c82cdf4c3c89786995abcb0afd614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd7f80fd0f8507c3d80d86d314d38bc6f1c82cdf4c3c89786995abcb0afd614->enter($__internal_7fd7f80fd0f8507c3d80d86d314d38bc6f1c82cdf4c3c89786995abcb0afd614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_42cc5d85251d8c2ec11cad1eaba314a87d67364a61267921b9abe808aee2f3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cc5d85251d8c2ec11cad1eaba314a87d67364a61267921b9abe808aee2f3d0->enter($__internal_42cc5d85251d8c2ec11cad1eaba314a87d67364a61267921b9abe808aee2f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7fd7f80fd0f8507c3d80d86d314d38bc6f1c82cdf4c3c89786995abcb0afd614->leave($__internal_7fd7f80fd0f8507c3d80d86d314d38bc6f1c82cdf4c3c89786995abcb0afd614_prof);

        
        $__internal_42cc5d85251d8c2ec11cad1eaba314a87d67364a61267921b9abe808aee2f3d0->leave($__internal_42cc5d85251d8c2ec11cad1eaba314a87d67364a61267921b9abe808aee2f3d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_322272fdcd264b6cf38d52f41c631b7ef08347b0cdb8b440eba275cda37d79c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322272fdcd264b6cf38d52f41c631b7ef08347b0cdb8b440eba275cda37d79c6->enter($__internal_322272fdcd264b6cf38d52f41c631b7ef08347b0cdb8b440eba275cda37d79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_077ec1dbe0f38d0c50db09b6b2760196b8cf8b077f960b0936f89879bde1bcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077ec1dbe0f38d0c50db09b6b2760196b8cf8b077f960b0936f89879bde1bcc4->enter($__internal_077ec1dbe0f38d0c50db09b6b2760196b8cf8b077f960b0936f89879bde1bcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_077ec1dbe0f38d0c50db09b6b2760196b8cf8b077f960b0936f89879bde1bcc4->leave($__internal_077ec1dbe0f38d0c50db09b6b2760196b8cf8b077f960b0936f89879bde1bcc4_prof);

        
        $__internal_322272fdcd264b6cf38d52f41c631b7ef08347b0cdb8b440eba275cda37d79c6->leave($__internal_322272fdcd264b6cf38d52f41c631b7ef08347b0cdb8b440eba275cda37d79c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
