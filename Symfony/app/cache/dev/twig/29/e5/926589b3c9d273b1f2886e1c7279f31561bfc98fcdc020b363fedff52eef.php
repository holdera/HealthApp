<?php

/* healthLifestyleBundle:Greens:greens.html.twig */
class __TwigTemplate_29e5926589b3c9d273b1f2886e1c7279f31561bfc98fcdc020b363fedff52eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'visual_heading' => array($this, 'block_visual_heading'),
            'main_content' => array($this, 'block_main_content'),
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
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
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

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery.liquid-slider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery.touchSwipe.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 22
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 23
        echo "

";
    }

    // line 27
    public function block_main_content($context, array $blocks = array())
    {
        // line 28
        echo "
    <section class=\"col-md-9 main_content\">

        <h1>Green N Lean</h1>

        <section id=\"kale\" class=\"col-md-4 green\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/kale.png"), "html", null, true);
        echo "\" alt=\"recipes\" />
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["greens"]) ? $context["greens"] : $this->getContext($context, "greens")));
        foreach ($context['_seq'] as $context["_key"] => $context["kale"]) {
            // line 36
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kale"]) ? $context["kale"] : $this->getContext($context, "kale")), "green"), "html", null, true);
            echo "</h2>
                <p> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kale"]) ? $context["kale"] : $this->getContext($context, "kale")), "gContent"), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </section>

        <section id=\"spinach\" class=\"col-md-4 green\">
            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/spinach.png"), "html", null, true);
        echo "\" alt=\"recipes\" />
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spinach"]) ? $context["spinach"] : $this->getContext($context, "spinach")));
        foreach ($context['_seq'] as $context["_key"] => $context["spin"]) {
            // line 45
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["spin"]) ? $context["spin"] : $this->getContext($context, "spin")), "green"), "html", null, true);
            echo "</h2>
                <p> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["spin"]) ? $context["spin"] : $this->getContext($context, "spin")), "gContent"), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </section>

        <section id=\"collards\" class=\"col-md-4 green\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/collards.png"), "html", null, true);
        echo "\" alt=\"recipes\" />
            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collards"]) ? $context["collards"] : $this->getContext($context, "collards")));
        foreach ($context['_seq'] as $context["_key"] => $context["coll"]) {
            // line 54
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coll"]) ? $context["coll"] : $this->getContext($context, "coll")), "green"), "html", null, true);
            echo "</h2>
                <p> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coll"]) ? $context["coll"] : $this->getContext($context, "coll")), "gContent"), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </section>

<section class=\"row\">
        <section class=\"helpful col-md-8\">
            <h2 class=\"headers\">Helpful Links</h2>

            ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["glink"]) ? $context["glink"] : $this->getContext($context, "glink")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 65
            echo "            <span class=\"links\">
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "webUrl"), "html", null, true);
            echo "\" target=\"_blank\">

                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "webName"), "html", null, true);
            echo "</a>
            </span>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </section>
    </section>

        <input type=\"button\" class=\"btn allBtn\" value=\"Back\" onclick=\"goBack();\" />

    </section><!-- end of content container-->
    <script>

        \$(document).ready(function(){
            \$('#collards').hide();
            \$('#kale').hide();
            \$('#spinach').hide();
        });

        function goBack() {history.back();}

    </script>
";
    }

    public function getTemplateName()
    {
        return "healthLifestyleBundle:Greens:greens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 72,  330 => 68,  325 => 66,  322 => 65,  318 => 64,  310 => 58,  301 => 55,  296 => 54,  292 => 53,  288 => 52,  283 => 49,  274 => 46,  269 => 45,  265 => 44,  261 => 43,  256 => 40,  247 => 37,  242 => 36,  238 => 35,  234 => 34,  226 => 28,  223 => 27,  217 => 23,  214 => 22,  208 => 17,  204 => 16,  199 => 15,  196 => 14,  192 => 12,  186 => 10,  182 => 9,  178 => 8,  173 => 7,  166 => 10,  162 => 9,  158 => 8,  153 => 7,  147 => 10,  143 => 9,  139 => 8,  134 => 7,  128 => 10,  124 => 9,  120 => 8,  115 => 7,  109 => 10,  105 => 9,  101 => 8,  96 => 7,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  71 => 10,  67 => 9,  63 => 8,  58 => 7,  53 => 6,  50 => 5,  45 => 19,  43 => 14,  40 => 13,  38 => 5,  35 => 4,  32 => 3,);
    }
}
