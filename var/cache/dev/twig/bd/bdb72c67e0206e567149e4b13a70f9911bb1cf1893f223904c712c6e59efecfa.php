<?php

/* AppBundle:Company:index.html.twig */
class __TwigTemplate_f0d92f93fcc38fc62f5c51733c81d658d47711627eacd6f92e4354d3671a5d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Company:index.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42ee97da67facf8440a8b6bc5949e2044dfd9080490d864cb61950e621842224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ee97da67facf8440a8b6bc5949e2044dfd9080490d864cb61950e621842224->enter($__internal_42ee97da67facf8440a8b6bc5949e2044dfd9080490d864cb61950e621842224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:index.html.twig"));

        $__internal_5eb9bdb063aef7e68f963ace483644c73da2fd53282e2caaf4a5bc297baaf615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb9bdb063aef7e68f963ace483644c73da2fd53282e2caaf4a5bc297baaf615->enter($__internal_5eb9bdb063aef7e68f963ace483644c73da2fd53282e2caaf4a5bc297baaf615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Company:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42ee97da67facf8440a8b6bc5949e2044dfd9080490d864cb61950e621842224->leave($__internal_42ee97da67facf8440a8b6bc5949e2044dfd9080490d864cb61950e621842224_prof);

        
        $__internal_5eb9bdb063aef7e68f963ace483644c73da2fd53282e2caaf4a5bc297baaf615->leave($__internal_5eb9bdb063aef7e68f963ace483644c73da2fd53282e2caaf4a5bc297baaf615_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d0c1baabba70c263fa3a4711cd659075b443d205445520fff81eda1f78ff4026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c1baabba70c263fa3a4711cd659075b443d205445520fff81eda1f78ff4026->enter($__internal_d0c1baabba70c263fa3a4711cd659075b443d205445520fff81eda1f78ff4026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_9d3461cf8acbcc5a3e32cd34f78433a5b6da5d918412ec5678c9e66ba3549423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3461cf8acbcc5a3e32cd34f78433a5b6da5d918412ec5678c9e66ba3549423->enter($__internal_9d3461cf8acbcc5a3e32cd34f78433a5b6da5d918412ec5678c9e66ba3549423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #address-autocomplete {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #address-autocomplete:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }
    </style>

";
        
        $__internal_9d3461cf8acbcc5a3e32cd34f78433a5b6da5d918412ec5678c9e66ba3549423->leave($__internal_9d3461cf8acbcc5a3e32cd34f78433a5b6da5d918412ec5678c9e66ba3549423_prof);

        
        $__internal_d0c1baabba70c263fa3a4711cd659075b443d205445520fff81eda1f78ff4026->leave($__internal_d0c1baabba70c263fa3a4711cd659075b443d205445520fff81eda1f78ff4026_prof);

    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
        $__internal_dacef1673fe5cd7116bb8e8acc0964b99cbaf63ad1d635f59b09474a32709c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacef1673fe5cd7116bb8e8acc0964b99cbaf63ad1d635f59b09474a32709c50->enter($__internal_dacef1673fe5cd7116bb8e8acc0964b99cbaf63ad1d635f59b09474a32709c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2484233303f57e5d635b15cf77c6e68c54b5206f5ce7481b32c4134dca8de38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2484233303f57e5d635b15cf77c6e68c54b5206f5ce7481b32c4134dca8de38d->enter($__internal_2484233303f57e5d635b15cf77c6e68c54b5206f5ce7481b32c4134dca8de38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 90
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Company</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cif", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cif", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cnae", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cnae", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "custom-select d-block w-100")));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <label for=\"address-autocomplete\">Dirección:</label>
                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("id" => "address-autocomplete"));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("id" => "address-address"));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "addressNumber", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "addressNumber", array()), 'widget', array("id" => "address-number"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget', array("id" => "address-city"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'widget', array("id" => "address-zip"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "province", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "province", array()), 'widget', array("id" => "address-province"));
        echo "
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    ";
        // line 185
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_2484233303f57e5d635b15cf77c6e68c54b5206f5ce7481b32c4134dca8de38d->leave($__internal_2484233303f57e5d635b15cf77c6e68c54b5206f5ce7481b32c4134dca8de38d_prof);

        
        $__internal_dacef1673fe5cd7116bb8e8acc0964b99cbaf63ad1d635f59b09474a32709c50->leave($__internal_dacef1673fe5cd7116bb8e8acc0964b99cbaf63ad1d635f59b09474a32709c50_prof);

    }

    // line 188
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_89bfeaa4d96aa26cdfce4a6391c3b2027c22de30c748a4dbdfda23a88209d78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bfeaa4d96aa26cdfce4a6391c3b2027c22de30c748a4dbdfda23a88209d78c->enter($__internal_89bfeaa4d96aa26cdfce4a6391c3b2027c22de30c748a4dbdfda23a88209d78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1655ccf3ebe4a335a44cec1c20a8a2f2a22f62ded6672928c7f3475076cd2757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1655ccf3ebe4a335a44cec1c20a8a2f2a22f62ded6672928c7f3475076cd2757->enter($__internal_1655ccf3ebe4a335a44cec1c20a8a2f2a22f62ded6672928c7f3475076cd2757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 189
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
        function initAutocomplete() {
            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address-autocomplete'));
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                var street;
                var number;
                var city;
                var province;
                var zip;

                for (var i = 0; i < place.address_components.length; i++) {
                    for (var j = 0; j < place.address_components[i].types.length; j++) {
                        if(place.address_components[i].types[j] == 'street_number'){
                            number = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'route'){
                            street = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'locality'){
                            city = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'postal_code'){
                            zip = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'administrative_area_level_2'){
                            province = place.address_components[i].long_name;
                        }
                    }
                }
                if(number != undefined) {
                    document.getElementById('address-address').value = street + ' ' + number;
                } else {
                    document.getElementById('address-address').value = street;
                }
                document.getElementById('address-province').value = province;
                if(zip != undefined) {
                    document.getElementById('address-zip').value = zip;
                }
                document.getElementById('address-city').value = city;
            });
        }
    </script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 229
        echo twig_escape_filter($this->env, ($context["google_api_places"] ?? $this->getContext($context, "google_api_places")), "html", null, true);
        echo "&libraries=places&callback=initAutocomplete\" async defer></script>

";
        
        $__internal_1655ccf3ebe4a335a44cec1c20a8a2f2a22f62ded6672928c7f3475076cd2757->leave($__internal_1655ccf3ebe4a335a44cec1c20a8a2f2a22f62ded6672928c7f3475076cd2757_prof);

        
        $__internal_89bfeaa4d96aa26cdfce4a6391c3b2027c22de30c748a4dbdfda23a88209d78c->leave($__internal_89bfeaa4d96aa26cdfce4a6391c3b2027c22de30c748a4dbdfda23a88209d78c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Company:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 229,  334 => 189,  325 => 188,  312 => 185,  304 => 180,  298 => 177,  289 => 171,  283 => 168,  274 => 162,  268 => 159,  259 => 153,  253 => 150,  245 => 145,  239 => 142,  231 => 137,  221 => 130,  215 => 127,  206 => 121,  200 => 118,  191 => 112,  185 => 109,  176 => 103,  170 => 100,  164 => 97,  155 => 90,  146 => 89,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block styles %}
    {{ parent() }}

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #address-autocomplete {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #address-autocomplete:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }
    </style>

{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Company</h2>

        </div>
    </div>
    <div class=\"row\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.cif) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.cif) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.name) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.name) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.cnae) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.cnae) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.type) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.type, {attr: {'class': 'custom-select d-block w-100'}}) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <label for=\"address-autocomplete\">Dirección:</label>
                {{ form_widget(form.autocomplete,  { 'id': 'address-autocomplete'}) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.address) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.address,  { 'id': 'address-address'}) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.addressNumber) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.addressNumber,  { 'id': 'address-number'}) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.city) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.city,  { 'id': 'address-city'}) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.zip) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.zip,  { 'id': 'address-zip'}) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_label(form.province) }}
            </div>
            <div class=\"col-lg-4\">
                {{ form_widget(form.province,  { 'id': 'address-province'}) }}
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    {{ form_end(form) }}
    </div>
{% endblock %}
{% block javascript %}
    {{ parent() }}
    <script>
        function initAutocomplete() {
            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address-autocomplete'));
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                var street;
                var number;
                var city;
                var province;
                var zip;

                for (var i = 0; i < place.address_components.length; i++) {
                    for (var j = 0; j < place.address_components[i].types.length; j++) {
                        if(place.address_components[i].types[j] == 'street_number'){
                            number = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'route'){
                            street = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'locality'){
                            city = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'postal_code'){
                            zip = place.address_components[i].short_name;
                        } else if(place.address_components[i].types[j] == 'administrative_area_level_2'){
                            province = place.address_components[i].long_name;
                        }
                    }
                }
                if(number != undefined) {
                    document.getElementById('address-address').value = street + ' ' + number;
                } else {
                    document.getElementById('address-address').value = street;
                }
                document.getElementById('address-province').value = province;
                if(zip != undefined) {
                    document.getElementById('address-zip').value = zip;
                }
                document.getElementById('address-city').value = city;
            });
        }
    </script>
<script src=\"https://maps.googleapis.com/maps/api/js?key={{ google_api_places }}&libraries=places&callback=initAutocomplete\" async defer></script>

{% endblock %}
", "AppBundle:Company:index.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/index.html.twig");
    }
}
