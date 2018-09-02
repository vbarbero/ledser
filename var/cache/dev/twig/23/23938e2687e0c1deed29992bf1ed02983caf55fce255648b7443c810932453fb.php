<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_2686d6fd76f76ae4f78f5652a6ceb1a30001a19e364e4cebca903d157a21b037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53a194e64b0d9313178196c124768447fecf6ab3fca36bc52622a854fda501c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a194e64b0d9313178196c124768447fecf6ab3fca36bc52622a854fda501c3->enter($__internal_53a194e64b0d9313178196c124768447fecf6ab3fca36bc52622a854fda501c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_f0bb69ba2e538fdd3bf60108217c9b2eed708fd0d306f9b8450a6d9d869118ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bb69ba2e538fdd3bf60108217c9b2eed708fd0d306f9b8450a6d9d869118ac->enter($__internal_f0bb69ba2e538fdd3bf60108217c9b2eed708fd0d306f9b8450a6d9d869118ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_53a194e64b0d9313178196c124768447fecf6ab3fca36bc52622a854fda501c3->leave($__internal_53a194e64b0d9313178196c124768447fecf6ab3fca36bc52622a854fda501c3_prof);

        
        $__internal_f0bb69ba2e538fdd3bf60108217c9b2eed708fd0d306f9b8450a6d9d869118ac->leave($__internal_f0bb69ba2e538fdd3bf60108217c9b2eed708fd0d306f9b8450a6d9d869118ac_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_08f9d4a867fbefb4c475f30e6fdb787cdb33374395d590a3e1b320b2919575e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f9d4a867fbefb4c475f30e6fdb787cdb33374395d590a3e1b320b2919575e7->enter($__internal_08f9d4a867fbefb4c475f30e6fdb787cdb33374395d590a3e1b320b2919575e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_374d379837f79063eb8e03cf6c3f2bfbcc610d8f5d0cde36f23fb32fccc489e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374d379837f79063eb8e03cf6c3f2bfbcc610d8f5d0cde36f23fb32fccc489e6->enter($__internal_374d379837f79063eb8e03cf6c3f2bfbcc610d8f5d0cde36f23fb32fccc489e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_374d379837f79063eb8e03cf6c3f2bfbcc610d8f5d0cde36f23fb32fccc489e6->leave($__internal_374d379837f79063eb8e03cf6c3f2bfbcc610d8f5d0cde36f23fb32fccc489e6_prof);

        
        $__internal_08f9d4a867fbefb4c475f30e6fdb787cdb33374395d590a3e1b320b2919575e7->leave($__internal_08f9d4a867fbefb4c475f30e6fdb787cdb33374395d590a3e1b320b2919575e7_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1b55f9ec4a22bc1548964151bf05f98d0f98a798e24f6331374544e6e2850695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b55f9ec4a22bc1548964151bf05f98d0f98a798e24f6331374544e6e2850695->enter($__internal_1b55f9ec4a22bc1548964151bf05f98d0f98a798e24f6331374544e6e2850695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a1ad48f62e49a377f0fb8d6abd6ec100201887a2162d0945eb9ed54f2b74548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ad48f62e49a377f0fb8d6abd6ec100201887a2162d0945eb9ed54f2b74548a->enter($__internal_a1ad48f62e49a377f0fb8d6abd6ec100201887a2162d0945eb9ed54f2b74548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_a1ad48f62e49a377f0fb8d6abd6ec100201887a2162d0945eb9ed54f2b74548a->leave($__internal_a1ad48f62e49a377f0fb8d6abd6ec100201887a2162d0945eb9ed54f2b74548a_prof);

        
        $__internal_1b55f9ec4a22bc1548964151bf05f98d0f98a798e24f6331374544e6e2850695->leave($__internal_1b55f9ec4a22bc1548964151bf05f98d0f98a798e24f6331374544e6e2850695_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_23471d28eaa0c35f318a90843c9d80faa667fa76a7e34c779a645a7b983767a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23471d28eaa0c35f318a90843c9d80faa667fa76a7e34c779a645a7b983767a4->enter($__internal_23471d28eaa0c35f318a90843c9d80faa667fa76a7e34c779a645a7b983767a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ed38c6e39e396ab63ad885cd0b3c04bfac0edfbd22f4132a6c56ae5f2943e909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed38c6e39e396ab63ad885cd0b3c04bfac0edfbd22f4132a6c56ae5f2943e909->enter($__internal_ed38c6e39e396ab63ad885cd0b3c04bfac0edfbd22f4132a6c56ae5f2943e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_ed38c6e39e396ab63ad885cd0b3c04bfac0edfbd22f4132a6c56ae5f2943e909->leave($__internal_ed38c6e39e396ab63ad885cd0b3c04bfac0edfbd22f4132a6c56ae5f2943e909_prof);

        
        $__internal_23471d28eaa0c35f318a90843c9d80faa667fa76a7e34c779a645a7b983767a4->leave($__internal_23471d28eaa0c35f318a90843c9d80faa667fa76a7e34c779a645a7b983767a4_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0c0cbbb636abce537efdf2b29216e161cb3ca3f9f0ac0b9ff5a94eb7d39e9a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0cbbb636abce537efdf2b29216e161cb3ca3f9f0ac0b9ff5a94eb7d39e9a76->enter($__internal_0c0cbbb636abce537efdf2b29216e161cb3ca3f9f0ac0b9ff5a94eb7d39e9a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8e238894e4fb514426428094d7006a1bf1e5152023757b74eae3d92524290fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e238894e4fb514426428094d7006a1bf1e5152023757b74eae3d92524290fa8->enter($__internal_8e238894e4fb514426428094d7006a1bf1e5152023757b74eae3d92524290fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_8e238894e4fb514426428094d7006a1bf1e5152023757b74eae3d92524290fa8->leave($__internal_8e238894e4fb514426428094d7006a1bf1e5152023757b74eae3d92524290fa8_prof);

        
        $__internal_0c0cbbb636abce537efdf2b29216e161cb3ca3f9f0ac0b9ff5a94eb7d39e9a76->leave($__internal_0c0cbbb636abce537efdf2b29216e161cb3ca3f9f0ac0b9ff5a94eb7d39e9a76_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_84a92962309adb6cc8ed0f1dfc2cd6a92bc367e240ef01dc22625a1eeb87a1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a92962309adb6cc8ed0f1dfc2cd6a92bc367e240ef01dc22625a1eeb87a1c9->enter($__internal_84a92962309adb6cc8ed0f1dfc2cd6a92bc367e240ef01dc22625a1eeb87a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c9ea04efcb6e7bfd7f095b6eac7050a07d908611fd1d28ce44d7587cbfc9bbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ea04efcb6e7bfd7f095b6eac7050a07d908611fd1d28ce44d7587cbfc9bbb3->enter($__internal_c9ea04efcb6e7bfd7f095b6eac7050a07d908611fd1d28ce44d7587cbfc9bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_c9ea04efcb6e7bfd7f095b6eac7050a07d908611fd1d28ce44d7587cbfc9bbb3->leave($__internal_c9ea04efcb6e7bfd7f095b6eac7050a07d908611fd1d28ce44d7587cbfc9bbb3_prof);

        
        $__internal_84a92962309adb6cc8ed0f1dfc2cd6a92bc367e240ef01dc22625a1eeb87a1c9->leave($__internal_84a92962309adb6cc8ed0f1dfc2cd6a92bc367e240ef01dc22625a1eeb87a1c9_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_710861bac351ca8387cc318aa0636d5c1dc369cb483bcbaafe0abfca2957b984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710861bac351ca8387cc318aa0636d5c1dc369cb483bcbaafe0abfca2957b984->enter($__internal_710861bac351ca8387cc318aa0636d5c1dc369cb483bcbaafe0abfca2957b984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4c2e68aceb92383b56cb2ef72eaeaaad4059f6b57c0dd0d2a8068a2d1b2596a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2e68aceb92383b56cb2ef72eaeaaad4059f6b57c0dd0d2a8068a2d1b2596a0->enter($__internal_4c2e68aceb92383b56cb2ef72eaeaaad4059f6b57c0dd0d2a8068a2d1b2596a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4c2e68aceb92383b56cb2ef72eaeaaad4059f6b57c0dd0d2a8068a2d1b2596a0->leave($__internal_4c2e68aceb92383b56cb2ef72eaeaaad4059f6b57c0dd0d2a8068a2d1b2596a0_prof);

        
        $__internal_710861bac351ca8387cc318aa0636d5c1dc369cb483bcbaafe0abfca2957b984->leave($__internal_710861bac351ca8387cc318aa0636d5c1dc369cb483bcbaafe0abfca2957b984_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d705bb109f480ce431c341706f32fe3f4d920b52918e7c1ea3baedd3a2613fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d705bb109f480ce431c341706f32fe3f4d920b52918e7c1ea3baedd3a2613fd6->enter($__internal_d705bb109f480ce431c341706f32fe3f4d920b52918e7c1ea3baedd3a2613fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_437068ae3c6a066da5f1628dac591c40f14a0b6f51d498af1ef5306577844002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437068ae3c6a066da5f1628dac591c40f14a0b6f51d498af1ef5306577844002->enter($__internal_437068ae3c6a066da5f1628dac591c40f14a0b6f51d498af1ef5306577844002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_437068ae3c6a066da5f1628dac591c40f14a0b6f51d498af1ef5306577844002->leave($__internal_437068ae3c6a066da5f1628dac591c40f14a0b6f51d498af1ef5306577844002_prof);

        
        $__internal_d705bb109f480ce431c341706f32fe3f4d920b52918e7c1ea3baedd3a2613fd6->leave($__internal_d705bb109f480ce431c341706f32fe3f4d920b52918e7c1ea3baedd3a2613fd6_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_57c5a6cb7fbb9ba37537a0c5879079e7cbfc923284de7a4206ce8122f900c900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c5a6cb7fbb9ba37537a0c5879079e7cbfc923284de7a4206ce8122f900c900->enter($__internal_57c5a6cb7fbb9ba37537a0c5879079e7cbfc923284de7a4206ce8122f900c900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_63c4e4d3db86f2732ff5219f99c340c29dd9bd3556176a1297bfeee1f052c128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c4e4d3db86f2732ff5219f99c340c29dd9bd3556176a1297bfeee1f052c128->enter($__internal_63c4e4d3db86f2732ff5219f99c340c29dd9bd3556176a1297bfeee1f052c128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_63c4e4d3db86f2732ff5219f99c340c29dd9bd3556176a1297bfeee1f052c128->leave($__internal_63c4e4d3db86f2732ff5219f99c340c29dd9bd3556176a1297bfeee1f052c128_prof);

        
        $__internal_57c5a6cb7fbb9ba37537a0c5879079e7cbfc923284de7a4206ce8122f900c900->leave($__internal_57c5a6cb7fbb9ba37537a0c5879079e7cbfc923284de7a4206ce8122f900c900_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_dfbdfd905365913a453a540e9542501cc1284af6b0cf5a3be89c14cf952fd878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbdfd905365913a453a540e9542501cc1284af6b0cf5a3be89c14cf952fd878->enter($__internal_dfbdfd905365913a453a540e9542501cc1284af6b0cf5a3be89c14cf952fd878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_06b362b273ba7bee4f666ac6177f6853de592a8925bd0fcd5e86460f028369fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b362b273ba7bee4f666ac6177f6853de592a8925bd0fcd5e86460f028369fe->enter($__internal_06b362b273ba7bee4f666ac6177f6853de592a8925bd0fcd5e86460f028369fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_06b362b273ba7bee4f666ac6177f6853de592a8925bd0fcd5e86460f028369fe->leave($__internal_06b362b273ba7bee4f666ac6177f6853de592a8925bd0fcd5e86460f028369fe_prof);

        
        $__internal_dfbdfd905365913a453a540e9542501cc1284af6b0cf5a3be89c14cf952fd878->leave($__internal_dfbdfd905365913a453a540e9542501cc1284af6b0cf5a3be89c14cf952fd878_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_25110c70658fb3400d98a32ae0218b57b5f8860be13b1e8705dca3277e42e4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25110c70658fb3400d98a32ae0218b57b5f8860be13b1e8705dca3277e42e4fe->enter($__internal_25110c70658fb3400d98a32ae0218b57b5f8860be13b1e8705dca3277e42e4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b536dc2e31d758c2b179b6a2bc981485a925327c39b7351831123b976d981e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b536dc2e31d758c2b179b6a2bc981485a925327c39b7351831123b976d981e96->enter($__internal_b536dc2e31d758c2b179b6a2bc981485a925327c39b7351831123b976d981e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_b536dc2e31d758c2b179b6a2bc981485a925327c39b7351831123b976d981e96->leave($__internal_b536dc2e31d758c2b179b6a2bc981485a925327c39b7351831123b976d981e96_prof);

        
        $__internal_25110c70658fb3400d98a32ae0218b57b5f8860be13b1e8705dca3277e42e4fe->leave($__internal_25110c70658fb3400d98a32ae0218b57b5f8860be13b1e8705dca3277e42e4fe_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_28fbbad758d41fc007f457f326b71df71d421b1ce3795d7b530e5d15794f024b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fbbad758d41fc007f457f326b71df71d421b1ce3795d7b530e5d15794f024b->enter($__internal_28fbbad758d41fc007f457f326b71df71d421b1ce3795d7b530e5d15794f024b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_969e45b5a8b5f00fcaf80ccc1baa7c1f6ad4094510d624695122097c7cdd02b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969e45b5a8b5f00fcaf80ccc1baa7c1f6ad4094510d624695122097c7cdd02b5->enter($__internal_969e45b5a8b5f00fcaf80ccc1baa7c1f6ad4094510d624695122097c7cdd02b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_969e45b5a8b5f00fcaf80ccc1baa7c1f6ad4094510d624695122097c7cdd02b5->leave($__internal_969e45b5a8b5f00fcaf80ccc1baa7c1f6ad4094510d624695122097c7cdd02b5_prof);

        
        $__internal_28fbbad758d41fc007f457f326b71df71d421b1ce3795d7b530e5d15794f024b->leave($__internal_28fbbad758d41fc007f457f326b71df71d421b1ce3795d7b530e5d15794f024b_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_461754c80d3ac6852e60c250ca1ae2c8da2bc53b661c4f1fd9b550a6aaefb601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461754c80d3ac6852e60c250ca1ae2c8da2bc53b661c4f1fd9b550a6aaefb601->enter($__internal_461754c80d3ac6852e60c250ca1ae2c8da2bc53b661c4f1fd9b550a6aaefb601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_967d12ad9f9bf15770047006567e04bda57b05e1893d4bf1f6d3c09dadcae119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967d12ad9f9bf15770047006567e04bda57b05e1893d4bf1f6d3c09dadcae119->enter($__internal_967d12ad9f9bf15770047006567e04bda57b05e1893d4bf1f6d3c09dadcae119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 106
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_967d12ad9f9bf15770047006567e04bda57b05e1893d4bf1f6d3c09dadcae119->leave($__internal_967d12ad9f9bf15770047006567e04bda57b05e1893d4bf1f6d3c09dadcae119_prof);

        
        $__internal_461754c80d3ac6852e60c250ca1ae2c8da2bc53b661c4f1fd9b550a6aaefb601->leave($__internal_461754c80d3ac6852e60c250ca1ae2c8da2bc53b661c4f1fd9b550a6aaefb601_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2355b01878463d8c1d481b6b5c0830b1b359ef91403e9680b7f6babf5cb9da26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2355b01878463d8c1d481b6b5c0830b1b359ef91403e9680b7f6babf5cb9da26->enter($__internal_2355b01878463d8c1d481b6b5c0830b1b359ef91403e9680b7f6babf5cb9da26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_28d908f8b942710633f71f99386f6a688d05c251e7b4e9c229b4f155096055a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d908f8b942710633f71f99386f6a688d05c251e7b4e9c229b4f155096055a1->enter($__internal_28d908f8b942710633f71f99386f6a688d05c251e7b4e9c229b4f155096055a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_28d908f8b942710633f71f99386f6a688d05c251e7b4e9c229b4f155096055a1->leave($__internal_28d908f8b942710633f71f99386f6a688d05c251e7b4e9c229b4f155096055a1_prof);

        
        $__internal_2355b01878463d8c1d481b6b5c0830b1b359ef91403e9680b7f6babf5cb9da26->leave($__internal_2355b01878463d8c1d481b6b5c0830b1b359ef91403e9680b7f6babf5cb9da26_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c192a3b9841c29bcbd3726d3146dc6a9d0fb3fa7dbf3c264995adc3d239c9e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c192a3b9841c29bcbd3726d3146dc6a9d0fb3fa7dbf3c264995adc3d239c9e9f->enter($__internal_c192a3b9841c29bcbd3726d3146dc6a9d0fb3fa7dbf3c264995adc3d239c9e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2875fc08067167c7590af35eb42b2b412c1f2870f7776efbb6a2f7de06bbb1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2875fc08067167c7590af35eb42b2b412c1f2870f7776efbb6a2f7de06bbb1ff->enter($__internal_2875fc08067167c7590af35eb42b2b412c1f2870f7776efbb6a2f7de06bbb1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 147
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 150
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 151
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 157
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 158
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_2875fc08067167c7590af35eb42b2b412c1f2870f7776efbb6a2f7de06bbb1ff->leave($__internal_2875fc08067167c7590af35eb42b2b412c1f2870f7776efbb6a2f7de06bbb1ff_prof);

        
        $__internal_c192a3b9841c29bcbd3726d3146dc6a9d0fb3fa7dbf3c264995adc3d239c9e9f->leave($__internal_c192a3b9841c29bcbd3726d3146dc6a9d0fb3fa7dbf3c264995adc3d239c9e9f_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f7740a220a2fde7fe7fbfa0df5a3278f6e2980495d59f65956dcd499a3409b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7740a220a2fde7fe7fbfa0df5a3278f6e2980495d59f65956dcd499a3409b13->enter($__internal_f7740a220a2fde7fe7fbfa0df5a3278f6e2980495d59f65956dcd499a3409b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0a3942e0e2ca847ec931387ed8b4caf1df1f3d2aa2c5d8ee82e79dcf89b11f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3942e0e2ca847ec931387ed8b4caf1df1f3d2aa2c5d8ee82e79dcf89b11f88->enter($__internal_0a3942e0e2ca847ec931387ed8b4caf1df1f3d2aa2c5d8ee82e79dcf89b11f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_0a3942e0e2ca847ec931387ed8b4caf1df1f3d2aa2c5d8ee82e79dcf89b11f88->leave($__internal_0a3942e0e2ca847ec931387ed8b4caf1df1f3d2aa2c5d8ee82e79dcf89b11f88_prof);

        
        $__internal_f7740a220a2fde7fe7fbfa0df5a3278f6e2980495d59f65956dcd499a3409b13->leave($__internal_f7740a220a2fde7fe7fbfa0df5a3278f6e2980495d59f65956dcd499a3409b13_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f7626fa7b3e9bc059556fb5225f81fd7b0f638d1fb00f15629a98a82dfd08648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7626fa7b3e9bc059556fb5225f81fd7b0f638d1fb00f15629a98a82dfd08648->enter($__internal_f7626fa7b3e9bc059556fb5225f81fd7b0f638d1fb00f15629a98a82dfd08648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e97cbf2ea596a314617fc3c326897964fadfd35396331ae7bfc72cbea12389d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97cbf2ea596a314617fc3c326897964fadfd35396331ae7bfc72cbea12389d1->enter($__internal_e97cbf2ea596a314617fc3c326897964fadfd35396331ae7bfc72cbea12389d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_e97cbf2ea596a314617fc3c326897964fadfd35396331ae7bfc72cbea12389d1->leave($__internal_e97cbf2ea596a314617fc3c326897964fadfd35396331ae7bfc72cbea12389d1_prof);

        
        $__internal_f7626fa7b3e9bc059556fb5225f81fd7b0f638d1fb00f15629a98a82dfd08648->leave($__internal_f7626fa7b3e9bc059556fb5225f81fd7b0f638d1fb00f15629a98a82dfd08648_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
