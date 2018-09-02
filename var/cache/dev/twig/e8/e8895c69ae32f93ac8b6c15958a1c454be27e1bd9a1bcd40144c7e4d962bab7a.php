<?php

/* AppBundle:Proposal:createCalculator.html.twig */
class __TwigTemplate_6093e311db443392d90170fa66a75efe19900f3e2503af91257f97a862fb52b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Proposal:createCalculator.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6c006fd080d5a1fa30bac2c9543d6805d94ad4904f8d855c98d8fd2fecbe1807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c006fd080d5a1fa30bac2c9543d6805d94ad4904f8d855c98d8fd2fecbe1807->enter($__internal_6c006fd080d5a1fa30bac2c9543d6805d94ad4904f8d855c98d8fd2fecbe1807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:createCalculator.html.twig"));

        $__internal_91cf933c34855430c0ea9cf5aa063814860b69333dea46a1d01170a8c77ba350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cf933c34855430c0ea9cf5aa063814860b69333dea46a1d01170a8c77ba350->enter($__internal_91cf933c34855430c0ea9cf5aa063814860b69333dea46a1d01170a8c77ba350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:createCalculator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c006fd080d5a1fa30bac2c9543d6805d94ad4904f8d855c98d8fd2fecbe1807->leave($__internal_6c006fd080d5a1fa30bac2c9543d6805d94ad4904f8d855c98d8fd2fecbe1807_prof);

        
        $__internal_91cf933c34855430c0ea9cf5aa063814860b69333dea46a1d01170a8c77ba350->leave($__internal_91cf933c34855430c0ea9cf5aa063814860b69333dea46a1d01170a8c77ba350_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf336a9574c20d51661057619e8440fd54dff28b1b9f58d1f492498e32e0bc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf336a9574c20d51661057619e8440fd54dff28b1b9f58d1f492498e32e0bc3b->enter($__internal_bf336a9574c20d51661057619e8440fd54dff28b1b9f58d1f492498e32e0bc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e0bb546b12737cf364fefc85116980366610e9ed5571ce4e5086409077bbe230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bb546b12737cf364fefc85116980366610e9ed5571ce4e5086409077bbe230->enter($__internal_e0bb546b12737cf364fefc85116980366610e9ed5571ce4e5086409077bbe230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Calculator</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formalizacion", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formalizacion", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 19
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vencimiento", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vencimiento", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
        echo " ";
        // line 32
        echo "                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dias", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dias", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nominal", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nominal", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row second\">
            <table>
                <tr>
                    <td>Honorarios</td>
                    <td>Timbres";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "existeTimbre", array()), 'widget');
        echo "</td>
                    <td>OMF</td>
                    <td>Mensajeria</td>
                    <td>Burofax</td>
                    <td>Otros gastos</td>
                </tr>
                <tr>
                    <td>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "honorarios", array()), 'widget');
        echo "</td>
                    <td>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "timbres", array()), 'widget');
        echo "</td>
                    <td>";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "omf", array()), 'widget');
        echo "</td>
                    <td>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mensajeria", array()), 'widget');
        echo "</td>
                    <td>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "burofax", array()), 'widget');
        echo "</td>
                    <td>";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gastos", array()), 'widget');
        echo "</td>
                </tr>
            </table>

            <div class=\"row third\">
                <div class=\"col-lg-4\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "introduce", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "introduce", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"fourth\">
                <table>
                    <tr>
                        <td></td>
                        <td>Coste Financiero</td>
                        <td>Coste Financiero + Ledser</td>
                        <td>Coste Total</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "total", array()), 'widget');
        echo "</td>
                        <td>";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "total", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "total", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tae</td>
                        <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "tae", array()), 'widget');
        echo "</td>
                        <td>";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "tae", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "tae", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Mensual</td>
                        <td>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "mensual", array()), 'widget');
        echo "</td>
                        <td>";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "mensual", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "mensual", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Retención</td>
                        <td>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "retencion", array()), 'widget');
        echo "</td>
                        <td>";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "retencion", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "retencion", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "nominal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "nominal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "nominal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Coste</td>
                        <td>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "coste", array()), 'widget');
        echo "</td>
                        <td>";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "coste", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "coste", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Liquido</td>
                        <td>";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "liquido", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "liquido", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "liquido", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Retencion Total</td>
                        <td>";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinanciero", array()), "retencionTotal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeFinancieroLedser", array()), "retencionTotal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "costeTotal", array()), "retencionTotal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                </table>
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
        echo "
                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
        echo "
                ";
        // line 142
        echo "                ";
        // line 143
        echo "
            </div>

        </div>

        <div style=\"display: none;\"> ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proposal", array()), 'widget');
        echo "</div>

        ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_e0bb546b12737cf364fefc85116980366610e9ed5571ce4e5086409077bbe230->leave($__internal_e0bb546b12737cf364fefc85116980366610e9ed5571ce4e5086409077bbe230_prof);

        
        $__internal_bf336a9574c20d51661057619e8440fd54dff28b1b9f58d1f492498e32e0bc3b->leave($__internal_bf336a9574c20d51661057619e8440fd54dff28b1b9f58d1f492498e32e0bc3b_prof);

    }

    // line 154
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8027161fd9dc0dafc57b4c8ea2ff014c3ba7a5804872401fbedc3bd6e389456d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8027161fd9dc0dafc57b4c8ea2ff014c3ba7a5804872401fbedc3bd6e389456d->enter($__internal_8027161fd9dc0dafc57b4c8ea2ff014c3ba7a5804872401fbedc3bd6e389456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_fac56421238dc218459631e076ea7d84e1d4c8cdfe6b90350e916ced89c549b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac56421238dc218459631e076ea7d84e1d4c8cdfe6b90350e916ced89c549b6->enter($__internal_fac56421238dc218459631e076ea7d84e1d4c8cdfe6b90350e916ced89c549b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
            format: 'yyyy-MM-dd',
            startDate: '-3d'
        });
    </script>
    <script type=\"text/javascript\">
        \$(\".second\").hide();
        // \$(\".third\").hide();
        // \$(\".fourth\").hide();
        var introduces = {'tae':'tae','mensual' : 'mensual','total': 'total', 'coste' : 'coste'};
        for (introduce in introduces) {
            \$(\"#calculator_costeFinanciero_\" + introduce).prop('readonly', true);
        }
        \$(function () {
            // var formalizacion = false;
            // var vencimiento = false;
            var nominal = false;
            \$(\"#calculator_formalizacion\").on('change', function() {
                // formalizacion = true;
                // if(formalizacion && vencimiento)
                // {
                calculaDias(nominal);
                // }
            });
            \$(\"#calculator_vencimiento\").on('change', function() {
                // vencimiento = true;
                // if(formalizacion && vencimiento)
                // {
                calculaDias(nominal);
                // }
            });

            \$(\"#calculator_nominal\").on('change', function() {
                nominal = true;
                // if(formalizacion && vencimiento)
                // {
                \$(\".second\").show();
                // }
            });

            \$(\"#calculator_honorarios\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_timbres\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_omf\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_mensajeria\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_burofax\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_gastos\").on('change', function() {
                calculaResultados();
            });


            \$(\"#calculator_existeTimbre\").on('click', function() {

                if(\$(this).is(':checked'))
                {
                    if(\$(\"#calculator_nominal\").val() < 24.05) {
                        stamp = 0.06;
                    }else if(\$(\"#calculator_nominal\").val() < 48.09) {
                        stamp = 0.12;
                    }else if(\$(\"#calculator_nominal\").val() < 90.16) {
                        stamp = 0.24;
                    }else if(\$(\"#calculator_nominal\").val() < 180.31) {
                        stamp = 0.48;
                    }else if(\$(\"#calculator_nominal\").val() < 360.62) {
                        stamp = 0.96;
                    }else if(\$(\"#calculator_nominal\").val() < 751.27) {
                        stamp = 1.98;
                    }else if(\$(\"#calculator_nominal\").val() < 1502.54) {
                        stamp = 4.21;
                    }else if(\$(\"#calculator_nominal\").val() < 3005.07) {
                        stamp = 8.41;
                    }else if(\$(\"#calculator_nominal\").val() < 6010.13) {
                        stamp = 16.83;
                    }else if(\$(\"#calculator_nominal\").val() < 12020.25) {
                        stamp = 33.66;
                    }else if(\$(\"#calculator_nominal\").val() < 24040.49) {
                        stamp = 67.31;
                    }else if(\$(\"#calculator_nominal\").val() < 48080.98) {
                        stamp = 134.63;
                    }else if(\$(\"#calculator_nominal\").val() < 96161.95 ) {
                        stamp = 269.25;
                    }else if(\$(\"#calculator_nominal\").val() < 192323.87 ) {
                        stamp = 538.51;
                    }
                    \$(\"#calculator_timbres\").val(stamp);
                } else
                {
                    \$(\"#calculator_timbres\").val(0);
                }
                calculaResultados();

            });


            \$(\"#calculator_introduce\").on('change', function() {
                \$(\".fourth\").show();
                var introduces = {'tae':'tae','mensual' : 'mensual','total': 'total','coste': 'coste'};
                for (introduce in introduces) {
                    if(introduce == \$(this).val()){
                        \$(\"#calculator_costeFinanciero_\" + introduce).prop('readonly', false);
                    }
                }
            });

            var porcentaje = false;
            var retencion = false;

            \$(\"#calculator_costeFinanciero_total\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_tae\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_mensual\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_coste\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_retencion\").on('change', function() {
                calculaResultados();
            });
        });
        function calculaDias(nominal) {
            var start = \$(\"#calculator_formalizacion\").val();
            var startD = new Date(start);
            var end = \$(\"#calculator_vencimiento\").val();
            var endD = new Date(end);
            var diff = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
            \$(\"#calculator_dias\").val(diff);
            if(nominal)
            {
                \$(\".second\").show();
            }
        }

        function checkThird() {
            if(
                \$(\"#calculator_honorarios\").val() != \"\" &&
                \$(\"#calculator_timbres\").val() != \"\" &&
                \$(\"#calculator_omf\").val() != \"\" &&
                \$(\"#calculator_mensajeria\").val() != \"\" &&
                \$(\"#calculator_burofax\").val() != \"\" &&
                \$(\"#calculator_gastos\").val() != \"\"
            ){
                \$(\".third\").show();
                return true;
            }
            return false;

        }
        function rellenoTae()
        {
            if (\$(\"#calculator_costeFinanciero_total\").val() != \"\" || \$(\"#calculator_costeFinanciero_mensual\").val() != \"\" || \$(\"#calculator_costeFinanciero_tae\").val() != \"\" || \$(\"#calculator_costeFinanciero_coste\").val() != \"\")
            {
                return true;
            }
            return false;
        }

        function calculaResultados()
        {
            if(checkThird() && rellenoTae() && \$(\"#calculator_costeFinanciero_retencion\").val() != '') {

                var nominal = \$(\"#calculator_nominal\").val();
                var retencion = \$(\"#calculator_costeFinanciero_retencion\").val();
                \$(\"#calculator_costeFinanciero_nominal\").val(nominal - (nominal * retencion));
                var tae, total, mensual, coste = 0.0;
                if ('total' == \$(\"#calculator_introduce\").val()) {
                    total = \$(\"#calculator_costeFinanciero_total\").val();
                    tae = total / \$(\"#calculator_dias\").val() * 360;
                    mensual = total / \$(\"#calculator_dias\").val() * 30;
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }
                else if ('tae' == \$(\"#calculator_introduce\").val()) {
                    tae = \$(\"#calculator_costeFinanciero_tae\").val();
                    total = tae / 360 * \$(\"#calculator_dias\").val();
                    mensual = total / \$(\"#calculator_dias\").val() / 30;
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }
                else if ('mensual' == \$(\"#calculator_introduce\").val()) {
                    mensual = \$(\"#calculator_costeFinanciero_mensual\").val();
                    total = mensual * 12;
                    tae = mensual * (\$(\"#calculator_dias\").val() / 30);
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }
                else if ('coste' == \$(\"#calculator_introduce\").val()) {
                    coste = \$(\"#calculator_costeFinanciero_coste\").val();
                    total = coste / nominal;
                    tae = total / \$(\"#calculator_dias\").val() * 360;
                    mensual = total / \$(\"#calculator_dias\").val() * 30;
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }

                \$(\"#calculator_costeFinanciero_total\").val(parseFloat(total).toFixed(2));
                \$(\"#calculator_costeFinanciero_mensual\").val(parseFloat(mensual).toFixed(2));
                \$(\"#calculator_costeFinanciero_tae\").val(parseFloat(tae).toFixed(2));
                \$(\"#calculator_costeFinanciero_coste\").val(parseFloat(coste).toFixed(2));



                \$(\"#calculator_costeFinanciero_liquido\").val(\$(\"#calculator_costeFinanciero_nominal\").val() - \$(\"#calculator_costeFinanciero_coste\").val());
                \$(\"#calculator_costeFinanciero_retencionTotal\").val(nominal * retencion / 100);

                \$(\"#calculator_costeFinancieroLedser_total\").val(parseFloat((parseFloat(\$(\"#calculator_costeFinanciero_coste\").val()) + parseFloat(\$(\"#calculator_honorarios\").val())) / \$(\"#calculator_costeFinanciero_nominal\").val() * 100));
                \$(\"#calculator_costeFinancieroLedser_tae\").val(parseFloat(\$(\"#calculator_costeFinancieroLedser_total\").val() / \$(\"#calculator_dias\").val() * 360));
                \$(\"#calculator_costeFinancieroLedser_mensual\").val(parseFloat(\$(\"#calculator_costeFinancieroLedser_tae\").val() / 12));
                \$(\"#calculator_costeFinancieroLedser_retencion\").val(retencion);
                \$(\"#calculator_costeTotal_retencion\").val(retencion);
                \$(\"#calculator_costeFinancieroLedser_nominal\").val(\$(\"#calculator_costeFinanciero_nominal\").val());
                \$(\"#calculator_costeTotal_nominal\").val(\$(\"#calculator_costeFinanciero_nominal\").val());

                \$(\"#calculator_costeFinancieroLedser_coste\").val(parseFloat(\$(\"#calculator_costeFinanciero_coste\").val()) + parseFloat(\$(\"#calculator_honorarios\").val()));
                \$(\"#calculator_costeTotal_coste\").val(parseFloat(\$(\"#calculator_costeFinancieroLedser_coste\").val()) + parseFloat(\$(\"#calculator_timbres\").val()) +
                    parseFloat(\$(\"#calculator_omf\").val()) + parseFloat(\$(\"#calculator_mensajeria\").val()) + parseFloat(\$(\"#calculator_burofax\").val()) + parseFloat(\$(\"#calculator_gastos\").val()));
                \$(\"#calculator_costeFinancieroLedser_liquido\").val(\$(\"#calculator_costeFinancieroLedser_nominal\").val() - \$(\"#calculator_costeFinancieroLedser_coste\").val());
                \$(\"#calculator_costeTotal_liquido\").val(\$(\"#calculator_costeTotal_nominal\").val() - \$(\"#calculator_costeTotal_coste\").val());
                \$(\"#calculator_costeFinancieroLedser_retencionTotal\").val(nominal * retencion);
                \$(\"#calculator_costeTotal_retencionTotal\").val(nominal * retencion);

                \$(\"#calculator_costeTotal_total\").val(parseFloat((parseFloat(\$(\"#calculator_costeFinanciero_coste\").val()) + parseFloat(\$(\"#calculator_honorarios\").val()) + parseFloat(\$(\"#calculator_timbres\").val()) +
                    parseFloat(\$(\"#calculator_omf\").val()) + parseFloat(\$(\"#calculator_mensajeria\").val()) + parseFloat(\$(\"#calculator_burofax\").val()) + parseFloat(\$(\"#calculator_gastos\").val())) / \$(\"#calculator_costeFinanciero_nominal\").val() * 100));

                \$(\"#calculator_costeTotal_tae\").val(parseFloat(\$(\"#calculator_costeTotal_total\").val() / \$(\"#calculator_dias\").val() * 360));
                \$(\"#calculator_costeTotal_mensual\").val(parseFloat(\$(\"#calculator_costeTotal_tae\").val() / 12));
            }
        }
    </script>
";
        
        $__internal_fac56421238dc218459631e076ea7d84e1d4c8cdfe6b90350e916ced89c549b6->leave($__internal_fac56421238dc218459631e076ea7d84e1d4c8cdfe6b90350e916ced89c549b6_prof);

        
        $__internal_8027161fd9dc0dafc57b4c8ea2ff014c3ba7a5804872401fbedc3bd6e389456d->leave($__internal_8027161fd9dc0dafc57b4c8ea2ff014c3ba7a5804872401fbedc3bd6e389456d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Proposal:createCalculator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 157,  369 => 156,  364 => 155,  355 => 154,  341 => 150,  336 => 148,  329 => 143,  327 => 142,  323 => 140,  319 => 139,  313 => 136,  309 => 135,  305 => 134,  298 => 130,  294 => 129,  290 => 128,  283 => 124,  279 => 123,  275 => 122,  268 => 118,  264 => 117,  260 => 116,  253 => 112,  249 => 111,  245 => 110,  238 => 106,  234 => 105,  230 => 104,  223 => 100,  219 => 99,  215 => 98,  208 => 94,  204 => 93,  200 => 92,  184 => 79,  178 => 76,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  153 => 66,  149 => 65,  139 => 58,  129 => 51,  123 => 48,  115 => 43,  109 => 40,  99 => 32,  96 => 31,  89 => 27,  79 => 19,  76 => 18,  69 => 14,  63 => 11,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
        <div class=\"col-md-10\">
            <h2>Create Calculator</h2>

        </div>
    </div>
    <div class=\"row\">
        {{ form_start(form, {'attr': {'id' : 'form'}}) }}
        {{ form_errors(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.formalizacion) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.formalizacion, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.vencimiento) }}
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    {{ form_widget(form.vencimiento, {'attr' : {'class' : \"form-control\", 'style' : 'width: 180px;', 'data-date-format': \"yyyy-MM-dd\"}}) }} {#<input type=\"text\" class=\"form-control\">#}
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.dias) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.dias) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.nominal) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.nominal) }}
            </div>
        </div>
        <div class=\"row second\">
            <table>
                <tr>
                    <td>Honorarios</td>
                    <td>Timbres{{ form_widget(form.existeTimbre) }}</td>
                    <td>OMF</td>
                    <td>Mensajeria</td>
                    <td>Burofax</td>
                    <td>Otros gastos</td>
                </tr>
                <tr>
                    <td>{{ form_widget(form.honorarios) }}</td>
                    <td>{{ form_widget(form.timbres) }}</td>
                    <td>{{ form_widget(form.omf) }}</td>
                    <td>{{ form_widget(form.mensajeria) }}</td>
                    <td>{{ form_widget(form.burofax) }}</td>
                    <td>{{ form_widget(form.gastos) }}</td>
                </tr>
            </table>

            <div class=\"row third\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.introduce) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.introduce) }}
                </div>
            </div>
            <div class=\"fourth\">
                <table>
                    <tr>
                        <td></td>
                        <td>Coste Financiero</td>
                        <td>Coste Financiero + Ledser</td>
                        <td>Coste Total</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{ form_widget(form.costeFinanciero.total) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.total, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.total, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Tae</td>
                        <td>{{ form_widget(form.costeFinanciero.tae) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.tae, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.tae, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Mensual</td>
                        <td>{{ form_widget(form.costeFinanciero.mensual) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.mensual, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.mensual, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Retención</td>
                        <td>{{ form_widget(form.costeFinanciero.retencion) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.retencion, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.retencion, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>{{ form_widget(form.costeFinanciero.nominal, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.nominal, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.nominal, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Coste</td>
                        <td>{{ form_widget(form.costeFinanciero.coste) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.coste, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.coste, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Liquido</td>
                        <td>{{ form_widget(form.costeFinanciero.liquido, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.liquido, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.liquido, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                    <tr>
                        <td>Retencion Total</td>
                        <td>{{ form_widget(form.costeFinanciero.retencionTotal, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeFinancieroLedser.retencionTotal, { 'attr':{'readonly':true} }) }}</td>
                        <td>{{ form_widget(form.costeTotal.retencionTotal, { 'attr':{'readonly':true} }) }}</td>
                    </tr>
                </table>
                {{ form_widget(form.save, { 'attr':{'class': 'btn btn-primary btn-lg btn-block'} }) }}
                {{ form_widget(form.saveAndAdd, { 'attr':{'class': 'btn btn-primary btn-lg btn-block'} }) }}
                {#<button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Siguiente</button>#}
                {#<button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Fin</button>#}

            </div>

        </div>

        <div style=\"display: none;\"> {{ form_widget(form.proposal) }}</div>

        {{ form_end(form) }}
    </div>

{% endblock %}
{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datepicker.es.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$.fn.datepicker.defaults.format = \"yyyy-mm-dd\";
        \$('.datepicker').datepicker({
            format: 'yyyy-MM-dd',
            startDate: '-3d'
        });
    </script>
    <script type=\"text/javascript\">
        \$(\".second\").hide();
        // \$(\".third\").hide();
        // \$(\".fourth\").hide();
        var introduces = {'tae':'tae','mensual' : 'mensual','total': 'total', 'coste' : 'coste'};
        for (introduce in introduces) {
            \$(\"#calculator_costeFinanciero_\" + introduce).prop('readonly', true);
        }
        \$(function () {
            // var formalizacion = false;
            // var vencimiento = false;
            var nominal = false;
            \$(\"#calculator_formalizacion\").on('change', function() {
                // formalizacion = true;
                // if(formalizacion && vencimiento)
                // {
                calculaDias(nominal);
                // }
            });
            \$(\"#calculator_vencimiento\").on('change', function() {
                // vencimiento = true;
                // if(formalizacion && vencimiento)
                // {
                calculaDias(nominal);
                // }
            });

            \$(\"#calculator_nominal\").on('change', function() {
                nominal = true;
                // if(formalizacion && vencimiento)
                // {
                \$(\".second\").show();
                // }
            });

            \$(\"#calculator_honorarios\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_timbres\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_omf\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_mensajeria\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_burofax\").on('change', function() {
                calculaResultados();
            });
            \$(\"#calculator_gastos\").on('change', function() {
                calculaResultados();
            });


            \$(\"#calculator_existeTimbre\").on('click', function() {

                if(\$(this).is(':checked'))
                {
                    if(\$(\"#calculator_nominal\").val() < 24.05) {
                        stamp = 0.06;
                    }else if(\$(\"#calculator_nominal\").val() < 48.09) {
                        stamp = 0.12;
                    }else if(\$(\"#calculator_nominal\").val() < 90.16) {
                        stamp = 0.24;
                    }else if(\$(\"#calculator_nominal\").val() < 180.31) {
                        stamp = 0.48;
                    }else if(\$(\"#calculator_nominal\").val() < 360.62) {
                        stamp = 0.96;
                    }else if(\$(\"#calculator_nominal\").val() < 751.27) {
                        stamp = 1.98;
                    }else if(\$(\"#calculator_nominal\").val() < 1502.54) {
                        stamp = 4.21;
                    }else if(\$(\"#calculator_nominal\").val() < 3005.07) {
                        stamp = 8.41;
                    }else if(\$(\"#calculator_nominal\").val() < 6010.13) {
                        stamp = 16.83;
                    }else if(\$(\"#calculator_nominal\").val() < 12020.25) {
                        stamp = 33.66;
                    }else if(\$(\"#calculator_nominal\").val() < 24040.49) {
                        stamp = 67.31;
                    }else if(\$(\"#calculator_nominal\").val() < 48080.98) {
                        stamp = 134.63;
                    }else if(\$(\"#calculator_nominal\").val() < 96161.95 ) {
                        stamp = 269.25;
                    }else if(\$(\"#calculator_nominal\").val() < 192323.87 ) {
                        stamp = 538.51;
                    }
                    \$(\"#calculator_timbres\").val(stamp);
                } else
                {
                    \$(\"#calculator_timbres\").val(0);
                }
                calculaResultados();

            });


            \$(\"#calculator_introduce\").on('change', function() {
                \$(\".fourth\").show();
                var introduces = {'tae':'tae','mensual' : 'mensual','total': 'total','coste': 'coste'};
                for (introduce in introduces) {
                    if(introduce == \$(this).val()){
                        \$(\"#calculator_costeFinanciero_\" + introduce).prop('readonly', false);
                    }
                }
            });

            var porcentaje = false;
            var retencion = false;

            \$(\"#calculator_costeFinanciero_total\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_tae\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_mensual\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_coste\").on('change', function() {
                calculaResultados();
            });

            \$(\"#calculator_costeFinanciero_retencion\").on('change', function() {
                calculaResultados();
            });
        });
        function calculaDias(nominal) {
            var start = \$(\"#calculator_formalizacion\").val();
            var startD = new Date(start);
            var end = \$(\"#calculator_vencimiento\").val();
            var endD = new Date(end);
            var diff = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
            \$(\"#calculator_dias\").val(diff);
            if(nominal)
            {
                \$(\".second\").show();
            }
        }

        function checkThird() {
            if(
                \$(\"#calculator_honorarios\").val() != \"\" &&
                \$(\"#calculator_timbres\").val() != \"\" &&
                \$(\"#calculator_omf\").val() != \"\" &&
                \$(\"#calculator_mensajeria\").val() != \"\" &&
                \$(\"#calculator_burofax\").val() != \"\" &&
                \$(\"#calculator_gastos\").val() != \"\"
            ){
                \$(\".third\").show();
                return true;
            }
            return false;

        }
        function rellenoTae()
        {
            if (\$(\"#calculator_costeFinanciero_total\").val() != \"\" || \$(\"#calculator_costeFinanciero_mensual\").val() != \"\" || \$(\"#calculator_costeFinanciero_tae\").val() != \"\" || \$(\"#calculator_costeFinanciero_coste\").val() != \"\")
            {
                return true;
            }
            return false;
        }

        function calculaResultados()
        {
            if(checkThird() && rellenoTae() && \$(\"#calculator_costeFinanciero_retencion\").val() != '') {

                var nominal = \$(\"#calculator_nominal\").val();
                var retencion = \$(\"#calculator_costeFinanciero_retencion\").val();
                \$(\"#calculator_costeFinanciero_nominal\").val(nominal - (nominal * retencion));
                var tae, total, mensual, coste = 0.0;
                if ('total' == \$(\"#calculator_introduce\").val()) {
                    total = \$(\"#calculator_costeFinanciero_total\").val();
                    tae = total / \$(\"#calculator_dias\").val() * 360;
                    mensual = total / \$(\"#calculator_dias\").val() * 30;
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }
                else if ('tae' == \$(\"#calculator_introduce\").val()) {
                    tae = \$(\"#calculator_costeFinanciero_tae\").val();
                    total = tae / 360 * \$(\"#calculator_dias\").val();
                    mensual = total / \$(\"#calculator_dias\").val() / 30;
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }
                else if ('mensual' == \$(\"#calculator_introduce\").val()) {
                    mensual = \$(\"#calculator_costeFinanciero_mensual\").val();
                    total = mensual * 12;
                    tae = mensual * (\$(\"#calculator_dias\").val() / 30);
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }
                else if ('coste' == \$(\"#calculator_introduce\").val()) {
                    coste = \$(\"#calculator_costeFinanciero_coste\").val();
                    total = coste / nominal;
                    tae = total / \$(\"#calculator_dias\").val() * 360;
                    mensual = total / \$(\"#calculator_dias\").val() * 30;
                    coste = \$(\"#calculator_costeFinanciero_nominal\").val() * total / 100;
                }

                \$(\"#calculator_costeFinanciero_total\").val(parseFloat(total).toFixed(2));
                \$(\"#calculator_costeFinanciero_mensual\").val(parseFloat(mensual).toFixed(2));
                \$(\"#calculator_costeFinanciero_tae\").val(parseFloat(tae).toFixed(2));
                \$(\"#calculator_costeFinanciero_coste\").val(parseFloat(coste).toFixed(2));



                \$(\"#calculator_costeFinanciero_liquido\").val(\$(\"#calculator_costeFinanciero_nominal\").val() - \$(\"#calculator_costeFinanciero_coste\").val());
                \$(\"#calculator_costeFinanciero_retencionTotal\").val(nominal * retencion / 100);

                \$(\"#calculator_costeFinancieroLedser_total\").val(parseFloat((parseFloat(\$(\"#calculator_costeFinanciero_coste\").val()) + parseFloat(\$(\"#calculator_honorarios\").val())) / \$(\"#calculator_costeFinanciero_nominal\").val() * 100));
                \$(\"#calculator_costeFinancieroLedser_tae\").val(parseFloat(\$(\"#calculator_costeFinancieroLedser_total\").val() / \$(\"#calculator_dias\").val() * 360));
                \$(\"#calculator_costeFinancieroLedser_mensual\").val(parseFloat(\$(\"#calculator_costeFinancieroLedser_tae\").val() / 12));
                \$(\"#calculator_costeFinancieroLedser_retencion\").val(retencion);
                \$(\"#calculator_costeTotal_retencion\").val(retencion);
                \$(\"#calculator_costeFinancieroLedser_nominal\").val(\$(\"#calculator_costeFinanciero_nominal\").val());
                \$(\"#calculator_costeTotal_nominal\").val(\$(\"#calculator_costeFinanciero_nominal\").val());

                \$(\"#calculator_costeFinancieroLedser_coste\").val(parseFloat(\$(\"#calculator_costeFinanciero_coste\").val()) + parseFloat(\$(\"#calculator_honorarios\").val()));
                \$(\"#calculator_costeTotal_coste\").val(parseFloat(\$(\"#calculator_costeFinancieroLedser_coste\").val()) + parseFloat(\$(\"#calculator_timbres\").val()) +
                    parseFloat(\$(\"#calculator_omf\").val()) + parseFloat(\$(\"#calculator_mensajeria\").val()) + parseFloat(\$(\"#calculator_burofax\").val()) + parseFloat(\$(\"#calculator_gastos\").val()));
                \$(\"#calculator_costeFinancieroLedser_liquido\").val(\$(\"#calculator_costeFinancieroLedser_nominal\").val() - \$(\"#calculator_costeFinancieroLedser_coste\").val());
                \$(\"#calculator_costeTotal_liquido\").val(\$(\"#calculator_costeTotal_nominal\").val() - \$(\"#calculator_costeTotal_coste\").val());
                \$(\"#calculator_costeFinancieroLedser_retencionTotal\").val(nominal * retencion);
                \$(\"#calculator_costeTotal_retencionTotal\").val(nominal * retencion);

                \$(\"#calculator_costeTotal_total\").val(parseFloat((parseFloat(\$(\"#calculator_costeFinanciero_coste\").val()) + parseFloat(\$(\"#calculator_honorarios\").val()) + parseFloat(\$(\"#calculator_timbres\").val()) +
                    parseFloat(\$(\"#calculator_omf\").val()) + parseFloat(\$(\"#calculator_mensajeria\").val()) + parseFloat(\$(\"#calculator_burofax\").val()) + parseFloat(\$(\"#calculator_gastos\").val())) / \$(\"#calculator_costeFinanciero_nominal\").val() * 100));

                \$(\"#calculator_costeTotal_tae\").val(parseFloat(\$(\"#calculator_costeTotal_total\").val() / \$(\"#calculator_dias\").val() * 360));
                \$(\"#calculator_costeTotal_mensual\").val(parseFloat(\$(\"#calculator_costeTotal_tae\").val() / 12));
            }
        }
    </script>
{% endblock %}
", "AppBundle:Proposal:createCalculator.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/createCalculator.html.twig");
    }
}
