<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_54a74cd57fc1300d0382601284cc2b5fb8cdd6ee502084dd1b9c1a161c8441ef extends Twig_Template
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
        $__internal_af90bf7dd6159c84d799695feed1e760064ad7ff8fae5962e0b2ab9bacd5b693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af90bf7dd6159c84d799695feed1e760064ad7ff8fae5962e0b2ab9bacd5b693->enter($__internal_af90bf7dd6159c84d799695feed1e760064ad7ff8fae5962e0b2ab9bacd5b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_398a254848fe2777473a278fb530943ec62ce4207a9efe4cce0e727a26a19dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398a254848fe2777473a278fb530943ec62ce4207a9efe4cce0e727a26a19dd5->enter($__internal_398a254848fe2777473a278fb530943ec62ce4207a9efe4cce0e727a26a19dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_af90bf7dd6159c84d799695feed1e760064ad7ff8fae5962e0b2ab9bacd5b693->leave($__internal_af90bf7dd6159c84d799695feed1e760064ad7ff8fae5962e0b2ab9bacd5b693_prof);

        
        $__internal_398a254848fe2777473a278fb530943ec62ce4207a9efe4cce0e727a26a19dd5->leave($__internal_398a254848fe2777473a278fb530943ec62ce4207a9efe4cce0e727a26a19dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
