<?php

/* AppBundle:Proposal:show.html.twig */
class __TwigTemplate_4e9e84811a7bda3254bef94afffd0cac02a091a88b504a09c665c3a9944fd24c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Proposal:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3ae68d7f56a55edb591f5f7745338ad8d3bd3967f2e43aa503ca93ac6317a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ae68d7f56a55edb591f5f7745338ad8d3bd3967f2e43aa503ca93ac6317a68->enter($__internal_e3ae68d7f56a55edb591f5f7745338ad8d3bd3967f2e43aa503ca93ac6317a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:show.html.twig"));

        $__internal_0ac066e68651f83dd878b072cc35a31bac4da153b79007575a8f529f252cb591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac066e68651f83dd878b072cc35a31bac4da153b79007575a8f529f252cb591->enter($__internal_0ac066e68651f83dd878b072cc35a31bac4da153b79007575a8f529f252cb591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Proposal:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ae68d7f56a55edb591f5f7745338ad8d3bd3967f2e43aa503ca93ac6317a68->leave($__internal_e3ae68d7f56a55edb591f5f7745338ad8d3bd3967f2e43aa503ca93ac6317a68_prof);

        
        $__internal_0ac066e68651f83dd878b072cc35a31bac4da153b79007575a8f529f252cb591->leave($__internal_0ac066e68651f83dd878b072cc35a31bac4da153b79007575a8f529f252cb591_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ede84ed92f935518aa9e22b328915fac3d76621aeba996d4f212d75b5dd1238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ede84ed92f935518aa9e22b328915fac3d76621aeba996d4f212d75b5dd1238->enter($__internal_6ede84ed92f935518aa9e22b328915fac3d76621aeba996d4f212d75b5dd1238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df483137e1da6a4f782e44a9c25d0a51d306f50b549e100b07abdca2280d4c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df483137e1da6a4f782e44a9c25d0a51d306f50b549e100b07abdca2280d4c75->enter($__internal_df483137e1da6a4f782e44a9c25d0a51d306f50b549e100b07abdca2280d4c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proposal"] ?? $this->getContext($context, "proposal")), "id", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company Name"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["proposal"] ?? $this->getContext($context, "proposal")), "company", array()), "name", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("state"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ProposalExtension')->getStatus($this->getAttribute(($context["proposal"] ?? $this->getContext($context, "proposal")), "state", array())), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("type"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ProposalExtension')->getType($this->getAttribute(($context["proposal"] ?? $this->getContext($context, "proposal")), "type", array())), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finalcial"), "html", null, true);
        echo ":
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proposal"] ?? $this->getContext($context, "proposal")), "finalcial", array()), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 45
        if (($context["general"] ?? $this->getContext($context, "general"))) {
            // line 46
            echo "        <h2>Generak</h2>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                dias
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "dias", array()) / twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators")))), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                nominal
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 60
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "nominal", array()) / twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators")))), "html", null, true);
            echo "
            </div>
        </div>
        <table class=\"table table-condensed\">

            <tr>
                <td>Honorarios</td>
                <td>Timbres</td>
                <td>OMF</td>
                <td>Mensajeria</td>
                <td>Burofax</td>
                <td>Otros gastos</td>
            </tr>
            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "honorarios", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "timbres", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "omf", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "mensajeria", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "burofax", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "gastos", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
        </table>
        <table class=\"table table-condensed\">

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
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "total", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "total", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "total", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Tae</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "tae", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "tae", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "tae", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Mensual</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "mensual", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "mensual", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "mensual", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Retención</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "retencion", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "retencion", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "retencion", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "nominal", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "nominal", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 118
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "nominal", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Coste</td>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "coste", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 123
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "coste", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 124
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "coste", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Liquido</td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "liquido", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "liquido", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "liquido", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>Retencion Total</td>
                <td>";
            // line 134
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinanciero", array()), "retencionTotal", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeFinancieroLedser", array()), "retencionTotal", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["general"] ?? $this->getContext($context, "general")), "costeTotal", array()), "retencionTotal", array()) / twig_number_format_filter($this->env, twig_length_filter($this->env, ($context["calculators"] ?? $this->getContext($context, "calculators"))), 2)), "html", null, true);
            echo "</td>
            </tr>
        </table>
    ";
        }
        // line 140
        echo "<h1>Calculadoras</h1>
    ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calculators"] ?? $this->getContext($context, "calculators")));
        foreach ($context['_seq'] as $context["_key"] => $context["calculator"]) {
            // line 142
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("calculator Id"), "html", null, true);
            echo ":
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["calculator"], "id", array()), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                formalizacion
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 155
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calculator"], "formalizacion", array()), "Y-m-d"), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                vencimiento
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 163
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calculator"], "vencimiento", array()), "Y-m-d"), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                dias
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["calculator"], "dias", array()), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                nominal
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["calculator"], "nominal", array()), "html", null, true);
            echo "
            </div>
        </div>
        <table class=\"table table-condensed\">

    <tr>
                    <td>Honorarios</td>
                    <td>Timbres</td>
                    <td>OMF</td>
                    <td>Mensajeria</td>
                    <td>Burofax</td>
                    <td>Otros gastos</td>
                </tr>
                <tr>
                    <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["calculator"], "honorarios", array()), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["calculator"], "timbres", array()), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["calculator"], "omf", array()), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 196
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["calculator"], "mensajeria", array()), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 197
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["calculator"], "burofax", array()), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["calculator"], "gastos", array()), 2), "html", null, true);
            echo "</td>
                </tr>
            </table>
        <table class=\"table table-condensed\">

        <tr>
                        <td></td>
                        <td>Coste Financiero</td>
                        <td>Coste Financiero + Ledser</td>
                        <td>Coste Total</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>";
            // line 211
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "total", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 212
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "total", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 213
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "total", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Tae</td>
                        <td>";
            // line 217
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "tae", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 218
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "tae", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 219
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "tae", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Mensual</td>
                        <td>";
            // line 223
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "mensual", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 224
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "mensual", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "mensual", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Retención</td>
                        <td>";
            // line 229
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "retencion", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 230
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "retencion", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 231
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "retencion", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>";
            // line 235
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "nominal", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 236
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "nominal", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 237
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "nominal", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Coste</td>
                        <td>";
            // line 241
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "coste", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 242
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "coste", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 243
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "coste", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Liquido</td>
                        <td>";
            // line 247
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "liquido", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 248
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "liquido", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 249
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "liquido", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Retencion Total</td>
                        <td>";
            // line 253
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinanciero", array()), "retencionTotal", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 254
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeFinancieroLedser", array()), "retencionTotal", array()), 2), "html", null, true);
            echo "</td>
                        <td>";
            // line 255
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["calculator"], "costeTotal", array()), "retencionTotal", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_df483137e1da6a4f782e44a9c25d0a51d306f50b549e100b07abdca2280d4c75->leave($__internal_df483137e1da6a4f782e44a9c25d0a51d306f50b549e100b07abdca2280d4c75_prof);

        
        $__internal_6ede84ed92f935518aa9e22b328915fac3d76621aeba996d4f212d75b5dd1238->leave($__internal_6ede84ed92f935518aa9e22b328915fac3d76621aeba996d4f212d75b5dd1238_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Proposal:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 255,  539 => 254,  535 => 253,  528 => 249,  524 => 248,  520 => 247,  513 => 243,  509 => 242,  505 => 241,  498 => 237,  494 => 236,  490 => 235,  483 => 231,  479 => 230,  475 => 229,  468 => 225,  464 => 224,  460 => 223,  453 => 219,  449 => 218,  445 => 217,  438 => 213,  434 => 212,  430 => 211,  414 => 198,  410 => 197,  406 => 196,  402 => 195,  398 => 194,  394 => 193,  377 => 179,  366 => 171,  355 => 163,  344 => 155,  333 => 147,  327 => 144,  323 => 142,  319 => 141,  316 => 140,  309 => 136,  305 => 135,  301 => 134,  294 => 130,  290 => 129,  286 => 128,  279 => 124,  275 => 123,  271 => 122,  264 => 118,  260 => 117,  256 => 116,  249 => 112,  245 => 111,  241 => 110,  234 => 106,  230 => 105,  226 => 104,  219 => 100,  215 => 99,  211 => 98,  204 => 94,  200 => 93,  196 => 92,  180 => 79,  176 => 78,  172 => 77,  168 => 76,  164 => 75,  160 => 74,  143 => 60,  132 => 52,  124 => 46,  122 => 45,  116 => 42,  110 => 39,  102 => 34,  96 => 31,  88 => 26,  82 => 23,  74 => 18,  68 => 15,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"col-lg-4\">
            {{ 'Id' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ proposal.id }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'Company Name' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ proposal.company.name }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'state' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ proposal.state | proposal_status }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'type' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ proposal.type | proposal_type }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            {{ 'finalcial' | trans }}:
        </div>
        <div class=\"col-lg-4\">
            {{ proposal.finalcial }}
        </div>
    </div>
    {% if general %}
        <h2>Generak</h2>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                dias
            </div>
            <div class=\"col-lg-4\">
                {{ general.dias / (calculators | length) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                nominal
            </div>
            <div class=\"col-lg-4\">
                {{ general.nominal / (calculators | length) }}
            </div>
        </div>
        <table class=\"table table-condensed\">

            <tr>
                <td>Honorarios</td>
                <td>Timbres</td>
                <td>OMF</td>
                <td>Mensajeria</td>
                <td>Burofax</td>
                <td>Otros gastos</td>
            </tr>
            <tr>
                <td>{{ general.honorarios / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.timbres / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.omf / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.mensajeria / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.burofax / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.gastos / (calculators | length) | number_format(2)}}</td>
            </tr>
        </table>
        <table class=\"table table-condensed\">

            <tr>
                <td></td>
                <td>Coste Financiero</td>
                <td>Coste Financiero + Ledser</td>
                <td>Coste Total</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{ general.costeFinanciero.total / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.costeFinancieroLedser.total / (calculators | length) | number_format(2)}}</td>
                <td>{{ general.costeTotal.total / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Tae</td>
                <td>{{ general.costeFinanciero.tae / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.tae / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.tae / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Mensual</td>
                <td>{{ general.costeFinanciero.mensual / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.mensual / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.mensual / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Retención</td>
                <td>{{ general.costeFinanciero.retencion / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.retencion / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.retencion / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>{{ general.costeFinanciero.nominal / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.nominal / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.nominal / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Coste</td>
                <td>{{ general.costeFinanciero.coste / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.coste / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.coste / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Liquido</td>
                <td>{{ general.costeFinanciero.liquido / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.liquido / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.liquido / (calculators | length) | number_format(2) }}</td>
            </tr>
            <tr>
                <td>Retencion Total</td>
                <td>{{ general.costeFinanciero.retencionTotal / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeFinancieroLedser.retencionTotal / (calculators | length) | number_format(2) }}</td>
                <td>{{ general.costeTotal.retencionTotal / (calculators | length) | number_format(2) }}</td>
            </tr>
        </table>
    {% endif %}
<h1>Calculadoras</h1>
    {% for calculator in calculators %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ 'calculator Id' | trans }}:
            </div>
            <div class=\"col-lg-4\">
                {{ calculator.id }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                formalizacion
            </div>
            <div class=\"col-lg-4\">
                {{ calculator.formalizacion | date(\"Y-m-d\") }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                vencimiento
            </div>
            <div class=\"col-lg-4\">
                {{ calculator.vencimiento | date(\"Y-m-d\")  }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                dias
            </div>
            <div class=\"col-lg-4\">
                {{ calculator.dias }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                nominal
            </div>
            <div class=\"col-lg-4\">
                {{ calculator.nominal }}
            </div>
        </div>
        <table class=\"table table-condensed\">

    <tr>
                    <td>Honorarios</td>
                    <td>Timbres</td>
                    <td>OMF</td>
                    <td>Mensajeria</td>
                    <td>Burofax</td>
                    <td>Otros gastos</td>
                </tr>
                <tr>
                    <td>{{ calculator.honorarios | number_format(2)}}</td>
                    <td>{{ calculator.timbres | number_format(2)}}</td>
                    <td>{{ calculator.omf | number_format(2)}}</td>
                    <td>{{ calculator.mensajeria | number_format(2)}}</td>
                    <td>{{ calculator.burofax | number_format(2)}}</td>
                    <td>{{ calculator.gastos | number_format(2)}}</td>
                </tr>
            </table>
        <table class=\"table table-condensed\">

        <tr>
                        <td></td>
                        <td>Coste Financiero</td>
                        <td>Coste Financiero + Ledser</td>
                        <td>Coste Total</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{ calculator.costeFinanciero.total | number_format(2)}}</td>
                        <td>{{ calculator.costeFinancieroLedser.total | number_format(2)}}</td>
                        <td>{{ calculator.costeTotal.total | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Tae</td>
                        <td>{{ calculator.costeFinanciero.tae | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.tae | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.tae | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Mensual</td>
                        <td>{{ calculator.costeFinanciero.mensual | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.mensual | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.mensual | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Retención</td>
                        <td>{{ calculator.costeFinanciero.retencion | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.retencion | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.retencion | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>{{ calculator.costeFinanciero.nominal | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.nominal | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.nominal | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Coste</td>
                        <td>{{ calculator.costeFinanciero.coste | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.coste | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.coste | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Liquido</td>
                        <td>{{ calculator.costeFinanciero.liquido | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.liquido | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.liquido | number_format(2) }}</td>
                    </tr>
                    <tr>
                        <td>Retencion Total</td>
                        <td>{{ calculator.costeFinanciero.retencionTotal | number_format(2) }}</td>
                        <td>{{ calculator.costeFinancieroLedser.retencionTotal | number_format(2) }}</td>
                        <td>{{ calculator.costeTotal.retencionTotal | number_format(2) }}</td>
                    </tr>
                </table>
    {% endfor %}
{% endblock %}
", "AppBundle:Proposal:show.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Proposal/show.html.twig");
    }
}
