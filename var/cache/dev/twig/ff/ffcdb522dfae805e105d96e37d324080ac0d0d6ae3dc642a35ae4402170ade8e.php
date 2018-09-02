<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1172ffb4a1de519f106bc3d6f0331cd08724f4724bf8a52d43b13b6feca0a76 extends Twig_Template
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
        $__internal_39566b635e61f9cb1db27f0d4639041f2c5c4d060922e894d9909ac38bbea136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39566b635e61f9cb1db27f0d4639041f2c5c4d060922e894d9909ac38bbea136->enter($__internal_39566b635e61f9cb1db27f0d4639041f2c5c4d060922e894d9909ac38bbea136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b758b2efd251a5789f153cb77723564b3202ab1010281169ac8495c145c3cf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b758b2efd251a5789f153cb77723564b3202ab1010281169ac8495c145c3cf28->enter($__internal_b758b2efd251a5789f153cb77723564b3202ab1010281169ac8495c145c3cf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_39566b635e61f9cb1db27f0d4639041f2c5c4d060922e894d9909ac38bbea136->leave($__internal_39566b635e61f9cb1db27f0d4639041f2c5c4d060922e894d9909ac38bbea136_prof);

        
        $__internal_b758b2efd251a5789f153cb77723564b3202ab1010281169ac8495c145c3cf28->leave($__internal_b758b2efd251a5789f153cb77723564b3202ab1010281169ac8495c145c3cf28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
