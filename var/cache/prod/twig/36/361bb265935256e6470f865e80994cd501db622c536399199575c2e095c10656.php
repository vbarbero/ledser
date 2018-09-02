<?php

/* AppBundle:Report:index.html.twig */
class __TwigTemplate_05c68d7c74685429babab195de8a7dd47e607b26409df99b3c1b1ae11cbe44a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Report:index.html.twig", 1);
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

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        // line 3
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
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e17c6ba_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_bootstrap-datetimepicker.min_1.css");
            // line 20
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
        // line 22
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 24
        echo "
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
    <div class=\"row\">
        <div class=\"col-sm-4\" style=\"border: 1px solid\">

    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cif", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cif", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "user", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "user", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateFrom", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateFrom", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 64
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
                ";
        // line 69
        echo "                    ";
        // line 70
        echo "                    ";
        // line 71
        echo "                        ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                        ";
        // line 75
        echo "                        ";
        // line 76
        echo "                    ";
        // line 77
        echo "
                ";
        // line 79
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateTo", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateTo", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 88
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
                ";
        // line 93
        echo "                    ";
        // line 94
        echo "                    ";
        // line 95
        echo "                        ";
        // line 96
        echo "                    ";
        // line 97
        echo "                    ";
        // line 98
        echo "                        ";
        // line 99
        echo "                        ";
        // line 100
        echo "                    ";
        // line 101
        echo "
                ";
        // line 103
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "done", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "done", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "clientType", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "clientType", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "actionType", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "actionType", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "province", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "province", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zip", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zip", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">

            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter"), "html", null, true);
        echo "</button>

            ";
        // line 166
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"col-sm-4\">
            <table class=\"table table-condensed\">
                <tr>
                    <td>DateTime</td>
                    <td>Action</td>
                    <td>Cif</td>
                    <td>Company Name</td>
                    <td>Client Type</td>
                    <td>Zip</td>
                    <td>City</td>
                    <td>Province</td>
                </tr>
                ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 182
            echo "                    <tr>
                        <td>";
            // line 183
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["report"], "date", array()), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ReportExtension')->getAction($this->getAttribute($context["report"], "action", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "company", array()), "cif", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_report", array("id" => $this->getAttribute($context["report"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "company", array()), "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ReportExtension')->getClientType($this->getAttribute($context["report"], "clientType", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "company", array()), "zip", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "company", array()), "city", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "company", array()), "province", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "            </table>
        </div>
    </div>
";
    }

    // line 197
    public function block_javascript($context, array $blocks = array())
    {
        // line 198
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
        // \$('.datepicker').datepicker({
        //     format: 'yyyy-mm-dd',
        //     startDate: '-3d'
        // });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Report:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 200,  401 => 199,  396 => 198,  393 => 197,  386 => 193,  377 => 190,  373 => 189,  369 => 188,  365 => 187,  359 => 186,  355 => 185,  351 => 184,  347 => 183,  344 => 182,  340 => 181,  322 => 166,  317 => 164,  308 => 158,  302 => 155,  294 => 150,  288 => 147,  280 => 142,  274 => 139,  266 => 134,  260 => 131,  252 => 126,  246 => 123,  238 => 118,  232 => 115,  224 => 110,  218 => 107,  212 => 103,  209 => 101,  207 => 100,  205 => 99,  203 => 98,  201 => 97,  199 => 96,  197 => 95,  195 => 94,  193 => 93,  187 => 88,  184 => 87,  177 => 83,  171 => 79,  168 => 77,  166 => 76,  164 => 75,  162 => 74,  160 => 73,  158 => 72,  156 => 71,  154 => 70,  152 => 69,  146 => 64,  143 => 63,  136 => 59,  128 => 54,  122 => 51,  114 => 46,  108 => 43,  100 => 38,  94 => 35,  88 => 32,  82 => 28,  79 => 27,  74 => 24,  69 => 22,  55 => 20,  51 => 17,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Report:index.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Report/index.html.twig");
    }
}
