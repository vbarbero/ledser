<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_17d5486070b711b0d673182d96798b347217e721096bdc4092d174a5d9a79ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76fbd2a4947d86a49c5ff82837e5ac900367c6f6e58fad60cdb6c233931201c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fbd2a4947d86a49c5ff82837e5ac900367c6f6e58fad60cdb6c233931201c6->enter($__internal_76fbd2a4947d86a49c5ff82837e5ac900367c6f6e58fad60cdb6c233931201c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_28c5b8040cb46a9a173f093bf338851509e94842627d43259ea916c12c598f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c5b8040cb46a9a173f093bf338851509e94842627d43259ea916c12c598f9c->enter($__internal_28c5b8040cb46a9a173f093bf338851509e94842627d43259ea916c12c598f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76fbd2a4947d86a49c5ff82837e5ac900367c6f6e58fad60cdb6c233931201c6->leave($__internal_76fbd2a4947d86a49c5ff82837e5ac900367c6f6e58fad60cdb6c233931201c6_prof);

        
        $__internal_28c5b8040cb46a9a173f093bf338851509e94842627d43259ea916c12c598f9c->leave($__internal_28c5b8040cb46a9a173f093bf338851509e94842627d43259ea916c12c598f9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f4b36a10fc56d34d9760e3919cb0ce6f3b91123c2f41b669b6b032b00b5258a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4b36a10fc56d34d9760e3919cb0ce6f3b91123c2f41b669b6b032b00b5258a->enter($__internal_7f4b36a10fc56d34d9760e3919cb0ce6f3b91123c2f41b669b6b032b00b5258a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65ea2817e48dd03c27b9574d1a4a125f506a7a7c344ca8003d6b7063c86698f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ea2817e48dd03c27b9574d1a4a125f506a7a7c344ca8003d6b7063c86698f5->enter($__internal_65ea2817e48dd03c27b9574d1a4a125f506a7a7c344ca8003d6b7063c86698f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_65ea2817e48dd03c27b9574d1a4a125f506a7a7c344ca8003d6b7063c86698f5->leave($__internal_65ea2817e48dd03c27b9574d1a4a125f506a7a7c344ca8003d6b7063c86698f5_prof);

        
        $__internal_7f4b36a10fc56d34d9760e3919cb0ce6f3b91123c2f41b669b6b032b00b5258a->leave($__internal_7f4b36a10fc56d34d9760e3919cb0ce6f3b91123c2f41b669b6b032b00b5258a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/ledser/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
