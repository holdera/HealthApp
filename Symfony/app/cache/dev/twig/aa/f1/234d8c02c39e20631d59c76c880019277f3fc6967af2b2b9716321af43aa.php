<?php

/* healthResourcesBundle:Gym:finder.html.twig */
class __TwigTemplate_aaf1234d8c02c39e20631d59c76c880019277f3fc6967af2b2b9716321af43aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "healthhealthUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <style type=\"text/css\">
        html { height: 70% }
        body { height: 70%; margin: 0; padding: 0 }
        #map-canvas { height: 100% }
    </style>

    ";
        // line 17
        $this->displayBlock('javascript', $context, $blocks);
        // line 20
        echo "
    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA83Uvup9ezN7hjFRCj0FS3V6RySUyUb0o\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?libraries=places\"></script>
    <script type=\"text/javascript\">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(43.65323, -79.38318),
                zoom: 8
            };
            var map = new google.maps.Map(document.getElementById(\"map-canvas\"),
                    mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f9dc43_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_bootstrap.min_1.css");
            // line 6
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_innerPage_2.css");
            // line 6
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_innerPage_3.css");
            // line 6
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_4.css");
            // line 6
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_5.css");
            // line 6
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        } else {
            // asset "4f9dc43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43.css");
            // line 6
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
        // line 18
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/js/mapscript.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 37
    public function block_main_content($context, array $blocks = array())
    {
        // line 38
        echo "
    <section class=\"col-md-8 main_content\">



        <h1>Find a Gym</h1>

        <div id=\"map-canvas\"></div>

        <div class=\"actions\">
            <div class=\"button\">
                <label for=\"gmap_where\">Where:</label>
                <input id=\"gmap_where\" type=\"text\" name=\"gmap_where\" /></div>
            <div id=\"button2\" class=\"button\" onclick=\"findAddress(); return false;\">Search for address</div>
            <div class=\"button\">
                <label for=\"gmap_keyword\">Keyword (optional):</label>
                <input id=\"gmap_keyword\" type=\"text\" name=\"gmap_keyword\" /></div>
            <div class=\"button\">
                <label for=\"gmap_type\">Type:</label>
                <select id=\"gmap_type\">
                    <option value=\"art_gallery\">art_gallery</option>
                    <option value=\"atm\">atm</option>
                    <option value=\"bank\">bank</option>
                    <option value=\"bar\">bar</option>
                    <option value=\"cafe\">cafe</option>
                    <option value=\"food\">food</option>
                    <option value=\"hospital\">hospital</option>
                    <option value=\"police\">police</option>
                    <option value=\"store\">store</option>
                </select>
            </div>
            <div class=\"button\">
                <label for=\"gmap_radius\">Radius:</label>
                <select id=\"gmap_radius\">
                    <option value=\"500\">500</option>
                    <option value=\"1000\">1000</option>
                    <option value=\"1500\">1500</option>
                    <option value=\"5000\">5000</option>
                </select>
            </div>
            <input type=\"hidden\" id=\"lat\" name=\"lat\" value=\"40.7143528\" />
            <input type=\"hidden\" id=\"lng\" name=\"lng\" value=\"-74.0059731\" />
            <div id=\"button1\" class=\"button\" onclick=\"findPlaces(); return false;\">Search for objects</div>
        </div>


        </div>
        </div>



    </section>
";
    }

    public function getTemplateName()
    {
        return "healthResourcesBundle:Gym:finder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 38,  180 => 37,  173 => 18,  170 => 17,  166 => 10,  160 => 8,  156 => 7,  151 => 6,  144 => 8,  140 => 7,  135 => 6,  129 => 8,  125 => 7,  120 => 6,  114 => 8,  110 => 7,  105 => 6,  99 => 8,  95 => 7,  90 => 6,  84 => 8,  80 => 7,  75 => 6,  70 => 5,  67 => 4,  47 => 20,  45 => 17,  37 => 11,  34 => 4,  31 => 3,);
    }
}
