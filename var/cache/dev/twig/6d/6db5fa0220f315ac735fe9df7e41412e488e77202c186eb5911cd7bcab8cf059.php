<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_62ec0ed4601b721c2d1eb0e05cc585bac6b1da2ccb4be55c2e4d6523d3142216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae2c9ae6b7ab26083b8e7fbcd861ac88c10ca5e076d11f799afcc95f1c6d8f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2c9ae6b7ab26083b8e7fbcd861ac88c10ca5e076d11f799afcc95f1c6d8f0b->enter($__internal_ae2c9ae6b7ab26083b8e7fbcd861ac88c10ca5e076d11f799afcc95f1c6d8f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_a419985337fc0fe5b83891ca6f36e919847e1e1c50910d08f3cf6b5ea0f11ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a419985337fc0fe5b83891ca6f36e919847e1e1c50910d08f3cf6b5ea0f11ce7->enter($__internal_a419985337fc0fe5b83891ca6f36e919847e1e1c50910d08f3cf6b5ea0f11ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ae2c9ae6b7ab26083b8e7fbcd861ac88c10ca5e076d11f799afcc95f1c6d8f0b->leave($__internal_ae2c9ae6b7ab26083b8e7fbcd861ac88c10ca5e076d11f799afcc95f1c6d8f0b_prof);

        
        $__internal_a419985337fc0fe5b83891ca6f36e919847e1e1c50910d08f3cf6b5ea0f11ce7->leave($__internal_a419985337fc0fe5b83891ca6f36e919847e1e1c50910d08f3cf6b5ea0f11ce7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
