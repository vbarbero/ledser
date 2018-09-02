<?php

/* AppBundle:Proposal:createCalculator.html.twig */
class __TwigTemplate_211e8c6d16c303f342df732437738405080ffe4f02f36492e72791a4a5e3798f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Calculator</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "formalizacion", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "formalizacion", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vencimiento", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vencimiento", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "width: 180px;", "data-date-format" => "yyyy-MM-dd")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dias", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dias", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nominal", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nominal", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row second\">
            <table>
                <tr>
                    <td>Honorarios</td>
                    <td>Timbres";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "existeTimbre", array()), 'widget');
        echo "</td>
                    <td>OMF</td>
                    <td>Mensajeria</td>
                    <td>Burofax</td>
                    <td>Otros gastos</td>
                </tr>
                <tr>
                    <td>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "honorarios", array()), 'widget');
        echo "</td>
                    <td>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "timbres", array()), 'widget');
        echo "</td>
                    <td>";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "omf", array()), 'widget');
        echo "</td>
                    <td>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mensajeria", array()), 'widget');
        echo "</td>
                    <td>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "burofax", array()), 'widget');
        echo "</td>
                    <td>";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "gastos", array()), 'widget');
        echo "</td>
                </tr>
            </table>

            <div class=\"row third\">
                <div class=\"col-lg-4\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "introduce", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "introduce", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "total", array()), 'widget');
        echo "</td>
                        <td>";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "total", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "total", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tae</td>
                        <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "tae", array()), 'widget');
        echo "</td>
                        <td>";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "tae", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "tae", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Mensual</td>
                        <td>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "mensual", array()), 'widget');
        echo "</td>
                        <td>";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "mensual", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "mensual", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Retención</td>
                        <td>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "retencion", array()), 'widget');
        echo "</td>
                        <td>";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "retencion", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "retencion", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "nominal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "nominal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "nominal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Coste</td>
                        <td>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "coste", array()), 'widget');
        echo "</td>
                        <td>";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "coste", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "coste", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Liquido</td>
                        <td>";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "liquido", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "liquido", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "liquido", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Retencion Total</td>
                        <td>";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinanciero", array()), "retencionTotal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeFinancieroLedser", array()), "retencionTotal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                        <td>";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "costeTotal", array()), "retencionTotal", array()), 'widget', array("attr" => array("readonly" => true)));
        echo "</td>
                    </tr>
                </table>
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
        echo "
                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proposal", array()), 'widget');
        echo "</div>

        ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>

";
    }

    // line 154
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  343 => 157,  339 => 156,  334 => 155,  331 => 154,  323 => 150,  318 => 148,  311 => 143,  309 => 142,  305 => 140,  301 => 139,  295 => 136,  291 => 135,  287 => 134,  280 => 130,  276 => 129,  272 => 128,  265 => 124,  261 => 123,  257 => 122,  250 => 118,  246 => 117,  242 => 116,  235 => 112,  231 => 111,  227 => 110,  220 => 106,  216 => 105,  212 => 104,  205 => 100,  201 => 99,  197 => 98,  190 => 94,  186 => 93,  182 => 92,  166 => 79,  160 => 76,  151 => 70,  147 => 69,  143 => 68,  139 => 67,  135 => 66,  131 => 65,  121 => 58,  111 => 51,  105 => 48,  97 => 43,  91 => 40,  81 => 32,  78 => 31,  71 => 27,  61 => 19,  58 => 18,  51 => 14,  45 => 11,  41 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Proposal:createCalculator.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/createCalculator.html.twig");
    }
}
