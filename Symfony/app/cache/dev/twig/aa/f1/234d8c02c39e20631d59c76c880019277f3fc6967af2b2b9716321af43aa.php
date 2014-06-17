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
    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
<script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false\"></script>

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

    // line 25
    public function block_main_content($context, array $blocks = array())
    {
        // line 26
        echo "
    <section class=\"col-md-8 main_content\">

        <h1>Find a Gym</h1>

        <div id=\"gmap_canvas\"></div>
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
                    <option value=\"gym\">gym</option>
                    <option value=\"fitness\">fitness</option>
                    <option value=\"healthy\">Health</option>

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
            <input type=\"hidden\" id=\"lat\" name=\"lat\" value=\"43.7001100\" />
            <input type=\"hidden\" id=\"lng\" name=\"lng\" value=\"-79.4163000\" />
            <div id=\"button1\" class=\"button\" onclick=\"findPlaces(); return false;\">Search for objects</div>
        </div>



    </section>

<script>
    var geocoder;
    var map;
    var markers = Array();
    var infos = Array();

    function initialize() {
        // prepare Geocoder
        geocoder = new google.maps.Geocoder();

        // set initial position (New York)
        var myLatlng = new google.maps.LatLng(40.7143528,-74.0059731);

        var myOptions = { // default map options
            zoom: 14,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    }

    // clear overlays function
    function clearOverlays() {
        if (markers) {
            for (i in markers) {
                markers[i].setMap(null);
            }
            markers = [];
            infos = [];
        }
    }

    // clear infos function
    function clearInfos() {
        if (infos) {
            for (i in infos) {
                if (infos[i].getMap()) {
                    infos[i].close();
                }
            }
        }
    }

    // find address function
    function findAddress() {
        var address = document.getElementById(\"gmap_where\").value;

        // script uses our 'geocoder' in order to find location by address name
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) { // and, if everything is ok

                // we will center map
                var addrLocation = results[0].geometry.location;
                map.setCenter(addrLocation);

                // store current coordinates into hidden variables
                document.getElementById('lat').value = results[0].geometry.location.lat();
                document.getElementById('lng').value = results[0].geometry.location.lng();

                // and then - add new custom marker
                var addrMarker = new google.maps.Marker({
                    position: addrLocation,
                    map: map,
                    title: results[0].formatted_address,
                    icon: 'marker.png'
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    // find custom places function
    function findPlaces() {

        // prepare variables (filter)
        var type = document.getElementById('gmap_type').value;
        var radius = document.getElementById('gmap_radius').value;
        var keyword = document.getElementById('gmap_keyword').value;

        var lat = document.getElementById('lat').value;
        var lng = document.getElementById('lng').value;
        var cur_location = new google.maps.LatLng(lat, lng);

        // prepare request to Places
        var request = {
            location: cur_location,
            radius: radius,
            types: [type]
        };
        if (keyword) {
            request.keyword = [keyword];
        }

        // send request
        service = new google.maps.places.PlacesService(map);
        service.search(request, createMarkers);
    }

    // create markers (from 'findPlaces' function)
    function createMarkers(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {

            // if we have found something - clear map (overlays)
            clearOverlays();

            // and create new markers by search result
            for (var i = 0; i < results.length; i++) {
                createMarker(results[i]);
            }
        } else if (status == google.maps.places.PlacesServiceStatus.ZERO_RESULTS) {
            alert('Sorry, nothing is found');
        }
    }

    // creare single marker function
    function createMarker(obj) {

        // prepare new Marker object
        var mark = new google.maps.Marker({
            position: obj.geometry.location,
            map: map,
            title: obj.name
        });
        markers.push(mark);

        // prepare info window
        var infowindow = new google.maps.InfoWindow({
            content: '<img src=\"' + obj.icon + '\" /><font style=\"color:#000;\">' + obj.name +
                    '<br />Rating: ' + obj.rating + '<br />Vicinity: ' + obj.vicinity + '</font>'
        });

        // add event handler to current marker
        google.maps.event.addListener(mark, 'click', function() {
            clearInfos();
            infowindow.open(map,mark);
        });
        infos.push(infowindow);
    }

    // initialization
    google.maps.event.addDomListener(window, 'load', initialize);

</script>
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
        return array (  171 => 26,  168 => 25,  161 => 18,  158 => 17,  154 => 10,  148 => 8,  144 => 7,  139 => 6,  132 => 8,  128 => 7,  123 => 6,  117 => 8,  113 => 7,  108 => 6,  102 => 8,  98 => 7,  93 => 6,  87 => 8,  83 => 7,  78 => 6,  72 => 8,  68 => 7,  63 => 6,  58 => 5,  55 => 4,  47 => 20,  45 => 17,  37 => 11,  34 => 4,  31 => 3,);
    }
}
