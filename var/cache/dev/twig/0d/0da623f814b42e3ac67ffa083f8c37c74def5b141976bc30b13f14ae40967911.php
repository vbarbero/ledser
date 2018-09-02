<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0a35ca40b95f1ae9a8f96dff35d9dab6e2cebe7705a650533fbe1a3ab4bf5fcf extends Twig_Template
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
        $__internal_6ca89618c571c04390d7a8266b645a30583a2ccb70b97f61bd72c77fa81d67fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca89618c571c04390d7a8266b645a30583a2ccb70b97f61bd72c77fa81d67fd->enter($__internal_6ca89618c571c04390d7a8266b645a30583a2ccb70b97f61bd72c77fa81d67fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_bf9cbbd7110b4b6bdc809ffe29afecf53caea61f2a4d2343cda9e5ace22b24df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9cbbd7110b4b6bdc809ffe29afecf53caea61f2a4d2343cda9e5ace22b24df->enter($__internal_bf9cbbd7110b4b6bdc809ffe29afecf53caea61f2a4d2343cda9e5ace22b24df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6ca89618c571c04390d7a8266b645a30583a2ccb70b97f61bd72c77fa81d67fd->leave($__internal_6ca89618c571c04390d7a8266b645a30583a2ccb70b97f61bd72c77fa81d67fd_prof);

        
        $__internal_bf9cbbd7110b4b6bdc809ffe29afecf53caea61f2a4d2343cda9e5ace22b24df->leave($__internal_bf9cbbd7110b4b6bdc809ffe29afecf53caea61f2a4d2343cda9e5ace22b24df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
