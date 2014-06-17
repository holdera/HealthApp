<?php

/* healthhealthUserBundle:Default:index.html.twig */
class __TwigTemplate_a4e6586e1bbe08c40745d8e58a277a725d1782fa928289813e8ad4b055e84f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'header' => array($this, 'block_header'),
            'home_content' => array($this, 'block_home_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('home_content', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"health, fitness, exercise, lifestyle, healthy, weightloss\">
    <meta name=\"description\" content=\"spreading awareness of living a healthy lifestyle,
\t lose weight, build muscle, its not a diet, its a lifestyle change\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
    <title>The Healthy LifeStyle</title>

";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "</head>
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f9dc43_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_bootstrap.min_1.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_innerPage_2.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_innerPage_3.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_4.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_5.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
        } else {
            // asset "4f9dc43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
        }
        unset($context["asset_url"]);
    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        // line 26
        echo "<header>
    <h1 id=\"logo\">The Healthy Lifestyle</h1>

    <nav class=\"top_nav\">
        <ul>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/login\">Login</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/lifestyle\">Lifestyle</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/exercise\">Fitness</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/detox\">Detox</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/forum\">Forum</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/chat\">Chatroom</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/resource\">Resources</a></li>

        </ul>
    </nav>

</header>
";
    }

    // line 45
    public function block_home_content($context, array $blocks = array())
    {
        // line 46
        echo "<section >

    <section id=\"non-slider\">

        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/nonslider2.png"), "html", null, true);
        echo "\" class=\"slider\" alt=\"health\" />

        <h1>\"Its not a diet its a lifestyle change\" -Alannah Holder</h1>

        <section class=\"social-icons\"\">
            <a href=\"https://www.facebook.com/\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\" /></a>

            <a href=\"https://www.twitter.com/\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\" /></a>

            <a href=\"https://www.youtube.com/\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/pinterest.png"), "html", null, true);
        echo "\" alt=\"facebook\" /></a>

            <a href=\"https://www.tumblr.com/\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/tumblr.png"), "html", null, true);
        echo "\" alt=\"facebook\" /></a>
        </section>

    </section>

    <section class=\"container-fluid cont_top\">

        <section class=\"row first\" data-0=\"background-color:rgb(208, 205, 211);\" data-500=\"background-color:rgb(71, 29, 112); color:#fff\">

    <section class=\"col-md-6 col-md-push-1 welcome da\">
        <h1>Change Your Lifestyle!</h1>

        <p>Fingerstache wayfarers mlkshk, flexitarian skateboard paleo banh mi Austin.
            Fingerstache synth gastropub art party cornhole sriracha, iPhone Odd Future. Blue Bottle church-key roof party
            fingerstache tofu banh mi. Jean shorts ethical craft beer, Thundercats hella ennui tote bag High Life Wes Anderson.
            Ethical seitan cliche, chillwave artisan Odd Future iPhone lo-fi art party fingerstache flexitarian locavore meh kale chips.
            Williamsburg Tumblr kitsch bicycle rights, Shoreditch craft beer distillery. Banh mi YOLO quinoa, Banksy Neutra drinking vinegar
            dreamcatcher stumptown Etsy blog organic McSweeney's banjo.</p>
    </section><!--end of welcome-->



    <section class=\"col-md-6 move\">
        <h1>Login/Sign Up</h1>
<form class=\"form-horizontal login\" method=\"post\">

      <label class=\"col-sm-3 control-label\" for=\"username\">Username:</label>
      <input type=\"text\" name=\"username\" class=\"form-control inputW\" id=\"userName\" />

        <label class=\"col-sm-3 control-label\" for=\"password\">Password:</label>
        <input type=\"password\" name=\"password\" class=\"form-control inputW\" id=\"passWord\" />



        <input type=\"submit\" class=\"btn\" name=\"submit\" id=\"subMit\" />

</form>
    </section><!--end of homeIMG-->



</section><!--end of row-->

        <section class=\"row join\" data-0=\"background-color:#ebfeed;\"
                 data-top=\"background-color:(0,0,0);\"
                 data-anchor-target=\".join\">
            <h1 class=\"quote skrollable skrollable-between\" data-top-top=\"left:50%;\" data-bottom-bottom=\"left:25%\">Why Join Us?</h1>
        </section>

        <section class=\"row why\"  data-center=\"opacity:1\" data-100-end=\"opacity:0.2\">

            <section class=\"col-md-4 check\">

                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/record.png"), "html", null, true);
        echo "\" alt=\"love\" />

                <ul class=\"list_one\">
                    <li>Add years to your life</li>
                    <li>Change Your body</li>
                    <li>Change the way you look at food</li>
                    <li>Gain confidence and adopt a new attitude</li>
                </ul>

            </section>

            <section class=\"col-md-4 check\">

                <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/check.png"), "html", null, true);
        echo "\" alt=\"check\" />

                <ul class=\"list_two\">
                    <li>Learn new ways to make your favorite foods healthy</li>
                    <li>Build and strengthen your muscles</li>
                    <li>Be healthy without depriving yourself</li>
                    <li>Become the best You can be</li>
                </ul>

            </section>

            <section class=\"col-md-4 check\">

                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/heart.png"), "html", null, true);
        echo "\" alt=\"love\" />

                <ul class=\"list_two\">
                    <li>Try new healthy foods</li>
                    <li>Make new friends</li>
                    <li>Create your own community</li>
                    <li>And more!</li>
                </ul>

            </section>


        </section>


        <section class=\"row extras\" data-center-bottom=\"opacity: 1\" data-center-top=\"opacity: 0.3\">


            <section class=\"col-md-6 col-md-push-1\">

                <h1 class=\"quote\">\"Take care of your body. It's the only place you live in\" </h1>
                <span class=\"quote\">-Anymonous</span>

            </section>

            <section class=\"col-md-6\">

                <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/apple.png"), "html", null, true);
        echo "\" alt=\"apple\" class=\"apple\"/>

            </section>


        </section>

        <section class=\"try\">

        </section>



</section><!--container fluid ends-->

";
    }

    // line 184
    public function block_footer($context, array $blocks = array())
    {
        // line 185
        echo "    <footer class=\"row\">

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
    <script type=\"text/javascript\">
        var s = skrollr.init();
    </script>
";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  184 => 25,  178 => 20,  153 => 12,  146 => 14,  137 => 12,  97 => 13,  77 => 12,  307 => 75,  297 => 68,  284 => 58,  275 => 53,  265 => 44,  262 => 43,  257 => 39,  233 => 19,  226 => 11,  216 => 8,  211 => 46,  200 => 8,  195 => 7,  185 => 8,  180 => 7,  174 => 9,  170 => 18,  165 => 7,  155 => 8,  150 => 7,  127 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 54,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 9,  214 => 69,  177 => 65,  169 => 60,  140 => 8,  132 => 51,  128 => 49,  107 => 12,  61 => 13,  273 => 96,  269 => 94,  254 => 38,  243 => 88,  240 => 61,  238 => 85,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 17,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 43,  27 => 24,  44 => 1,  31 => 16,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 13,  156 => 66,  151 => 63,  142 => 13,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 18,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 11,  69 => 10,  47 => 2,  40 => 184,  37 => 183,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 14,  123 => 47,  120 => 5,  115 => 2,  111 => 37,  108 => 36,  101 => 14,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 53,  50 => 10,  43 => 8,  41 => 10,  35 => 45,  32 => 44,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 9,  187 => 26,  182 => 66,  176 => 64,  173 => 19,  168 => 72,  164 => 59,  162 => 14,  154 => 58,  149 => 51,  147 => 58,  144 => 9,  141 => 48,  133 => 55,  130 => 6,  125 => 44,  122 => 12,  116 => 14,  112 => 13,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 12,  86 => 14,  82 => 13,  80 => 19,  73 => 19,  64 => 22,  60 => 6,  57 => 10,  54 => 84,  51 => 14,  48 => 51,  45 => 17,  42 => 41,  39 => 9,  36 => 5,  33 => 4,  30 => 25,);
    }
}
