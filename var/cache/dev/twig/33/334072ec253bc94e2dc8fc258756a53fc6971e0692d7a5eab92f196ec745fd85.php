<?php

/* AppBundle:Report:calendar.html.twig */
class __TwigTemplate_69034e75c5c771047c74165b8bbc52046b28a56ee60716db345cbda8e7c26b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Report:calendar.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e780fb38a347aeae17b39b2e9a48a98ccb3dadd1339cd2cbaf52178d05478e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e780fb38a347aeae17b39b2e9a48a98ccb3dadd1339cd2cbaf52178d05478e2e->enter($__internal_e780fb38a347aeae17b39b2e9a48a98ccb3dadd1339cd2cbaf52178d05478e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:calendar.html.twig"));

        $__internal_ef527965ce15c7d9af26d6a20dbd95c3e437b610a6ec55f105f10d376120f04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef527965ce15c7d9af26d6a20dbd95c3e437b610a6ec55f105f10d376120f04b->enter($__internal_ef527965ce15c7d9af26d6a20dbd95c3e437b610a6ec55f105f10d376120f04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:calendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e780fb38a347aeae17b39b2e9a48a98ccb3dadd1339cd2cbaf52178d05478e2e->leave($__internal_e780fb38a347aeae17b39b2e9a48a98ccb3dadd1339cd2cbaf52178d05478e2e_prof);

        
        $__internal_ef527965ce15c7d9af26d6a20dbd95c3e437b610a6ec55f105f10d376120f04b->leave($__internal_ef527965ce15c7d9af26d6a20dbd95c3e437b610a6ec55f105f10d376120f04b_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d6c0e2e091ccd27f6fb14e8f61f1eeba6b22429db58bf77e263331d966080980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c0e2e091ccd27f6fb14e8f61f1eeba6b22429db58bf77e263331d966080980->enter($__internal_d6c0e2e091ccd27f6fb14e8f61f1eeba6b22429db58bf77e263331d966080980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_d64dde2bff85f696a1aaf00ff660ef6f90c69620ef9d6b5d7f662c18e534a9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64dde2bff85f696a1aaf00ff660ef6f90c69620ef9d6b5d7f662c18e534a9a3->enter($__internal_d64dde2bff85f696a1aaf00ff660ef6f90c69620ef9d6b5d7f662c18e534a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
    <style>
        /* calendar */
        table.calendar\t\t{ border-left:1px solid #999; }
        tr.calendar-row\t{  }
        td.calendar-day\t{ min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
        td.calendar-day:hover\t{ background:#eceff5; }
        td.calendar-day-np\t{ background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
        td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
        div.day-number\t\t{ background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
        /* shared */
        td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
    </style>
";
        
        $__internal_d64dde2bff85f696a1aaf00ff660ef6f90c69620ef9d6b5d7f662c18e534a9a3->leave($__internal_d64dde2bff85f696a1aaf00ff660ef6f90c69620ef9d6b5d7f662c18e534a9a3_prof);

        
        $__internal_d6c0e2e091ccd27f6fb14e8f61f1eeba6b22429db58bf77e263331d966080980->leave($__internal_d6c0e2e091ccd27f6fb14e8f61f1eeba6b22429db58bf77e263331d966080980_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_2999c2ba53870cf228f7c08c03d7db80f264a3a260e361c13cd1da6dc9be2e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2999c2ba53870cf228f7c08c03d7db80f264a3a260e361c13cd1da6dc9be2e05->enter($__internal_2999c2ba53870cf228f7c08c03d7db80f264a3a260e361c13cd1da6dc9be2e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_86bcb88e9deb4178fcb97bd078dc360c0f07c406a3d3145920d0aa2558cbab45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86bcb88e9deb4178fcb97bd078dc360c0f07c406a3d3145920d0aa2558cbab45->enter($__internal_86bcb88e9deb4178fcb97bd078dc360c0f07c406a3d3145920d0aa2558cbab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <table cellpadding=\"0\" cellspacing=\"0\" class=\"calendar\">
        <tr class=\"calendar-row\">
            <td>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("calendar");
        echo "?month=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? $this->getContext($context, "beforeMonth")), "m"), "html", null, true);
        echo "&year=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? $this->getContext($context, "beforeMonth")), "Y"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? $this->getContext($context, "beforeMonth")), "F"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? $this->getContext($context, "beforeMonth")), "Y"), "html", null, true);
        echo "</button></a>
            </td>
            <td colspan=\"5\" style=\"align-content: center\" align=\"center\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? $this->getContext($context, "thisMonth")), "F"), "html", null, true);
        echo "</td>
            <td>

                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("calendar");
        echo "?month=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? $this->getContext($context, "nextMonth")), "m"), "html", null, true);
        echo "&year=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? $this->getContext($context, "nextMonth")), "Y"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? $this->getContext($context, "nextMonth")), "F"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? $this->getContext($context, "nextMonth")), "Y"), "html", null, true);
        echo "</button></a>
            </td>
        </tr>
        <tr class=\"calendar-row\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "Monday", 1 => "Tuesday", 2 => "Wednesday", 3 => "Thursday", 4 => "Friday", 5 => "Saturday", 6 => "Sunday"));
        foreach ($context['_seq'] as $context["_key"] => $context["heading"]) {
            // line 32
            echo "                <td class=\"calendar-day-head\">";
            echo twig_escape_filter($this->env, $context["heading"], "html", null, true);
            echo "</td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tr>
        <tr class=\"calendar-row\">
            ";
        // line 36
        $context["day_of_week"] = 0;
        // line 37
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (($context["running_day"] ?? $this->getContext($context, "running_day")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 38
            echo "                <td class=\"calendar-day-np\"> </td>
                ";
            // line 39
            $context["day_of_week"] = (($context["day_of_week"] ?? $this->getContext($context, "day_of_week")) + 1);
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["days_in_month"] ?? $this->getContext($context, "days_in_month"))));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 43
            echo "                <td class=\"calendar-day\" ";
            if ((twig_date_format_filter($this->env, ($context["today"] ?? $this->getContext($context, "today")), "Y-m-d") == (twig_date_format_filter($this->env, ($context["thisMonth"] ?? $this->getContext($context, "thisMonth")), "Y-m-") . $context["day"]))) {
                echo "style=\"background-color: aqua\" ";
            }
            echo ">
                    <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("report_list");
            echo "?dayForm=";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? $this->getContext($context, "thisMonth")), "m"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? $this->getContext($context, "thisMonth")), "Y"), "html", null, true);
            echo "&dayTo=";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? $this->getContext($context, "thisMonth")), "m"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? $this->getContext($context, "thisMonth")), "Y"), "html", null, true);
            echo "\"><div class=\"day-number\">";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</div><p> </p></a></td>
                ";
            // line 45
            $context["day_of_week"] = (($context["day_of_week"] ?? $this->getContext($context, "day_of_week")) + 1);
            // line 46
            echo "
                ";
            // line 47
            if ((($context["day_of_week"] ?? $this->getContext($context, "day_of_week")) == 7)) {
                // line 48
                echo "                    ";
                $context["day_of_week"] = 0;
                // line 49
                echo "                    </tr><tr class=\"calendar-row\">
                ";
            }
            // line 51
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["day_of_week"] ?? $this->getContext($context, "day_of_week")), 6));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 53
            echo "                <td class=\"calendar-day-np\"> </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tr>

    </table>
";
        
        $__internal_86bcb88e9deb4178fcb97bd078dc360c0f07c406a3d3145920d0aa2558cbab45->leave($__internal_86bcb88e9deb4178fcb97bd078dc360c0f07c406a3d3145920d0aa2558cbab45_prof);

        
        $__internal_2999c2ba53870cf228f7c08c03d7db80f264a3a260e361c13cd1da6dc9be2e05->leave($__internal_2999c2ba53870cf228f7c08c03d7db80f264a3a260e361c13cd1da6dc9be2e05_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Report:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 55,  215 => 53,  210 => 52,  204 => 51,  200 => 49,  197 => 48,  195 => 47,  192 => 46,  190 => 45,  172 => 44,  165 => 43,  161 => 42,  158 => 41,  152 => 40,  150 => 39,  147 => 38,  142 => 37,  140 => 36,  136 => 34,  127 => 32,  123 => 31,  108 => 27,  102 => 24,  89 => 22,  84 => 19,  75 => 18,  50 => 4,  41 => 3,  11 => 1,);
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

{% block styles %}
    {{ parent() }}
    <style>
        /* calendar */
        table.calendar\t\t{ border-left:1px solid #999; }
        tr.calendar-row\t{  }
        td.calendar-day\t{ min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
        td.calendar-day:hover\t{ background:#eceff5; }
        td.calendar-day-np\t{ background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
        td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
        div.day-number\t\t{ background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
        /* shared */
        td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
    </style>
{% endblock %}
{% block content %}
    <table cellpadding=\"0\" cellspacing=\"0\" class=\"calendar\">
        <tr class=\"calendar-row\">
            <td>
                <a href=\"{{ url('calendar') }}?month={{ beforeMonth|date('m') }}&year={{ beforeMonth|date('Y') }}\"><button type=\"button\" class=\"btn btn-secondary\">{{ beforeMonth|date('F') }} {{ beforeMonth|date('Y') }}</button></a>
            </td>
            <td colspan=\"5\" style=\"align-content: center\" align=\"center\">{{ thisMonth| date('F') }}</td>
            <td>

                <a href=\"{{ url('calendar') }}?month={{ nextMonth|date('m') }}&year={{ nextMonth|date('Y') }}\"><button type=\"button\" class=\"btn btn-secondary\">{{ nextMonth|date('F') }} {{ nextMonth|date('Y') }}</button></a>
            </td>
        </tr>
        <tr class=\"calendar-row\">
            {% for heading in ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] %}
                <td class=\"calendar-day-head\">{{ heading }}</td>
            {% endfor %}
        </tr>
        <tr class=\"calendar-row\">
            {% set day_of_week = 0 %}
            {% for day in 1..running_day-1 %}
                <td class=\"calendar-day-np\"> </td>
                {% set day_of_week = day_of_week +1 %}
            {% endfor %}

            {% for day in 1..days_in_month %}
                <td class=\"calendar-day\" {% if today|date(\"Y-m-d\") == thisMonth|date(\"Y-m-\") ~ day %}style=\"background-color: aqua\" {% endif %}>
                    <a href=\"{{ url('report_list') }}?dayForm={{ day }}-{{ thisMonth|date('m') }}-{{ thisMonth|date('Y') }}&dayTo={{ day }}-{{ thisMonth|date('m') }}-{{ thisMonth|date('Y') }}\"><div class=\"day-number\">{{ day }}</div><p> </p></a></td>
                {% set day_of_week = day_of_week +1 %}

                {% if day_of_week == 7 %}
                    {% set day_of_week = 0 %}
                    </tr><tr class=\"calendar-row\">
                {% endif %}
            {% endfor %}
            {% for day in day_of_week..6 %}
                <td class=\"calendar-day-np\"> </td>
            {% endfor %}
        </tr>

    </table>
{% endblock %}", "AppBundle:Report:calendar.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Report/calendar.html.twig");
    }
}
