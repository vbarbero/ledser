<?php

/* @App/Proposal/list.html.twig.save */
class __TwigTemplate_d29328afb2576f3ea9b58a457e8f04c14d004c2a5fc7e7786dfb86f7bea10766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "@App/Proposal/list.html.twig.save", 1);
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
        $__internal_17dd445ff1165d10d6817e0efaa0af9b311151d64635d57a00d14f794be5961d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dd445ff1165d10d6817e0efaa0af9b311151d64635d57a00d14f794be5961d->enter($__internal_17dd445ff1165d10d6817e0efaa0af9b311151d64635d57a00d14f794be5961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Proposal/list.html.twig.save"));

        $__internal_4e7cded955914e803cbcf3e11d948f20537db2018be74e9fed66c2f03d78a411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7cded955914e803cbcf3e11d948f20537db2018be74e9fed66c2f03d78a411->enter($__internal_4e7cded955914e803cbcf3e11d948f20537db2018be74e9fed66c2f03d78a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Proposal/list.html.twig.save"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17dd445ff1165d10d6817e0efaa0af9b311151d64635d57a00d14f794be5961d->leave($__internal_17dd445ff1165d10d6817e0efaa0af9b311151d64635d57a00d14f794be5961d_prof);

        
        $__internal_4e7cded955914e803cbcf3e11d948f20537db2018be74e9fed66c2f03d78a411->leave($__internal_4e7cded955914e803cbcf3e11d948f20537db2018be74e9fed66c2f03d78a411_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_3cabaf01f37394f1d8532fe1d5a3514292e54e384708e3ca1712b2b671bfeee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cabaf01f37394f1d8532fe1d5a3514292e54e384708e3ca1712b2b671bfeee1->enter($__internal_3cabaf01f37394f1d8532fe1d5a3514292e54e384708e3ca1712b2b671bfeee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_cdbfc2a814acde25b3fa809750ea2eeaa84fd0b1f6b3d82709bf17846072daac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbfc2a814acde25b3fa809750ea2eeaa84fd0b1f6b3d82709bf17846072daac->enter($__internal_cdbfc2a814acde25b3fa809750ea2eeaa84fd0b1f6b3d82709bf17846072daac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_bootstrap-datetimepicker.min_1.css");
            // line 21
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "e17c6ba"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
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
        
        $__internal_cdbfc2a814acde25b3fa809750ea2eeaa84fd0b1f6b3d82709bf17846072daac->leave($__internal_cdbfc2a814acde25b3fa809750ea2eeaa84fd0b1f6b3d82709bf17846072daac_prof);

        
        $__internal_3cabaf01f37394f1d8532fe1d5a3514292e54e384708e3ca1712b2b671bfeee1->leave($__internal_3cabaf01f37394f1d8532fe1d5a3514292e54e384708e3ca1712b2b671bfeee1_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_022ac645937a2aab30dc82fd3f007f7e5a01aec9c8d534c0993777e9dc6a5bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022ac645937a2aab30dc82fd3f007f7e5a01aec9c8d534c0993777e9dc6a5bcf->enter($__internal_022ac645937a2aab30dc82fd3f007f7e5a01aec9c8d534c0993777e9dc6a5bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93e756114b516b57f66afb2c646f34a1548a144a17f86ca6022492cdff080a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e756114b516b57f66afb2c646f34a1548a144a17f86ca6022492cdff080a2b->enter($__internal_93e756114b516b57f66afb2c646f34a1548a144a17f86ca6022492cdff080a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "

<td class=\"row\">
    <div class=\"col-sm-4\" style=\"border: 1px solid\">

        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "to", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "to", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "operationalType", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "operationalType", array()), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <table class=\"table bg-dark text-light\">
        ";
        // line 95
        echo "        <tr>
        <td>Proposal From</td>
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
        $context['_seq'] = twig_ensure_traversable(($context["proposals"] ?? $this->getContext($context, "proposals")));
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
                echo "\t\t\t<span style=\"display: block\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calculator"], "formalizacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t\t</td>
            <td><a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_proposal", array("id" => $this->getAttribute($context["proposal"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proposal"], "company", array()), "name", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["proposal"], "drawee", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ProposalExtension')->getStatus($this->getAttribute($context["proposal"], "state", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["proposal"], "rating", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ProposalExtension')->getType($this->getAttribute($context["proposal"], "type", array())), "html", null, true);
            echo "</td>
            ";
            // line 124
            echo "            ";
            // line 125
            echo "
            ";
            // line 126
            $context["num"] = 0;
            // line 127
            echo "            ";
            $context["nominal"] = 0;
            // line 128
            echo "            ";
            $context["num"] = 0;
            // line 129
            echo "            ";
            $context["num"] = 0;
            // line 130
            echo "            ";
            $context["num"] = 0;
            // line 131
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["proposal"], "calculator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["calculator"]) {
                // line 132
                echo "                ";
                $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
                // line 133
                echo "                ";
                $context["dias"] = $this->getAttribute($context["calculator"], "datediff", array());
                // line 134
                echo "                ";
                $context["taeCF"] = $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "tae", array());
                // line 135
                echo "                ";
                $context["taeCL"] = $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "tae", array());
                // line 136
                echo "                ";
                $context["taeT"] = $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "tae", array());
                // line 137
                echo "                ";
                $context["nominal"] = $this->getAttribute($context["calculator"], "nominal", array());
                // line 138
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "            <td>";
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, (($context["nominal"] ?? $this->getContext($context, "nominal")) / ($context["num"] ?? $this->getContext($context, "num"))), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 140
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, (($context["dias"] ?? $this->getContext($context, "dias")) / ($context["num"] ?? $this->getContext($context, "num"))), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 141
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, (($context["taeCF"] ?? $this->getContext($context, "taeCF")) / ($context["num"] ?? $this->getContext($context, "num"))), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 142
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, (($context["taeCL"] ?? $this->getContext($context, "taeCL")) / ($context["num"] ?? $this->getContext($context, "num"))), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 143
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, (($context["taeT"] ?? $this->getContext($context, "taeT")) / ($context["num"] ?? $this->getContext($context, "num"))), "html", null, true);
            }
            echo "</td>
            <td>
                <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("create_calculator", array("proposal" => $this->getAttribute($context["proposal"], "id", array()))), "html", null, true);
            echo "\">Añadir calculadora</a>
                <a href=\"{ url('edit_proposal' , {proposal:proposal.id}) }}\">Edit</a>
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
        // line 150
        echo "
    </table>
";
        
        $__internal_93e756114b516b57f66afb2c646f34a1548a144a17f86ca6022492cdff080a2b->leave($__internal_93e756114b516b57f66afb2c646f34a1548a144a17f86ca6022492cdff080a2b_prof);

        
        $__internal_022ac645937a2aab30dc82fd3f007f7e5a01aec9c8d534c0993777e9dc6a5bcf->leave($__internal_022ac645937a2aab30dc82fd3f007f7e5a01aec9c8d534c0993777e9dc6a5bcf_prof);

    }

    // line 154
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_35d1a2a90191d1edf2099faba7e8db711425d520b83028499da21f4a08019124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d1a2a90191d1edf2099faba7e8db711425d520b83028499da21f4a08019124->enter($__internal_35d1a2a90191d1edf2099faba7e8db711425d520b83028499da21f4a08019124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1d47e62fc28cc53a18b09ec5f6c7209c23a13ba138b016fed08b58a3f805f338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d47e62fc28cc53a18b09ec5f6c7209c23a13ba138b016fed08b58a3f805f338->enter($__internal_1d47e62fc28cc53a18b09ec5f6c7209c23a13ba138b016fed08b58a3f805f338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 155
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
    </script>
";
        
        $__internal_1d47e62fc28cc53a18b09ec5f6c7209c23a13ba138b016fed08b58a3f805f338->leave($__internal_1d47e62fc28cc53a18b09ec5f6c7209c23a13ba138b016fed08b58a3f805f338_prof);

        
        $__internal_35d1a2a90191d1edf2099faba7e8db711425d520b83028499da21f4a08019124->leave($__internal_35d1a2a90191d1edf2099faba7e8db711425d520b83028499da21f4a08019124_prof);

    }

    public function getTemplateName()
    {
        return "@App/Proposal/list.html.twig.save";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 157,  439 => 156,  434 => 155,  425 => 154,  413 => 150,  394 => 145,  385 => 143,  377 => 142,  369 => 141,  361 => 140,  352 => 139,  346 => 138,  343 => 137,  340 => 136,  337 => 135,  334 => 134,  331 => 133,  328 => 132,  323 => 131,  320 => 130,  317 => 129,  314 => 128,  311 => 127,  309 => 126,  306 => 125,  304 => 124,  300 => 122,  296 => 121,  292 => 120,  288 => 119,  282 => 118,  279 => 117,  270 => 115,  266 => 114,  258 => 112,  241 => 111,  236 => 108,  222 => 95,  215 => 90,  210 => 88,  201 => 82,  195 => 79,  191 => 77,  189 => 76,  187 => 75,  185 => 74,  183 => 73,  181 => 72,  179 => 71,  177 => 70,  169 => 63,  166 => 62,  159 => 58,  149 => 50,  146 => 49,  139 => 45,  131 => 40,  125 => 37,  119 => 34,  112 => 29,  103 => 28,  92 => 25,  87 => 23,  73 => 21,  69 => 18,  51 => 4,  42 => 3,  11 => 1,);
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
    {% stylesheets
        'css/bootstrap-datetimepicker.min.css'
        filter='cssrewrite' output='css/compiled/app.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('../css/bootstrap-datetimepicker.min.css') }}\" />
    {#<link rel=\"stylesheet\" href=\"css/bootstrap-datetimepicker.min.css\" />#}

{% endblock %}

{% block content %}


<td class=\"row\">
    <div class=\"col-sm-4\" style=\"border: 1px solid\">

        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.status) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.status) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.from) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.from, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.to) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.to, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        {#<div class=\"row\">#}
            {#<div class=\"col-lg-4\">#}
                {#{{ form_label(form.type) }}#}
            {#</div>#}
            {#<div class=\"col-lg-4\">#}
                {#{{ form_widget(form.type) }}#}
            {#</div>#}
        {#</div>#}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.operationalType) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.operationalType) }}
            </div>
        </div>

        <div class=\"row\">

            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">{{ \"Filter\" | trans }}</button>

            {{ form_end(form) }}
        </div>
    </div>
    <table class=\"table bg-dark text-light\">
        {#<div class=\"w-100\"></div>#}
        <tr>
        <td>Proposal From</td>
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
        {#<div class=\"col\">Tipo operacion</div>#}
        <td>Acción</td>
        </tr>

    {% for proposal in proposals %}
        <tr class=\" {% if loop.index is odd %}bg-secondary{% endif %}\">
            <td>
\t\t{% for calculator in proposal.calculator %}
\t\t\t<span style=\"display: block\">{{ calculator.formalizacion | date(\"Y-m-d\") }}</span>
\t\t{%endfor %}
\t\t</td>
            <td><a href=\"{{ url('show_proposal', {id: proposal.id}) }}\"> {{ proposal.company.name }}</a></td>
            <td>{{ proposal.drawee }}</td>
            <td>{{ proposal.state | proposal_status }}</td>
            <td>{{ proposal.rating }}</td>
            <td>{{ proposal.type | proposal_type }}</td>
            {#<td class=\"col\">{{ proposal.calculator }}</td>#}
            {#<td>{{ proposal.type | proposal_type }}</td>#}

            {% set num = 0 %}
            {% set nominal = 0 %}
            {% set num = 0 %}
            {% set num = 0 %}
            {% set num = 0 %}
            {% for calculator in proposal.calculator %}
                {% set num = num + 1 %}
                {% set dias = calculator.datediff %}
                {% set taeCF = calculator.costeFinanciero.tae %}
                {% set taeCL = calculator.costeFinancieroLedser.tae %}
                {% set taeT = calculator.costeTotal.tae %}
                {% set nominal = calculator.nominal %}
            {% endfor %}
            <td>{% if num == 0 %}0{% else %}{{ nominal / num }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ dias/num }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ taeCF/num }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ taeCL/num }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ taeT/num }}{% endif %}</td>
            <td>
                <a href=\"{{ url('create_calculator', {proposal:proposal.id}) }}\">Añadir calculadora</a>
                <a href=\"{ url('edit_proposal' , {proposal:proposal.id}) }}\">Edit</a>
            </td>
        </tr>
    {% endfor %}

    </table>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datepicker.es.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
    </script>
{% endblock %}
", "@App/Proposal/list.html.twig.save", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/list.html.twig.save");
    }
}
