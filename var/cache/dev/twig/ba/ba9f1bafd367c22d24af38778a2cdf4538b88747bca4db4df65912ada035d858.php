<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_97ad864b0861819b0532ff12fef49b51b5e650bbec82d710f47d3990dce7c50f extends Twig_Template
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
        $__internal_65b557e89e383983c8e596b53a544347eb474888b6c20cfb84a864a32370e85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b557e89e383983c8e596b53a544347eb474888b6c20cfb84a864a32370e85b->enter($__internal_65b557e89e383983c8e596b53a544347eb474888b6c20cfb84a864a32370e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_58d1e3b760c1d0243b445082bada4d49413cce131d7133bcc4c44ab9f9b29723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d1e3b760c1d0243b445082bada4d49413cce131d7133bcc4c44ab9f9b29723->enter($__internal_58d1e3b760c1d0243b445082bada4d49413cce131d7133bcc4c44ab9f9b29723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_65b557e89e383983c8e596b53a544347eb474888b6c20cfb84a864a32370e85b->leave($__internal_65b557e89e383983c8e596b53a544347eb474888b6c20cfb84a864a32370e85b_prof);

        
        $__internal_58d1e3b760c1d0243b445082bada4d49413cce131d7133bcc4c44ab9f9b29723->leave($__internal_58d1e3b760c1d0243b445082bada4d49413cce131d7133bcc4c44ab9f9b29723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
