<?php

/* healthLifestyleBundle:healthSample:sample.html.twig */
class __TwigTemplate_207af4b60fdbbbfc8c4da72fa989fa8b771e2d6d465b07eaa83fe87c981bd07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'visual_heading' => array($this, 'block_visual_heading'),
            'main_content' => array($this, 'block_main_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b11947_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_bootstrap.min_1.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "8b11947_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_life_styles_2.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "8b11947_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_life_styles_3.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "8b11947_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_liquid-slider_4.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "8b11947_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_styles_5.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "8b11947_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_styles_6.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        } else {
            // asset "8b11947"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947.css");
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
    }

    // line 16
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 17
        echo "

";
    }

    // line 21
    public function block_main_content($context, array $blocks = array())
    {
        // line 22
        echo "
    <section class=\"col-md-9 main_content\">

        <section id=\"health-slider\" class=\"liquid-slider\">
            <section class=\"content-slider\">

                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["life"]) ? $context["life"] : $this->getContext($context, "life")));
        foreach ($context['_seq'] as $context["_key"] => $context["lifeS"]) {
            // line 29
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lifeS"]) ? $context["lifeS"] : $this->getContext($context, "lifeS")), "contentTitle"), "html", null, true);
            echo "</h2>
                    <p> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lifeS"]) ? $context["lifeS"] : $this->getContext($context, "lifeS")), "content"), "html", null, true);
            echo "</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lifeS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</section>
            <section>

                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["snack"]) ? $context["snack"] : $this->getContext($context, "snack")));
        foreach ($context['_seq'] as $context["_key"] => $context["snackS"]) {
            // line 36
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["snackS"]) ? $context["snackS"] : $this->getContext($context, "snackS")), "contentTitle"), "html", null, true);
            echo "</h2>
                    <p> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["snackS"]) ? $context["snackS"] : $this->getContext($context, "snackS")), "content"), "html", null, true);
            echo "</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['snackS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</section>
            <section>

                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lunch"]) ? $context["lunch"] : $this->getContext($context, "lunch")));
        foreach ($context['_seq'] as $context["_key"] => $context["lunchS"]) {
            // line 43
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lunchS"]) ? $context["lunchS"] : $this->getContext($context, "lunchS")), "contentTitle"), "html", null, true);
            echo "</h2>
                    <p> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lunchS"]) ? $context["lunchS"] : $this->getContext($context, "lunchS")), "content"), "html", null, true);
            echo "</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lunchS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </section>
            <section>

                ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dinner"]) ? $context["dinner"] : $this->getContext($context, "dinner")));
        foreach ($context['_seq'] as $context["_key"] => $context["dinnerS"]) {
            // line 51
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dinnerS"]) ? $context["dinnerS"] : $this->getContext($context, "dinnerS")), "contentTitle"), "html", null, true);
            echo "</h2>
                    <p> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dinnerS"]) ? $context["dinnerS"] : $this->getContext($context, "dinnerS")), "content"), "html", null, true);
            echo "</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dinnerS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </section>
        </section>


        <input type=\"button\" class=\"btn allBtn\" value=\"Back\" onclick=\"goBack();\" />

    </section><!--end of main content-->
    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "   <script>
        \$(function(){
            \$('#health-slider').liquidSlider();
        });
        function goBack() {history.back();}

    </script>



";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery.liquid-slider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery.touchSwipe.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "healthLifestyleBundle:healthSample:sample.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 65,  331 => 64,  326 => 63,  323 => 62,  309 => 67,  307 => 62,  298 => 55,  289 => 52,  284 => 51,  280 => 50,  275 => 47,  266 => 44,  261 => 43,  257 => 42,  252 => 39,  243 => 37,  238 => 36,  234 => 35,  229 => 32,  220 => 30,  215 => 29,  211 => 28,  203 => 22,  200 => 21,  194 => 17,  191 => 16,  187 => 12,  181 => 10,  177 => 9,  173 => 8,  168 => 7,  161 => 10,  157 => 9,  153 => 8,  148 => 7,  142 => 10,  138 => 9,  134 => 8,  129 => 7,  123 => 10,  119 => 9,  115 => 8,  110 => 7,  104 => 10,  100 => 9,  96 => 8,  91 => 7,  85 => 10,  81 => 9,  77 => 8,  72 => 7,  66 => 10,  62 => 9,  58 => 8,  53 => 7,  48 => 6,  45 => 5,  40 => 13,  38 => 5,  35 => 4,  32 => 3,);
    }
}
