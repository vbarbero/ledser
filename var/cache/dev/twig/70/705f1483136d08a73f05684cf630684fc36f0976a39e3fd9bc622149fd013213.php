<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65146616315fa1cf75c8d48c33d4265c13c882a8c609a858e68f32813a0cc842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_167edbf99ca4727d3b756e5e41ccf2799cece7c837883fc05aac42f41bdce35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167edbf99ca4727d3b756e5e41ccf2799cece7c837883fc05aac42f41bdce35a->enter($__internal_167edbf99ca4727d3b756e5e41ccf2799cece7c837883fc05aac42f41bdce35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_cc7b6d545a95f6894fe6a6ca0cdf9dd2d584a9d43fcdb3c6013e446c70bbc8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7b6d545a95f6894fe6a6ca0cdf9dd2d584a9d43fcdb3c6013e446c70bbc8a2->enter($__internal_cc7b6d545a95f6894fe6a6ca0cdf9dd2d584a9d43fcdb3c6013e446c70bbc8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_167edbf99ca4727d3b756e5e41ccf2799cece7c837883fc05aac42f41bdce35a->leave($__internal_167edbf99ca4727d3b756e5e41ccf2799cece7c837883fc05aac42f41bdce35a_prof);

        
        $__internal_cc7b6d545a95f6894fe6a6ca0cdf9dd2d584a9d43fcdb3c6013e446c70bbc8a2->leave($__internal_cc7b6d545a95f6894fe6a6ca0cdf9dd2d584a9d43fcdb3c6013e446c70bbc8a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2c31ae2c25bf83706f4827911aa45e50dc3298c716ee74bbb9c4a269723fb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c31ae2c25bf83706f4827911aa45e50dc3298c716ee74bbb9c4a269723fb78->enter($__internal_e2c31ae2c25bf83706f4827911aa45e50dc3298c716ee74bbb9c4a269723fb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffc8e7a125da80433f8e2c2b0249ce7a0bef2830001c50314bec64372ae6b2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc8e7a125da80433f8e2c2b0249ce7a0bef2830001c50314bec64372ae6b2dd->enter($__internal_ffc8e7a125da80433f8e2c2b0249ce7a0bef2830001c50314bec64372ae6b2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ffc8e7a125da80433f8e2c2b0249ce7a0bef2830001c50314bec64372ae6b2dd->leave($__internal_ffc8e7a125da80433f8e2c2b0249ce7a0bef2830001c50314bec64372ae6b2dd_prof);

        
        $__internal_e2c31ae2c25bf83706f4827911aa45e50dc3298c716ee74bbb9c4a269723fb78->leave($__internal_e2c31ae2c25bf83706f4827911aa45e50dc3298c716ee74bbb9c4a269723fb78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
