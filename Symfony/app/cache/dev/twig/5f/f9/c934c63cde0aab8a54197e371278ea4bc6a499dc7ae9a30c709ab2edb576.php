<?php

/* healthhealthUserBundle::layout.html.twig */
class __TwigTemplate_5ff9c934c63cde0aab8a54197e371278ea4bc6a499dc7ae9a30c709ab2edb576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'visual_heading' => array($this, 'block_visual_heading'),
            'main_content' => array($this, 'block_main_content'),
            'sideBar' => array($this, 'block_sideBar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "
";
        // line 16
        echo "

    ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "
 ";
        // line 38
        $this->displayBlock('visual_heading', $context, $blocks);
        // line 41
        echo "

";
        // line 43
        $this->displayBlock('main_content', $context, $blocks);
        // line 51
        echo "

";
        // line 53
        $this->displayBlock('sideBar', $context, $blocks);
        // line 84
        echo "
 <footer class=\"row\">

     <section class=\"col-sm-2 foot_nav\">
         <ul>
             <li><a href=\"#\">home</a></li>
             <li><a href=\"#\">lifestyle</a></li>
             <li><a href=\"#\">recipes</a></li>
             <li><a href=\"#\">detox</a></li>
         </ul>
     </section>

     <section class=\"col-sm-2 foot_nav\">
         <ul>
             <li><a href=\"#\">Fitness</a></li>
             <li><a href=\"#\">upper body</a></li>
             <li><a href=\"#\">midsection</a></li>
             <li><a href=\"#\">lower body</a></li>
         </ul>
     </section>

     <section class=\"col-sm-2 foot_nav\">
         <ul>
             <li><a href=\"#\">forum</a></li>
             <li><a href=\"#\">chatroom</a></li>
             <li><a href=\"#\">login</a></li>
             <li><a href=\"#\">register</a></li>
         </ul>
     </section>

     <section class=\"col-sm-2 foot_nav\">
         <ul>
             <li><a href=\"#\">sitemap</a></li>
             <li><a href=\"#\">privacy</a></li>
             <li><a href=\"#\">copyright</a></li>

         </ul>
     </section>


     <section class=\"col-sm-4\">
         <form id=\"subscribe\" method=\"post\" action=\"\">
             <h3>Subscribe</h3>
             <label for=\"name\">Name: </label>
             <input type=\"text\" name=\"name\" class=\"form-control fields\">
             <label for=\"email\">Email:</label>
             <input type=\"text\" name=\"email\" class=\"form-control fields\">

             <input type=\"submit\" name=\"sub\" class=\"btn\" id=\"submitBut\" value=\"subscribe\">
         </form>
     </section>

 </footer>

</html>";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo " <!DOCTYPE html>
 <html>
 <head>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f9dc43_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_bootstrap.min_1.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_innerPage_2.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_innerPage_3.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_4.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_5.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        } else {
            // asset "4f9dc43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    ";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "        <header>
            <h1 id=\"logo\">The Healthy Lifestyle</h1>

            <nav class=\"top_nav\">
                <ul>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/\">Home</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/lifestyle\">Lifestyle</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/exercise\">Fitness</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/detox\">Detox</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/forum\">Forum</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/chat\">Chatroom</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/resource\">Resources</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/login\">Login</a></li>
                </ul>
            </nav>

        </header>
    ";
    }

    // line 38
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 39
        echo "
 ";
    }

    // line 43
    public function block_main_content($context, array $blocks = array())
    {
        // line 44
        echo "    <section class=\"row\">



    </section>

";
    }

    // line 53
    public function block_sideBar($context, array $blocks = array())
    {
        // line 54
        echo " <section class=\"row\">
    <aside class=\"col-md-3\" id=\"page_side\">

        <aside class=\"sidebar\">
            <a href=\"/HealthApp/Symfony/web/app_dev.php/contest\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/sideIMG1.png"), "html", null, true);
        echo "\" alt=\"contest\" /></a>

            <a href=\"/HealthApp/Symfony/web/app_dev.php/contest\"><h3>Monthly Contest</h3>
            <p>Have a health or fitness goal? Want to be features as the Healthy lifestyle Ambasador for the month?
                Come enter our contest.
            </p>
                </a>
        </aside>

        <aside class=\" sidebar\">
            <a href=\"/HealthApp/Symfony/web/app_dev.php/upperbody\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/sideIMG2.png"), "html", null, true);
        echo "\" alt=\"weights\" /></a>
                <h3>Sexy Arms</h3>
            <p>Check out this upper body workout to get lean, toned sexy arms for the summer. </p></a>
        </aside>

        <aside class=\" sidebar\">
            <a href=\"/HealthApp/Symfony/web/app_dev.php/recipes\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/sideIMG3.png"), "html", null, true);
        echo "\" alt=\"recipes\" /></a>
            <h3>Healthy Recipes</h3>
            <p>Check out our healthy delicious recipes that will not compromise your goals or your taste buds</p>
                </a>
        </aside>

    </aside>
 </section>
";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  307 => 75,  297 => 68,  284 => 58,  275 => 53,  265 => 44,  262 => 43,  257 => 39,  233 => 19,  226 => 11,  216 => 8,  211 => 7,  200 => 8,  195 => 7,  185 => 8,  180 => 7,  174 => 9,  170 => 8,  165 => 7,  155 => 8,  150 => 7,  127 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 54,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 9,  214 => 69,  177 => 65,  169 => 60,  140 => 8,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 38,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 18,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 43,  27 => 4,  44 => 12,  31 => 16,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 38,  37 => 37,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 5,  115 => 2,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 53,  50 => 10,  43 => 8,  41 => 10,  35 => 18,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 9,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 9,  141 => 48,  133 => 55,  130 => 6,  125 => 44,  122 => 12,  116 => 41,  112 => 1,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 84,  51 => 14,  48 => 51,  45 => 17,  42 => 41,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
