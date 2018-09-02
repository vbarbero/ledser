<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6d849bfc9a77e6d8c74cf2475b6a076a350b4df39d98ac788e835b8799de7c8b extends Twig_Template
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
        $__internal_885cf72c2849961fc830d4eb3b3c2a92c1b017380be2e1ccf24a9cfb799ad0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885cf72c2849961fc830d4eb3b3c2a92c1b017380be2e1ccf24a9cfb799ad0d8->enter($__internal_885cf72c2849961fc830d4eb3b3c2a92c1b017380be2e1ccf24a9cfb799ad0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_38e67d8c0b5d9dd357147daed490884dbbccea09ec2848a2e865080977e3d3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e67d8c0b5d9dd357147daed490884dbbccea09ec2848a2e865080977e3d3d3->enter($__internal_38e67d8c0b5d9dd357147daed490884dbbccea09ec2848a2e865080977e3d3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_885cf72c2849961fc830d4eb3b3c2a92c1b017380be2e1ccf24a9cfb799ad0d8->leave($__internal_885cf72c2849961fc830d4eb3b3c2a92c1b017380be2e1ccf24a9cfb799ad0d8_prof);

        
        $__internal_38e67d8c0b5d9dd357147daed490884dbbccea09ec2848a2e865080977e3d3d3->leave($__internal_38e67d8c0b5d9dd357147daed490884dbbccea09ec2848a2e865080977e3d3d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
