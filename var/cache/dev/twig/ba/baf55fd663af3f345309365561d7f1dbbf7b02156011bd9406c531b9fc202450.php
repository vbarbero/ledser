<?php

/* AppBundle:Report:index.html.twig */
class __TwigTemplate_f72f02ce81516d4a2490a92c3d8ed2d5577f9fa522b591e4d7e14a72f1bbfa8b extends Twig_Template
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
        $__internal_9e4e4aca43a4850053e11c580ce8edc954f1aee94079d139e9646882e2722f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4e4aca43a4850053e11c580ce8edc954f1aee94079d139e9646882e2722f98->enter($__internal_9e4e4aca43a4850053e11c580ce8edc954f1aee94079d139e9646882e2722f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:index.html.twig"));

        $__internal_b02fbd5254a26813a2590c138f4b73be3da9e42b490046fa1ed7230df33e2f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02fbd5254a26813a2590c138f4b73be3da9e42b490046fa1ed7230df33e2f91->enter($__internal_b02fbd5254a26813a2590c138f4b73be3da9e42b490046fa1ed7230df33e2f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Report:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4e4aca43a4850053e11c580ce8edc954f1aee94079d139e9646882e2722f98->leave($__internal_9e4e4aca43a4850053e11c580ce8edc954f1aee94079d139e9646882e2722f98_prof);

        
        $__internal_b02fbd5254a26813a2590c138f4b73be3da9e42b490046fa1ed7230df33e2f91->leave($__internal_b02fbd5254a26813a2590c138f4b73be3da9e42b490046fa1ed7230df33e2f91_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_c8354a173a31042f5eddc6680ec84c944e3658d6fe4bd6d0cf8af690d7983dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8354a173a31042f5eddc6680ec84c944e3658d6fe4bd6d0cf8af690d7983dab->enter($__internal_c8354a173a31042f5eddc6680ec84c944e3658d6fe4bd6d0cf8af690d7983dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_bd150c4231b18f4fddc2bc90a0e4b3f1ed643b83f1a422f46da8dbc9ed293525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd150c4231b18f4fddc2bc90a0e4b3f1ed643b83f1a422f46da8dbc9ed293525->enter($__internal_bd150c4231b18f4fddc2bc90a0e4b3f1ed643b83f1a422f46da8dbc9ed293525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e17c6ba_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_bootstrap-datetimepicker.min_1.css");
            // line 20
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
        // line 22
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 24
        echo "
";
        
        $__internal_bd150c4231b18f4fddc2bc90a0e4b3f1ed643b83f1a422f46da8dbc9ed293525->leave($__internal_bd150c4231b18f4fddc2bc90a0e4b3f1ed643b83f1a422f46da8dbc9ed293525_prof);

        
        $__internal_c8354a173a31042f5eddc6680ec84c944e3658d6fe4bd6d0cf8af690d7983dab->leave($__internal_c8354a173a31042f5eddc6680ec84c944e3658d6fe4bd6d0cf8af690d7983dab_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2326aafac8570e0fb27c9b7a689363b99f280f0d1ec17c9c508ff17a4f9c1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2326aafac8570e0fb27c9b7a689363b99f280f0d1ec17c9c508ff17a4f9c1b4->enter($__internal_f2326aafac8570e0fb27c9b7a689363b99f280f0d1ec17c9c508ff17a4f9c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ce60f376ae3c66e522bda351dcf01c5c139c75ea56e707baddd9c60fb98f32f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce60f376ae3c66e522bda351dcf01c5c139c75ea56e707baddd9c60fb98f32f0->enter($__internal_ce60f376ae3c66e522bda351dcf01c5c139c75ea56e707baddd9c60fb98f32f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
    <div class=\"row\">
        <div class=\"col-sm-4\" style=\"border: 1px solid\">

    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cif", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cif", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "done", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "done", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clientType", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clientType", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "actionType", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "actionType", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "province", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "province", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? $this->getContext($context, "reports")));
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
        
        $__internal_ce60f376ae3c66e522bda351dcf01c5c139c75ea56e707baddd9c60fb98f32f0->leave($__internal_ce60f376ae3c66e522bda351dcf01c5c139c75ea56e707baddd9c60fb98f32f0_prof);

        
        $__internal_f2326aafac8570e0fb27c9b7a689363b99f280f0d1ec17c9c508ff17a4f9c1b4->leave($__internal_f2326aafac8570e0fb27c9b7a689363b99f280f0d1ec17c9c508ff17a4f9c1b4_prof);

    }

    // line 197
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_45520e26e4288e4c9a0c9e8e405ea94f2ae2644120e1de78255cd161448a72ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45520e26e4288e4c9a0c9e8e405ea94f2ae2644120e1de78255cd161448a72ea->enter($__internal_45520e26e4288e4c9a0c9e8e405ea94f2ae2644120e1de78255cd161448a72ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_52fb9c0e693016400d2eb096d2bb8473e58f4d63f937edad0407edd06b5c2abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fb9c0e693016400d2eb096d2bb8473e58f4d63f937edad0407edd06b5c2abf->enter($__internal_52fb9c0e693016400d2eb096d2bb8473e58f4d63f937edad0407edd06b5c2abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_52fb9c0e693016400d2eb096d2bb8473e58f4d63f937edad0407edd06b5c2abf->leave($__internal_52fb9c0e693016400d2eb096d2bb8473e58f4d63f937edad0407edd06b5c2abf_prof);

        
        $__internal_45520e26e4288e4c9a0c9e8e405ea94f2ae2644120e1de78255cd161448a72ea->leave($__internal_45520e26e4288e4c9a0c9e8e405ea94f2ae2644120e1de78255cd161448a72ea_prof);

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
        return array (  447 => 200,  443 => 199,  438 => 198,  429 => 197,  416 => 193,  407 => 190,  403 => 189,  399 => 188,  395 => 187,  389 => 186,  385 => 185,  381 => 184,  377 => 183,  374 => 182,  370 => 181,  352 => 166,  347 => 164,  338 => 158,  332 => 155,  324 => 150,  318 => 147,  310 => 142,  304 => 139,  296 => 134,  290 => 131,  282 => 126,  276 => 123,  268 => 118,  262 => 115,  254 => 110,  248 => 107,  242 => 103,  239 => 101,  237 => 100,  235 => 99,  233 => 98,  231 => 97,  229 => 96,  227 => 95,  225 => 94,  223 => 93,  217 => 88,  214 => 87,  207 => 83,  201 => 79,  198 => 77,  196 => 76,  194 => 75,  192 => 74,  190 => 73,  188 => 72,  186 => 71,  184 => 70,  182 => 69,  176 => 64,  173 => 63,  166 => 59,  158 => 54,  152 => 51,  144 => 46,  138 => 43,  130 => 38,  124 => 35,  118 => 32,  112 => 28,  103 => 27,  92 => 24,  87 => 22,  73 => 20,  69 => 17,  51 => 3,  42 => 2,  11 => 1,);
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

    <div class=\"row\">
        <div class=\"col-sm-4\" style=\"border: 1px solid\">

    {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.cif) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.cif) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.company) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.company) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.user) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.user) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.dateFrom) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.dateFrom, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
                {#<div class=\"input-group date\" id=\"datetimepicker1\">#}
                    {#{{ form_widget(form.dateFrom, {attr:{readonly: 'readonly'}}) }}#}
                    {#<span class=\"input-group-addon\">#}
                        {#<span class=\"glyphicon glyphicon-calendar\"></span>#}
                    {#</span>#}
                    {#<span class=\"input-group-addon\">#}
                        {#<span class=\"fa fa-calendar\">#}
                        {#</span>#}
                    {#</span>#}

                {#</div>#}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.dateTo) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.dateTo, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
                {#<div class=\"input-group date\" id=\"datetimepicker2\">#}
                    {#{{ form_widget(form.dateTo, {attr:{readonly: 'readonly'}}) }}#}
                    {#<span class=\"input-group-addon\">#}
                        {#<span class=\"glyphicon glyphicon-calendar\"></span>#}
                    {#</span>#}
                    {#<span class=\"input-group-addon\">#}
                        {#<span class=\"fa fa-calendar\">#}
                        {#</span>#}
                    {#</span>#}

                {#</div>#}
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
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.phone) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.phone) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.clientType) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.clientType) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.actionType) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.actionType) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.province) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.province) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.zip) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.zip) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.city) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.city) }}
            </div>
        </div>

        <div class=\"row\">

            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">{{ \"Filter\" | trans }}</button>

            {{ form_end(form) }}
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
                {% for report in reports %}
                    <tr>
                        <td>{{ report.date|date (\"Y-m-d H:i\") }}</td>
                        <td>{{ report.action | report_action }}</td>
                        <td>{{ report.company.cif }}</td>
                        <td><a href=\"{{ url(\"show_report\", {id: report.id}) }}\"> {{ report.company.name }}</a></td>
                        <td>{{ report.clientType | report_client_type }}</td>
                        <td>{{ report.company.zip}}</td>
                        <td>{{ report.company.city}}</td>
                        <td>{{ report.company.province}}</td>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
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
        // \$('.datepicker').datepicker({
        //     format: 'yyyy-mm-dd',
        //     startDate: '-3d'
        // });
    </script>
{% endblock %}
{#{% block javascript %}#}
    {#{{ parent() }}#}
    {#{% javascripts '@AppBundle/Resources/public/js/bootstrap-datetimepicker.min.js' %}#}
        {#<script src=\"{{ asset_url }}\"></script>#}
    {#{% endjavascripts %}#}
    {#<script type=\"text/javascript\">#}
        {#\$(function () {#}
            {#\$('#datetimepicker1').datetimepicker({useCurrent: false, startDate: new Date(\"2018-01-01\"), format: 'yyyy-mm-dd hh:ii',  locale: 'es-ES', daysOfWeekDisabled: [0, 6],#}
                {#disabledDates: [#}
                    {#new Date(2013, 11 - 1, 21),#}
                    {#\"11/22/2013 00:53\"#}
                {#],weekStart: 1, todayHighlight: true});#}
            {#\$('#datetimepicker2').datetimepicker({useCurrent: false, startDate: new Date(\"2018-01-01\"), format: 'yyyy-mm-dd hh:ii',  locale: 'es-ES', daysOfWeekDisabled: [0, 6],#}
                {#disabledDates: [#}
                    {#new Date(2013, 11 - 1, 21),#}
                    {#\"11/22/2013 00:53\"#}
                {#],weekStart: 1, todayHighlight: true});#}
        {#});#}
    {#</script>#}

{#{% endblock %}#}", "AppBundle:Report:index.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Report/index.html.twig");
    }
}
