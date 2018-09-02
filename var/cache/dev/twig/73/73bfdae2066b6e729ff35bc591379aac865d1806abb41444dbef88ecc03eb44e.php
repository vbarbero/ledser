<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c6b1483bab128746fa4fb2ec6c118e2416f108c6c0a34497b02d87cf05d63bf2 extends Twig_Template
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
        $__internal_4c8d25c6791ed55e06928e9c9e4fda9eda77fa310fef684ac9389d7b2c9a8afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8d25c6791ed55e06928e9c9e4fda9eda77fa310fef684ac9389d7b2c9a8afa->enter($__internal_4c8d25c6791ed55e06928e9c9e4fda9eda77fa310fef684ac9389d7b2c9a8afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_148808050d2d6f9c4a389de0416aa33fa92f961daadf95b816dd02424348df1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148808050d2d6f9c4a389de0416aa33fa92f961daadf95b816dd02424348df1a->enter($__internal_148808050d2d6f9c4a389de0416aa33fa92f961daadf95b816dd02424348df1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4c8d25c6791ed55e06928e9c9e4fda9eda77fa310fef684ac9389d7b2c9a8afa->leave($__internal_4c8d25c6791ed55e06928e9c9e4fda9eda77fa310fef684ac9389d7b2c9a8afa_prof);

        
        $__internal_148808050d2d6f9c4a389de0416aa33fa92f961daadf95b816dd02424348df1a->leave($__internal_148808050d2d6f9c4a389de0416aa33fa92f961daadf95b816dd02424348df1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
