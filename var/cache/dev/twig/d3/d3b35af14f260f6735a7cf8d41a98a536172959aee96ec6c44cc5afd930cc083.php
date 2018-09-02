<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_68291ee0fd6be397a58a34917a3e95869a2bfd8b8e47789d2ed6bc9b951e3ecc extends Twig_Template
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
        $__internal_d9ffe6f92bf791f6323c82a9350a11b0eb5c4665a214c7972b300c5c448a0e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ffe6f92bf791f6323c82a9350a11b0eb5c4665a214c7972b300c5c448a0e49->enter($__internal_d9ffe6f92bf791f6323c82a9350a11b0eb5c4665a214c7972b300c5c448a0e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_efdbfe4f474969e02a000561e6e8ae46989b9902b0d849a47f1e37bb79c9d895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdbfe4f474969e02a000561e6e8ae46989b9902b0d849a47f1e37bb79c9d895->enter($__internal_efdbfe4f474969e02a000561e6e8ae46989b9902b0d849a47f1e37bb79c9d895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d9ffe6f92bf791f6323c82a9350a11b0eb5c4665a214c7972b300c5c448a0e49->leave($__internal_d9ffe6f92bf791f6323c82a9350a11b0eb5c4665a214c7972b300c5c448a0e49_prof);

        
        $__internal_efdbfe4f474969e02a000561e6e8ae46989b9902b0d849a47f1e37bb79c9d895->leave($__internal_efdbfe4f474969e02a000561e6e8ae46989b9902b0d849a47f1e37bb79c9d895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
