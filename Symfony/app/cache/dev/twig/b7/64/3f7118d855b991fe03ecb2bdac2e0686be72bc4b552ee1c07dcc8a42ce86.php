<?php

/* healthuserBundle::layout.html.twig */
class __TwigTemplate_b7643f7118d855b991fe03ecb2bdac2e0686be72bc4b552ee1c07dcc8a42ce86 extends Twig_Template
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
        // line 35
        echo "
 ";
        // line 36
        $this->displayBlock('visual_heading', $context, $blocks);
        // line 39
        echo "

";
        // line 41
        $this->displayBlock('main_content', $context, $blocks);
        // line 49
        echo "

";
        // line 51
        $this->displayBlock('sideBar', $context, $blocks);
        // line 79
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
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("Profile_edit");
        echo "\">Edit Profile</a></li>
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
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("Login_logout");
        echo "\">Logout</a></li>
                </ul>
            </nav>

        </header>
    ";
    }

    // line 36
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 37
        echo "
 ";
    }

    // line 41
    public function block_main_content($context, array $blocks = array())
    {
        // line 42
        echo "    <section class=\"row\">



    </section>

";
    }

    // line 51
    public function block_sideBar($context, array $blocks = array())
    {
        // line 52
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
        return array (  321 => 52,  318 => 51,  308 => 42,  305 => 41,  300 => 37,  297 => 36,  287 => 29,  283 => 28,  279 => 27,  275 => 26,  271 => 25,  263 => 19,  260 => 18,  256 => 11,  250 => 9,  241 => 7,  234 => 9,  230 => 8,  225 => 7,  219 => 9,  215 => 8,  210 => 7,  204 => 9,  195 => 7,  189 => 9,  185 => 8,  180 => 7,  165 => 7,  159 => 9,  150 => 7,  144 => 9,  140 => 8,  135 => 7,  130 => 6,  127 => 5,  122 => 12,  120 => 5,  115 => 2,  112 => 1,  54 => 79,  48 => 49,  46 => 41,  42 => 39,  37 => 35,  35 => 18,  28 => 14,  25 => 1,  255 => 57,  249 => 53,  246 => 8,  240 => 48,  237 => 47,  200 => 8,  194 => 10,  190 => 9,  186 => 8,  181 => 7,  174 => 9,  170 => 8,  166 => 8,  161 => 7,  155 => 8,  151 => 9,  147 => 8,  142 => 7,  136 => 10,  132 => 9,  128 => 8,  123 => 7,  117 => 10,  113 => 9,  109 => 8,  104 => 7,  98 => 10,  94 => 9,  90 => 8,  85 => 7,  79 => 10,  75 => 9,  71 => 8,  66 => 7,  60 => 10,  56 => 9,  52 => 51,  47 => 7,  43 => 6,  40 => 36,  34 => 4,  31 => 16,);
    }
}
