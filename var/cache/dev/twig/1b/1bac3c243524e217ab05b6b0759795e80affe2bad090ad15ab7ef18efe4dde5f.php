<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3da58af68d074f9466e868723fa91e6366dee3eab8e00f6ba2a42c963ce7cf12 extends Twig_Template
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
        $__internal_9aaba68d2d0fbb8fc9d8264a1d5b5994eba1e0707bfa9f0b7159dae15bf93b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaba68d2d0fbb8fc9d8264a1d5b5994eba1e0707bfa9f0b7159dae15bf93b4b->enter($__internal_9aaba68d2d0fbb8fc9d8264a1d5b5994eba1e0707bfa9f0b7159dae15bf93b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5453063a59a411d02b30fcace130766e531366bd324f1bca3d82e9ee1fbc369b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5453063a59a411d02b30fcace130766e531366bd324f1bca3d82e9ee1fbc369b->enter($__internal_5453063a59a411d02b30fcace130766e531366bd324f1bca3d82e9ee1fbc369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9aaba68d2d0fbb8fc9d8264a1d5b5994eba1e0707bfa9f0b7159dae15bf93b4b->leave($__internal_9aaba68d2d0fbb8fc9d8264a1d5b5994eba1e0707bfa9f0b7159dae15bf93b4b_prof);

        
        $__internal_5453063a59a411d02b30fcace130766e531366bd324f1bca3d82e9ee1fbc369b->leave($__internal_5453063a59a411d02b30fcace130766e531366bd324f1bca3d82e9ee1fbc369b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
