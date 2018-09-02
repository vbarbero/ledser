<?php

/* AppBundle:Company:createContact.html.twig */
class __TwigTemplate_f85affa7f9e886b4a336c59b6fdd366e9c94e274f5a2c5f575c8e965e9e52b97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:createContact.html.twig", 1);
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
        $__internal_50ac6d1e9b849e91e9b098cad0e1ccac6a96040127ed883507d3b499523bdbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ac6d1e9b849e91e9b098cad0e1ccac6a96040127ed883507d3b499523bdbe5->enter($__internal_50ac6d1e9b849e91e9b098cad0e1ccac6a96040127ed883507d3b499523bdbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:createContact.html.twig"));

        $__internal_41a7fc5f6c9b4b904af08a6fe164d2b8c5c44e897dfd2f2a21bdcc37647f8c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a7fc5f6c9b4b904af08a6fe164d2b8c5c44e897dfd2f2a21bdcc37647f8c1b->enter($__internal_41a7fc5f6c9b4b904af08a6fe164d2b8c5c44e897dfd2f2a21bdcc37647f8c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:createContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ac6d1e9b849e91e9b098cad0e1ccac6a96040127ed883507d3b499523bdbe5->leave($__internal_50ac6d1e9b849e91e9b098cad0e1ccac6a96040127ed883507d3b499523bdbe5_prof);

        
        $__internal_41a7fc5f6c9b4b904af08a6fe164d2b8c5c44e897dfd2f2a21bdcc37647f8c1b->leave($__internal_41a7fc5f6c9b4b904af08a6fe164d2b8c5c44e897dfd2f2a21bdcc37647f8c1b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_45ec5dbf1d3a71261ea7680a719a10953bffbf7aed9dbdfdc89d528b7cb1607f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ec5dbf1d3a71261ea7680a719a10953bffbf7aed9dbdfdc89d528b7cb1607f->enter($__internal_45ec5dbf1d3a71261ea7680a719a10953bffbf7aed9dbdfdc89d528b7cb1607f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8e0bf2d4aabe832a950a992ad48e72cd1228ad91545122d118f38beb8243a17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0bf2d4aabe832a950a992ad48e72cd1228ad91545122d118f38beb8243a17d->enter($__internal_8e0bf2d4aabe832a950a992ad48e72cd1228ad91545122d118f38beb8243a17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Conctact</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_8e0bf2d4aabe832a950a992ad48e72cd1228ad91545122d118f38beb8243a17d->leave($__internal_8e0bf2d4aabe832a950a992ad48e72cd1228ad91545122d118f38beb8243a17d_prof);

        
        $__internal_45ec5dbf1d3a71261ea7680a719a10953bffbf7aed9dbdfdc89d528b7cb1607f->leave($__internal_45ec5dbf1d3a71261ea7680a719a10953bffbf7aed9dbdfdc89d528b7cb1607f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:createContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  115 => 45,  109 => 42,  100 => 36,  94 => 33,  85 => 27,  79 => 24,  70 => 18,  64 => 15,  58 => 12,  49 => 5,  40 => 4,  11 => 1,);
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
            <h2>Create Conctact</h2>

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
                {{ form_label(form.name) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.name) }}
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
                {{ form_label(form.email) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.email) }}
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    {{ form_end(form) }}
    </div>
{% endblock %}
", "AppBundle:Company:createContact.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/createContact.html.twig");
    }
}
