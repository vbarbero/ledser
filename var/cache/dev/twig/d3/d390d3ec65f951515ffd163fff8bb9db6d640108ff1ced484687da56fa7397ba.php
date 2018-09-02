<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_01230dcbcf53de35b1452aec922c4cc1b909362ab4fb05298eb6f08a496becdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c4cf639102c848c17208af41bb52b53b28ad1a4f5da4f8bfc265f6b44a15027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4cf639102c848c17208af41bb52b53b28ad1a4f5da4f8bfc265f6b44a15027->enter($__internal_2c4cf639102c848c17208af41bb52b53b28ad1a4f5da4f8bfc265f6b44a15027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_1f5b591413dd85ed8421e39b22394c82e0074db1baa3957d9c16d77fbfb62070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5b591413dd85ed8421e39b22394c82e0074db1baa3957d9c16d77fbfb62070->enter($__internal_1f5b591413dd85ed8421e39b22394c82e0074db1baa3957d9c16d77fbfb62070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_2c4cf639102c848c17208af41bb52b53b28ad1a4f5da4f8bfc265f6b44a15027->leave($__internal_2c4cf639102c848c17208af41bb52b53b28ad1a4f5da4f8bfc265f6b44a15027_prof);

        
        $__internal_1f5b591413dd85ed8421e39b22394c82e0074db1baa3957d9c16d77fbfb62070->leave($__internal_1f5b591413dd85ed8421e39b22394c82e0074db1baa3957d9c16d77fbfb62070_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5a19a70ff7ed96710d0c7fae108b4afbeb898eb23d9fc8346e8302878cd8a2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a19a70ff7ed96710d0c7fae108b4afbeb898eb23d9fc8346e8302878cd8a2fe->enter($__internal_5a19a70ff7ed96710d0c7fae108b4afbeb898eb23d9fc8346e8302878cd8a2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d1813592fcbe77a386465140a55650646cfd045302ba8e36aa9545c8afed9bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1813592fcbe77a386465140a55650646cfd045302ba8e36aa9545c8afed9bfb->enter($__internal_d1813592fcbe77a386465140a55650646cfd045302ba8e36aa9545c8afed9bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d1813592fcbe77a386465140a55650646cfd045302ba8e36aa9545c8afed9bfb->leave($__internal_d1813592fcbe77a386465140a55650646cfd045302ba8e36aa9545c8afed9bfb_prof);

        
        $__internal_5a19a70ff7ed96710d0c7fae108b4afbeb898eb23d9fc8346e8302878cd8a2fe->leave($__internal_5a19a70ff7ed96710d0c7fae108b4afbeb898eb23d9fc8346e8302878cd8a2fe_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bbeb273b88dc9bbb9ee1dfe954448149f837d98f1afed5669cd5f4b217314eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeb273b88dc9bbb9ee1dfe954448149f837d98f1afed5669cd5f4b217314eb1->enter($__internal_bbeb273b88dc9bbb9ee1dfe954448149f837d98f1afed5669cd5f4b217314eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9791376da41e817d3045371996e873d002219558f1a84190ed9a39771412d5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9791376da41e817d3045371996e873d002219558f1a84190ed9a39771412d5ed->enter($__internal_9791376da41e817d3045371996e873d002219558f1a84190ed9a39771412d5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_9791376da41e817d3045371996e873d002219558f1a84190ed9a39771412d5ed->leave($__internal_9791376da41e817d3045371996e873d002219558f1a84190ed9a39771412d5ed_prof);

        
        $__internal_bbeb273b88dc9bbb9ee1dfe954448149f837d98f1afed5669cd5f4b217314eb1->leave($__internal_bbeb273b88dc9bbb9ee1dfe954448149f837d98f1afed5669cd5f4b217314eb1_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d605c09f20295f6240c38691309d28d9fc9f7449c70de2d3961e68727a906231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d605c09f20295f6240c38691309d28d9fc9f7449c70de2d3961e68727a906231->enter($__internal_d605c09f20295f6240c38691309d28d9fc9f7449c70de2d3961e68727a906231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d513acf84e5dffebe14f133b97490bf2d1d5fc9c117a884a990236f8ff6c0624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d513acf84e5dffebe14f133b97490bf2d1d5fc9c117a884a990236f8ff6c0624->enter($__internal_d513acf84e5dffebe14f133b97490bf2d1d5fc9c117a884a990236f8ff6c0624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_d513acf84e5dffebe14f133b97490bf2d1d5fc9c117a884a990236f8ff6c0624->leave($__internal_d513acf84e5dffebe14f133b97490bf2d1d5fc9c117a884a990236f8ff6c0624_prof);

        
        $__internal_d605c09f20295f6240c38691309d28d9fc9f7449c70de2d3961e68727a906231->leave($__internal_d605c09f20295f6240c38691309d28d9fc9f7449c70de2d3961e68727a906231_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ec5a74ddf9bd441a5168a623e76c6490de7a53e879843e2df184c2955d41ae1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5a74ddf9bd441a5168a623e76c6490de7a53e879843e2df184c2955d41ae1b->enter($__internal_ec5a74ddf9bd441a5168a623e76c6490de7a53e879843e2df184c2955d41ae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b4cf4d0921a0bbad75ec8393daafd0abb8b968e722c6e8693966e70655fd6625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cf4d0921a0bbad75ec8393daafd0abb8b968e722c6e8693966e70655fd6625->enter($__internal_b4cf4d0921a0bbad75ec8393daafd0abb8b968e722c6e8693966e70655fd6625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_b4cf4d0921a0bbad75ec8393daafd0abb8b968e722c6e8693966e70655fd6625->leave($__internal_b4cf4d0921a0bbad75ec8393daafd0abb8b968e722c6e8693966e70655fd6625_prof);

        
        $__internal_ec5a74ddf9bd441a5168a623e76c6490de7a53e879843e2df184c2955d41ae1b->leave($__internal_ec5a74ddf9bd441a5168a623e76c6490de7a53e879843e2df184c2955d41ae1b_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_00611c0c10b9361be2c882c2286a600fdfe987041e5e08da874d77bfc6348ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00611c0c10b9361be2c882c2286a600fdfe987041e5e08da874d77bfc6348ab6->enter($__internal_00611c0c10b9361be2c882c2286a600fdfe987041e5e08da874d77bfc6348ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6775139a26be99e1993fc1843a2747eadd88ca6e9094f3a35ca7650c3e4aa657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6775139a26be99e1993fc1843a2747eadd88ca6e9094f3a35ca7650c3e4aa657->enter($__internal_6775139a26be99e1993fc1843a2747eadd88ca6e9094f3a35ca7650c3e4aa657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_6775139a26be99e1993fc1843a2747eadd88ca6e9094f3a35ca7650c3e4aa657->leave($__internal_6775139a26be99e1993fc1843a2747eadd88ca6e9094f3a35ca7650c3e4aa657_prof);

        
        $__internal_00611c0c10b9361be2c882c2286a600fdfe987041e5e08da874d77bfc6348ab6->leave($__internal_00611c0c10b9361be2c882c2286a600fdfe987041e5e08da874d77bfc6348ab6_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ce64ff6852fcc54387212480d9dc820be73dd45c0b7dd6ead874fdd158a4791e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce64ff6852fcc54387212480d9dc820be73dd45c0b7dd6ead874fdd158a4791e->enter($__internal_ce64ff6852fcc54387212480d9dc820be73dd45c0b7dd6ead874fdd158a4791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d67fcf64ee79547029e7461df945f5ce17e611c57551b863e84325e952c9ebe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67fcf64ee79547029e7461df945f5ce17e611c57551b863e84325e952c9ebe4->enter($__internal_d67fcf64ee79547029e7461df945f5ce17e611c57551b863e84325e952c9ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_d67fcf64ee79547029e7461df945f5ce17e611c57551b863e84325e952c9ebe4->leave($__internal_d67fcf64ee79547029e7461df945f5ce17e611c57551b863e84325e952c9ebe4_prof);

        
        $__internal_ce64ff6852fcc54387212480d9dc820be73dd45c0b7dd6ead874fdd158a4791e->leave($__internal_ce64ff6852fcc54387212480d9dc820be73dd45c0b7dd6ead874fdd158a4791e_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_9a6eef6bafc81b08a06b19739712d764d8a6b7940379e033906613289ad0d73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6eef6bafc81b08a06b19739712d764d8a6b7940379e033906613289ad0d73d->enter($__internal_9a6eef6bafc81b08a06b19739712d764d8a6b7940379e033906613289ad0d73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d76f061163465cd8d9f6b4c0da2dde0f9052005d8b51a85abef8c25e34746e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76f061163465cd8d9f6b4c0da2dde0f9052005d8b51a85abef8c25e34746e66->enter($__internal_d76f061163465cd8d9f6b4c0da2dde0f9052005d8b51a85abef8c25e34746e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_d76f061163465cd8d9f6b4c0da2dde0f9052005d8b51a85abef8c25e34746e66->leave($__internal_d76f061163465cd8d9f6b4c0da2dde0f9052005d8b51a85abef8c25e34746e66_prof);

        
        $__internal_9a6eef6bafc81b08a06b19739712d764d8a6b7940379e033906613289ad0d73d->leave($__internal_9a6eef6bafc81b08a06b19739712d764d8a6b7940379e033906613289ad0d73d_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_baa847b33dc6427cd68d42c6d95b0bef7ac71cb01cbb805a12de650490b7174c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa847b33dc6427cd68d42c6d95b0bef7ac71cb01cbb805a12de650490b7174c->enter($__internal_baa847b33dc6427cd68d42c6d95b0bef7ac71cb01cbb805a12de650490b7174c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9d43c1f4f2a345aae5965dea3296ee28e7a75ec5638b6880e2c45f5efbef4603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d43c1f4f2a345aae5965dea3296ee28e7a75ec5638b6880e2c45f5efbef4603->enter($__internal_9d43c1f4f2a345aae5965dea3296ee28e7a75ec5638b6880e2c45f5efbef4603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_9d43c1f4f2a345aae5965dea3296ee28e7a75ec5638b6880e2c45f5efbef4603->leave($__internal_9d43c1f4f2a345aae5965dea3296ee28e7a75ec5638b6880e2c45f5efbef4603_prof);

        
        $__internal_baa847b33dc6427cd68d42c6d95b0bef7ac71cb01cbb805a12de650490b7174c->leave($__internal_baa847b33dc6427cd68d42c6d95b0bef7ac71cb01cbb805a12de650490b7174c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
