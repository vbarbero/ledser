<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1f3b2e19e688abeee6069380a9cf97c46d37fdcda5b67ff634ec84970b176ff6 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "all", array()));
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
    }

    // line 105
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 106
        echo "


        ";
        // line 109
        if (($context["error"] ?? null)) {
            // line 110
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 136,  219 => 127,  213 => 124,  209 => 123,  203 => 120,  199 => 119,  195 => 118,  188 => 114,  184 => 113,  181 => 112,  175 => 110,  173 => 109,  168 => 106,  165 => 105,  159 => 137,  157 => 136,  151 => 132,  149 => 105,  146 => 104,  133 => 100,  128 => 99,  123 => 98,  119 => 97,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "/var/www/html/ledser/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
