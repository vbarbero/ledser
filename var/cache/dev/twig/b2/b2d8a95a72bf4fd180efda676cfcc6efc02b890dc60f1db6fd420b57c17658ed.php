<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_2c453c4fef34a2935d3f6dfd7dcb415f63a111118871a43dfa4c408efb95b98b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de5900d362cd0df4c8e4e1fb4f77fade40b0bdc89a66ef7f8a46ae510d24c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de5900d362cd0df4c8e4e1fb4f77fade40b0bdc89a66ef7f8a46ae510d24c99->enter($__internal_6de5900d362cd0df4c8e4e1fb4f77fade40b0bdc89a66ef7f8a46ae510d24c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_de271b0b01f75fdaed18886c11db475cf75bf59e4a2503430eab5bfc99cb51e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de271b0b01f75fdaed18886c11db475cf75bf59e4a2503430eab5bfc99cb51e9->enter($__internal_de271b0b01f75fdaed18886c11db475cf75bf59e4a2503430eab5bfc99cb51e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_6de5900d362cd0df4c8e4e1fb4f77fade40b0bdc89a66ef7f8a46ae510d24c99->leave($__internal_6de5900d362cd0df4c8e4e1fb4f77fade40b0bdc89a66ef7f8a46ae510d24c99_prof);

        
        $__internal_de271b0b01f75fdaed18886c11db475cf75bf59e4a2503430eab5bfc99cb51e9->leave($__internal_de271b0b01f75fdaed18886c11db475cf75bf59e4a2503430eab5bfc99cb51e9_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b4dba09f7231ca3ce4c5336d3a364aad3371f8e6d729ba3f5176398a29dd4c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4dba09f7231ca3ce4c5336d3a364aad3371f8e6d729ba3f5176398a29dd4c6f->enter($__internal_b4dba09f7231ca3ce4c5336d3a364aad3371f8e6d729ba3f5176398a29dd4c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f8ed7e2ea67b9f78c9be84f607cb7069ab26b2a6e743d14050a626bc4e963d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ed7e2ea67b9f78c9be84f607cb7069ab26b2a6e743d14050a626bc4e963d7f->enter($__internal_f8ed7e2ea67b9f78c9be84f607cb7069ab26b2a6e743d14050a626bc4e963d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_f8ed7e2ea67b9f78c9be84f607cb7069ab26b2a6e743d14050a626bc4e963d7f->leave($__internal_f8ed7e2ea67b9f78c9be84f607cb7069ab26b2a6e743d14050a626bc4e963d7f_prof);

        
        $__internal_b4dba09f7231ca3ce4c5336d3a364aad3371f8e6d729ba3f5176398a29dd4c6f->leave($__internal_b4dba09f7231ca3ce4c5336d3a364aad3371f8e6d729ba3f5176398a29dd4c6f_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ac4e5addf831ceecc4994a5a971cafcc1767062782e91caaf3afd2ee291503b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4e5addf831ceecc4994a5a971cafcc1767062782e91caaf3afd2ee291503b1->enter($__internal_ac4e5addf831ceecc4994a5a971cafcc1767062782e91caaf3afd2ee291503b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e3085c66cfd0b928c68a799b65bcaf1a30e66ed08409a472239676016be038e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3085c66cfd0b928c68a799b65bcaf1a30e66ed08409a472239676016be038e4->enter($__internal_e3085c66cfd0b928c68a799b65bcaf1a30e66ed08409a472239676016be038e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_e3085c66cfd0b928c68a799b65bcaf1a30e66ed08409a472239676016be038e4->leave($__internal_e3085c66cfd0b928c68a799b65bcaf1a30e66ed08409a472239676016be038e4_prof);

        
        $__internal_ac4e5addf831ceecc4994a5a971cafcc1767062782e91caaf3afd2ee291503b1->leave($__internal_ac4e5addf831ceecc4994a5a971cafcc1767062782e91caaf3afd2ee291503b1_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3ded4238239954a6c0948ceee43441820a5b75358a7d76bd95311b4712b5896f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ded4238239954a6c0948ceee43441820a5b75358a7d76bd95311b4712b5896f->enter($__internal_3ded4238239954a6c0948ceee43441820a5b75358a7d76bd95311b4712b5896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_de2a37fe62793b08d742180bd3ccd3ef3c7d7388fbcbdc29d5d9a77f2c7a8ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2a37fe62793b08d742180bd3ccd3ef3c7d7388fbcbdc29d5d9a77f2c7a8ce7->enter($__internal_de2a37fe62793b08d742180bd3ccd3ef3c7d7388fbcbdc29d5d9a77f2c7a8ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_de2a37fe62793b08d742180bd3ccd3ef3c7d7388fbcbdc29d5d9a77f2c7a8ce7->leave($__internal_de2a37fe62793b08d742180bd3ccd3ef3c7d7388fbcbdc29d5d9a77f2c7a8ce7_prof);

        
        $__internal_3ded4238239954a6c0948ceee43441820a5b75358a7d76bd95311b4712b5896f->leave($__internal_3ded4238239954a6c0948ceee43441820a5b75358a7d76bd95311b4712b5896f_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_802549568fb7105f7fb81c4c33d33cee3be3a37dffcbe2f41f99872d01eccdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802549568fb7105f7fb81c4c33d33cee3be3a37dffcbe2f41f99872d01eccdc0->enter($__internal_802549568fb7105f7fb81c4c33d33cee3be3a37dffcbe2f41f99872d01eccdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_5051075cdffa1d26c05d993005255b4bee59df922bfd659f1e6f4cd2e0ad5b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5051075cdffa1d26c05d993005255b4bee59df922bfd659f1e6f4cd2e0ad5b88->enter($__internal_5051075cdffa1d26c05d993005255b4bee59df922bfd659f1e6f4cd2e0ad5b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_5051075cdffa1d26c05d993005255b4bee59df922bfd659f1e6f4cd2e0ad5b88->leave($__internal_5051075cdffa1d26c05d993005255b4bee59df922bfd659f1e6f4cd2e0ad5b88_prof);

        
        $__internal_802549568fb7105f7fb81c4c33d33cee3be3a37dffcbe2f41f99872d01eccdc0->leave($__internal_802549568fb7105f7fb81c4c33d33cee3be3a37dffcbe2f41f99872d01eccdc0_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_cb03e85b841e4352c594a4bc48438f31e8db5a40e831b4b3b879cb2b3c882a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb03e85b841e4352c594a4bc48438f31e8db5a40e831b4b3b879cb2b3c882a01->enter($__internal_cb03e85b841e4352c594a4bc48438f31e8db5a40e831b4b3b879cb2b3c882a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4d328c916e995e2cc361046505d07bc9436488f93299ccfd09151944336d873c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d328c916e995e2cc361046505d07bc9436488f93299ccfd09151944336d873c->enter($__internal_4d328c916e995e2cc361046505d07bc9436488f93299ccfd09151944336d873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_4d328c916e995e2cc361046505d07bc9436488f93299ccfd09151944336d873c->leave($__internal_4d328c916e995e2cc361046505d07bc9436488f93299ccfd09151944336d873c_prof);

        
        $__internal_cb03e85b841e4352c594a4bc48438f31e8db5a40e831b4b3b879cb2b3c882a01->leave($__internal_cb03e85b841e4352c594a4bc48438f31e8db5a40e831b4b3b879cb2b3c882a01_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_5051d9262e9443b231ae5ac16df566d4be790ec4a6bf2ca6557f8550821dba1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5051d9262e9443b231ae5ac16df566d4be790ec4a6bf2ca6557f8550821dba1b->enter($__internal_5051d9262e9443b231ae5ac16df566d4be790ec4a6bf2ca6557f8550821dba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_436c8ee2407288ddaea30eeb7dcb45a570f0d5842aa441f6946dc7c54ee48322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436c8ee2407288ddaea30eeb7dcb45a570f0d5842aa441f6946dc7c54ee48322->enter($__internal_436c8ee2407288ddaea30eeb7dcb45a570f0d5842aa441f6946dc7c54ee48322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_436c8ee2407288ddaea30eeb7dcb45a570f0d5842aa441f6946dc7c54ee48322->leave($__internal_436c8ee2407288ddaea30eeb7dcb45a570f0d5842aa441f6946dc7c54ee48322_prof);

        
        $__internal_5051d9262e9443b231ae5ac16df566d4be790ec4a6bf2ca6557f8550821dba1b->leave($__internal_5051d9262e9443b231ae5ac16df566d4be790ec4a6bf2ca6557f8550821dba1b_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_81e83bbc2bc06bfca8ceaba781e3f85917502c9524a20e24dd6a7dc72f905014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e83bbc2bc06bfca8ceaba781e3f85917502c9524a20e24dd6a7dc72f905014->enter($__internal_81e83bbc2bc06bfca8ceaba781e3f85917502c9524a20e24dd6a7dc72f905014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1d56449bb88ea9b5aec5d33f3f7b48a6a6e5becd8484ddeaa8394007b3db65fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d56449bb88ea9b5aec5d33f3f7b48a6a6e5becd8484ddeaa8394007b3db65fe->enter($__internal_1d56449bb88ea9b5aec5d33f3f7b48a6a6e5becd8484ddeaa8394007b3db65fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_1d56449bb88ea9b5aec5d33f3f7b48a6a6e5becd8484ddeaa8394007b3db65fe->leave($__internal_1d56449bb88ea9b5aec5d33f3f7b48a6a6e5becd8484ddeaa8394007b3db65fe_prof);

        
        $__internal_81e83bbc2bc06bfca8ceaba781e3f85917502c9524a20e24dd6a7dc72f905014->leave($__internal_81e83bbc2bc06bfca8ceaba781e3f85917502c9524a20e24dd6a7dc72f905014_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_af4da83e3ed4c8079575857c300288927116915c599a3781043163f47839d478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4da83e3ed4c8079575857c300288927116915c599a3781043163f47839d478->enter($__internal_af4da83e3ed4c8079575857c300288927116915c599a3781043163f47839d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ffd2306e9c125f8426461f8ea13facd392586bb62473f80eb95de06b38c415ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd2306e9c125f8426461f8ea13facd392586bb62473f80eb95de06b38c415ab->enter($__internal_ffd2306e9c125f8426461f8ea13facd392586bb62473f80eb95de06b38c415ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_ffd2306e9c125f8426461f8ea13facd392586bb62473f80eb95de06b38c415ab->leave($__internal_ffd2306e9c125f8426461f8ea13facd392586bb62473f80eb95de06b38c415ab_prof);

        
        $__internal_af4da83e3ed4c8079575857c300288927116915c599a3781043163f47839d478->leave($__internal_af4da83e3ed4c8079575857c300288927116915c599a3781043163f47839d478_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
