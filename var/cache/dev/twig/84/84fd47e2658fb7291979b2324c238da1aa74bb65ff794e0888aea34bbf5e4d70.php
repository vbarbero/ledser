<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_113046b176cc933db3b89ae843da3dd944d15b11418854a6be7412c8939bae28 extends Twig_Template
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
        $__internal_372a81b45fb73d01b95dbfd590c3a56e0ca07892ea47826558d77409a729e2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372a81b45fb73d01b95dbfd590c3a56e0ca07892ea47826558d77409a729e2ec->enter($__internal_372a81b45fb73d01b95dbfd590c3a56e0ca07892ea47826558d77409a729e2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4781d7bb99d6422f51e9353338de071fed207b491604bd65ecae622348434790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4781d7bb99d6422f51e9353338de071fed207b491604bd65ecae622348434790->enter($__internal_4781d7bb99d6422f51e9353338de071fed207b491604bd65ecae622348434790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_372a81b45fb73d01b95dbfd590c3a56e0ca07892ea47826558d77409a729e2ec->leave($__internal_372a81b45fb73d01b95dbfd590c3a56e0ca07892ea47826558d77409a729e2ec_prof);

        
        $__internal_4781d7bb99d6422f51e9353338de071fed207b491604bd65ecae622348434790->leave($__internal_4781d7bb99d6422f51e9353338de071fed207b491604bd65ecae622348434790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
