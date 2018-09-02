<?php

/* AppBundle:Company:files.html.twig */
class __TwigTemplate_99c7ba4936fcbf57c2c80a3054657283757c05bb2b4d57043335323f37f977e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:files.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccffec042c78fde5fa8d8cd3c65d04392f578cabad849d00ee2f2dbb5ea44d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccffec042c78fde5fa8d8cd3c65d04392f578cabad849d00ee2f2dbb5ea44d13->enter($__internal_ccffec042c78fde5fa8d8cd3c65d04392f578cabad849d00ee2f2dbb5ea44d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:files.html.twig"));

        $__internal_7510e4cd0b88163c7c757107967bebf70c462f7c6c9f83bc8c63627b2dfe7b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7510e4cd0b88163c7c757107967bebf70c462f7c6c9f83bc8c63627b2dfe7b22->enter($__internal_7510e4cd0b88163c7c757107967bebf70c462f7c6c9f83bc8c63627b2dfe7b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:files.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccffec042c78fde5fa8d8cd3c65d04392f578cabad849d00ee2f2dbb5ea44d13->leave($__internal_ccffec042c78fde5fa8d8cd3c65d04392f578cabad849d00ee2f2dbb5ea44d13_prof);

        
        $__internal_7510e4cd0b88163c7c757107967bebf70c462f7c6c9f83bc8c63627b2dfe7b22->leave($__internal_7510e4cd0b88163c7c757107967bebf70c462f7c6c9f83bc8c63627b2dfe7b22_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f547a8e198cf186024b44632e9963139f747bfd48c47285e25074ed630735694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f547a8e198cf186024b44632e9963139f747bfd48c47285e25074ed630735694->enter($__internal_f547a8e198cf186024b44632e9963139f747bfd48c47285e25074ed630735694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a291ecccf6198868cfe4a8c221da6dc97bef2fb436a2514e3a059e35c189cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a291ecccf6198868cfe4a8c221da6dc97bef2fb436a2514e3a059e35c189cda->enter($__internal_5a291ecccf6198868cfe4a8c221da6dc97bef2fb436a2514e3a059e35c189cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "name", array()), "html", null, true);
        echo "</h2>
    <div class=\"row bg-dark text-light\">
        <div class=\"w-100\"></div>
        <div class=\"col\">Name</div>

        <div class=\"col\">file</div>
        <div class=\"col\">Action</div>
    </div>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? $this->getContext($context, "files")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 14
            echo "        <div class=\"row ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "bg-secondary";
            }
            echo "\">
            <div class=\"col\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
            echo "</div>
            <div class=\"col\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["file"], "source", array()))), "html", null, true);
            echo "\">View </a></div>
            <div class=\"col\">
                <a data-href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_file", array("file" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
            echo "\" class=\"delete\">Delete</a>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a291ecccf6198868cfe4a8c221da6dc97bef2fb436a2514e3a059e35c189cda->leave($__internal_5a291ecccf6198868cfe4a8c221da6dc97bef2fb436a2514e3a059e35c189cda_prof);

        
        $__internal_f547a8e198cf186024b44632e9963139f747bfd48c47285e25074ed630735694->leave($__internal_f547a8e198cf186024b44632e9963139f747bfd48c47285e25074ed630735694_prof);

    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a736603be5006e2b026d8b83351a3a1e458e9d2137b2af2434e106f25fcd8c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a736603be5006e2b026d8b83351a3a1e458e9d2137b2af2434e106f25fcd8c9c->enter($__internal_a736603be5006e2b026d8b83351a3a1e458e9d2137b2af2434e106f25fcd8c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_29ca142b992a956d5c021726796d9b68eee4f666b7aa1194049b9b8eae56eb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ca142b992a956d5c021726796d9b68eee4f666b7aa1194049b9b8eae56eb6f->enter($__internal_29ca142b992a956d5c021726796d9b68eee4f666b7aa1194049b9b8eae56eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$(\".delete\").on('click', function() {
                if (confirm('Are you sure you want to delete it?')) {
                    document.location = \$(this).attr('data-href');
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
";
        
        $__internal_29ca142b992a956d5c021726796d9b68eee4f666b7aa1194049b9b8eae56eb6f->leave($__internal_29ca142b992a956d5c021726796d9b68eee4f666b7aa1194049b9b8eae56eb6f_prof);

        
        $__internal_a736603be5006e2b026d8b83351a3a1e458e9d2137b2af2434e106f25fcd8c9c->leave($__internal_a736603be5006e2b026d8b83351a3a1e458e9d2137b2af2434e106f25fcd8c9c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 25,  122 => 24,  96 => 18,  91 => 16,  87 => 15,  80 => 14,  63 => 13,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block content %}
<h2>{{ company.name }}</h2>
    <div class=\"row bg-dark text-light\">
        <div class=\"w-100\"></div>
        <div class=\"col\">Name</div>

        <div class=\"col\">file</div>
        <div class=\"col\">Action</div>
    </div>

    {% for file in files %}
        <div class=\"row {% if loop.index is odd %}bg-secondary{% endif %}\">
            <div class=\"col\">{{ file.name }}</div>
            <div class=\"col\"><a href=\"{{ asset('uploads/' ~ file.source ) }}\">View </a></div>
            <div class=\"col\">
                <a data-href=\"{{ url('delete_file', {file: file.id}) }}\" class=\"delete\">Delete</a>
            </div>
        </div>
    {% endfor %}
{% endblock %}

{% block javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$(\".delete\").on('click', function() {
                if (confirm('Are you sure you want to delete it?')) {
                    document.location = \$(this).attr('data-href');
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
{% endblock %}", "AppBundle:Company:files.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/files.html.twig");
    }
}
