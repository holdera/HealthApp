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
            'javascript' => array($this, 'block_javascript'),
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
        // line 19
        echo "
";
        // line 21
        echo "

    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
 ";
        // line 43
        $this->displayBlock('visual_heading', $context, $blocks);
        // line 46
        echo "

";
        // line 48
        $this->displayBlock('main_content', $context, $blocks);
        // line 56
        echo "

";
        // line 58
        $this->displayBlock('sideBar', $context, $blocks);
        // line 89
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
        echo "
     ";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
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

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
     ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
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

    // line 43
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 44
        echo "
 ";
    }

    // line 48
    public function block_main_content($context, array $blocks = array())
    {
        // line 49
        echo "    <section class=\"row\">



    </section>

";
    }

    // line 58
    public function block_sideBar($context, array $blocks = array())
    {
        // line 59
        echo " <section class=\"row\">
    <aside class=\"col-md-3\" id=\"page_side\">

        <aside class=\"sidebar\">
            <a href=\"/HealthApp/Symfony/web/app_dev.php/contest\"><img src=\"";
        // line 63
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
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/sideIMG2.png"), "html", null, true);
        echo "\" alt=\"weights\" /></a>
                <h3>Sexy Arms</h3>
            <p>Check out this upper body workout to get lean, toned sexy arms for the summer. </p></a>
        </aside>

        <aside class=\" sidebar\">
            <a href=\"/HealthApp/Symfony/web/app_dev.php/recipes\">
                <img src=\"";
        // line 80
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
        return array (  327 => 80,  317 => 73,  304 => 63,  298 => 59,  295 => 58,  285 => 49,  282 => 48,  277 => 44,  274 => 43,  253 => 24,  250 => 23,  244 => 15,  239 => 14,  236 => 13,  232 => 11,  226 => 9,  222 => 8,  217 => 7,  210 => 9,  206 => 8,  201 => 7,  195 => 9,  191 => 8,  180 => 9,  176 => 8,  171 => 7,  165 => 9,  156 => 7,  150 => 9,  146 => 8,  141 => 7,  133 => 5,  126 => 13,  121 => 5,  116 => 2,  55 => 89,  53 => 58,  49 => 56,  41 => 43,  38 => 42,  36 => 23,  32 => 21,  29 => 19,  26 => 1,  289 => 75,  283 => 73,  280 => 72,  278 => 71,  269 => 65,  265 => 64,  255 => 57,  249 => 53,  246 => 52,  240 => 48,  237 => 47,  200 => 12,  194 => 10,  190 => 9,  186 => 7,  181 => 7,  174 => 10,  170 => 9,  166 => 8,  161 => 8,  155 => 10,  151 => 9,  147 => 8,  142 => 7,  136 => 6,  132 => 9,  128 => 17,  123 => 12,  117 => 10,  113 => 1,  109 => 8,  104 => 7,  98 => 10,  94 => 9,  90 => 8,  85 => 7,  79 => 10,  75 => 9,  71 => 8,  66 => 7,  60 => 10,  56 => 9,  52 => 8,  47 => 48,  43 => 46,  40 => 5,  34 => 4,  31 => 3,);
    }
}
