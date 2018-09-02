<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_156cd76bc2ac374d6af3158cf3f1681fa624d8b984278de80e16977bf90f3fed extends Twig_Template
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
        $__internal_6c4dc7d1d1291505a3afccd3f079dce82358fb3f51a6fb62ed6d8e29a96a3508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4dc7d1d1291505a3afccd3f079dce82358fb3f51a6fb62ed6d8e29a96a3508->enter($__internal_6c4dc7d1d1291505a3afccd3f079dce82358fb3f51a6fb62ed6d8e29a96a3508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b4fb5ae9c24639cc747795d20d8b2632b0d6d903c518064640b82f8740514cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fb5ae9c24639cc747795d20d8b2632b0d6d903c518064640b82f8740514cfd->enter($__internal_b4fb5ae9c24639cc747795d20d8b2632b0d6d903c518064640b82f8740514cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6c4dc7d1d1291505a3afccd3f079dce82358fb3f51a6fb62ed6d8e29a96a3508->leave($__internal_6c4dc7d1d1291505a3afccd3f079dce82358fb3f51a6fb62ed6d8e29a96a3508_prof);

        
        $__internal_b4fb5ae9c24639cc747795d20d8b2632b0d6d903c518064640b82f8740514cfd->leave($__internal_b4fb5ae9c24639cc747795d20d8b2632b0d6d903c518064640b82f8740514cfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
