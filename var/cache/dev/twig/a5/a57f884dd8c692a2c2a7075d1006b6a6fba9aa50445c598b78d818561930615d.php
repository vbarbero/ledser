<?php

/* AppBundle:partials:header.html.twig */
class __TwigTemplate_a0c0a701994e0a27a74b0e1df49178f02215b737f5c8ab071e2f3da8b5a7443c extends Twig_Template
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
        $__internal_b18600c1df18a23d6c5cc234097a872c744104dda3fb4b140bb7b81064f07f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18600c1df18a23d6c5cc234097a872c744104dda3fb4b140bb7b81064f07f9e->enter($__internal_b18600c1df18a23d6c5cc234097a872c744104dda3fb4b140bb7b81064f07f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:partials:header.html.twig"));

        $__internal_fad4a549ad0571fcd3c2a75b98dc46c022b31106a7e21d35603fbea75f61ba26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad4a549ad0571fcd3c2a75b98dc46c022b31106a7e21d35603fbea75f61ba26->enter($__internal_fad4a549ad0571fcd3c2a75b98dc46c022b31106a7e21d35603fbea75f61ba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:partials:header.html.twig"));

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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "calendar")) {
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
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "create_proposal") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_proposal"))) {
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
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "create_company") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_company"))) {
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
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "report_list") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "report_create"))) {
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
        
        $__internal_b18600c1df18a23d6c5cc234097a872c744104dda3fb4b140bb7b81064f07f9e->leave($__internal_b18600c1df18a23d6c5cc234097a872c744104dda3fb4b140bb7b81064f07f9e_prof);

        
        $__internal_fad4a549ad0571fcd3c2a75b98dc46c022b31106a7e21d35603fbea75f61ba26->leave($__internal_fad4a549ad0571fcd3c2a75b98dc46c022b31106a7e21d35603fbea75f61ba26_prof);

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
        return array (  183 => 64,  181 => 63,  179 => 62,  177 => 61,  172 => 58,  159 => 50,  153 => 49,  145 => 46,  137 => 43,  131 => 42,  123 => 39,  117 => 38,  111 => 37,  105 => 36,  97 => 33,  89 => 30,  83 => 29,  75 => 26,  68 => 24,  62 => 23,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  47 => 14,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<header class=\"shadow\">#}
    {#<div class=\"row collapse\">#}
        {#<nav class=\"float-right hide-for-small-only\">#}
            {#<a href=\"{{ url('calendar') }}\">{{ \"Calendar\"|trans }}</a>#}
            {#<a href=\"{{ url('report_list') }}\">{{ \"Report List\"|trans }}</a>#}
            {#<a href=\"{{ url('create_proposal') }}\">{{ \"Proposals\"|trans }}</a>#}
            {#<a href=\"{{ url('report_create') }}\">{{ \"create report\"|trans }}</a>#}
            {#<a href=\"{{ url('send_email') }}\">{{ \"Send Email\"|trans }}</a>#}
            {#<a href=\"{{ url('create_company') }}\">{{ \"Create Company\"|trans }}</a>#}
            {#<a href=\"{{ url('list_company') }}\">{{ \"List company\"|trans }}</a>#}
        {#</nav>#}
    {#</div>#}
{#</header>#}

<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    {#<a class=\"navbar-brand\" href=\"#\">Navbar</a>#}
    {#<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">#}
        {#<span class=\"navbar-toggler-icon\"></span>#}
    {#</button>#}

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item{% if app.request.get('_route') == 'calendar' %} active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ url('calendar') }}\">{{ \"Calendar\"|trans }}</a>
            </li>
            <li class=\"nav-item dropdown{% if app.request.get('_route') == 'create_proposal' or app.request.get('_route') == 'list_proposal' %} active{% endif %}\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Proposals</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"{{ url('create_proposal') }}\">{{ \"Create Proposals\"|trans }}</a>
                    <a class=\"dropdown-item\" href=\"{{ url('list_proposal') }}\">{{ \"List Proposals\"|trans }}</a>
                </div>
            </li>
            <li class=\"nav-item dropdown{% if app.request.get('_route') == 'create_company' or app.request.get('_route') == 'list_company' %} active{% endif %}\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Company</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"{{ url('create_company') }}\">{{ \"Create Company\"|trans }}</a>
                    <a class=\"dropdown-item\" href=\"{{ url('list_company') }}\">{{ \"List company\"|trans }}</a>
                    <a class=\"dropdown-item\" href=\"{{ url('create_contact') }}\">{{ \"Create Contact\"|trans }}</a>
                    <a class=\"dropdown-item\" href=\"{{ url('list_client') }}\">{{ \"List Clients\"|trans }}</a>


                    <a class=\"dropdown-item\" href=\"{{ url('list_finantial') }}\">{{ \"List Finantial\"|trans }}</a>
                    <a class=\"dropdown-item\" href=\"{{ url('list_drawee') }}\">{{ \"List Drawee\"|trans }}</a>
                </div>
            </li>
            <li class=\"nav-item dropdown{% if app.request.get('_route') == 'report_list' or app.request.get('_route') == 'report_create' %} active{% endif %}\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Reports</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"{{ url('report_create') }}\">{{ \"Create report\"|trans }}</a>
                    <a class=\"dropdown-item\" href=\"{{ url('report_list') }}\">{{ \"Report List\"|trans }}</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Send Email</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"{{ url('fos_user_security_logout') }}\">Logout</a></li>
        </ul>
        {#<form class=\"form-inline my-2 my-lg-0\">#}
            {#<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">#}
            {#<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>#}
        {#</form>#}
    </div>
</nav>

", "AppBundle:partials:header.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/partials/header.html.twig");
    }
}
