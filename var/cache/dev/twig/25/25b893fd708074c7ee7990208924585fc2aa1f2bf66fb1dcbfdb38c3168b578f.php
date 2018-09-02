<?php

/* AppBundle:Proposal:index.html.twig */
class __TwigTemplate_534ca32ffe7fd6980b3770b0942efc1f4fc150e2b340e50bc7abc17b8e421755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Proposal:index.html.twig", 1);
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
        $__internal_376d3755418f79a9c60616ebf1ef90e470f974cfa3de41f2acde9767d6daa7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376d3755418f79a9c60616ebf1ef90e470f974cfa3de41f2acde9767d6daa7eb->enter($__internal_376d3755418f79a9c60616ebf1ef90e470f974cfa3de41f2acde9767d6daa7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:index.html.twig"));

        $__internal_095b69780811df0f0f0f547964cc023fdbd1f82516a3f60efdd0c0cbd2a8f1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095b69780811df0f0f0f547964cc023fdbd1f82516a3f60efdd0c0cbd2a8f1be->enter($__internal_095b69780811df0f0f0f547964cc023fdbd1f82516a3f60efdd0c0cbd2a8f1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376d3755418f79a9c60616ebf1ef90e470f974cfa3de41f2acde9767d6daa7eb->leave($__internal_376d3755418f79a9c60616ebf1ef90e470f974cfa3de41f2acde9767d6daa7eb_prof);

        
        $__internal_095b69780811df0f0f0f547964cc023fdbd1f82516a3f60efdd0c0cbd2a8f1be->leave($__internal_095b69780811df0f0f0f547964cc023fdbd1f82516a3f60efdd0c0cbd2a8f1be_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_3ce3f80efd40488db594e05cb880337d1de7ed183d24f9f1082c312986405ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce3f80efd40488db594e05cb880337d1de7ed183d24f9f1082c312986405ae2->enter($__internal_3ce3f80efd40488db594e05cb880337d1de7ed183d24f9f1082c312986405ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_3f6ee6a197a051734a6201d692633e56a0812ed4e4d2682269803285036de12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6ee6a197a051734a6201d692633e56a0812ed4e4d2682269803285036de12d->enter($__internal_3f6ee6a197a051734a6201d692633e56a0812ed4e4d2682269803285036de12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_3f6ee6a197a051734a6201d692633e56a0812ed4e4d2682269803285036de12d->leave($__internal_3f6ee6a197a051734a6201d692633e56a0812ed4e4d2682269803285036de12d_prof);

        
        $__internal_3ce3f80efd40488db594e05cb880337d1de7ed183d24f9f1082c312986405ae2->leave($__internal_3ce3f80efd40488db594e05cb880337d1de7ed183d24f9f1082c312986405ae2_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_d82b81abfb996ed7d33025553b07c0b61cfe4eac4f7c0209f20a4cd401f08c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82b81abfb996ed7d33025553b07c0b61cfe4eac4f7c0209f20a4cd401f08c04->enter($__internal_d82b81abfb996ed7d33025553b07c0b61cfe4eac4f7c0209f20a4cd401f08c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0fceeda5f57d0995a94d1dc3f682b23a5ef1bec2b43dc6cf6f46cbd62927a679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fceeda5f57d0995a94d1dc3f682b23a5ef1bec2b43dc6cf6f46cbd62927a679->enter($__internal_0fceeda5f57d0995a94d1dc3f682b23a5ef1bec2b43dc6cf6f46cbd62927a679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Proposal</h2>

        </div>
    </div>
    <div class=\"row\">
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'label');
        echo "
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'label');
        echo "
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label');
        echo "
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finalcial", array()), 'label');
        echo "
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finalcial", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'label');
        echo "
        </div>
        <div class=\"col-lg-4\">
            <div class=\"input-group date\" id=\"datetimepicker1\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'widget', array("attr" => array("readonly" => "readonly")));
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
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'label');
        echo "
        </div>
        <div class=\"col-lg-4\">
            <div class=\"input-group date\" id=\"datetimepicker2\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'widget', array("attr" => array("readonly" => "readonly")));
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
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datediff", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datediff", array()), 'widget');
        echo "
            </div>
        </div>
        <div id=\"restForm\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nominal", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nominal", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commission", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commission", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tae", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tae", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "totalPercentage", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "totalPercentage", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "monthPercentage", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "monthPercentage", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingress", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingress", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stamp", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stamp", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "liquidMoney", array()), 'label');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "liquidMoney", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>

        ";
        // line 190
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_0fceeda5f57d0995a94d1dc3f682b23a5ef1bec2b43dc6cf6f46cbd62927a679->leave($__internal_0fceeda5f57d0995a94d1dc3f682b23a5ef1bec2b43dc6cf6f46cbd62927a679_prof);

        
        $__internal_d82b81abfb996ed7d33025553b07c0b61cfe4eac4f7c0209f20a4cd401f08c04->leave($__internal_d82b81abfb996ed7d33025553b07c0b61cfe4eac4f7c0209f20a4cd401f08c04_prof);

    }

    // line 194
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c7e0c662896b589b9ce6326d1cd718071778e6d5a67f2ae7238ce830c334af74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e0c662896b589b9ce6326d1cd718071778e6d5a67f2ae7238ce830c334af74->enter($__internal_c7e0c662896b589b9ce6326d1cd718071778e6d5a67f2ae7238ce830c334af74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_70bec8bc296038cc58f1f5f1fde353bd61a8f076ef94141b129b785097937bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bec8bc296038cc58f1f5f1fde353bd61a8f076ef94141b129b785097937bb0->enter($__internal_70bec8bc296038cc58f1f5f1fde353bd61a8f076ef94141b129b785097937bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 195
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$(\"#restForm\").hide();
            \$('#datetimepicker1').datetimepicker({useCurrent: false, startDate: new Date(\"2018-01-01\"), format: 'yyyy-mm-dd hh:ii',  locale: 'es-ES', daysOfWeekDisabled: [0, 6],
                disabledDates: [
                    new Date(2013, 11 - 1, 21),
                    \"11/22/2013 00:53\"
                ],weekStart: 1, todayHighlight: true}).on('changeDate', function (ev) {
                \$('#proposal_dateTo').datepicker('setStartDate', \$(\"#proposal_dateFrom\").val());
            });



            \$('#datetimepicker2').datetimepicker({useCurrent: false, startDate: new Date(\"2018-01-01\"), format: 'yyyy-mm-dd hh:ii',  locale: 'es-ES', daysOfWeekDisabled: [0, 6],
                disabledDates: [
                    new Date(2013, 11 - 1, 21),
                    \"11/22/2013 00:53\"
                ],weekStart: 1, todayHighlight: true}).on('changeDate', function (ev) {
                var start = \$(\"#proposal_dateFrom\").val();
                var startD = new Date(start);
                var end = \$(\"#proposal_dateTo\").val();
                var endD = new Date(end);
                var diff = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
                \$(\"#proposal_datediff\").val(diff);
                \$(\"#restForm\").show();
            });
            \$(\"#proposal_commission\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_tae\").val(365/datediff * \$(\"#proposal_commission\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
            });
            \$(\"#proposal_tae\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_commission\").val(365/datediff * \$(\"#proposal_tae\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
            });
            \$(\"#proposal_totalPercentage\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_commission\").val(365/datediff * \$(\"#proposal_tae\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
                \$(\"#proposal_tae\").val(\$(this).val()/datediff * 360);
                \$(\"#proposal_monthPercentage\").val(\$(this).val()/(datediff * 30));
            });
            \$(\"#proposal_monthPercentage\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_commission\").val(365/datediff * \$(\"#proposal_tae\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
                \$(\"#proposal_tae\").val(\$(this).val()/datediff * 360);
                \$(\"#proposal_totalPercentage\").val(\$(this).val()/(datediff * 30));
            });
            \$(\"#proposal_nominal\").on('change', function() {
                var stamp = 0;
                if(\$(this).val() < 24.05) {
                    stamp = 0.06;
                }else if(\$(this).val() < 48.09) {
                    stamp = 0.12;
                }else if(\$(this).val() < 90.16) {
                    stamp = 0.24;
                }else if(\$(this).val() < 180.31) {
                    stamp = 0.48;
                }else if(\$(this).val() < 360.62) {
                    stamp = 0.96;
                }else if(\$(this).val() < 751.27) {
                    stamp = 1.98;
                }else if(\$(this).val() < 1502.54) {
                    stamp = 4.21;
                }else if(\$(this).val() < 3005.07) {
                    stamp = 8.41;
                }else if(\$(this).val() < 6010.13) {
                    stamp = 16.83;
                }else if(\$(this).val() < 12020.25) {
                    stamp = 33.66;
                }else if(\$(this).val() < 24040.49) {
                    stamp = 67.31;
                }else if(\$(this).val() < 48080.98) {
                    stamp = 134.63;
                }else if(\$(this).val() < 96161.95 ) {
                    stamp = 269.25;
                }else if(\$(this).val() < 192323.87 ) {
                    stamp = 538.51;
                }

                \$(\"#proposal_stamp\").val(stamp);
            });

        });
    </script>

";
        
        $__internal_70bec8bc296038cc58f1f5f1fde353bd61a8f076ef94141b129b785097937bb0->leave($__internal_70bec8bc296038cc58f1f5f1fde353bd61a8f076ef94141b129b785097937bb0_prof);

        
        $__internal_c7e0c662896b589b9ce6326d1cd718071778e6d5a67f2ae7238ce830c334af74->leave($__internal_c7e0c662896b589b9ce6326d1cd718071778e6d5a67f2ae7238ce830c334af74_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Proposal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 196,  396 => 195,  387 => 194,  373 => 190,  364 => 184,  358 => 181,  350 => 176,  344 => 173,  336 => 168,  330 => 165,  322 => 160,  316 => 157,  308 => 152,  302 => 149,  294 => 144,  288 => 141,  280 => 136,  274 => 133,  266 => 128,  260 => 125,  252 => 120,  246 => 117,  237 => 111,  231 => 108,  214 => 94,  207 => 90,  190 => 76,  183 => 72,  175 => 67,  169 => 64,  161 => 59,  155 => 56,  147 => 51,  141 => 48,  133 => 43,  127 => 40,  121 => 37,  112 => 30,  103 => 29,  92 => 25,  87 => 23,  73 => 21,  69 => 18,  51 => 4,  42 => 3,  11 => 1,);
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
        <div class=\"col-md-10\">
            <h2>Create Proposal</h2>

        </div>
    </div>
    <div class=\"row\">
    {{ form_start(form) }}
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
            {{ form_label(form.state) }}
        </div>
        <div class=\"col-lg-4\">
            {{ form_widget(form.state) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ form_label(form.type) }}
        </div>
        <div class=\"col-lg-4\">
            {{ form_widget(form.type) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ form_label(form.finalcial) }}
        </div>
        <div class=\"col-lg-4\">
            {{ form_widget(form.finalcial) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ form_label(form.dateFrom) }}
        </div>
        <div class=\"col-lg-4\">
            <div class=\"input-group date\" id=\"datetimepicker1\">
                {{ form_widget(form.dateFrom, {attr:{readonly: 'readonly'}}) }}
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
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ form_label(form.dateTo) }}
        </div>
        <div class=\"col-lg-4\">
            <div class=\"input-group date\" id=\"datetimepicker2\">
                {{ form_widget(form.dateTo, {attr:{readonly: 'readonly'}}) }}
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
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.datediff) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.datediff) }}
            </div>
        </div>
        <div id=\"restForm\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.nominal) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.nominal) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.commission) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.commission) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.tae) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.tae) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.totalPercentage) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.totalPercentage) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.monthPercentage) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.monthPercentage) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.cost) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.cost) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.ingress) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.ingress) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.stamp) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.stamp) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    {{ form_label(form.liquidMoney) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.liquidMoney) }}
                </div>
            </div>
        </div>
        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>

        {{ form_end(form) }}
    </div>

{% endblock %}
{% block javascript %}
    {{ parent() }}
        <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$(\"#restForm\").hide();
            \$('#datetimepicker1').datetimepicker({useCurrent: false, startDate: new Date(\"2018-01-01\"), format: 'yyyy-mm-dd hh:ii',  locale: 'es-ES', daysOfWeekDisabled: [0, 6],
                disabledDates: [
                    new Date(2013, 11 - 1, 21),
                    \"11/22/2013 00:53\"
                ],weekStart: 1, todayHighlight: true}).on('changeDate', function (ev) {
                \$('#proposal_dateTo').datepicker('setStartDate', \$(\"#proposal_dateFrom\").val());
            });



            \$('#datetimepicker2').datetimepicker({useCurrent: false, startDate: new Date(\"2018-01-01\"), format: 'yyyy-mm-dd hh:ii',  locale: 'es-ES', daysOfWeekDisabled: [0, 6],
                disabledDates: [
                    new Date(2013, 11 - 1, 21),
                    \"11/22/2013 00:53\"
                ],weekStart: 1, todayHighlight: true}).on('changeDate', function (ev) {
                var start = \$(\"#proposal_dateFrom\").val();
                var startD = new Date(start);
                var end = \$(\"#proposal_dateTo\").val();
                var endD = new Date(end);
                var diff = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
                \$(\"#proposal_datediff\").val(diff);
                \$(\"#restForm\").show();
            });
            \$(\"#proposal_commission\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_tae\").val(365/datediff * \$(\"#proposal_commission\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
            });
            \$(\"#proposal_tae\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_commission\").val(365/datediff * \$(\"#proposal_tae\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
            });
            \$(\"#proposal_totalPercentage\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_commission\").val(365/datediff * \$(\"#proposal_tae\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
                \$(\"#proposal_tae\").val(\$(this).val()/datediff * 360);
                \$(\"#proposal_monthPercentage\").val(\$(this).val()/(datediff * 30));
            });
            \$(\"#proposal_monthPercentage\").on('change', function() {
                var datediff = \$(\"#proposal_datediff\").val();
                \$(\"#proposal_commission\").val(365/datediff * \$(\"#proposal_tae\").val());
                \$(\"#proposal_cost\").val(\$(\"#proposal_commission\").val() * \$(\"#proposal_nominal\").val());
                \$(\"#proposal_tae\").val(\$(this).val()/datediff * 360);
                \$(\"#proposal_totalPercentage\").val(\$(this).val()/(datediff * 30));
            });
            \$(\"#proposal_nominal\").on('change', function() {
                var stamp = 0;
                if(\$(this).val() < 24.05) {
                    stamp = 0.06;
                }else if(\$(this).val() < 48.09) {
                    stamp = 0.12;
                }else if(\$(this).val() < 90.16) {
                    stamp = 0.24;
                }else if(\$(this).val() < 180.31) {
                    stamp = 0.48;
                }else if(\$(this).val() < 360.62) {
                    stamp = 0.96;
                }else if(\$(this).val() < 751.27) {
                    stamp = 1.98;
                }else if(\$(this).val() < 1502.54) {
                    stamp = 4.21;
                }else if(\$(this).val() < 3005.07) {
                    stamp = 8.41;
                }else if(\$(this).val() < 6010.13) {
                    stamp = 16.83;
                }else if(\$(this).val() < 12020.25) {
                    stamp = 33.66;
                }else if(\$(this).val() < 24040.49) {
                    stamp = 67.31;
                }else if(\$(this).val() < 48080.98) {
                    stamp = 134.63;
                }else if(\$(this).val() < 96161.95 ) {
                    stamp = 269.25;
                }else if(\$(this).val() < 192323.87 ) {
                    stamp = 538.51;
                }

                \$(\"#proposal_stamp\").val(stamp);
            });

        });
    </script>

{% endblock %}", "AppBundle:Proposal:index.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/index.html.twig");
    }
}
