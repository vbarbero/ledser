<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_37a636f31ebd0073492ab8f0d252391bcf2a4a3b899c39245a91c7d879a50a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33874299964e897ec1ca319840ae68a5bbae6e9c9366f6ae5a11b91bb86aa7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33874299964e897ec1ca319840ae68a5bbae6e9c9366f6ae5a11b91bb86aa7bb->enter($__internal_33874299964e897ec1ca319840ae68a5bbae6e9c9366f6ae5a11b91bb86aa7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cde124a8e8103a5618ac9a4e32f2448f1ae7200b6027ddf15429f3170dddcc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde124a8e8103a5618ac9a4e32f2448f1ae7200b6027ddf15429f3170dddcc90->enter($__internal_cde124a8e8103a5618ac9a4e32f2448f1ae7200b6027ddf15429f3170dddcc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33874299964e897ec1ca319840ae68a5bbae6e9c9366f6ae5a11b91bb86aa7bb->leave($__internal_33874299964e897ec1ca319840ae68a5bbae6e9c9366f6ae5a11b91bb86aa7bb_prof);

        
        $__internal_cde124a8e8103a5618ac9a4e32f2448f1ae7200b6027ddf15429f3170dddcc90->leave($__internal_cde124a8e8103a5618ac9a4e32f2448f1ae7200b6027ddf15429f3170dddcc90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3895eb5de77f74e8e6b77fe31a4d971cc21433b1330713c4f418f2529ad523a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3895eb5de77f74e8e6b77fe31a4d971cc21433b1330713c4f418f2529ad523a2->enter($__internal_3895eb5de77f74e8e6b77fe31a4d971cc21433b1330713c4f418f2529ad523a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8ad1efd73b0d6d6c6ca323d95f68fb5feb0b26322f4242467cfcc325b12f6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ad1efd73b0d6d6c6ca323d95f68fb5feb0b26322f4242467cfcc325b12f6ba->enter($__internal_f8ad1efd73b0d6d6c6ca323d95f68fb5feb0b26322f4242467cfcc325b12f6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8ad1efd73b0d6d6c6ca323d95f68fb5feb0b26322f4242467cfcc325b12f6ba->leave($__internal_f8ad1efd73b0d6d6c6ca323d95f68fb5feb0b26322f4242467cfcc325b12f6ba_prof);

        
        $__internal_3895eb5de77f74e8e6b77fe31a4d971cc21433b1330713c4f418f2529ad523a2->leave($__internal_3895eb5de77f74e8e6b77fe31a4d971cc21433b1330713c4f418f2529ad523a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44bc3868dc237b5f9191ebaa9028247d55edc392119b9d50ba3f30318fa0dc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bc3868dc237b5f9191ebaa9028247d55edc392119b9d50ba3f30318fa0dc72->enter($__internal_44bc3868dc237b5f9191ebaa9028247d55edc392119b9d50ba3f30318fa0dc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49741c6ccc87e6067462a0e7de9e5355a5349b6d7144ddded5ddb1087e17e1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49741c6ccc87e6067462a0e7de9e5355a5349b6d7144ddded5ddb1087e17e1ec->enter($__internal_49741c6ccc87e6067462a0e7de9e5355a5349b6d7144ddded5ddb1087e17e1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49741c6ccc87e6067462a0e7de9e5355a5349b6d7144ddded5ddb1087e17e1ec->leave($__internal_49741c6ccc87e6067462a0e7de9e5355a5349b6d7144ddded5ddb1087e17e1ec_prof);

        
        $__internal_44bc3868dc237b5f9191ebaa9028247d55edc392119b9d50ba3f30318fa0dc72->leave($__internal_44bc3868dc237b5f9191ebaa9028247d55edc392119b9d50ba3f30318fa0dc72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2c6ff19cfe1be5eaf37f799e8d4b558885ce232fbb7cdfb603d8b270905de2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c6ff19cfe1be5eaf37f799e8d4b558885ce232fbb7cdfb603d8b270905de2b->enter($__internal_f2c6ff19cfe1be5eaf37f799e8d4b558885ce232fbb7cdfb603d8b270905de2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_384ad985955a3ea8debfd38e15f4370cecbada332010da64ac07a356a2977bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384ad985955a3ea8debfd38e15f4370cecbada332010da64ac07a356a2977bb8->enter($__internal_384ad985955a3ea8debfd38e15f4370cecbada332010da64ac07a356a2977bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_384ad985955a3ea8debfd38e15f4370cecbada332010da64ac07a356a2977bb8->leave($__internal_384ad985955a3ea8debfd38e15f4370cecbada332010da64ac07a356a2977bb8_prof);

        
        $__internal_f2c6ff19cfe1be5eaf37f799e8d4b558885ce232fbb7cdfb603d8b270905de2b->leave($__internal_f2c6ff19cfe1be5eaf37f799e8d4b558885ce232fbb7cdfb603d8b270905de2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
