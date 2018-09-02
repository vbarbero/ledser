<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_c4c12c7c16b0023a93f753a8d83cdcbca2a65de815e506affda9189669b9bb45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc44b048e5bfb21a6abea60adf1dcd96b20b83c0da3ea8a99c743453946575a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc44b048e5bfb21a6abea60adf1dcd96b20b83c0da3ea8a99c743453946575a0->enter($__internal_fc44b048e5bfb21a6abea60adf1dcd96b20b83c0da3ea8a99c743453946575a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_4de8c6b5b41873198fd1ce1cdf3ec41d115ed18a0486c8dbed25d21f88268a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de8c6b5b41873198fd1ce1cdf3ec41d115ed18a0486c8dbed25d21f88268a90->enter($__internal_4de8c6b5b41873198fd1ce1cdf3ec41d115ed18a0486c8dbed25d21f88268a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc44b048e5bfb21a6abea60adf1dcd96b20b83c0da3ea8a99c743453946575a0->leave($__internal_fc44b048e5bfb21a6abea60adf1dcd96b20b83c0da3ea8a99c743453946575a0_prof);

        
        $__internal_4de8c6b5b41873198fd1ce1cdf3ec41d115ed18a0486c8dbed25d21f88268a90->leave($__internal_4de8c6b5b41873198fd1ce1cdf3ec41d115ed18a0486c8dbed25d21f88268a90_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3e07bd5e19d0d2b2919fb80c6b020020d28f2b9d1db752852930741f4f8e9d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e07bd5e19d0d2b2919fb80c6b020020d28f2b9d1db752852930741f4f8e9d85->enter($__internal_3e07bd5e19d0d2b2919fb80c6b020020d28f2b9d1db752852930741f4f8e9d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_72ca44c0ec7ee3d593a869616b8b97e50357c1417fa032b1ffca9b8bc926b37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ca44c0ec7ee3d593a869616b8b97e50357c1417fa032b1ffca9b8bc926b37e->enter($__internal_72ca44c0ec7ee3d593a869616b8b97e50357c1417fa032b1ffca9b8bc926b37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_72ca44c0ec7ee3d593a869616b8b97e50357c1417fa032b1ffca9b8bc926b37e->leave($__internal_72ca44c0ec7ee3d593a869616b8b97e50357c1417fa032b1ffca9b8bc926b37e_prof);

        
        $__internal_3e07bd5e19d0d2b2919fb80c6b020020d28f2b9d1db752852930741f4f8e9d85->leave($__internal_3e07bd5e19d0d2b2919fb80c6b020020d28f2b9d1db752852930741f4f8e9d85_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0d59b21dc3ebb0566954f4ed40d0439bb634d223e78996921966c803c4a6ea0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d59b21dc3ebb0566954f4ed40d0439bb634d223e78996921966c803c4a6ea0e->enter($__internal_0d59b21dc3ebb0566954f4ed40d0439bb634d223e78996921966c803c4a6ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_52a9aecc260b42852b58fa22d67591e04423d4d8596f38c553286e130b9a0aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a9aecc260b42852b58fa22d67591e04423d4d8596f38c553286e130b9a0aa4->enter($__internal_52a9aecc260b42852b58fa22d67591e04423d4d8596f38c553286e130b9a0aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_52a9aecc260b42852b58fa22d67591e04423d4d8596f38c553286e130b9a0aa4->leave($__internal_52a9aecc260b42852b58fa22d67591e04423d4d8596f38c553286e130b9a0aa4_prof);

        
        $__internal_0d59b21dc3ebb0566954f4ed40d0439bb634d223e78996921966c803c4a6ea0e->leave($__internal_0d59b21dc3ebb0566954f4ed40d0439bb634d223e78996921966c803c4a6ea0e_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_29460f240e683f4136ade984b4ea7c4f2be24752c33965c559f2bd1b94f24c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29460f240e683f4136ade984b4ea7c4f2be24752c33965c559f2bd1b94f24c6d->enter($__internal_29460f240e683f4136ade984b4ea7c4f2be24752c33965c559f2bd1b94f24c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8c68e6f479dff772d5d87d48709d38ce13aeaea8416677ebf539129a479eff13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c68e6f479dff772d5d87d48709d38ce13aeaea8416677ebf539129a479eff13->enter($__internal_8c68e6f479dff772d5d87d48709d38ce13aeaea8416677ebf539129a479eff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8c68e6f479dff772d5d87d48709d38ce13aeaea8416677ebf539129a479eff13->leave($__internal_8c68e6f479dff772d5d87d48709d38ce13aeaea8416677ebf539129a479eff13_prof);

        
        $__internal_29460f240e683f4136ade984b4ea7c4f2be24752c33965c559f2bd1b94f24c6d->leave($__internal_29460f240e683f4136ade984b4ea7c4f2be24752c33965c559f2bd1b94f24c6d_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1e4149a15ba0a22d12cf6762efa265a811b6dfa0f0bf549b7f5af1d12bbaa8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4149a15ba0a22d12cf6762efa265a811b6dfa0f0bf549b7f5af1d12bbaa8c2->enter($__internal_1e4149a15ba0a22d12cf6762efa265a811b6dfa0f0bf549b7f5af1d12bbaa8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ec9f6ce80bfba8be7295fe650379be9a757571a82bdd44a433bd0e2073cfa80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9f6ce80bfba8be7295fe650379be9a757571a82bdd44a433bd0e2073cfa80c->enter($__internal_ec9f6ce80bfba8be7295fe650379be9a757571a82bdd44a433bd0e2073cfa80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_ec9f6ce80bfba8be7295fe650379be9a757571a82bdd44a433bd0e2073cfa80c->leave($__internal_ec9f6ce80bfba8be7295fe650379be9a757571a82bdd44a433bd0e2073cfa80c_prof);

        
        $__internal_1e4149a15ba0a22d12cf6762efa265a811b6dfa0f0bf549b7f5af1d12bbaa8c2->leave($__internal_1e4149a15ba0a22d12cf6762efa265a811b6dfa0f0bf549b7f5af1d12bbaa8c2_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_db9592d726845927c40413db855b6239c4b0cb52b24be827225fbf2bf2c42e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9592d726845927c40413db855b6239c4b0cb52b24be827225fbf2bf2c42e8f->enter($__internal_db9592d726845927c40413db855b6239c4b0cb52b24be827225fbf2bf2c42e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_1436547a793fac18fe1bf334e5785fa68a4439e73527cfc0d7d6d5f1b7fed5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1436547a793fac18fe1bf334e5785fa68a4439e73527cfc0d7d6d5f1b7fed5ad->enter($__internal_1436547a793fac18fe1bf334e5785fa68a4439e73527cfc0d7d6d5f1b7fed5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_1436547a793fac18fe1bf334e5785fa68a4439e73527cfc0d7d6d5f1b7fed5ad->leave($__internal_1436547a793fac18fe1bf334e5785fa68a4439e73527cfc0d7d6d5f1b7fed5ad_prof);

        
        $__internal_db9592d726845927c40413db855b6239c4b0cb52b24be827225fbf2bf2c42e8f->leave($__internal_db9592d726845927c40413db855b6239c4b0cb52b24be827225fbf2bf2c42e8f_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d339ea7ccb63396a9fc47b46189fc6b6a6396f51c026d8349f176c49c758667a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d339ea7ccb63396a9fc47b46189fc6b6a6396f51c026d8349f176c49c758667a->enter($__internal_d339ea7ccb63396a9fc47b46189fc6b6a6396f51c026d8349f176c49c758667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2c421a60de171b9733a72e6219e5f3d9ef4486e2309740e30032b9a4022bedb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c421a60de171b9733a72e6219e5f3d9ef4486e2309740e30032b9a4022bedb2->enter($__internal_2c421a60de171b9733a72e6219e5f3d9ef4486e2309740e30032b9a4022bedb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_2c421a60de171b9733a72e6219e5f3d9ef4486e2309740e30032b9a4022bedb2->leave($__internal_2c421a60de171b9733a72e6219e5f3d9ef4486e2309740e30032b9a4022bedb2_prof);

        
        $__internal_d339ea7ccb63396a9fc47b46189fc6b6a6396f51c026d8349f176c49c758667a->leave($__internal_d339ea7ccb63396a9fc47b46189fc6b6a6396f51c026d8349f176c49c758667a_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f38d10efc81a9675006501be53fa367d456dbc204c395bb1c25e4bb75dd65b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38d10efc81a9675006501be53fa367d456dbc204c395bb1c25e4bb75dd65b5b->enter($__internal_f38d10efc81a9675006501be53fa367d456dbc204c395bb1c25e4bb75dd65b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1ab300ef0c3721ed34a2316e596709370c0c317ae12214d0db975c3e416413be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab300ef0c3721ed34a2316e596709370c0c317ae12214d0db975c3e416413be->enter($__internal_1ab300ef0c3721ed34a2316e596709370c0c317ae12214d0db975c3e416413be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_1ab300ef0c3721ed34a2316e596709370c0c317ae12214d0db975c3e416413be->leave($__internal_1ab300ef0c3721ed34a2316e596709370c0c317ae12214d0db975c3e416413be_prof);

        
        $__internal_f38d10efc81a9675006501be53fa367d456dbc204c395bb1c25e4bb75dd65b5b->leave($__internal_f38d10efc81a9675006501be53fa367d456dbc204c395bb1c25e4bb75dd65b5b_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_bf90d1ea96d13e85cf49543d41fd81486c5676c9d190078a3e84aecdb0a77c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf90d1ea96d13e85cf49543d41fd81486c5676c9d190078a3e84aecdb0a77c5a->enter($__internal_bf90d1ea96d13e85cf49543d41fd81486c5676c9d190078a3e84aecdb0a77c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0fc4d23d0cea12abca9304dece5f1b9efddb6bd812df547d764d387fbc7fad28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc4d23d0cea12abca9304dece5f1b9efddb6bd812df547d764d387fbc7fad28->enter($__internal_0fc4d23d0cea12abca9304dece5f1b9efddb6bd812df547d764d387fbc7fad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_0fc4d23d0cea12abca9304dece5f1b9efddb6bd812df547d764d387fbc7fad28->leave($__internal_0fc4d23d0cea12abca9304dece5f1b9efddb6bd812df547d764d387fbc7fad28_prof);

        
        $__internal_bf90d1ea96d13e85cf49543d41fd81486c5676c9d190078a3e84aecdb0a77c5a->leave($__internal_bf90d1ea96d13e85cf49543d41fd81486c5676c9d190078a3e84aecdb0a77c5a_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8f408c4aebe2f268a2df4975784b01530cd9a58431f53d98bc0cc24158c5c9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f408c4aebe2f268a2df4975784b01530cd9a58431f53d98bc0cc24158c5c9cc->enter($__internal_8f408c4aebe2f268a2df4975784b01530cd9a58431f53d98bc0cc24158c5c9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7f02efa0a9266e90ca9ddbb4fc9d107b21a41af5adbe192c6e5db637c39f0997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f02efa0a9266e90ca9ddbb4fc9d107b21a41af5adbe192c6e5db637c39f0997->enter($__internal_7f02efa0a9266e90ca9ddbb4fc9d107b21a41af5adbe192c6e5db637c39f0997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_7f02efa0a9266e90ca9ddbb4fc9d107b21a41af5adbe192c6e5db637c39f0997->leave($__internal_7f02efa0a9266e90ca9ddbb4fc9d107b21a41af5adbe192c6e5db637c39f0997_prof);

        
        $__internal_8f408c4aebe2f268a2df4975784b01530cd9a58431f53d98bc0cc24158c5c9cc->leave($__internal_8f408c4aebe2f268a2df4975784b01530cd9a58431f53d98bc0cc24158c5c9cc_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_658424d446c7f7b06e2170e49cda283447a64b1feb505e39047452d92174d5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658424d446c7f7b06e2170e49cda283447a64b1feb505e39047452d92174d5ce->enter($__internal_658424d446c7f7b06e2170e49cda283447a64b1feb505e39047452d92174d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c15cb5c859848b80e56f74e6653856f411711a27fdacb2bc68bb71f327c79c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15cb5c859848b80e56f74e6653856f411711a27fdacb2bc68bb71f327c79c49->enter($__internal_c15cb5c859848b80e56f74e6653856f411711a27fdacb2bc68bb71f327c79c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_c15cb5c859848b80e56f74e6653856f411711a27fdacb2bc68bb71f327c79c49->leave($__internal_c15cb5c859848b80e56f74e6653856f411711a27fdacb2bc68bb71f327c79c49_prof);

        
        $__internal_658424d446c7f7b06e2170e49cda283447a64b1feb505e39047452d92174d5ce->leave($__internal_658424d446c7f7b06e2170e49cda283447a64b1feb505e39047452d92174d5ce_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_683434f19277eab42dff86033418eb52be864e1f0e0e9ec131d474663eadde85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683434f19277eab42dff86033418eb52be864e1f0e0e9ec131d474663eadde85->enter($__internal_683434f19277eab42dff86033418eb52be864e1f0e0e9ec131d474663eadde85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_897e675418e9b89526ab2884a059b794d98a76a782f68c5c3ae18fdc97b4a2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897e675418e9b89526ab2884a059b794d98a76a782f68c5c3ae18fdc97b4a2ec->enter($__internal_897e675418e9b89526ab2884a059b794d98a76a782f68c5c3ae18fdc97b4a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_897e675418e9b89526ab2884a059b794d98a76a782f68c5c3ae18fdc97b4a2ec->leave($__internal_897e675418e9b89526ab2884a059b794d98a76a782f68c5c3ae18fdc97b4a2ec_prof);

        
        $__internal_683434f19277eab42dff86033418eb52be864e1f0e0e9ec131d474663eadde85->leave($__internal_683434f19277eab42dff86033418eb52be864e1f0e0e9ec131d474663eadde85_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c5c67df2e9eab69732d3aff17d5ebfb97a1cbf752aa9c191f5bac2c7fac9c332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c67df2e9eab69732d3aff17d5ebfb97a1cbf752aa9c191f5bac2c7fac9c332->enter($__internal_c5c67df2e9eab69732d3aff17d5ebfb97a1cbf752aa9c191f5bac2c7fac9c332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d7e528a20b2289ba4e7babdc1d2025db8bbdd232635820e9976eef1bc594d0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e528a20b2289ba4e7babdc1d2025db8bbdd232635820e9976eef1bc594d0fb->enter($__internal_d7e528a20b2289ba4e7babdc1d2025db8bbdd232635820e9976eef1bc594d0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_d7e528a20b2289ba4e7babdc1d2025db8bbdd232635820e9976eef1bc594d0fb->leave($__internal_d7e528a20b2289ba4e7babdc1d2025db8bbdd232635820e9976eef1bc594d0fb_prof);

        
        $__internal_c5c67df2e9eab69732d3aff17d5ebfb97a1cbf752aa9c191f5bac2c7fac9c332->leave($__internal_c5c67df2e9eab69732d3aff17d5ebfb97a1cbf752aa9c191f5bac2c7fac9c332_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_215ed0fa4ead588067e8c1681dc35fd1b5a0b01fa835de5eb33ffd9d3542d494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215ed0fa4ead588067e8c1681dc35fd1b5a0b01fa835de5eb33ffd9d3542d494->enter($__internal_215ed0fa4ead588067e8c1681dc35fd1b5a0b01fa835de5eb33ffd9d3542d494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_323c7a2114bcb5212ac4c331485b02da53fd3c9f4b2f7d652d55ef538b682d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323c7a2114bcb5212ac4c331485b02da53fd3c9f4b2f7d652d55ef538b682d43->enter($__internal_323c7a2114bcb5212ac4c331485b02da53fd3c9f4b2f7d652d55ef538b682d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_323c7a2114bcb5212ac4c331485b02da53fd3c9f4b2f7d652d55ef538b682d43->leave($__internal_323c7a2114bcb5212ac4c331485b02da53fd3c9f4b2f7d652d55ef538b682d43_prof);

        
        $__internal_215ed0fa4ead588067e8c1681dc35fd1b5a0b01fa835de5eb33ffd9d3542d494->leave($__internal_215ed0fa4ead588067e8c1681dc35fd1b5a0b01fa835de5eb33ffd9d3542d494_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d727193d7b7fde7b3ba17fef5225e913dc076387b0a08d4c23a62b5547c72753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d727193d7b7fde7b3ba17fef5225e913dc076387b0a08d4c23a62b5547c72753->enter($__internal_d727193d7b7fde7b3ba17fef5225e913dc076387b0a08d4c23a62b5547c72753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0d30546d31ff5c6d03fd7cd3a1e68b528d852d80715c83310f18edbf1011d28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d30546d31ff5c6d03fd7cd3a1e68b528d852d80715c83310f18edbf1011d28e->enter($__internal_0d30546d31ff5c6d03fd7cd3a1e68b528d852d80715c83310f18edbf1011d28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0d30546d31ff5c6d03fd7cd3a1e68b528d852d80715c83310f18edbf1011d28e->leave($__internal_0d30546d31ff5c6d03fd7cd3a1e68b528d852d80715c83310f18edbf1011d28e_prof);

        
        $__internal_d727193d7b7fde7b3ba17fef5225e913dc076387b0a08d4c23a62b5547c72753->leave($__internal_d727193d7b7fde7b3ba17fef5225e913dc076387b0a08d4c23a62b5547c72753_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ec16b77352d7c96cc80be9ab8f0c3daf54b3f266fb03bf89fb3784d7fc7e7733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec16b77352d7c96cc80be9ab8f0c3daf54b3f266fb03bf89fb3784d7fc7e7733->enter($__internal_ec16b77352d7c96cc80be9ab8f0c3daf54b3f266fb03bf89fb3784d7fc7e7733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c1e288650f6788c22d13343d06870ce649abe63b24f518d8cd65cd64919519db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e288650f6788c22d13343d06870ce649abe63b24f518d8cd65cd64919519db->enter($__internal_c1e288650f6788c22d13343d06870ce649abe63b24f518d8cd65cd64919519db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c1e288650f6788c22d13343d06870ce649abe63b24f518d8cd65cd64919519db->leave($__internal_c1e288650f6788c22d13343d06870ce649abe63b24f518d8cd65cd64919519db_prof);

        
        $__internal_ec16b77352d7c96cc80be9ab8f0c3daf54b3f266fb03bf89fb3784d7fc7e7733->leave($__internal_ec16b77352d7c96cc80be9ab8f0c3daf54b3f266fb03bf89fb3784d7fc7e7733_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7513718973a7f34c252c3609d38e9cb07449c675bbfd59f9dce58c8ce29f904b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7513718973a7f34c252c3609d38e9cb07449c675bbfd59f9dce58c8ce29f904b->enter($__internal_7513718973a7f34c252c3609d38e9cb07449c675bbfd59f9dce58c8ce29f904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a3297d59ca34da155ea81db6c9e9f4a52049ed21b9053e8ba1809da531f52ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3297d59ca34da155ea81db6c9e9f4a52049ed21b9053e8ba1809da531f52ec2->enter($__internal_a3297d59ca34da155ea81db6c9e9f4a52049ed21b9053e8ba1809da531f52ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a3297d59ca34da155ea81db6c9e9f4a52049ed21b9053e8ba1809da531f52ec2->leave($__internal_a3297d59ca34da155ea81db6c9e9f4a52049ed21b9053e8ba1809da531f52ec2_prof);

        
        $__internal_7513718973a7f34c252c3609d38e9cb07449c675bbfd59f9dce58c8ce29f904b->leave($__internal_7513718973a7f34c252c3609d38e9cb07449c675bbfd59f9dce58c8ce29f904b_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_346bdbdde6a8b055e83d9b51c01d3404aa61dc6229301066b6bffe9d06546778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346bdbdde6a8b055e83d9b51c01d3404aa61dc6229301066b6bffe9d06546778->enter($__internal_346bdbdde6a8b055e83d9b51c01d3404aa61dc6229301066b6bffe9d06546778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7864c0f57758718908b0f851dab34ef138f47c2ad798005bdc06ea65a97e7b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7864c0f57758718908b0f851dab34ef138f47c2ad798005bdc06ea65a97e7b5b->enter($__internal_7864c0f57758718908b0f851dab34ef138f47c2ad798005bdc06ea65a97e7b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_7864c0f57758718908b0f851dab34ef138f47c2ad798005bdc06ea65a97e7b5b->leave($__internal_7864c0f57758718908b0f851dab34ef138f47c2ad798005bdc06ea65a97e7b5b_prof);

        
        $__internal_346bdbdde6a8b055e83d9b51c01d3404aa61dc6229301066b6bffe9d06546778->leave($__internal_346bdbdde6a8b055e83d9b51c01d3404aa61dc6229301066b6bffe9d06546778_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0a5b51f038675a52be1a12933eefb884743abaabca91d27fad7e35d368ce6e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5b51f038675a52be1a12933eefb884743abaabca91d27fad7e35d368ce6e65->enter($__internal_0a5b51f038675a52be1a12933eefb884743abaabca91d27fad7e35d368ce6e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1760eb6cf1da24143c779345bbb5ac85517a3c69ca70be32f359f86842042ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1760eb6cf1da24143c779345bbb5ac85517a3c69ca70be32f359f86842042ae3->enter($__internal_1760eb6cf1da24143c779345bbb5ac85517a3c69ca70be32f359f86842042ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_1760eb6cf1da24143c779345bbb5ac85517a3c69ca70be32f359f86842042ae3->leave($__internal_1760eb6cf1da24143c779345bbb5ac85517a3c69ca70be32f359f86842042ae3_prof);

        
        $__internal_0a5b51f038675a52be1a12933eefb884743abaabca91d27fad7e35d368ce6e65->leave($__internal_0a5b51f038675a52be1a12933eefb884743abaabca91d27fad7e35d368ce6e65_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4620acb78eb69fd3733075e0083f360724f9bd0c9f4d979480ac4d4a1e32f0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4620acb78eb69fd3733075e0083f360724f9bd0c9f4d979480ac4d4a1e32f0fa->enter($__internal_4620acb78eb69fd3733075e0083f360724f9bd0c9f4d979480ac4d4a1e32f0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0589eae4219eb3445d2c217b64db4033130be17689ac6c8dc715421d02de40d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0589eae4219eb3445d2c217b64db4033130be17689ac6c8dc715421d02de40d7->enter($__internal_0589eae4219eb3445d2c217b64db4033130be17689ac6c8dc715421d02de40d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0589eae4219eb3445d2c217b64db4033130be17689ac6c8dc715421d02de40d7->leave($__internal_0589eae4219eb3445d2c217b64db4033130be17689ac6c8dc715421d02de40d7_prof);

        
        $__internal_4620acb78eb69fd3733075e0083f360724f9bd0c9f4d979480ac4d4a1e32f0fa->leave($__internal_4620acb78eb69fd3733075e0083f360724f9bd0c9f4d979480ac4d4a1e32f0fa_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9f2ab83d82c43b0abe5483f62f6e8b3b9c370be3bed087d1bc1c3598bed2afa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2ab83d82c43b0abe5483f62f6e8b3b9c370be3bed087d1bc1c3598bed2afa9->enter($__internal_9f2ab83d82c43b0abe5483f62f6e8b3b9c370be3bed087d1bc1c3598bed2afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_88c4f317a5e904c840550448c9203bd16718b234d87a6df670a1ff0c6f79ff68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c4f317a5e904c840550448c9203bd16718b234d87a6df670a1ff0c6f79ff68->enter($__internal_88c4f317a5e904c840550448c9203bd16718b234d87a6df670a1ff0c6f79ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_88c4f317a5e904c840550448c9203bd16718b234d87a6df670a1ff0c6f79ff68->leave($__internal_88c4f317a5e904c840550448c9203bd16718b234d87a6df670a1ff0c6f79ff68_prof);

        
        $__internal_9f2ab83d82c43b0abe5483f62f6e8b3b9c370be3bed087d1bc1c3598bed2afa9->leave($__internal_9f2ab83d82c43b0abe5483f62f6e8b3b9c370be3bed087d1bc1c3598bed2afa9_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cd08b398fd4411f3cacffb7e9799134dee956e03a2604658ee6721b1d832392b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd08b398fd4411f3cacffb7e9799134dee956e03a2604658ee6721b1d832392b->enter($__internal_cd08b398fd4411f3cacffb7e9799134dee956e03a2604658ee6721b1d832392b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8144997f22a585ae5d23d9413dcc15e954b582133a2116e97fd26c71b5529d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8144997f22a585ae5d23d9413dcc15e954b582133a2116e97fd26c71b5529d27->enter($__internal_8144997f22a585ae5d23d9413dcc15e954b582133a2116e97fd26c71b5529d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8144997f22a585ae5d23d9413dcc15e954b582133a2116e97fd26c71b5529d27->leave($__internal_8144997f22a585ae5d23d9413dcc15e954b582133a2116e97fd26c71b5529d27_prof);

        
        $__internal_cd08b398fd4411f3cacffb7e9799134dee956e03a2604658ee6721b1d832392b->leave($__internal_cd08b398fd4411f3cacffb7e9799134dee956e03a2604658ee6721b1d832392b_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b5dc581828c0daf3797e8a0afc1fde5ddff1da21842f2e10a0c5f867c6771561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dc581828c0daf3797e8a0afc1fde5ddff1da21842f2e10a0c5f867c6771561->enter($__internal_b5dc581828c0daf3797e8a0afc1fde5ddff1da21842f2e10a0c5f867c6771561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e09db41ccf4b8fa001b3bb165553e9e2eb41e6cb59767ef093c9fe3304a24c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09db41ccf4b8fa001b3bb165553e9e2eb41e6cb59767ef093c9fe3304a24c07->enter($__internal_e09db41ccf4b8fa001b3bb165553e9e2eb41e6cb59767ef093c9fe3304a24c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e09db41ccf4b8fa001b3bb165553e9e2eb41e6cb59767ef093c9fe3304a24c07->leave($__internal_e09db41ccf4b8fa001b3bb165553e9e2eb41e6cb59767ef093c9fe3304a24c07_prof);

        
        $__internal_b5dc581828c0daf3797e8a0afc1fde5ddff1da21842f2e10a0c5f867c6771561->leave($__internal_b5dc581828c0daf3797e8a0afc1fde5ddff1da21842f2e10a0c5f867c6771561_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c29e82f3ecb30644747d9f59464c2ee01d2ff7e9746b2e3a6ec2ad05fd0fe82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29e82f3ecb30644747d9f59464c2ee01d2ff7e9746b2e3a6ec2ad05fd0fe82f->enter($__internal_c29e82f3ecb30644747d9f59464c2ee01d2ff7e9746b2e3a6ec2ad05fd0fe82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4bcdb770cfddfa66fea70686470216abf1ca08d824a43f6c099ea755bff6a199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcdb770cfddfa66fea70686470216abf1ca08d824a43f6c099ea755bff6a199->enter($__internal_4bcdb770cfddfa66fea70686470216abf1ca08d824a43f6c099ea755bff6a199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_4bcdb770cfddfa66fea70686470216abf1ca08d824a43f6c099ea755bff6a199->leave($__internal_4bcdb770cfddfa66fea70686470216abf1ca08d824a43f6c099ea755bff6a199_prof);

        
        $__internal_c29e82f3ecb30644747d9f59464c2ee01d2ff7e9746b2e3a6ec2ad05fd0fe82f->leave($__internal_c29e82f3ecb30644747d9f59464c2ee01d2ff7e9746b2e3a6ec2ad05fd0fe82f_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_97fcf98bdb41e0197c030eb785ea6339686625bdbb54c64b73009b7c1999b7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fcf98bdb41e0197c030eb785ea6339686625bdbb54c64b73009b7c1999b7b1->enter($__internal_97fcf98bdb41e0197c030eb785ea6339686625bdbb54c64b73009b7c1999b7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_90ae7223d843ef0e37c3aa01acb915087e3a7a3afd5065726e4f8436efba2367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ae7223d843ef0e37c3aa01acb915087e3a7a3afd5065726e4f8436efba2367->enter($__internal_90ae7223d843ef0e37c3aa01acb915087e3a7a3afd5065726e4f8436efba2367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_90ae7223d843ef0e37c3aa01acb915087e3a7a3afd5065726e4f8436efba2367->leave($__internal_90ae7223d843ef0e37c3aa01acb915087e3a7a3afd5065726e4f8436efba2367_prof);

        
        $__internal_97fcf98bdb41e0197c030eb785ea6339686625bdbb54c64b73009b7c1999b7b1->leave($__internal_97fcf98bdb41e0197c030eb785ea6339686625bdbb54c64b73009b7c1999b7b1_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6837d7a316c9062e226cd77422ddd9e878df08a74afd1143cabc491c5dfff144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6837d7a316c9062e226cd77422ddd9e878df08a74afd1143cabc491c5dfff144->enter($__internal_6837d7a316c9062e226cd77422ddd9e878df08a74afd1143cabc491c5dfff144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6ee8b2a8cb8850e3bc6f9b7c315c05529ae194980145c28fa6508e42a4f2e35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee8b2a8cb8850e3bc6f9b7c315c05529ae194980145c28fa6508e42a4f2e35d->enter($__internal_6ee8b2a8cb8850e3bc6f9b7c315c05529ae194980145c28fa6508e42a4f2e35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6ee8b2a8cb8850e3bc6f9b7c315c05529ae194980145c28fa6508e42a4f2e35d->leave($__internal_6ee8b2a8cb8850e3bc6f9b7c315c05529ae194980145c28fa6508e42a4f2e35d_prof);

        
        $__internal_6837d7a316c9062e226cd77422ddd9e878df08a74afd1143cabc491c5dfff144->leave($__internal_6837d7a316c9062e226cd77422ddd9e878df08a74afd1143cabc491c5dfff144_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
