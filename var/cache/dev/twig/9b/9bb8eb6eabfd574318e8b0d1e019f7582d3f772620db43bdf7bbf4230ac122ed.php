<?php

/* AppBundle:Report:show.html.twig */
class __TwigTemplate_d2db6ffa97e7a69ca4d96a61488b564d93ffb9cd29859c9167904a8106a4125e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Report:show.html.twig", 1);
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
        $__internal_b1ce1635768ff5c17435fcf6b92341ceea83774a4e9d6906c1b97910aaff6649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ce1635768ff5c17435fcf6b92341ceea83774a4e9d6906c1b97910aaff6649->enter($__internal_b1ce1635768ff5c17435fcf6b92341ceea83774a4e9d6906c1b97910aaff6649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:show.html.twig"));

        $__internal_884fa0ad257c26a9cc17e5acee2384baf41a85f8a6f67c36eb87e05f274d52d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884fa0ad257c26a9cc17e5acee2384baf41a85f8a6f67c36eb87e05f274d52d3->enter($__internal_884fa0ad257c26a9cc17e5acee2384baf41a85f8a6f67c36eb87e05f274d52d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ce1635768ff5c17435fcf6b92341ceea83774a4e9d6906c1b97910aaff6649->leave($__internal_b1ce1635768ff5c17435fcf6b92341ceea83774a4e9d6906c1b97910aaff6649_prof);

        
        $__internal_884fa0ad257c26a9cc17e5acee2384baf41a85f8a6f67c36eb87e05f274d52d3->leave($__internal_884fa0ad257c26a9cc17e5acee2384baf41a85f8a6f67c36eb87e05f274d52d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e9d4d53fb80132f40418f61e966766696814922b9aab01555cacdbff2a64992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9d4d53fb80132f40418f61e966766696814922b9aab01555cacdbff2a64992->enter($__internal_2e9d4d53fb80132f40418f61e966766696814922b9aab01555cacdbff2a64992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b40d0c4f7b88580587c23e25f26d9f97be662f46d474247e7f6d86afb25f844a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40d0c4f7b88580587c23e25f26d9f97be662f46d474247e7f6d86afb25f844a->enter($__internal_b40d0c4f7b88580587c23e25f26d9f97be662f46d474247e7f6d86afb25f844a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company Name"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "name", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cif"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "cif", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cnae"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "cnae", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "address", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "city", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Province"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "province", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip"), "html", null, true);
        echo ":
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["report"] ?? $this->getContext($context, "report")), "company", array()), "zip", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <h5>Contacts</h5>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 66
            echo "                    <div class=\"row\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
            echo ":
                            </div>
                            <div class=\"col-lg-4\">
                                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
            echo ":
                            </div>
                            <div class=\"col-lg-4\">
                                ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone"), "html", null, true);
            echo ":
                            </div>
                            <div class=\"col-lg-4\">
                                ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"input-group date\" id=\"datetimepicker1\">
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("readonly" => "readonly"), "required" => true));
        echo "
                            <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                            <span class=\"input-group-addon\">
                        <span class=\"fa fa-calendar\">
                        </span>
                    </span>

                        </div>

                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "action", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "action", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "done", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "done", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client_type", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client_type", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "report", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "report", array()), 'widget');
        echo "
                    </div>
                </div>
                <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>

                ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-sm-4\">  <table class=\"table table-condensed\">
                <tr>
                    <td>";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "html", null, true);
        echo "</td>
                    <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Report"), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["history"] ?? $this->getContext($context, "history")));
        foreach ($context['_seq'] as $context["_key"] => $context["old"]) {
            // line 177
            echo "                    <tr>
                        <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["old"], "date", array()), "Y-m-d h:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["old"], "report", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['old'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "            </table>
        </div>
    </div>


</div>
";
        
        $__internal_b40d0c4f7b88580587c23e25f26d9f97be662f46d474247e7f6d86afb25f844a->leave($__internal_b40d0c4f7b88580587c23e25f26d9f97be662f46d474247e7f6d86afb25f844a_prof);

        
        $__internal_2e9d4d53fb80132f40418f61e966766696814922b9aab01555cacdbff2a64992->leave($__internal_2e9d4d53fb80132f40418f61e966766696814922b9aab01555cacdbff2a64992_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Report:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 182,  358 => 179,  354 => 178,  351 => 177,  347 => 176,  342 => 174,  338 => 173,  330 => 168,  322 => 163,  316 => 160,  308 => 155,  302 => 152,  294 => 147,  288 => 144,  280 => 139,  274 => 136,  256 => 121,  249 => 117,  241 => 112,  235 => 109,  227 => 104,  221 => 101,  215 => 98,  209 => 94,  197 => 88,  191 => 85,  183 => 80,  177 => 77,  169 => 72,  163 => 69,  158 => 66,  154 => 65,  146 => 60,  140 => 57,  132 => 52,  126 => 49,  118 => 44,  112 => 41,  104 => 36,  98 => 33,  90 => 28,  84 => 25,  76 => 20,  70 => 17,  62 => 12,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'Company Name' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.name }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'Cif' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.cif }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'Cnae' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.cnae }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'Address' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.address }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'City' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.city }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'Province' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.province }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ 'Zip' | trans }}:
                </div>
                <div class=\"col-lg-4\">
                    {{ report.company.zip }}
                </div>
            </div>
            <div class=\"row\">
                <h5>Contacts</h5>
                {%  for contact in contacts %}
                    <div class=\"row\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ 'Name' | trans }}:
                            </div>
                            <div class=\"col-lg-4\">
                                {{ contact.name }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ 'Email' | trans }}:
                            </div>
                            <div class=\"col-lg-4\">
                                {{ contact.email }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                {{ 'Phone' | trans }}:
                            </div>
                            <div class=\"col-lg-4\">
                                {{ contact.phone }}
                            </div>
                        </div>
                    </div>
                    <br/>
                {% endfor %}
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                {{ form_start(form) }}
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.company) }}
                    </div>
                    <div class=\"col-lg-4\">
                        {{ form_widget(form.company) }}
                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.user) }}
                    </div>
                    <div class=\"col-lg-4\">
                        {{ form_widget(form.user) }}
                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.date) }}
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"input-group date\" id=\"datetimepicker1\">
                            {{ form_widget(form.date, {attr:{readonly: 'readonly'}, required: true}) }}
                            <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                            <span class=\"input-group-addon\">
                        <span class=\"fa fa-calendar\">
                        </span>
                    </span>

                        </div>

                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.action) }}
                    </div>
                    <div class=\"col-lg-4\">
                        {{ form_widget(form.action) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.done) }}
                    </div>
                    <div class=\"col-lg-4\">
                        {{ form_widget(form.done) }}
                    </div>
                </div>
                <div class=\"row\" style=\"display: none\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.client_type) }}
                    </div>
                    <div class=\"col-lg-4\">
                        {{ form_widget(form.client_type) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        {{ form_label(form.report) }}
                    </div>
                    <div class=\"col-lg-4\">
                        {{ form_widget(form.report) }}
                    </div>
                </div>
                <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>

                {{ form_end(form) }}
            </div>
        </div>
        <div class=\"col-sm-4\">  <table class=\"table table-condensed\">
                <tr>
                    <td>{{ \"Date\" | trans }}</td>
                    <td>{{ \"Report\" | trans }}</td>
                </tr>
                {% for old in history %}
                    <tr>
                        <td>{{ old.date | date(\"Y-m-d h:i\") }}</td>
                        <td>{{ old.report }}</td>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>


</div>
{% endblock %}
", "AppBundle:Report:show.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Report/show.html.twig");
    }
}
