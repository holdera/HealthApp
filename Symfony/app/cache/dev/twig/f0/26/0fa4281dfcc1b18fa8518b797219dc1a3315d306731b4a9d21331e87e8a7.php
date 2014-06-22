<?php

/* healthhealthUserBundle:Default:index.html.twig */
class __TwigTemplate_f0260fa4281dfcc1b18fa8518b797219dc1a3315d306731b4a9d21331e87e8a7 extends Twig_Template
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
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('home_content', $context, $blocks);
        // line 192
        echo "<script type=\"text/javascript\">
    var s = skrollr.init();

    window.onload = function() {
        skrollr.init({
            forceHeight: false
        });
    }
</script>
";
        // line 201
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
        // line 23
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
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/js/require.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "<header data-0=\"position:static;\" data-top-top=\"position:fixed;top:0;\" data-edge-strategy=\"set\">
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

    // line 46
    public function block_home_content($context, array $blocks = array())
    {
        // line 47
        echo "
    <section  id=\"non-slider\">

        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/nonslider2.png"), "html", null, true);
        echo "\" class=\"slider\" alt=\"health\" />

        <h1>\"Its not a diet its a lifestyle change\" -Alannah Holder</h1>

        <section class=\"social-icons\">
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

    <section class=\"container-fluid cont_top skrollr-body\">

        <section class=\"row first\" data-100=\"background-color:rgb(208, 205, 211);\" data-500=\"background-color:rgb(71, 29, 112); color:#fff\">

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

        <section class=\"row join\">
            <h1 class=\"quote\" data-top=\"left:100%\" data-top-bottom=\"left:25%;\">Why Join Us?</h1>
        </section>

        <section class=\"row why\"  data-1100=\"opacity:1;\" data-900=\"opacity:0.4;\" data-1200=\"opacity:0.4;\">

            <section class=\"col-md-4 check\">

                <img src=\"";
        // line 112
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
        // line 125
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
        // line 138
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

        <section class=\"row join\">
            <h1 class=\"quote\" data-top=\"left:100%\" data-top-bottom=\"left:25%;\">Remember....</h1>
        </section>

        <section class=\"row extras\" data-3900=\"\" data-4900=\"color[swing]:rgb(0,0,0);\" data-5900=\"color:rgb(255,255,0);\">
            <div style=\"background-image:url(";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/heart.png"), "html", null, true);
        echo ");\"></div>

            <section class=\"col-md-4 square\">

                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/sun.png"), "html", null, true);
        echo "\" alt=\"love\" />

                <h4 class=\"quote\">\"Take care of your body-it's the only place you live in\" </h4>
                <span class=\"quote\">-Anymonous</span>

            </section>

            <section class=\"col-md-4 square\">

                <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/love.png"), "html", null, true);
        echo "\" alt=\"love\" />

                <h4 class=\"quote\">\"Love yourself enough to live a healthy lifestyle\" </h4>
                <span class=\"quote\">-jules-robinson.com</span>

            </section>

            <section class=\"col-md-4 square\">

                <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/rel.png"), "html", null, true);
        echo "\" alt=\"love\" />

                <h4 class=\"quote\">\"Health is a relationship between you and your body\" </h4>
                <span class=\"quote\">-Deepak Chopra</span>

            </section>

        </section>


</section><!--container fluid ends-->

";
    }

    // line 201
    public function block_footer($context, array $blocks = array())
    {
        // line 202
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
";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  410 => 202,  407 => 201,  390 => 179,  378 => 170,  366 => 161,  359 => 157,  337 => 138,  321 => 125,  305 => 112,  251 => 61,  246 => 59,  241 => 57,  236 => 55,  228 => 50,  223 => 47,  220 => 46,  199 => 27,  196 => 26,  190 => 21,  186 => 20,  181 => 19,  178 => 18,  170 => 14,  166 => 13,  161 => 12,  154 => 14,  150 => 13,  145 => 12,  139 => 14,  135 => 13,  130 => 12,  124 => 14,  120 => 13,  115 => 12,  109 => 14,  105 => 13,  100 => 12,  94 => 14,  90 => 13,  85 => 12,  80 => 11,  77 => 10,  72 => 23,  70 => 18,  67 => 17,  65 => 10,  55 => 2,  52 => 1,  48 => 201,  37 => 192,  35 => 46,  32 => 45,  30 => 26,  27 => 25,  25 => 1,);
    }
}
