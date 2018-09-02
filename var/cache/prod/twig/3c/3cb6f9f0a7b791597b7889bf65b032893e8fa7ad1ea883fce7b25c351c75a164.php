<?php

/* AppBundle:Proposal:list.html.twig */
class __TwigTemplate_8f61be888ba5ead3e23feea82215a9f2c8d052b65c94807b7bf1f58372391c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Proposal:list.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e17c6ba_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_bootstrap-datetimepicker.min_1.css");
            // line 21
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "e17c6ba"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 25
        echo "
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "

<td class=\"row\">
    <div class=\"col-sm-4\" style=\"border: 1px solid\">

        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 50
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 63
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 70
        echo "            ";
        // line 71
        echo "                ";
        // line 72
        echo "            ";
        // line 73
        echo "            ";
        // line 74
        echo "                ";
        // line 75
        echo "            ";
        // line 76
        echo "        ";
        // line 77
        echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "operationalType", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "operationalType", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">

            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter"), "html", null, true);
        echo "</button>

            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
    <table class=\"table bg-dark text-light\">
        ";
        // line 95
        echo "        <tr>
        <td>Proposal From / Proposal To</td>
        <td>company</td>
        <td>Drawee</td>
        <td>state</td>
        <td>Rating</td>
        <td>Type</td>
        <td>Nominal</td>
        <td>Date diff</td>
        <td>Tae coste financiero</td>
        <td>Tae coste + ledser</td>
        <td>Tae coste total</td>
        ";
        // line 108
        echo "        <td>Acción</td>
        </tr>

    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proposals"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
            // line 112
            echo "        <tr class=\" ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "bg-secondary";
            }
            echo "\">
            <td>
\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["proposal"], "calculator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["calculator"]) {
                // line 115
                echo "\t\t<div style=\"display: block\">
\t\t\t<span style=\"display: block\">";
                // line 116
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calculator"], "formalizacion", array()), "Y-m-d"), "html", null, true);
                echo "</span> / 
\t\t\t<span style=\"display: block\">";
                // line 117
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calculator"], "vencimiento", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_proposal", array("id" => $this->getAttribute($context["proposal"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposal"], "company", array()), "name", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["proposal"], "drawee", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ProposalExtension')->getStatus($this->getAttribute($context["proposal"], "state", array())), "html", null, true);
            if (($this->getAttribute($context["proposal"], "state", array()) == 5)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proposal"], "reason", array()), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["proposal"], "rating", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["proposal"], "operationalType", array()), "html", null, true);
            echo "</td>
            ";
            // line 126
            echo "            ";
            // line 127
            echo "
            ";
            // line 128
            $context["num"] = 0;
            // line 129
            echo "            ";
            $context["nominal"] = 0;
            // line 130
            echo "            ";
            $context["dias"] = 0;
            // line 131
            echo "            ";
            $context["taeCF"] = 0;
            // line 132
            echo "            ";
            $context["taeCL"] = 0;
            // line 133
            echo "\t    ";
            $context["taeT"] = 0;
            // line 134
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["proposal"], "calculator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["calculator"]) {
                // line 135
                echo "                ";
                $context["num"] = (($context["num"] ?? null) + 1);
                // line 136
                echo "                ";
                $context["dias"] = $this->getAttribute($context["calculator"], "dias", array());
                // line 137
                echo "                ";
                $context["taeCF"] = $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "tae", array());
                // line 138
                echo "                ";
                $context["taeCL"] = $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "tae", array());
                // line 139
                echo "                ";
                $context["taeT"] = $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "tae", array());
                // line 140
                echo "                ";
                $context["nominal"] = $this->getAttribute($context["calculator"], "nominal", array());
                // line 141
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "            <td>";
            if ((($context["num"] ?? null) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["nominal"] ?? null) / ($context["num"] ?? null)), 2), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 143
            if ((($context["num"] ?? null) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["dias"] ?? null) / ($context["num"] ?? null)), 0), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 144
            if ((($context["num"] ?? null) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["taeCF"] ?? null) / ($context["num"] ?? null)), 2), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 145
            if ((($context["num"] ?? null) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["taeCL"] ?? null) / ($context["num"] ?? null)), 2), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 146
            if ((($context["num"] ?? null) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["taeT"] ?? null) / ($context["num"] ?? null)), 2), "html", null, true);
            }
            echo "</td>
            <td>
                <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("create_calculator", array("proposal" => $this->getAttribute($context["proposal"], "id", array()))), "html", null, true);
            echo "\">Añadir calculadora</a>
                <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_proposal", array("proposal" => $this->getAttribute($context["proposal"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
\t\t<a class=\"delete\" data-href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_proposal", array("proposal" => $this->getAttribute($context["proposal"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
    </table>
";
    }

    // line 158
    public function block_javascript($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
\$(function() {
\t\$(\".delete\").on('click', function(){
\t\tif(confirm('Are you suere you want to delete it?'))
\t\t{
\t\t\tdocument.location = \$(this).attr('data-href');
\t\t\treturn true;
\t\t} else {
\t\t\treturn false;
\t\t}
\t});
});
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Proposal:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 161,  416 => 160,  411 => 159,  408 => 158,  402 => 154,  384 => 150,  380 => 149,  376 => 148,  367 => 146,  359 => 145,  351 => 144,  343 => 143,  334 => 142,  328 => 141,  325 => 140,  322 => 139,  319 => 138,  316 => 137,  313 => 136,  310 => 135,  305 => 134,  302 => 133,  299 => 132,  296 => 131,  293 => 130,  290 => 129,  288 => 128,  285 => 127,  283 => 126,  279 => 124,  275 => 123,  267 => 122,  263 => 121,  256 => 120,  247 => 117,  243 => 116,  240 => 115,  236 => 114,  228 => 112,  211 => 111,  206 => 108,  192 => 95,  185 => 90,  180 => 88,  171 => 82,  165 => 79,  161 => 77,  159 => 76,  157 => 75,  155 => 74,  153 => 73,  151 => 72,  149 => 71,  147 => 70,  139 => 63,  136 => 62,  129 => 58,  119 => 50,  116 => 49,  109 => 45,  101 => 40,  95 => 37,  89 => 34,  82 => 29,  79 => 28,  74 => 25,  69 => 23,  55 => 21,  51 => 18,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Proposal:list.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/list.html.twig");
    }
}
