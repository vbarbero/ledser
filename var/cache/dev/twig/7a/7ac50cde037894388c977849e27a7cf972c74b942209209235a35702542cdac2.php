<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_69e78de3559d5f8b707a7c459505ad32d6bf184d3d4407bb323e19b89d52a3ff extends Twig_Template
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
        $__internal_d5e7d76a509f177e08e39c4efb28d795d3c80757c9fb8d3955c9177c73ad3172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e7d76a509f177e08e39c4efb28d795d3c80757c9fb8d3955c9177c73ad3172->enter($__internal_d5e7d76a509f177e08e39c4efb28d795d3c80757c9fb8d3955c9177c73ad3172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_80aee52071acb52e388ae0f2ad8952bc56e42927fded39ddc3462fe4695936ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80aee52071acb52e388ae0f2ad8952bc56e42927fded39ddc3462fe4695936ce->enter($__internal_80aee52071acb52e388ae0f2ad8952bc56e42927fded39ddc3462fe4695936ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_d5e7d76a509f177e08e39c4efb28d795d3c80757c9fb8d3955c9177c73ad3172->leave($__internal_d5e7d76a509f177e08e39c4efb28d795d3c80757c9fb8d3955c9177c73ad3172_prof);

        
        $__internal_80aee52071acb52e388ae0f2ad8952bc56e42927fded39ddc3462fe4695936ce->leave($__internal_80aee52071acb52e388ae0f2ad8952bc56e42927fded39ddc3462fe4695936ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
