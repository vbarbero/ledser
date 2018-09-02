<?php

/* AppBundle:Company:show.html.twig */
class __TwigTemplate_9484e1d0bceb5586f9fd80714b7f49a3072e14357016bc83a4f6f81d0d66cfb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:show.html.twig", 1);
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
        $__internal_029402562e10c315bcc13ed1b8b6962df35ef01706519c2f762a30073121ce44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029402562e10c315bcc13ed1b8b6962df35ef01706519c2f762a30073121ce44->enter($__internal_029402562e10c315bcc13ed1b8b6962df35ef01706519c2f762a30073121ce44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:show.html.twig"));

        $__internal_4f861a3231032bcebd9c8e2650caeb164d6a18e9effdae9391fee9419d534f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f861a3231032bcebd9c8e2650caeb164d6a18e9effdae9391fee9419d534f89->enter($__internal_4f861a3231032bcebd9c8e2650caeb164d6a18e9effdae9391fee9419d534f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_029402562e10c315bcc13ed1b8b6962df35ef01706519c2f762a30073121ce44->leave($__internal_029402562e10c315bcc13ed1b8b6962df35ef01706519c2f762a30073121ce44_prof);

        
        $__internal_4f861a3231032bcebd9c8e2650caeb164d6a18e9effdae9391fee9419d534f89->leave($__internal_4f861a3231032bcebd9c8e2650caeb164d6a18e9effdae9391fee9419d534f89_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_972d2269e909049ef29b66c87291a3a6f1477e2dfe6f52c55ff753477ac5568f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972d2269e909049ef29b66c87291a3a6f1477e2dfe6f52c55ff753477ac5568f->enter($__internal_972d2269e909049ef29b66c87291a3a6f1477e2dfe6f52c55ff753477ac5568f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_90ffe6978f013498669d8c0a95941e056ad8d34ac23b01513af300815107eb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ffe6978f013498669d8c0a95941e056ad8d34ac23b01513af300815107eb7e->enter($__internal_90ffe6978f013498669d8c0a95941e056ad8d34ac23b01513af300815107eb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "id", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "name", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cnae"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "cnae", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "type", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "address", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "city", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "zip", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Province"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "province", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <h5>Contacts</h5>

        <table class=\"table table-condensed\">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 79
            echo "                <tr>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </table>
    </div>
";
        
        $__internal_90ffe6978f013498669d8c0a95941e056ad8d34ac23b01513af300815107eb7e->leave($__internal_90ffe6978f013498669d8c0a95941e056ad8d34ac23b01513af300815107eb7e_prof);

        
        $__internal_972d2269e909049ef29b66c87291a3a6f1477e2dfe6f52c55ff753477ac5568f->leave($__internal_972d2269e909049ef29b66c87291a3a6f1477e2dfe6f52c55ff753477ac5568f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 85,  188 => 82,  184 => 81,  180 => 80,  177 => 79,  173 => 78,  158 => 66,  152 => 63,  144 => 58,  138 => 55,  130 => 50,  124 => 47,  116 => 42,  110 => 39,  102 => 34,  96 => 31,  88 => 26,  82 => 23,  74 => 18,  68 => 15,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"col-lg-4\">
            {{ 'Id' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.id }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Name' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.name }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Cnae' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.cnae }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Type' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.type }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Address' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.address }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'City' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.city }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Zip' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.zip }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Province' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ company.province }}
        </div>
    </div>
    <div class=\"row\">
        <h5>Contacts</h5>

        <table class=\"table table-condensed\">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            {%  for contact in contacts %}
                <tr>
                    <td>{{ contact.name }}</td>
                    <td>{{ contact.email }}</td>
                    <td>{{ contact.phone }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
", "AppBundle:Company:show.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/show.html.twig");
    }
}
