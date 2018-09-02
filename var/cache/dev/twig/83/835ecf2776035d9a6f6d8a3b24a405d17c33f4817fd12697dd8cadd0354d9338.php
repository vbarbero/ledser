<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_da941b15798a31de9d9208c288a1014a98cb39c4338862a9c3c212bc84f2e323 extends Twig_Template
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
        $__internal_91204d6ae36476c741a1cc26ecce58b6a192e0f9c1f74e4973d8cf73fb73e699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91204d6ae36476c741a1cc26ecce58b6a192e0f9c1f74e4973d8cf73fb73e699->enter($__internal_91204d6ae36476c741a1cc26ecce58b6a192e0f9c1f74e4973d8cf73fb73e699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_4631c66999104503869223624cf558c5a9db2f434533a490c9996646a3b66a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4631c66999104503869223624cf558c5a9db2f434533a490c9996646a3b66a71->enter($__internal_4631c66999104503869223624cf558c5a9db2f434533a490c9996646a3b66a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_91204d6ae36476c741a1cc26ecce58b6a192e0f9c1f74e4973d8cf73fb73e699->leave($__internal_91204d6ae36476c741a1cc26ecce58b6a192e0f9c1f74e4973d8cf73fb73e699_prof);

        
        $__internal_4631c66999104503869223624cf558c5a9db2f434533a490c9996646a3b66a71->leave($__internal_4631c66999104503869223624cf558c5a9db2f434533a490c9996646a3b66a71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
