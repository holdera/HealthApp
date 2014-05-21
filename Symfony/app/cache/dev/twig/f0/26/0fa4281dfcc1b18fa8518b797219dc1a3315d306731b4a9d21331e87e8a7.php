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
            'header' => array($this, 'block_header'),
            'home_content' => array($this, 'block_home_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('home_content', $context, $blocks);
        // line 89
        echo "
";
        // line 90
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
        // line 16
        echo "
    ";
        // line 20
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
    ";
            // asset "4f9dc43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_2.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_3.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
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
    ";
        }
        unset($context["asset_url"]);
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "<header>
    <h1 id=\"logo\">The Healthy Lifestyle</h1>

    <nav class=\"top_nav\">
        <ul>
            <li><a href=\"#\">Login</a></li>
            <li><a href=\"/HealthApp/Symfony/web/app_dev.php/lifestyle\">Lifestyle</a></li>
            <li><a href=\"#\">Fitness</a></li>
            <li><a href=\"#\">Detox</a></li>
            <li><a href=\"#\">Forum</a></li>
            <li><a href=\"#\">Chatroom</a></li>
            <li><a href=\"#\">Resources</a></li>
        </ul>
    </nav>

</header>
";
    }

    // line 42
    public function block_home_content($context, array $blocks = array())
    {
        // line 43
        echo "<section >

    <section id=\"non-slider\">

    </section>

    <section class=\"container-fluid\">

    <section class=\"col-md-4 welcome\">
        <h1>Change Your Lifestyle!</h1>

        <p>Fingerstache wayfarers mlkshk, flexitarian skateboard paleo banh mi Austin.
            Fingerstache synth gastropub art party cornhole sriracha, iPhone Odd Future. Blue Bottle church-key roof party
            fingerstache tofu banh mi. Jean shorts ethical craft beer, Thundercats hella ennui tote bag High Life Wes Anderson.
            Ethical seitan cliche, chillwave artisan Odd Future iPhone lo-fi art party fingerstache flexitarian locavore meh kale chips.
            Williamsburg Tumblr kitsch bicycle rights, Shoreditch craft beer distillery. Banh mi YOLO quinoa, Banksy Neutra drinking vinegar
            dreamcatcher stumptown Etsy blog organic McSweeney's banjo.</p>
    </section><!--end of welcome-->

        <section class=\"col-md-4\">

            <img src=\"/Applications/MAMP/htdocs/HealthApp/Symfony/src/health/healthUserBundle/Resources/public/images/image2.png\"/>
            </section>

    <section class=\"col-md-4\">
        <h1>Login/Sign Up</h1>
<form class=\"form-horizontal login\" method=\"post\">
    <section class=\"form-group\">
      <label class=\"col-sm-3 control-label\" for=\"username\">Username:</label>
      <input type=\"text\" name=\"username\" class=\"form-control inputW\" id=\"userName\" />

        <label class=\"col-sm-3 control-label\" for=\"password\">Password:</label>
        <input type=\"password\" name=\"password\" class=\"form-control inputW\" id=\"passWord\" />

        </section>

        <input type=\"submit\" class=\"btn btn-default\" name=\"submit\" id=\"subMit\" />

</form>
    </section><!--end of homeIMG-->

</section><!--end of row-->

    </section><!--container fluid ends-->

";
    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        // line 91
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
        return array (  199 => 91,  196 => 90,  147 => 43,  144 => 42,  124 => 24,  121 => 23,  113 => 13,  108 => 12,  101 => 13,  96 => 12,  90 => 13,  85 => 12,  79 => 13,  74 => 12,  69 => 11,  66 => 10,  61 => 20,  58 => 16,  56 => 10,  46 => 2,  43 => 1,  39 => 90,  36 => 89,  34 => 42,  31 => 41,  29 => 23,  26 => 22,  24 => 1,);
    }
}
