<?php

/* AppBundle:partials:header.html.twig */
class __TwigTemplate_0b5dbd7693213441fe03b24c8362163c9169d9181b24e5b92fa3c999f4aab44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "        ";
        // line 4
        echo "            ";
        // line 5
        echo "            ";
        // line 6
        echo "            ";
        // line 7
        echo "            ";
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        // line 11
        echo "        ";
        // line 12
        echo "    ";
        // line 14
        echo "
<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    ";
        // line 17
        echo "    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        // line 20
        echo "
    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "calendar")) {
            echo " active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("calendar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Calendar"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item dropdown";
        // line 26
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "create_proposal") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "list_proposal"))) {
            echo " active";
        }
        echo "\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Proposals</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("create_proposal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Proposals"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_proposal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List Proposals"), "html", null, true);
        echo "</a>
                </div>
            </li>
            <li class=\"nav-item dropdown";
        // line 33
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "create_company") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "list_company"))) {
            echo " active";
        }
        echo "\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Company</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("create_company");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Company"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_company");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List company"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("create_contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Contact"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_client");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List Clients"), "html", null, true);
        echo "</a>


                    <a class=\"dropdown-item\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_finantial");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List Finantial"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_drawee");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List Drawee"), "html", null, true);
        echo "</a>
                </div>
            </li>
            <li class=\"nav-item dropdown";
        // line 46
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "report_list") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "report_create"))) {
            echo " active";
        }
        echo "\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Reports</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("report_create");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create report"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("report_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Report List"), "html", null, true);
        echo "</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Send Email</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
        echo "\">Logout</a></li>
        </ul>
        ";
        // line 61
        echo "            ";
        // line 62
        echo "            ";
        // line 63
        echo "        ";
        // line 64
        echo "    </div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:partials:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 64,  175 => 63,  173 => 62,  171 => 61,  166 => 58,  153 => 50,  147 => 49,  139 => 46,  131 => 43,  125 => 42,  117 => 39,  111 => 38,  105 => 37,  99 => 36,  91 => 33,  83 => 30,  77 => 29,  69 => 26,  62 => 24,  56 => 23,  51 => 20,  49 => 19,  47 => 18,  45 => 17,  41 => 14,  39 => 12,  37 => 11,  35 => 10,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  25 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:partials:header.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/partials/header.html.twig");
    }
}
