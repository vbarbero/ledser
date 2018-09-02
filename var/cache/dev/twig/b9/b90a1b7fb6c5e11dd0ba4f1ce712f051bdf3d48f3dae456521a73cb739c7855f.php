<?php

/* AppBundle:Company:clients.html.twig */
class __TwigTemplate_9449a431278f2567f5f4644683c5ad6c70b39755fd49342a45618ca4bc55ec33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:clients.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_302f9cb2de6cc61298b5a559bbbd31c8957fb16349bd28924da6e726a928c05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302f9cb2de6cc61298b5a559bbbd31c8957fb16349bd28924da6e726a928c05a->enter($__internal_302f9cb2de6cc61298b5a559bbbd31c8957fb16349bd28924da6e726a928c05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:clients.html.twig"));

        $__internal_2edbf85afde52425c156f47e0f14d1c07a9c0a530faf3c59e57f1fbb46f5871e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edbf85afde52425c156f47e0f14d1c07a9c0a530faf3c59e57f1fbb46f5871e->enter($__internal_2edbf85afde52425c156f47e0f14d1c07a9c0a530faf3c59e57f1fbb46f5871e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:clients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302f9cb2de6cc61298b5a559bbbd31c8957fb16349bd28924da6e726a928c05a->leave($__internal_302f9cb2de6cc61298b5a559bbbd31c8957fb16349bd28924da6e726a928c05a_prof);

        
        $__internal_2edbf85afde52425c156f47e0f14d1c07a9c0a530faf3c59e57f1fbb46f5871e->leave($__internal_2edbf85afde52425c156f47e0f14d1c07a9c0a530faf3c59e57f1fbb46f5871e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d238a3bf8e5fea4905ed47f8c5c16bbaeb9c5c40f2b9157327486de21dd1b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d238a3bf8e5fea4905ed47f8c5c16bbaeb9c5c40f2b9157327486de21dd1b9a->enter($__internal_9d238a3bf8e5fea4905ed47f8c5c16bbaeb9c5c40f2b9157327486de21dd1b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1abd8a578f69198739e08e6b3165a8c99707c78969c2c80569e53a29c67c2b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abd8a578f69198739e08e6b3165a8c99707c78969c2c80569e53a29c67c2b70->enter($__internal_1abd8a578f69198739e08e6b3165a8c99707c78969c2c80569e53a29c67c2b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row bg-dark text-light\">
        <div class=\"w-100\"></div>
        <div class=\"col\">Name</div>
        <div class=\"col\">Cnae</div>
        <div class=\"col\">Address</div>
        <div class=\"col\">City</div>
        <div class=\"col\">Action</div>
    </div>

    ";
        // line 14
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
            // line 15
            echo "        <div class=\"row ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "bg-secondary";
            }
            echo "\">
            <div class=\"col\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_files", array("company" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "</a> </div>
            <div class=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "cnae", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "address", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "city", array()), "html", null, true);
            echo "</div>
            <div class=\"col\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_file", array("company" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">Add file</a>
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
        
        $__internal_1abd8a578f69198739e08e6b3165a8c99707c78969c2c80569e53a29c67c2b70->leave($__internal_1abd8a578f69198739e08e6b3165a8c99707c78969c2c80569e53a29c67c2b70_prof);

        
        $__internal_9d238a3bf8e5fea4905ed47f8c5c16bbaeb9c5c40f2b9157327486de21dd1b9a->leave($__internal_9d238a3bf8e5fea4905ed47f8c5c16bbaeb9c5c40f2b9157327486de21dd1b9a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  99 => 19,  95 => 18,  91 => 17,  85 => 16,  78 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"col\">Cnae</div>
        <div class=\"col\">Address</div>
        <div class=\"col\">City</div>
        <div class=\"col\">Action</div>
    </div>

    {% for company in companies %}
        <div class=\"row {% if loop.index is odd %}bg-secondary{% endif %}\">
            <div class=\"col\"><a href=\"{{ url('list_files', {company: company.id}) }}\"> {{ company.name }}</a> </div>
            <div class=\"col\">{{ company.cnae }}</div>
            <div class=\"col\">{{ company.address }}</div>
            <div class=\"col\">{{ company.city }}</div>
            <div class=\"col\">
                <a href=\"{{ url('add_file', {company: company.id}) }}\">Add file</a>
            </div>
        </div>
    {% endfor %}
{% endblock %}", "AppBundle:Company:clients.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/clients.html.twig");
    }
}
