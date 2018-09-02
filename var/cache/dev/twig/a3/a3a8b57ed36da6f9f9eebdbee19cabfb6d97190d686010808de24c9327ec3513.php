<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a41a2d085ec5295d9be75f7b23e9fbd77f387df25132d270c2da4254f1e76c1e extends Twig_Template
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
        $__internal_bdbc1619a0d8bb07b76257ddca58df31812f6b4d6bf57abb9d132019e75ab14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbc1619a0d8bb07b76257ddca58df31812f6b4d6bf57abb9d132019e75ab14d->enter($__internal_bdbc1619a0d8bb07b76257ddca58df31812f6b4d6bf57abb9d132019e75ab14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2fdc1263d1c75e495eec868c7aca43b69ef5611d57e6926ad1731b169e12a893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdc1263d1c75e495eec868c7aca43b69ef5611d57e6926ad1731b169e12a893->enter($__internal_2fdc1263d1c75e495eec868c7aca43b69ef5611d57e6926ad1731b169e12a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bdbc1619a0d8bb07b76257ddca58df31812f6b4d6bf57abb9d132019e75ab14d->leave($__internal_bdbc1619a0d8bb07b76257ddca58df31812f6b4d6bf57abb9d132019e75ab14d_prof);

        
        $__internal_2fdc1263d1c75e495eec868c7aca43b69ef5611d57e6926ad1731b169e12a893->leave($__internal_2fdc1263d1c75e495eec868c7aca43b69ef5611d57e6926ad1731b169e12a893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/ledser/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
