<?php

/* healthuserBundle::layout.html.twig */
class __TwigTemplate_cea5f40098c4df66f1af288672ce49fb46239f29b17c0f07b387088a59dc3766 extends Twig_Template
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
        // line 36
        echo "
 ";
        // line 37
        $this->displayBlock('visual_heading', $context, $blocks);
        // line 40
        echo "

";
        // line 42
        $this->displayBlock('main_content', $context, $blocks);
        // line 50
        echo "

";
        // line 52
        $this->displayBlock('sideBar', $context, $blocks);
        // line 80
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
            // asset "2cd4855_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_bootstrap-responsive_1.css");
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
            // asset "2cd4855_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_bootstrap_2.css");
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
            // asset "2cd4855_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_bootstrap.min_3.css");
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
            // asset "2cd4855_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_innerPage_4.css");
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
            // asset "2cd4855_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_innerPage_5.css");
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
            // asset "2cd4855_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_styles_6.css");
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
            // asset "2cd4855_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_styles_7.css");
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
            // asset "2cd4855"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855.css");
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
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/profile\">Edit Profile</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("User_cpassword");
        echo "\">Change Password</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("Recipe_addrecipe");
        echo "\">Recipes</a></li>
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("Recipe_showrecipe");
        echo "\">Edit Recipes</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/chatroom\">Chatroom</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("Login_logout");
        echo "\">Logout</a></li>
                </ul>
            </nav>

        </header>
    ";
    }

    // line 37
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 38
        echo "
 ";
    }

    // line 42
    public function block_main_content($context, array $blocks = array())
    {
        // line 43
        echo "    <section class=\"row\">



    </section>

";
    }

    // line 52
    public function block_sideBar($context, array $blocks = array())
    {
        // line 53
        echo " <section class=\"row\">
    <aside class=\"col-md-3\" id=\"page_side\">

        <aside class=\"sidebar\">
            <h3>Monthly Contest</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

        <aside class=\" sidebar\">
            <h3>Latest Posts</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

        <aside class=\" sidebar\">
            <h3>Latest Recipes</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

    </aside>
 </section>
";
    }

    public function getTemplateName()
    {
        return "healthuserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  319 => 53,  303 => 42,  295 => 37,  276 => 27,  263 => 19,  260 => 18,  256 => 11,  124 => 44,  113 => 41,  23 => 2,  281 => 96,  236 => 77,  228 => 75,  213 => 70,  205 => 68,  197 => 66,  192 => 64,  335 => 65,  331 => 64,  326 => 63,  323 => 62,  289 => 98,  280 => 28,  266 => 96,  261 => 43,  234 => 9,  215 => 8,  194 => 17,  191 => 16,  181 => 10,  161 => 18,  148 => 8,  134 => 8,  129 => 7,  110 => 40,  104 => 39,  100 => 38,  81 => 9,  58 => 5,  316 => 52,  306 => 43,  301 => 60,  286 => 52,  277 => 49,  272 => 26,  259 => 43,  250 => 9,  245 => 39,  237 => 37,  232 => 76,  223 => 73,  218 => 30,  210 => 7,  202 => 22,  190 => 16,  186 => 12,  172 => 8,  167 => 7,  160 => 10,  152 => 8,  118 => 9,  114 => 8,  90 => 7,  84 => 10,  76 => 26,  65 => 10,  34 => 4,  53 => 7,  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 7,  184 => 25,  178 => 20,  153 => 8,  146 => 54,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 97,  275 => 47,  265 => 44,  262 => 43,  257 => 42,  233 => 19,  226 => 11,  216 => 71,  211 => 28,  200 => 8,  195 => 7,  185 => 8,  180 => 7,  174 => 9,  170 => 8,  165 => 7,  155 => 8,  150 => 7,  127 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 67,  305 => 95,  298 => 38,  294 => 58,  285 => 30,  283 => 88,  278 => 54,  268 => 100,  264 => 46,  258 => 81,  252 => 39,  247 => 78,  241 => 7,  229 => 32,  220 => 72,  214 => 29,  177 => 9,  169 => 60,  140 => 8,  132 => 8,  128 => 7,  107 => 63,  61 => 19,  273 => 96,  269 => 94,  254 => 38,  243 => 37,  240 => 78,  238 => 36,  235 => 59,  230 => 8,  227 => 81,  224 => 71,  221 => 77,  219 => 9,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 43,  102 => 8,  71 => 7,  67 => 19,  63 => 6,  59 => 28,  38 => 10,  94 => 33,  89 => 20,  85 => 10,  75 => 17,  68 => 7,  56 => 17,  87 => 8,  21 => 2,  26 => 6,  93 => 6,  88 => 30,  78 => 6,  46 => 42,  27 => 24,  44 => 5,  31 => 16,  28 => 14,  201 => 67,  196 => 90,  183 => 82,  171 => 26,  166 => 57,  163 => 62,  158 => 17,  156 => 9,  151 => 63,  142 => 10,  138 => 9,  136 => 56,  121 => 46,  117 => 42,  105 => 40,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 31,  72 => 8,  69 => 23,  47 => 20,  40 => 37,  37 => 36,  22 => 2,  246 => 8,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 6,  120 => 5,  115 => 2,  111 => 37,  108 => 6,  101 => 14,  98 => 7,  96 => 37,  83 => 28,  74 => 14,  66 => 10,  55 => 4,  52 => 52,  50 => 14,  43 => 12,  41 => 13,  35 => 18,  32 => 5,  29 => 4,  209 => 82,  203 => 22,  199 => 21,  193 => 17,  189 => 9,  187 => 12,  182 => 61,  176 => 9,  173 => 8,  168 => 25,  164 => 59,  162 => 56,  154 => 10,  149 => 51,  147 => 51,  144 => 9,  141 => 10,  133 => 8,  130 => 6,  125 => 44,  122 => 12,  116 => 14,  112 => 1,  109 => 7,  106 => 36,  103 => 51,  99 => 35,  95 => 8,  92 => 36,  86 => 33,  82 => 27,  80 => 27,  73 => 25,  64 => 27,  60 => 6,  57 => 8,  54 => 80,  51 => 14,  48 => 50,  45 => 12,  42 => 40,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
