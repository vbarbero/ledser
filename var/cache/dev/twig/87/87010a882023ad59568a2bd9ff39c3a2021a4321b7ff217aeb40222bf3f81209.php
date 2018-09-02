<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_55a16ea70218b3c0c88590e8722baa882c10b2065b89c7e7653fc67108b8adf5 extends Twig_Template
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
        $__internal_793b5b89e9951a0a4a958f88f2cf6a52ab953eff45b1f9ee545c44f798d6d573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793b5b89e9951a0a4a958f88f2cf6a52ab953eff45b1f9ee545c44f798d6d573->enter($__internal_793b5b89e9951a0a4a958f88f2cf6a52ab953eff45b1f9ee545c44f798d6d573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4eefba78b60c9a677b04a9b38038b3c110667c46279fb9ce2bf737dd7c22f2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eefba78b60c9a677b04a9b38038b3c110667c46279fb9ce2bf737dd7c22f2d5->enter($__internal_4eefba78b60c9a677b04a9b38038b3c110667c46279fb9ce2bf737dd7c22f2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_793b5b89e9951a0a4a958f88f2cf6a52ab953eff45b1f9ee545c44f798d6d573->leave($__internal_793b5b89e9951a0a4a958f88f2cf6a52ab953eff45b1f9ee545c44f798d6d573_prof);

        
        $__internal_4eefba78b60c9a677b04a9b38038b3c110667c46279fb9ce2bf737dd7c22f2d5->leave($__internal_4eefba78b60c9a677b04a9b38038b3c110667c46279fb9ce2bf737dd7c22f2d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
