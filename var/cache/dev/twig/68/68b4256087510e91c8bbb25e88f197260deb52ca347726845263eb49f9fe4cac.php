<?php

/* form_table_layout.html.twig */
class __TwigTemplate_fe7c3223419c8984773b5fde72bd22f00ad102440e2a9f26e6e04bc75449b48c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1074988cd9d0c75ffc773c74e253aa5592f4da0524a9c1a057a3e5c3718cdda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1074988cd9d0c75ffc773c74e253aa5592f4da0524a9c1a057a3e5c3718cdda->enter($__internal_d1074988cd9d0c75ffc773c74e253aa5592f4da0524a9c1a057a3e5c3718cdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_f8e42ce24a335cf14fdc84793c8702ddf78e72988c35af5b6ae2fa2ff2526c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e42ce24a335cf14fdc84793c8702ddf78e72988c35af5b6ae2fa2ff2526c36->enter($__internal_f8e42ce24a335cf14fdc84793c8702ddf78e72988c35af5b6ae2fa2ff2526c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_d1074988cd9d0c75ffc773c74e253aa5592f4da0524a9c1a057a3e5c3718cdda->leave($__internal_d1074988cd9d0c75ffc773c74e253aa5592f4da0524a9c1a057a3e5c3718cdda_prof);

        
        $__internal_f8e42ce24a335cf14fdc84793c8702ddf78e72988c35af5b6ae2fa2ff2526c36->leave($__internal_f8e42ce24a335cf14fdc84793c8702ddf78e72988c35af5b6ae2fa2ff2526c36_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f8912e631910960164a3baed2afce946dfcb89902872d6a77e2abd721da17041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8912e631910960164a3baed2afce946dfcb89902872d6a77e2abd721da17041->enter($__internal_f8912e631910960164a3baed2afce946dfcb89902872d6a77e2abd721da17041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0d66285a04b67f83d95288943bca205e13c3570883e857db4a4f27ea1b7f08d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d66285a04b67f83d95288943bca205e13c3570883e857db4a4f27ea1b7f08d0->enter($__internal_0d66285a04b67f83d95288943bca205e13c3570883e857db4a4f27ea1b7f08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_0d66285a04b67f83d95288943bca205e13c3570883e857db4a4f27ea1b7f08d0->leave($__internal_0d66285a04b67f83d95288943bca205e13c3570883e857db4a4f27ea1b7f08d0_prof);

        
        $__internal_f8912e631910960164a3baed2afce946dfcb89902872d6a77e2abd721da17041->leave($__internal_f8912e631910960164a3baed2afce946dfcb89902872d6a77e2abd721da17041_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_666e5ed3b7038fa4839b0c036c969125f04302aba6e0fd019727214b6b0746e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666e5ed3b7038fa4839b0c036c969125f04302aba6e0fd019727214b6b0746e1->enter($__internal_666e5ed3b7038fa4839b0c036c969125f04302aba6e0fd019727214b6b0746e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b2a58ffcee2dee268f3d7685909557430dfbf2ff1635f4e042907a20f7ad60cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a58ffcee2dee268f3d7685909557430dfbf2ff1635f4e042907a20f7ad60cf->enter($__internal_b2a58ffcee2dee268f3d7685909557430dfbf2ff1635f4e042907a20f7ad60cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b2a58ffcee2dee268f3d7685909557430dfbf2ff1635f4e042907a20f7ad60cf->leave($__internal_b2a58ffcee2dee268f3d7685909557430dfbf2ff1635f4e042907a20f7ad60cf_prof);

        
        $__internal_666e5ed3b7038fa4839b0c036c969125f04302aba6e0fd019727214b6b0746e1->leave($__internal_666e5ed3b7038fa4839b0c036c969125f04302aba6e0fd019727214b6b0746e1_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_2ddbc9fcc062e603fb2c03eaa04a8c959f52f8f6ea03664ca165975c9c6699e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ddbc9fcc062e603fb2c03eaa04a8c959f52f8f6ea03664ca165975c9c6699e9->enter($__internal_2ddbc9fcc062e603fb2c03eaa04a8c959f52f8f6ea03664ca165975c9c6699e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_5a247f438256a6145043ba206f93c626f57c1a41467f6be9332ef2d37bf4cb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a247f438256a6145043ba206f93c626f57c1a41467f6be9332ef2d37bf4cb3f->enter($__internal_5a247f438256a6145043ba206f93c626f57c1a41467f6be9332ef2d37bf4cb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_5a247f438256a6145043ba206f93c626f57c1a41467f6be9332ef2d37bf4cb3f->leave($__internal_5a247f438256a6145043ba206f93c626f57c1a41467f6be9332ef2d37bf4cb3f_prof);

        
        $__internal_2ddbc9fcc062e603fb2c03eaa04a8c959f52f8f6ea03664ca165975c9c6699e9->leave($__internal_2ddbc9fcc062e603fb2c03eaa04a8c959f52f8f6ea03664ca165975c9c6699e9_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_681fcc9dcb6adb09eaa0ef922bb6fbe4a2c25ba199035ad63941cdd73a40b103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681fcc9dcb6adb09eaa0ef922bb6fbe4a2c25ba199035ad63941cdd73a40b103->enter($__internal_681fcc9dcb6adb09eaa0ef922bb6fbe4a2c25ba199035ad63941cdd73a40b103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_63d1fbf5dcfff46b73bfe422fb6cac597408643d7f17fb112987f81557c58808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d1fbf5dcfff46b73bfe422fb6cac597408643d7f17fb112987f81557c58808->enter($__internal_63d1fbf5dcfff46b73bfe422fb6cac597408643d7f17fb112987f81557c58808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_63d1fbf5dcfff46b73bfe422fb6cac597408643d7f17fb112987f81557c58808->leave($__internal_63d1fbf5dcfff46b73bfe422fb6cac597408643d7f17fb112987f81557c58808_prof);

        
        $__internal_681fcc9dcb6adb09eaa0ef922bb6fbe4a2c25ba199035ad63941cdd73a40b103->leave($__internal_681fcc9dcb6adb09eaa0ef922bb6fbe4a2c25ba199035ad63941cdd73a40b103_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
