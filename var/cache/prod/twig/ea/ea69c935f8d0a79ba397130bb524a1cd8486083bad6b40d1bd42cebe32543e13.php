<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_454fea4c808cf3947611b8b5b2fc27c425f0269cc480872279e42a0d2b090783 extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LedSer"), "html", null, true);
    }

    // line 10
    public function block_styles($context, array $blocks = array())
    {
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
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "
                ";
        // line 26
        $this->loadTemplate("AppBundle:partials:header.html.twig", "AppBundle::layout.html.twig", 26)->display($context);
        // line 27
        echo "
            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "
                ";
        // line 69
        $this->loadTemplate("AppBundle:partials:footer.html.twig", "AppBundle::layout.html.twig", 69)->display($context);
        // line 70
        echo "
            ";
    }

    // line 75
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  210 => 78,  206 => 77,  201 => 76,  198 => 75,  193 => 70,  191 => 69,  188 => 68,  185 => 67,  181 => 63,  179 => 62,  177 => 61,  175 => 60,  173 => 59,  171 => 58,  169 => 57,  167 => 56,  165 => 55,  163 => 54,  161 => 53,  159 => 52,  157 => 51,  155 => 50,  153 => 49,  151 => 48,  149 => 47,  147 => 46,  142 => 42,  140 => 41,  138 => 40,  136 => 39,  134 => 38,  132 => 37,  130 => 36,  125 => 32,  122 => 31,  117 => 27,  115 => 26,  112 => 25,  109 => 24,  104 => 72,  102 => 67,  97 => 64,  95 => 31,  91 => 29,  89 => 24,  86 => 23,  83 => 22,  70 => 11,  67 => 10,  61 => 7,  57 => 80,  54 => 75,  52 => 74,  50 => 22,  45 => 19,  43 => 10,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::layout.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/layout.html.twig");
    }
}
