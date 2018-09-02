<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a44608721f07c39ffbce9265fde75bdde5d0691b3e36e7e06f924160b7f00dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a40da41ce313fce8d6f99db391b344a4508501b4f657a5ae7548408dfb5c682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a40da41ce313fce8d6f99db391b344a4508501b4f657a5ae7548408dfb5c682->enter($__internal_5a40da41ce313fce8d6f99db391b344a4508501b4f657a5ae7548408dfb5c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_7489bb43ac464df9353f5bca35c32f476fe0f1769ac4d0c0f268803a95d0e754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7489bb43ac464df9353f5bca35c32f476fe0f1769ac4d0c0f268803a95d0e754->enter($__internal_7489bb43ac464df9353f5bca35c32f476fe0f1769ac4d0c0f268803a95d0e754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

</head>
<body>
<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto);

    /****** LOGIN ******/
    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }

    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }

    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }

    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }

    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }

    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }

    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }

    .login-help{
        font-size: 12px;
    }
</style>

";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 98
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 99
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 132
        echo "
<script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";
        // line 136
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "
</body>
</html>";
        
        $__internal_5a40da41ce313fce8d6f99db391b344a4508501b4f657a5ae7548408dfb5c682->leave($__internal_5a40da41ce313fce8d6f99db391b344a4508501b4f657a5ae7548408dfb5c682_prof);

        
        $__internal_7489bb43ac464df9353f5bca35c32f476fe0f1769ac4d0c0f268803a95d0e754->leave($__internal_7489bb43ac464df9353f5bca35c32f476fe0f1769ac4d0c0f268803a95d0e754_prof);

    }

    // line 105
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cddb31651127d1f5e7e14e1b1f8ae669e19baf7b852e1fa6cc8165c953072519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddb31651127d1f5e7e14e1b1f8ae669e19baf7b852e1fa6cc8165c953072519->enter($__internal_cddb31651127d1f5e7e14e1b1f8ae669e19baf7b852e1fa6cc8165c953072519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_506485dc283f390648bb96a19dcec77340e64531552d254f5262289c4ba242fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506485dc283f390648bb96a19dcec77340e64531552d254f5262289c4ba242fc->enter($__internal_506485dc283f390648bb96a19dcec77340e64531552d254f5262289c4ba242fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 106
        echo "


        ";
        // line 109
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 110
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 112
        echo "
        <form action=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <div class=\"login-container\">
                <h1>Login to Your Account</h1><br>
                <form>
                    <label for=\"username\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    <label for=\"password\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
                    <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "\" />
                </form>
                <div class=\"login-help\">
                    <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a> - <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Forgot Password</a>
                </div>
            </div>
        </form>
    ";
        
        $__internal_506485dc283f390648bb96a19dcec77340e64531552d254f5262289c4ba242fc->leave($__internal_506485dc283f390648bb96a19dcec77340e64531552d254f5262289c4ba242fc_prof);

        
        $__internal_cddb31651127d1f5e7e14e1b1f8ae669e19baf7b852e1fa6cc8165c953072519->leave($__internal_cddb31651127d1f5e7e14e1b1f8ae669e19baf7b852e1fa6cc8165c953072519_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4f847d2153c42b65ab5465a0196a994d5b8c41493cc3066148823509af34dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f847d2153c42b65ab5465a0196a994d5b8c41493cc3066148823509af34dee->enter($__internal_d4f847d2153c42b65ab5465a0196a994d5b8c41493cc3066148823509af34dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_041f7654002dd0b453d3cc16d4b997878857744b9ea620800f0c54dd3cfb1bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041f7654002dd0b453d3cc16d4b997878857744b9ea620800f0c54dd3cfb1bf7->enter($__internal_041f7654002dd0b453d3cc16d4b997878857744b9ea620800f0c54dd3cfb1bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_041f7654002dd0b453d3cc16d4b997878857744b9ea620800f0c54dd3cfb1bf7->leave($__internal_041f7654002dd0b453d3cc16d4b997878857744b9ea620800f0c54dd3cfb1bf7_prof);

        
        $__internal_d4f847d2153c42b65ab5465a0196a994d5b8c41493cc3066148823509af34dee->leave($__internal_d4f847d2153c42b65ab5465a0196a994d5b8c41493cc3066148823509af34dee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 136,  237 => 127,  231 => 124,  227 => 123,  221 => 120,  217 => 119,  213 => 118,  206 => 114,  202 => 113,  199 => 112,  193 => 110,  191 => 109,  186 => 106,  177 => 105,  165 => 137,  163 => 136,  157 => 132,  155 => 105,  152 => 104,  139 => 100,  134 => 99,  129 => 98,  125 => 97,  27 => 1,);
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
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

</head>
<body>
<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto);

    /****** LOGIN ******/
    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }

    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }

    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }

    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }

    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }

    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }

    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }

    .login-help{
        font-size: 12px;
    }
</style>

{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}

{% block fos_user_content %}



        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            <div class=\"login-container\">
                <h1>Login to Your Account</h1><br>
                <form>
                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                    <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </form>
                <div class=\"login-help\">
                    <a href=\"{{ path('fos_user_registration_register') }}\">Register</a> - <a href=\"{{ path('fos_user_resetting_request') }}\">Forgot Password</a>
                </div>
            </div>
        </form>
    {% endblock fos_user_content %}

<script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

{% block javascripts %}{% endblock %}

</body>
</html>", "FOSUserBundle:Security:login.html.twig", "/var/www/html/ledser/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
