<?php

/* AppBundle:Proposal:list.html.twig */
class __TwigTemplate_576b8db9b3980aca712a6e2a0e7a8e6b8f3dc4561da29c7803466889e8286df9 extends Twig_Template
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
        $__internal_5497c6019be8e0c8326cb7668bccadd2400cb580ed037cf5ab49659b6d8d968a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5497c6019be8e0c8326cb7668bccadd2400cb580ed037cf5ab49659b6d8d968a->enter($__internal_5497c6019be8e0c8326cb7668bccadd2400cb580ed037cf5ab49659b6d8d968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:list.html.twig"));

        $__internal_5d9438714d6b07588e195ac4a725d8db7f1e68ddf6cb5771e930bdc9b9c11214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9438714d6b07588e195ac4a725d8db7f1e68ddf6cb5771e930bdc9b9c11214->enter($__internal_5d9438714d6b07588e195ac4a725d8db7f1e68ddf6cb5771e930bdc9b9c11214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5497c6019be8e0c8326cb7668bccadd2400cb580ed037cf5ab49659b6d8d968a->leave($__internal_5497c6019be8e0c8326cb7668bccadd2400cb580ed037cf5ab49659b6d8d968a_prof);

        
        $__internal_5d9438714d6b07588e195ac4a725d8db7f1e68ddf6cb5771e930bdc9b9c11214->leave($__internal_5d9438714d6b07588e195ac4a725d8db7f1e68ddf6cb5771e930bdc9b9c11214_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_cb372f188e303683fa606a6e9ed8b96ba442a9bce5c2dab93a13d56c7519efe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb372f188e303683fa606a6e9ed8b96ba442a9bce5c2dab93a13d56c7519efe3->enter($__internal_cb372f188e303683fa606a6e9ed8b96ba442a9bce5c2dab93a13d56c7519efe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_b97cc8fa86c570a179f51a3191fca2745994968f0dd343f7a293461cd53cd3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97cc8fa86c570a179f51a3191fca2745994968f0dd343f7a293461cd53cd3a2->enter($__internal_b97cc8fa86c570a179f51a3191fca2745994968f0dd343f7a293461cd53cd3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_b97cc8fa86c570a179f51a3191fca2745994968f0dd343f7a293461cd53cd3a2->leave($__internal_b97cc8fa86c570a179f51a3191fca2745994968f0dd343f7a293461cd53cd3a2_prof);

        
        $__internal_cb372f188e303683fa606a6e9ed8b96ba442a9bce5c2dab93a13d56c7519efe3->leave($__internal_cb372f188e303683fa606a6e9ed8b96ba442a9bce5c2dab93a13d56c7519efe3_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff97ee0eb3138d22d0df8be849914ddb9f1cca1c13ae002fe5ced76e59513cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff97ee0eb3138d22d0df8be849914ddb9f1cca1c13ae002fe5ced76e59513cb6->enter($__internal_ff97ee0eb3138d22d0df8be849914ddb9f1cca1c13ae002fe5ced76e59513cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f83f57230b7be91fee6a02ebb8111b6304382ccf0b443981b3a2a97c350789a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83f57230b7be91fee6a02ebb8111b6304382ccf0b443981b3a2a97c350789a2->enter($__internal_f83f57230b7be91fee6a02ebb8111b6304382ccf0b443981b3a2a97c350789a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
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
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["nominal"] ?? $this->getContext($context, "nominal")) / ($context["num"] ?? $this->getContext($context, "num"))), 2), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 143
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["dias"] ?? $this->getContext($context, "dias")) / ($context["num"] ?? $this->getContext($context, "num"))), 0), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 144
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["taeCF"] ?? $this->getContext($context, "taeCF")) / ($context["num"] ?? $this->getContext($context, "num"))), 2), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 145
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["taeCL"] ?? $this->getContext($context, "taeCL")) / ($context["num"] ?? $this->getContext($context, "num"))), 2), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 146
            if ((($context["num"] ?? $this->getContext($context, "num")) == 0)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["taeT"] ?? $this->getContext($context, "taeT")) / ($context["num"] ?? $this->getContext($context, "num"))), 2), "html", null, true);
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
        
        $__internal_f83f57230b7be91fee6a02ebb8111b6304382ccf0b443981b3a2a97c350789a2->leave($__internal_f83f57230b7be91fee6a02ebb8111b6304382ccf0b443981b3a2a97c350789a2_prof);

        
        $__internal_ff97ee0eb3138d22d0df8be849914ddb9f1cca1c13ae002fe5ced76e59513cb6->leave($__internal_ff97ee0eb3138d22d0df8be849914ddb9f1cca1c13ae002fe5ced76e59513cb6_prof);

    }

    // line 158
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_626f6c26e96d25d1ee53530ec11b5260cce7c9c3e6d631a716c3d767b7046f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626f6c26e96d25d1ee53530ec11b5260cce7c9c3e6d631a716c3d767b7046f3d->enter($__internal_626f6c26e96d25d1ee53530ec11b5260cce7c9c3e6d631a716c3d767b7046f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_0098de897c07b3d269c79a297fde70cd52fb9910f71982110f5fe9f771c230b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0098de897c07b3d269c79a297fde70cd52fb9910f71982110f5fe9f771c230b6->enter($__internal_0098de897c07b3d269c79a297fde70cd52fb9910f71982110f5fe9f771c230b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_0098de897c07b3d269c79a297fde70cd52fb9910f71982110f5fe9f771c230b6->leave($__internal_0098de897c07b3d269c79a297fde70cd52fb9910f71982110f5fe9f771c230b6_prof);

        
        $__internal_626f6c26e96d25d1ee53530ec11b5260cce7c9c3e6d631a716c3d767b7046f3d->leave($__internal_626f6c26e96d25d1ee53530ec11b5260cce7c9c3e6d631a716c3d767b7046f3d_prof);

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
        return array (  462 => 161,  458 => 160,  453 => 159,  444 => 158,  432 => 154,  414 => 150,  410 => 149,  406 => 148,  397 => 146,  389 => 145,  381 => 144,  373 => 143,  364 => 142,  358 => 141,  355 => 140,  352 => 139,  349 => 138,  346 => 137,  343 => 136,  340 => 135,  335 => 134,  332 => 133,  329 => 132,  326 => 131,  323 => 130,  320 => 129,  318 => 128,  315 => 127,  313 => 126,  309 => 124,  305 => 123,  297 => 122,  293 => 121,  286 => 120,  277 => 117,  273 => 116,  270 => 115,  266 => 114,  258 => 112,  241 => 111,  236 => 108,  222 => 95,  215 => 90,  210 => 88,  201 => 82,  195 => 79,  191 => 77,  189 => 76,  187 => 75,  185 => 74,  183 => 73,  181 => 72,  179 => 71,  177 => 70,  169 => 63,  166 => 62,  159 => 58,  149 => 50,  146 => 49,  139 => 45,  131 => 40,  125 => 37,  119 => 34,  112 => 29,  103 => 28,  92 => 25,  87 => 23,  73 => 21,  69 => 18,  51 => 4,  42 => 3,  11 => 1,);
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
        {#<div class=\"col\">Tipo operacion</div>#}
        <td>Acción</td>
        </tr>

    {% for proposal in proposals %}
        <tr class=\" {% if loop.index is odd %}bg-secondary{% endif %}\">
            <td>
\t\t{% for calculator in proposal.calculator %}
\t\t<div style=\"display: block\">
\t\t\t<span style=\"display: block\">{{ calculator.formalizacion | date(\"Y-m-d\") }}</span> / 
\t\t\t<span style=\"display: block\">{{ calculator.vencimiento   | date(\"Y-m-d\") }}</span>
\t\t</div>
\t\t{%endfor %}
            <td><a href=\"{{ url('show_proposal', {id: proposal.id}) }}\"> {{ proposal.company.name }}</a></td>
            <td>{{ proposal.drawee }}</td>
            <td>{{ proposal.state | proposal_status }}{%if (proposal.state == 5)%} {{proposal.reason}}{%endif%}</td>
            <td>{{ proposal.rating }}</td>
            <td>{{ proposal.operationalType  }}</td>
            {#<td class=\"col\">{{ proposal.calculator }}</td>#}
            {#<td>{{ proposal.type | proposal_type }}</td>#}

            {% set num = 0 %}
            {% set nominal = 0 %}
            {% set dias = 0 %}
            {% set taeCF = 0 %}
            {% set taeCL = 0 %}
\t    {% set taeT = 0 %}
            {% for calculator in proposal.calculator %}
                {% set num = num + 1 %}
                {% set dias = calculator.dias %}
                {% set taeCF = calculator.costeFinanciero.tae %}
                {% set taeCL = calculator.costeFinancieroLedser.tae %}
                {% set taeT = calculator.costeTotal.tae %}
                {% set nominal = calculator.nominal %}
            {% endfor %}
            <td>{% if num == 0 %}0{% else %}{{ (nominal / num)|number_format(2) }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ (dias/num)|number_format(0) }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ (taeCF/num)|number_format(2) }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ (taeCL/num)|number_format(2) }}{% endif %}</td>
            <td>{% if num == 0 %}0{% else %}{{ (taeT/num)|number_format(2) }}{% endif %}</td>
            <td>
                <a href=\"{{ url('create_calculator', {proposal:proposal.id}) }}\">Añadir calculadora</a>
                <a href=\"{{ url('edit_proposal' , {proposal:proposal.id}) }}\">Edit</a>
\t\t<a class=\"delete\" data-href=\"{{ url('delete_proposal' , {proposal:proposal.id}) }}\">Delete</a>
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
{% endblock %}
", "AppBundle:Proposal:list.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/list.html.twig");
    }
}
