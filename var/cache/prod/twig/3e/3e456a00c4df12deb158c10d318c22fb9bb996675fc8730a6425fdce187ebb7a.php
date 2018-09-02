<?php

/* AppBundle:Company:index.html.twig */
class __TwigTemplate_1ee0b9ce1f97b60d37c50d2514c3c4ed68260f886176734be2256dd253c2f7c3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
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
    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
        // line 90
        echo "    <div class=\"row\">
        <div class=\"col-md-10\">
            <h2>Create Company</h2>

        </div>
    </div>
    <div class=\"row\">
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cif", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cif", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cnae", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cnae", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'widget', array("attr" => array("class" => "custom-select d-block w-100")));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <label for=\"address-autocomplete\">Dirección:</label>
                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "autocomplete", array()), 'widget', array("id" => "address-autocomplete"));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'widget', array("id" => "address-address"));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addressNumber", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addressNumber", array()), 'widget', array("id" => "address-number"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'widget', array("id" => "address-city"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zip", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zip", array()), 'widget', array("id" => "address-zip"));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "province", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "province", array()), 'widget', array("id" => "address-province"));
        echo "
            </div>
        </div>

        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Save</button>
    ";
        // line 185
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 188
    public function block_javascript($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["google_api_places"] ?? null), "html", null, true);
        echo "&libraries=places&callback=initAutocomplete\" async defer></script>

";
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
        return array (  336 => 229,  292 => 189,  289 => 188,  282 => 185,  274 => 180,  268 => 177,  259 => 171,  253 => 168,  244 => 162,  238 => 159,  229 => 153,  223 => 150,  215 => 145,  209 => 142,  201 => 137,  191 => 130,  185 => 127,  176 => 121,  170 => 118,  161 => 112,  155 => 109,  146 => 103,  140 => 100,  134 => 97,  125 => 90,  122 => 89,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Company:index.html.twig", "/var/www/html/ledser/src/AppBundle/Resources/views/Company/index.html.twig");
    }
}
