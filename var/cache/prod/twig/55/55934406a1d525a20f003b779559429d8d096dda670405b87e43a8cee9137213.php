<?php

/* AppBundle:Company:list.html.twig */
class __TwigTemplate_5117f85d1d580eeb743b5b3fc25cfa7f0d2234933c2aeccda277e332875c18a5 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
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
    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  124 => 33,  121 => 32,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  70 => 18,  63 => 17,  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Company:list.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/list.html.twig");
    }
}
