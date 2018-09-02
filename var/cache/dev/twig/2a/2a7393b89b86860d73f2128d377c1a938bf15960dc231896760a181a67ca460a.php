<?php

/* AppBundle:Company:list.html.twig */
class __TwigTemplate_936d84fa642575175683617e5b81ffdd63c04b9578a91a9de6873c58ef563763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:list.html.twig", 1);
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
        $__internal_3805f0b2e8c68cc48daa5894221e4c5d95f4e23e6e992e6dce8aac539019e11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3805f0b2e8c68cc48daa5894221e4c5d95f4e23e6e992e6dce8aac539019e11e->enter($__internal_3805f0b2e8c68cc48daa5894221e4c5d95f4e23e6e992e6dce8aac539019e11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:list.html.twig"));

        $__internal_43241c6fdecea366fc53b2e4740301eb3b81fcb026e11abf5ae1e5b38c15f448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43241c6fdecea366fc53b2e4740301eb3b81fcb026e11abf5ae1e5b38c15f448->enter($__internal_43241c6fdecea366fc53b2e4740301eb3b81fcb026e11abf5ae1e5b38c15f448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3805f0b2e8c68cc48daa5894221e4c5d95f4e23e6e992e6dce8aac539019e11e->leave($__internal_3805f0b2e8c68cc48daa5894221e4c5d95f4e23e6e992e6dce8aac539019e11e_prof);

        
        $__internal_43241c6fdecea366fc53b2e4740301eb3b81fcb026e11abf5ae1e5b38c15f448->leave($__internal_43241c6fdecea366fc53b2e4740301eb3b81fcb026e11abf5ae1e5b38c15f448_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2a86c5326d2d9dfbc00c744cd8df319f350b86ac963383218fb9ef6968a2fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a86c5326d2d9dfbc00c744cd8df319f350b86ac963383218fb9ef6968a2fc9->enter($__internal_b2a86c5326d2d9dfbc00c744cd8df319f350b86ac963383218fb9ef6968a2fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b436c53816dfb7fa76368b5a012e9b61efe6603a700251c7d34b43501666d503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b436c53816dfb7fa76368b5a012e9b61efe6603a700251c7d34b43501666d503->enter($__internal_b436c53816dfb7fa76368b5a012e9b61efe6603a700251c7d34b43501666d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row bg-dark text-light\">
        <div class=\"w-100\"></div>
        <div class=\"col\">Name</div>
        <div class=\"col\">Cif</div>
        <div class=\"col\">Cnae</div>
        <div class=\"col\">Type</div>
        <div class=\"col\">Address</div>
        <div class=\"col\">City</div>
        <div class=\"col\">Action</div>
    </div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? $this->getContext($context, "companies")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 17
            echo "        <div class=\"row ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "bg-secondary";
            }
            echo "\">
            <div class=\"col\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_company", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "</a> </div>
            <div class=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "cif", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "cnae", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CompanyExtension')->getType($this->getAttribute($context["company"], "type", array())), "html", null, true);
            echo "</div>
            <div class=\"col\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "address", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "city", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_company", array("company" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <a data-href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_company", array("company" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b436c53816dfb7fa76368b5a012e9b61efe6603a700251c7d34b43501666d503->leave($__internal_b436c53816dfb7fa76368b5a012e9b61efe6603a700251c7d34b43501666d503_prof);

        
        $__internal_b2a86c5326d2d9dfbc00c744cd8df319f350b86ac963383218fb9ef6968a2fc9->leave($__internal_b2a86c5326d2d9dfbc00c744cd8df319f350b86ac963383218fb9ef6968a2fc9_prof);

    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9a96c95af4652648889a2cbd71cda2682c75e4c5cbd39320899fc1952b8354f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a96c95af4652648889a2cbd71cda2682c75e4c5cbd39320899fc1952b8354f6->enter($__internal_9a96c95af4652648889a2cbd71cda2682c75e4c5cbd39320899fc1952b8354f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5522678548fe06d1f385edd9ad66de04e6ded998745b10eb1d966bd3c47d71df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5522678548fe06d1f385edd9ad66de04e6ded998745b10eb1d966bd3c47d71df->enter($__internal_5522678548fe06d1f385edd9ad66de04e6ded998745b10eb1d966bd3c47d71df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 33
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
        
        $__internal_5522678548fe06d1f385edd9ad66de04e6ded998745b10eb1d966bd3c47d71df->leave($__internal_5522678548fe06d1f385edd9ad66de04e6ded998745b10eb1d966bd3c47d71df_prof);

        
        $__internal_9a96c95af4652648889a2cbd71cda2682c75e4c5cbd39320899fc1952b8354f6->leave($__internal_9a96c95af4652648889a2cbd71cda2682c75e4c5cbd39320899fc1952b8354f6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 33,  145 => 32,  119 => 26,  115 => 25,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  88 => 18,  81 => 17,  64 => 16,  50 => 4,  41 => 3,  11 => 1,);
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

    <div class=\"row bg-dark text-light\">
        <div class=\"w-100\"></div>
        <div class=\"col\">Name</div>
        <div class=\"col\">Cif</div>
        <div class=\"col\">Cnae</div>
        <div class=\"col\">Type</div>
        <div class=\"col\">Address</div>
        <div class=\"col\">City</div>
        <div class=\"col\">Action</div>
    </div>

    {% for company in companies %}
        <div class=\"row {% if loop.index is odd %}bg-secondary{% endif %}\">
            <div class=\"col\"><a href=\"{{ url('show_company', {id: company.id}) }}\"> {{ company.name }}</a> </div>
            <div class=\"col\">{{ company.cif }}</div>
            <div class=\"col\">{{ company.cnae }}</div>
            <div class=\"col\">{{ company.type | company_type }}</div>
            <div class=\"col\">{{ company.address }}</div>
            <div class=\"col\">{{ company.city }}</div>
            <div class=\"col\">
                <a href=\"{{ url('edit_company', {company: company.id}) }}\">Edit</a>
                <a data-href=\"{{ url('delete_company', {company: company.id}) }}\" class=\"delete\">Delete</a>
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
{% endblock %}", "AppBundle:Company:list.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/list.html.twig");
    }
}
