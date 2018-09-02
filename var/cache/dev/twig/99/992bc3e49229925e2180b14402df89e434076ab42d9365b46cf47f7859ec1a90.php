<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_eaa06575fa5ab607e2548aa4a929738f0942d82baf836d58b2eb6da6c9b63465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3deb36f4532830fe18f9c85979f5933228f9c176e83034a82e9eeb0aae88edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3deb36f4532830fe18f9c85979f5933228f9c176e83034a82e9eeb0aae88edf->enter($__internal_c3deb36f4532830fe18f9c85979f5933228f9c176e83034a82e9eeb0aae88edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_bfa96af823b1579ee4e36aff09d13f06dd8dc54e8863dfa72fc12e7e4bff5599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa96af823b1579ee4e36aff09d13f06dd8dc54e8863dfa72fc12e7e4bff5599->enter($__internal_bfa96af823b1579ee4e36aff09d13f06dd8dc54e8863dfa72fc12e7e4bff5599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"es\">

<head>

    <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta charset=\"utf-8\">
    ";
        // line 10
        $this->displayBlock('styles', $context, $blocks);
        // line 19
        echo "</head>
<body>

        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "    ";
        // line 75
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 80
        echo "</body>";
        
        $__internal_c3deb36f4532830fe18f9c85979f5933228f9c176e83034a82e9eeb0aae88edf->leave($__internal_c3deb36f4532830fe18f9c85979f5933228f9c176e83034a82e9eeb0aae88edf_prof);

        
        $__internal_bfa96af823b1579ee4e36aff09d13f06dd8dc54e8863dfa72fc12e7e4bff5599->leave($__internal_bfa96af823b1579ee4e36aff09d13f06dd8dc54e8863dfa72fc12e7e4bff5599_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eda039eeb5147cfb16caddc3824751933ecef312507cf26420a1ef12ea70ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eda039eeb5147cfb16caddc3824751933ecef312507cf26420a1ef12ea70ac7->enter($__internal_7eda039eeb5147cfb16caddc3824751933ecef312507cf26420a1ef12ea70ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d51d5215a1781706fa33540b8580db9015ba8afa3212e18845f7ed7cecc899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d51d5215a1781706fa33540b8580db9015ba8afa3212e18845f7ed7cecc899b->enter($__internal_1d51d5215a1781706fa33540b8580db9015ba8afa3212e18845f7ed7cecc899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LedSer"), "html", null, true);
        
        $__internal_1d51d5215a1781706fa33540b8580db9015ba8afa3212e18845f7ed7cecc899b->leave($__internal_1d51d5215a1781706fa33540b8580db9015ba8afa3212e18845f7ed7cecc899b_prof);

        
        $__internal_7eda039eeb5147cfb16caddc3824751933ecef312507cf26420a1ef12ea70ac7->leave($__internal_7eda039eeb5147cfb16caddc3824751933ecef312507cf26420a1ef12ea70ac7_prof);

    }

    // line 10
    public function block_styles($context, array $blocks = array())
    {
        $__internal_4a84a8b156b1edb205aed0c541f253ee3b58450e070e428bf2a03c199c299dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a84a8b156b1edb205aed0c541f253ee3b58450e070e428bf2a03c199c299dd9->enter($__internal_4a84a8b156b1edb205aed0c541f253ee3b58450e070e428bf2a03c199c299dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_b51e3b6600c5637ab5efe474a4f9b4e0aa1587c8618d5fd03d31b4e1dcd9913f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51e3b6600c5637ab5efe474a4f9b4e0aa1587c8618d5fd03d31b4e1dcd9913f->enter($__internal_b51e3b6600c5637ab5efe474a4f9b4e0aa1587c8618d5fd03d31b4e1dcd9913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" >
        <style>
            .container{
                padding: 6rem 2rem;
            }
        </style>

    ";
        
        $__internal_b51e3b6600c5637ab5efe474a4f9b4e0aa1587c8618d5fd03d31b4e1dcd9913f->leave($__internal_b51e3b6600c5637ab5efe474a4f9b4e0aa1587c8618d5fd03d31b4e1dcd9913f_prof);

        
        $__internal_4a84a8b156b1edb205aed0c541f253ee3b58450e070e428bf2a03c199c299dd9->leave($__internal_4a84a8b156b1edb205aed0c541f253ee3b58450e070e428bf2a03c199c299dd9_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f2d7fb5ef0bfeb34e1ef8d7bfe430f3b321bf2ec4412d1beb7f4f15e8db872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f2d7fb5ef0bfeb34e1ef8d7bfe430f3b321bf2ec4412d1beb7f4f15e8db872->enter($__internal_e6f2d7fb5ef0bfeb34e1ef8d7bfe430f3b321bf2ec4412d1beb7f4f15e8db872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64a5ce5e843a0a6f2bae546650af9a3b127e1426f96b28d18756116cd76a0da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a5ce5e843a0a6f2bae546650af9a3b127e1426f96b28d18756116cd76a0da9->enter($__internal_64a5ce5e843a0a6f2bae546650af9a3b127e1426f96b28d18756116cd76a0da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "            <main role=\"main\">
                <div class=\"container\">
                    ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "
                </div> <!-- /container -->
            </main>
            ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
        ";
        
        $__internal_64a5ce5e843a0a6f2bae546650af9a3b127e1426f96b28d18756116cd76a0da9->leave($__internal_64a5ce5e843a0a6f2bae546650af9a3b127e1426f96b28d18756116cd76a0da9_prof);

        
        $__internal_e6f2d7fb5ef0bfeb34e1ef8d7bfe430f3b321bf2ec4412d1beb7f4f15e8db872->leave($__internal_e6f2d7fb5ef0bfeb34e1ef8d7bfe430f3b321bf2ec4412d1beb7f4f15e8db872_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_78c153bcd34b9253d08f19783f4c973ca81fbf05bd4e7ae2649f19fc8f90b064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c153bcd34b9253d08f19783f4c973ca81fbf05bd4e7ae2649f19fc8f90b064->enter($__internal_78c153bcd34b9253d08f19783f4c973ca81fbf05bd4e7ae2649f19fc8f90b064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d0812234a0c4e192763d9191b96212a63b34699fb4dba327f41b9c7c7247ba7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0812234a0c4e192763d9191b96212a63b34699fb4dba327f41b9c7c7247ba7e->enter($__internal_d0812234a0c4e192763d9191b96212a63b34699fb4dba327f41b9c7c7247ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 25
        echo "
                ";
        // line 26
        $this->loadTemplate("AppBundle:partials:header.html.twig", "AppBundle::layout.html.twig", 26)->display($context);
        // line 27
        echo "
            ";
        
        $__internal_d0812234a0c4e192763d9191b96212a63b34699fb4dba327f41b9c7c7247ba7e->leave($__internal_d0812234a0c4e192763d9191b96212a63b34699fb4dba327f41b9c7c7247ba7e_prof);

        
        $__internal_78c153bcd34b9253d08f19783f4c973ca81fbf05bd4e7ae2649f19fc8f90b064->leave($__internal_78c153bcd34b9253d08f19783f4c973ca81fbf05bd4e7ae2649f19fc8f90b064_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4c95fba44242a409b61bab1c1658be293d7ca34ab801e5d88a44c833ab64db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c95fba44242a409b61bab1c1658be293d7ca34ab801e5d88a44c833ab64db3->enter($__internal_b4c95fba44242a409b61bab1c1658be293d7ca34ab801e5d88a44c833ab64db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26db2a4c6572f19171df23b5cc2f99aec33ca3add26fdec816e8216e15cc7542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26db2a4c6572f19171df23b5cc2f99aec33ca3add26fdec816e8216e15cc7542->enter($__internal_26db2a4c6572f19171df23b5cc2f99aec33ca3add26fdec816e8216e15cc7542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "

                    <!-- Main jumbotron for a primary marketing message or call to action -->
                    ";
        // line 36
        echo "                        ";
        // line 37
        echo "                            ";
        // line 38
        echo "                            ";
        // line 39
        echo "                            ";
        // line 40
        echo "                        ";
        // line 41
        echo "                    ";
        // line 42
        echo "

                        <!-- Example row of columns -->
                        ";
        // line 46
        echo "                            ";
        // line 47
        echo "                                ";
        // line 48
        echo "                                ";
        // line 49
        echo "                                ";
        // line 50
        echo "                            ";
        // line 51
        echo "                            ";
        // line 52
        echo "                                ";
        // line 53
        echo "                                ";
        // line 54
        echo "                                ";
        // line 55
        echo "                            ";
        // line 56
        echo "                            ";
        // line 57
        echo "                                ";
        // line 58
        echo "                                ";
        // line 59
        echo "                                ";
        // line 60
        echo "                            ";
        // line 61
        echo "                        ";
        // line 62
        echo "                        ";
        // line 63
        echo "                        ";
        
        $__internal_26db2a4c6572f19171df23b5cc2f99aec33ca3add26fdec816e8216e15cc7542->leave($__internal_26db2a4c6572f19171df23b5cc2f99aec33ca3add26fdec816e8216e15cc7542_prof);

        
        $__internal_b4c95fba44242a409b61bab1c1658be293d7ca34ab801e5d88a44c833ab64db3->leave($__internal_b4c95fba44242a409b61bab1c1658be293d7ca34ab801e5d88a44c833ab64db3_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b15a0fee9820f564ef4d5ac73773856975fbb58389d00c74ce0dc633ed16e5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15a0fee9820f564ef4d5ac73773856975fbb58389d00c74ce0dc633ed16e5f5->enter($__internal_b15a0fee9820f564ef4d5ac73773856975fbb58389d00c74ce0dc633ed16e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8620b33d3c33e679079e8d69494c152d799dfb7b00c5ac6ea6a593c7559d3b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8620b33d3c33e679079e8d69494c152d799dfb7b00c5ac6ea6a593c7559d3b3f->enter($__internal_8620b33d3c33e679079e8d69494c152d799dfb7b00c5ac6ea6a593c7559d3b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 68
        echo "
                ";
        // line 69
        $this->loadTemplate("AppBundle:partials:footer.html.twig", "AppBundle::layout.html.twig", 69)->display($context);
        // line 70
        echo "
            ";
        
        $__internal_8620b33d3c33e679079e8d69494c152d799dfb7b00c5ac6ea6a593c7559d3b3f->leave($__internal_8620b33d3c33e679079e8d69494c152d799dfb7b00c5ac6ea6a593c7559d3b3f_prof);

        
        $__internal_b15a0fee9820f564ef4d5ac73773856975fbb58389d00c74ce0dc633ed16e5f5->leave($__internal_b15a0fee9820f564ef4d5ac73773856975fbb58389d00c74ce0dc633ed16e5f5_prof);

    }

    // line 75
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d8a5e112f697ba7ad90b593064cb309a0a7570187e13efa85fe7a6e8d35bc99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a5e112f697ba7ad90b593064cb309a0a7570187e13efa85fe7a6e8d35bc99f->enter($__internal_d8a5e112f697ba7ad90b593064cb309a0a7570187e13efa85fe7a6e8d35bc99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f5964769a13d441e996d153ca9a956f0e3f59a2d19c45f48739472126a35da43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5964769a13d441e996d153ca9a956f0e3f59a2d19c45f48739472126a35da43->enter($__internal_f5964769a13d441e996d153ca9a956f0e3f59a2d19c45f48739472126a35da43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 76
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.slim.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_f5964769a13d441e996d153ca9a956f0e3f59a2d19c45f48739472126a35da43->leave($__internal_f5964769a13d441e996d153ca9a956f0e3f59a2d19c45f48739472126a35da43_prof);

        
        $__internal_d8a5e112f697ba7ad90b593064cb309a0a7570187e13efa85fe7a6e8d35bc99f->leave($__internal_d8a5e112f697ba7ad90b593064cb309a0a7570187e13efa85fe7a6e8d35bc99f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 78,  296 => 77,  291 => 76,  282 => 75,  271 => 70,  269 => 69,  266 => 68,  257 => 67,  247 => 63,  245 => 62,  243 => 61,  241 => 60,  239 => 59,  237 => 58,  235 => 57,  233 => 56,  231 => 55,  229 => 54,  227 => 53,  225 => 52,  223 => 51,  221 => 50,  219 => 49,  217 => 48,  215 => 47,  213 => 46,  208 => 42,  206 => 41,  204 => 40,  202 => 39,  200 => 38,  198 => 37,  196 => 36,  191 => 32,  182 => 31,  171 => 27,  169 => 26,  166 => 25,  157 => 24,  146 => 72,  144 => 67,  139 => 64,  137 => 31,  133 => 29,  131 => 24,  128 => 23,  119 => 22,  100 => 11,  91 => 10,  73 => 7,  63 => 80,  60 => 75,  58 => 74,  56 => 22,  51 => 19,  49 => 10,  43 => 7,  39 => 6,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"es\">

<head>

    <meta charset=\"{{ _charset }}\">
    <title>{% block title %}{{ 'LedSer'|trans }}{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta charset=\"utf-8\">
    {% block styles %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" >
        <style>
            .container{
                padding: 6rem 2rem;
            }
        </style>

    {% endblock %}
</head>
<body>

        {% block body %}

            {% block header %}

                {% include 'AppBundle:partials:header.html.twig' %}

            {% endblock %}
            <main role=\"main\">
                <div class=\"container\">
                    {% block content %}


                    <!-- Main jumbotron for a primary marketing message or call to action -->
                    {#<div class=\"jumbotron\">#}
                        {#<div class=\"container\">#}
                            {#<h1 class=\"display-3\">Hello, world!</h1>#}
                            {#<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>#}
                            {#<p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more »</a></p>#}
                        {#</div>#}
                    {#</div>#}


                        <!-- Example row of columns -->
                        {#<div class=\"row\">#}
                            {#<div class=\"col-md-4\">#}
                                {#<h2>Heading</h2>#}
                                {#<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>#}
                                {#<p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details »</a></p>#}
                            {#</div>#}
                            {#<div class=\"col-md-4\">#}
                                {#<h2>Heading</h2>#}
                                {#<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>#}
                                {#<p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details »</a></p>#}
                            {#</div>#}
                            {#<div class=\"col-md-4\">#}
                                {#<h2>Heading</h2>#}
                                {#<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>#}
                                {#<p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details »</a></p>#}
                            {#</div>#}
                        {#</div>#}
                        {#<hr>#}
                        {% endblock %}

                </div> <!-- /container -->
            </main>
            {% block footer %}

                {% include 'AppBundle:partials:footer.html.twig' %}

            {% endblock %}

        {% endblock %}
    {#</div>#}
    {% block javascript %}
        <script src=\"{{ asset('js/jquery-3.3.1.slim.min.js') }}\"></script>
        <script src=\"{{ asset('js/popper.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    {% endblock %}
</body>", "AppBundle::layout.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/layout.html.twig");
    }
}
