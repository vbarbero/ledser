<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5f501d245105b82976eab1617ad615bd64eb75a845a987e5d8ad0161b7fb82b0 extends Twig_Template
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
        $__internal_540c88934d232f058d5c8a66ae6230c561e569d2ec3b3dd0a60ad9cedaef2004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540c88934d232f058d5c8a66ae6230c561e569d2ec3b3dd0a60ad9cedaef2004->enter($__internal_540c88934d232f058d5c8a66ae6230c561e569d2ec3b3dd0a60ad9cedaef2004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_840e283a2ff2edfb671ad29c3a845f39a29d55b089db124c5c0ee5ea8d1b838f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840e283a2ff2edfb671ad29c3a845f39a29d55b089db124c5c0ee5ea8d1b838f->enter($__internal_840e283a2ff2edfb671ad29c3a845f39a29d55b089db124c5c0ee5ea8d1b838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_540c88934d232f058d5c8a66ae6230c561e569d2ec3b3dd0a60ad9cedaef2004->leave($__internal_540c88934d232f058d5c8a66ae6230c561e569d2ec3b3dd0a60ad9cedaef2004_prof);

        
        $__internal_840e283a2ff2edfb671ad29c3a845f39a29d55b089db124c5c0ee5ea8d1b838f->leave($__internal_840e283a2ff2edfb671ad29c3a845f39a29d55b089db124c5c0ee5ea8d1b838f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
