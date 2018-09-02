<?php

/* AppBundle:Report:calendar.html.twig */
class __TwigTemplate_26f981964c1936cf1480c6b186a62e5c7deff11f99edceb7dde8c52f01a2ba2f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
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
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    <table cellpadding=\"0\" cellspacing=\"0\" class=\"calendar\">
        <tr class=\"calendar-row\">
            <td>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("calendar");
        echo "?month=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? null), "m"), "html", null, true);
        echo "&year=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? null), "Y"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? null), "F"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["beforeMonth"] ?? null), "Y"), "html", null, true);
        echo "</button></a>
            </td>
            <td colspan=\"5\" style=\"align-content: center\" align=\"center\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? null), "F"), "html", null, true);
        echo "</td>
            <td>

                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("calendar");
        echo "?month=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? null), "m"), "html", null, true);
        echo "&year=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? null), "Y"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? null), "F"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["nextMonth"] ?? null), "Y"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range(1, (($context["running_day"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 38
            echo "                <td class=\"calendar-day-np\"> </td>
                ";
            // line 39
            $context["day_of_week"] = (($context["day_of_week"] ?? null) + 1);
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
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["days_in_month"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 43
            echo "                <td class=\"calendar-day\" ";
            if ((twig_date_format_filter($this->env, ($context["today"] ?? null), "Y-m-d") == (twig_date_format_filter($this->env, ($context["thisMonth"] ?? null), "Y-m-") . $context["day"]))) {
                echo "style=\"background-color: aqua\" ";
            }
            echo ">
                    <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("report_list");
            echo "?dayForm=";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? null), "m"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? null), "Y"), "html", null, true);
            echo "&dayTo=";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? null), "m"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["thisMonth"] ?? null), "Y"), "html", null, true);
            echo "\"><div class=\"day-number\">";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</div><p> </p></a></td>
                ";
            // line 45
            $context["day_of_week"] = (($context["day_of_week"] ?? null) + 1);
            // line 46
            echo "
                ";
            // line 47
            if ((($context["day_of_week"] ?? null) == 7)) {
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
        $context['_seq'] = twig_ensure_traversable(range(($context["day_of_week"] ?? null), 6));
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
        return array (  192 => 55,  185 => 53,  180 => 52,  174 => 51,  170 => 49,  167 => 48,  165 => 47,  162 => 46,  160 => 45,  142 => 44,  135 => 43,  131 => 42,  128 => 41,  122 => 40,  120 => 39,  117 => 38,  112 => 37,  110 => 36,  106 => 34,  97 => 32,  93 => 31,  78 => 27,  72 => 24,  59 => 22,  54 => 19,  51 => 18,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Report:calendar.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Report/calendar.html.twig");
    }
}
