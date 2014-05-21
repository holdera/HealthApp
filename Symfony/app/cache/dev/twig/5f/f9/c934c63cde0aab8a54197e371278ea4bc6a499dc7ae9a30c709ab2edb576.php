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
            'main_content' => array($this, 'block_main_content'),
            'sideBar' => array($this, 'block_sideBar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        echo "

    ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "


";
        // line 39
        $this->displayBlock('main_content', $context, $blocks);
        // line 47
        echo "

";
        // line 49
        $this->displayBlock('sideBar', $context, $blocks);
        // line 77
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
        // line 11
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
        ";
            // asset "4f9dc43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_2.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "4f9dc43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_3.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
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
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "        <header>
            <h1 id=\"logo\">The Healthy Lifestyle</h1>

            <nav class=\"top_nav\">
                <ul>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/\">Home</a></li>
                    <li><a href=\"/HealthApp/Symfony/web/app_dev.php/lifestyle\">Lifestyle</a></li>
                    <li><a href=\"#\">Fitness</a></li>
                    <li><a href=\"#\">Detox</a></li>
                    <li><a href=\"#\">Forum</a></li>
                    <li><a href=\"#\">Chatroom</a></li>
                    <li><a href=\"#\">Resources</a></li>
                    <li><a href=\"#\">Login</a></li>
                </ul>
            </nav>

        </header>
    ";
    }

    // line 39
    public function block_main_content($context, array $blocks = array())
    {
        // line 40
        echo "    <section class=\"row\">



    </section>

";
    }

    // line 49
    public function block_sideBar($context, array $blocks = array())
    {
        // line 50
        echo " <section class=\"row\">
    <aside class=\"col-md-4\" id=\"page_side\">

        <aside class=\"sidebar\">
            <h3>Monthly Contest</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

        <aside class=\" sidebar\">
            <h3>Monthly Contest</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

        <aside class=\" sidebar\">
            <h3>Monthly Contest</h3>
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
        return "healthhealthUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 50,  216 => 49,  206 => 40,  203 => 39,  182 => 18,  179 => 17,  175 => 10,  169 => 8,  164 => 7,  157 => 8,  152 => 7,  146 => 8,  141 => 7,  135 => 8,  130 => 7,  125 => 6,  122 => 5,  117 => 11,  115 => 5,  110 => 2,  107 => 1,  49 => 77,  47 => 49,  43 => 47,  41 => 39,  36 => 36,  34 => 17,  30 => 15,  27 => 13,  24 => 1,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
