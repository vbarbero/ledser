<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5cde0087dc75c031bd3004f37db88e1ec5b92e422b843f5494030154de119da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_257b58a00dfb0ee6567a5450934169fae571935cdeb2839a132b23c209cfee1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257b58a00dfb0ee6567a5450934169fae571935cdeb2839a132b23c209cfee1b->enter($__internal_257b58a00dfb0ee6567a5450934169fae571935cdeb2839a132b23c209cfee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5acce5a4d8afc584136b7401bc2599e0781df287d6b29f191ee547e3742effec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acce5a4d8afc584136b7401bc2599e0781df287d6b29f191ee547e3742effec->enter($__internal_5acce5a4d8afc584136b7401bc2599e0781df287d6b29f191ee547e3742effec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257b58a00dfb0ee6567a5450934169fae571935cdeb2839a132b23c209cfee1b->leave($__internal_257b58a00dfb0ee6567a5450934169fae571935cdeb2839a132b23c209cfee1b_prof);

        
        $__internal_5acce5a4d8afc584136b7401bc2599e0781df287d6b29f191ee547e3742effec->leave($__internal_5acce5a4d8afc584136b7401bc2599e0781df287d6b29f191ee547e3742effec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_532d4f4b6a81a99d2d9b82195a3318980943479a76d21fa0270e9b1f8806a5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532d4f4b6a81a99d2d9b82195a3318980943479a76d21fa0270e9b1f8806a5d4->enter($__internal_532d4f4b6a81a99d2d9b82195a3318980943479a76d21fa0270e9b1f8806a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d574108e681ef2066fbc05457ca2e4cb28c3a8eae1f9141cf843bf54453b9ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d574108e681ef2066fbc05457ca2e4cb28c3a8eae1f9141cf843bf54453b9ada->enter($__internal_d574108e681ef2066fbc05457ca2e4cb28c3a8eae1f9141cf843bf54453b9ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d574108e681ef2066fbc05457ca2e4cb28c3a8eae1f9141cf843bf54453b9ada->leave($__internal_d574108e681ef2066fbc05457ca2e4cb28c3a8eae1f9141cf843bf54453b9ada_prof);

        
        $__internal_532d4f4b6a81a99d2d9b82195a3318980943479a76d21fa0270e9b1f8806a5d4->leave($__internal_532d4f4b6a81a99d2d9b82195a3318980943479a76d21fa0270e9b1f8806a5d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
