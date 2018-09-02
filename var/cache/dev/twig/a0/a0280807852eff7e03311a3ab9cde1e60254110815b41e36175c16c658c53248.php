<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e943dae183117bf19b32e0665361715ad1e047f0cb18c3cdeceb29cb0f4f65aa extends Twig_Template
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
        $__internal_c76fe93fa59733b4c4922bf04827c268256548854074adb053a4fea0ef43ca0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76fe93fa59733b4c4922bf04827c268256548854074adb053a4fea0ef43ca0b->enter($__internal_c76fe93fa59733b4c4922bf04827c268256548854074adb053a4fea0ef43ca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_264005df627a612d870e9892e1e16d9c9b173799d88177db6be20a73f0b524d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264005df627a612d870e9892e1e16d9c9b173799d88177db6be20a73f0b524d6->enter($__internal_264005df627a612d870e9892e1e16d9c9b173799d88177db6be20a73f0b524d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c76fe93fa59733b4c4922bf04827c268256548854074adb053a4fea0ef43ca0b->leave($__internal_c76fe93fa59733b4c4922bf04827c268256548854074adb053a4fea0ef43ca0b_prof);

        
        $__internal_264005df627a612d870e9892e1e16d9c9b173799d88177db6be20a73f0b524d6->leave($__internal_264005df627a612d870e9892e1e16d9c9b173799d88177db6be20a73f0b524d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
