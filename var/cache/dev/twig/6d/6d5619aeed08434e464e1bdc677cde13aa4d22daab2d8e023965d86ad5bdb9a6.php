<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4f38e13d9a912500b38d4af4c4917e48fbb913a48b0bc549fb01065af09a3b9b extends Twig_Template
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
        $__internal_e04ae1a06e84ff564d8b5805559b2d96fcb1b630b41939a7c4b5393d82baa90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04ae1a06e84ff564d8b5805559b2d96fcb1b630b41939a7c4b5393d82baa90f->enter($__internal_e04ae1a06e84ff564d8b5805559b2d96fcb1b630b41939a7c4b5393d82baa90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3f227a17d5bbb6bd7f64e629101cc7a6031c03902b04441fa472120327162776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f227a17d5bbb6bd7f64e629101cc7a6031c03902b04441fa472120327162776->enter($__internal_3f227a17d5bbb6bd7f64e629101cc7a6031c03902b04441fa472120327162776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e04ae1a06e84ff564d8b5805559b2d96fcb1b630b41939a7c4b5393d82baa90f->leave($__internal_e04ae1a06e84ff564d8b5805559b2d96fcb1b630b41939a7c4b5393d82baa90f_prof);

        
        $__internal_3f227a17d5bbb6bd7f64e629101cc7a6031c03902b04441fa472120327162776->leave($__internal_3f227a17d5bbb6bd7f64e629101cc7a6031c03902b04441fa472120327162776_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
