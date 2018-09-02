<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b4c0de883b8e88bdb3778efdff3db0f37a69f2023c7131aff2777791cd73b7df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4147a592f756aa0e9d567632520b0f5a98aaa10ea16dddeafa14128a3426bbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4147a592f756aa0e9d567632520b0f5a98aaa10ea16dddeafa14128a3426bbf1->enter($__internal_4147a592f756aa0e9d567632520b0f5a98aaa10ea16dddeafa14128a3426bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5f3adbfff56575467a5b6bd945f7d589fcc93e9f116efb83f18114337e816340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3adbfff56575467a5b6bd945f7d589fcc93e9f116efb83f18114337e816340->enter($__internal_5f3adbfff56575467a5b6bd945f7d589fcc93e9f116efb83f18114337e816340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4147a592f756aa0e9d567632520b0f5a98aaa10ea16dddeafa14128a3426bbf1->leave($__internal_4147a592f756aa0e9d567632520b0f5a98aaa10ea16dddeafa14128a3426bbf1_prof);

        
        $__internal_5f3adbfff56575467a5b6bd945f7d589fcc93e9f116efb83f18114337e816340->leave($__internal_5f3adbfff56575467a5b6bd945f7d589fcc93e9f116efb83f18114337e816340_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75050b0fddae1bb8af0d9f23f8ba3ce55824c3987c4eef386752f01981868102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75050b0fddae1bb8af0d9f23f8ba3ce55824c3987c4eef386752f01981868102->enter($__internal_75050b0fddae1bb8af0d9f23f8ba3ce55824c3987c4eef386752f01981868102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a92dd2c043992fddfef629527fdcc67930a5e448ca632172286e5a400af5069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92dd2c043992fddfef629527fdcc67930a5e448ca632172286e5a400af5069b->enter($__internal_a92dd2c043992fddfef629527fdcc67930a5e448ca632172286e5a400af5069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a92dd2c043992fddfef629527fdcc67930a5e448ca632172286e5a400af5069b->leave($__internal_a92dd2c043992fddfef629527fdcc67930a5e448ca632172286e5a400af5069b_prof);

        
        $__internal_75050b0fddae1bb8af0d9f23f8ba3ce55824c3987c4eef386752f01981868102->leave($__internal_75050b0fddae1bb8af0d9f23f8ba3ce55824c3987c4eef386752f01981868102_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_52fec6d7a3a358099be30825f3bf217e9f02b22395b154f4da0d411830ba5410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fec6d7a3a358099be30825f3bf217e9f02b22395b154f4da0d411830ba5410->enter($__internal_52fec6d7a3a358099be30825f3bf217e9f02b22395b154f4da0d411830ba5410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7b89e9351b5e84ab7a2560b9381a95c1f72f1709264530eaffb34cf9dde7d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b89e9351b5e84ab7a2560b9381a95c1f72f1709264530eaffb34cf9dde7d85->enter($__internal_c7b89e9351b5e84ab7a2560b9381a95c1f72f1709264530eaffb34cf9dde7d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c7b89e9351b5e84ab7a2560b9381a95c1f72f1709264530eaffb34cf9dde7d85->leave($__internal_c7b89e9351b5e84ab7a2560b9381a95c1f72f1709264530eaffb34cf9dde7d85_prof);

        
        $__internal_52fec6d7a3a358099be30825f3bf217e9f02b22395b154f4da0d411830ba5410->leave($__internal_52fec6d7a3a358099be30825f3bf217e9f02b22395b154f4da0d411830ba5410_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9fe8e5cdb930d16eee0fac559bcce5942497e52263337d0ac7dc8984cf6dbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fe8e5cdb930d16eee0fac559bcce5942497e52263337d0ac7dc8984cf6dbd8->enter($__internal_c9fe8e5cdb930d16eee0fac559bcce5942497e52263337d0ac7dc8984cf6dbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a28c5faf2d55caed89546a6eee90860c30d388d1594b37b33040586534a40bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28c5faf2d55caed89546a6eee90860c30d388d1594b37b33040586534a40bd6->enter($__internal_a28c5faf2d55caed89546a6eee90860c30d388d1594b37b33040586534a40bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a28c5faf2d55caed89546a6eee90860c30d388d1594b37b33040586534a40bd6->leave($__internal_a28c5faf2d55caed89546a6eee90860c30d388d1594b37b33040586534a40bd6_prof);

        
        $__internal_c9fe8e5cdb930d16eee0fac559bcce5942497e52263337d0ac7dc8984cf6dbd8->leave($__internal_c9fe8e5cdb930d16eee0fac559bcce5942497e52263337d0ac7dc8984cf6dbd8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
