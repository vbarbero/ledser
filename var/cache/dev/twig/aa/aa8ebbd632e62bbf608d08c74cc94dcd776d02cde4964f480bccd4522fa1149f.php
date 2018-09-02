<?php

/* AppBundle:Company:addFile.html.twig */
class __TwigTemplate_8baa9a0cdc5322dac567c44d81bfe4b67c4f2c06202371fd726c43cedfe62527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:addFile.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_554df0b95a6d117184491c3d4ad62775a14c9fed47c69f0b5c5be932dd9dab73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554df0b95a6d117184491c3d4ad62775a14c9fed47c69f0b5c5be932dd9dab73->enter($__internal_554df0b95a6d117184491c3d4ad62775a14c9fed47c69f0b5c5be932dd9dab73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:addFile.html.twig"));

        $__internal_28341efe834093af4c23b2eb93fe5e9f04711f40fee8cfcb762988f0d603ee83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28341efe834093af4c23b2eb93fe5e9f04711f40fee8cfcb762988f0d603ee83->enter($__internal_28341efe834093af4c23b2eb93fe5e9f04711f40fee8cfcb762988f0d603ee83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:addFile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554df0b95a6d117184491c3d4ad62775a14c9fed47c69f0b5c5be932dd9dab73->leave($__internal_554df0b95a6d117184491c3d4ad62775a14c9fed47c69f0b5c5be932dd9dab73_prof);

        
        $__internal_28341efe834093af4c23b2eb93fe5e9f04711f40fee8cfcb762988f0d603ee83->leave($__internal_28341efe834093af4c23b2eb93fe5e9f04711f40fee8cfcb762988f0d603ee83_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_bbd661b0a4dac36247fa56fa8b2bd17ae6d4ecad9d9defde36f657e1cf67186f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd661b0a4dac36247fa56fa8b2bd17ae6d4ecad9d9defde36f657e1cf67186f->enter($__internal_bbd661b0a4dac36247fa56fa8b2bd17ae6d4ecad9d9defde36f657e1cf67186f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ee8c160cfb1a5c70e42cbb8c20d12cba36a7b483289fac5fe6fa59b43dba6272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8c160cfb1a5c70e42cbb8c20d12cba36a7b483289fac5fe6fa59b43dba6272->enter($__internal_ee8c160cfb1a5c70e42cbb8c20d12cba36a7b483289fac5fe6fa59b43dba6272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>ADD FILE</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "source", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "source", array()), 'widget');
        echo "
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_ee8c160cfb1a5c70e42cbb8c20d12cba36a7b483289fac5fe6fa59b43dba6272->leave($__internal_ee8c160cfb1a5c70e42cbb8c20d12cba36a7b483289fac5fe6fa59b43dba6272_prof);

        
        $__internal_bbd661b0a4dac36247fa56fa8b2bd17ae6d4ecad9d9defde36f657e1cf67186f->leave($__internal_bbd661b0a4dac36247fa56fa8b2bd17ae6d4ecad9d9defde36f657e1cf67186f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:addFile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  85 => 27,  79 => 24,  70 => 18,  64 => 15,  58 => 12,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}


{% block content %}
    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>ADD FILE</h2>

        </div>
    </div>
    <div class=\"row\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.name) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.name) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.source) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.source) }}
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    {{ form_end(form) }}
    </div>
{% endblock %}
", "AppBundle:Company:addFile.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/addFile.html.twig");
    }
}
