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
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "

";
        // line 24
        $this->displayBlock('main_content', $context, $blocks);
        // line 34
        echo "

";
        // line 36
        $this->displayBlock('sideBar', $context, $blocks);
        // line 62
        echo "

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
        echo "

    <title>";
        // line 13
        echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "</title>
</head>
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

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "<header> The Healthy LifeStyle</header>
";
    }

    // line 24
    public function block_main_content($context, array $blocks = array())
    {
        // line 25
        echo "    <section class=\"row\">

        <section class=\"col-md-8 main_content\">

        </section>

    </section>

";
    }

    // line 36
    public function block_sideBar($context, array $blocks = array())
    {
        // line 37
        echo "    <aside class=\"row\">

        <aside class=\"col-md-4 sidebar\">
            <h3>Monthly Contest</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

        <aside class=\"col-md-4 sidebar\">
            <h3>Monthly Contest</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

        <aside class=\"col-md-4 sidebar\">
            <h3>Monthly Contest</h3>
            <p>Carles anim wayfarers chambray, mumblecore consequat flannel small batch sunt pug Wes
                Anderson deserunt. Kogi locavore elit viral, placeat Portland umami iPhone shabby chic
                normcore odio gluten-free tofu ullamco. </p>
        </aside>

    </aside>
";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 37,  154 => 36,  142 => 25,  139 => 24,  134 => 20,  131 => 19,  127 => 10,  121 => 8,  116 => 7,  109 => 8,  104 => 7,  98 => 8,  93 => 7,  87 => 8,  82 => 7,  77 => 6,  67 => 13,  61 => 5,  56 => 2,  53 => 1,  41 => 34,  39 => 24,  33 => 19,  30 => 18,  27 => 16,  24 => 1,  188 => 93,  185 => 92,  136 => 45,  133 => 44,  113 => 26,  110 => 25,  102 => 15,  97 => 14,  90 => 15,  85 => 14,  79 => 15,  74 => 5,  68 => 15,  63 => 11,  58 => 13,  55 => 12,  50 => 22,  47 => 62,  45 => 36,  35 => 22,  32 => 3,);
    }
}
