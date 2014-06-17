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

        <h1>Green N Lean</h1>

        <section id=\"kale\" class=\"col-md-4 green\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/kale.png"), "html", null, true);
        echo "\" alt=\"recipes\" />
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["greens"]) ? $context["greens"] : $this->getContext($context, "greens")));
        foreach ($context['_seq'] as $context["_key"] => $context["kale"]) {
            // line 30
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kale"]) ? $context["kale"] : $this->getContext($context, "kale")), "green"), "html", null, true);
            echo "</h2>
                <p> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kale"]) ? $context["kale"] : $this->getContext($context, "kale")), "gContent"), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </section>

        <section id=\"spinach\" class=\"col-md-4 green\">
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/spinach.png"), "html", null, true);
        echo "\" alt=\"recipes\" />
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spinach"]) ? $context["spinach"] : $this->getContext($context, "spinach")));
        foreach ($context['_seq'] as $context["_key"] => $context["spin"]) {
            // line 39
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["spin"]) ? $context["spin"] : $this->getContext($context, "spin")), "green"), "html", null, true);
            echo "</h2>
                <p> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["spin"]) ? $context["spin"] : $this->getContext($context, "spin")), "gContent"), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </section>

        <section id=\"collards\" class=\"col-md-4 green\">
            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/collards.png"), "html", null, true);
        echo "\" alt=\"recipes\" />
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collards"]) ? $context["collards"] : $this->getContext($context, "collards")));
        foreach ($context['_seq'] as $context["_key"] => $context["coll"]) {
            // line 48
            echo "                <h2 class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coll"]) ? $context["coll"] : $this->getContext($context, "coll")), "green"), "html", null, true);
            echo "</h2>
                <p> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coll"]) ? $context["coll"] : $this->getContext($context, "coll")), "gContent"), "html", null, true);
            echo "</p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </section>

<section class=\"row\">
        <section class=\"helpful col-md-8\">
            <h2 class=\"headers\">Helpful Links</h2>

            ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["glink"]) ? $context["glink"] : $this->getContext($context, "glink")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 59
            echo "            <span class=\"links\">
                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "webUrl"), "html", null, true);
            echo "\" target=\"_blank\">

                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "webName"), "html", null, true);
            echo "</a>
            </span>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </section>
    </section>

        <input type=\"button\" class=\"btn allBtn\" value=\"Back\" onclick=\"goBack();\" />

    </section><!-- end of content container-->
    <script>

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
        return array (  316 => 66,  306 => 62,  301 => 60,  286 => 52,  277 => 49,  272 => 48,  259 => 43,  250 => 40,  245 => 39,  237 => 37,  232 => 34,  223 => 31,  218 => 30,  210 => 28,  202 => 22,  190 => 16,  186 => 12,  172 => 8,  167 => 7,  160 => 10,  152 => 8,  118 => 9,  114 => 8,  90 => 7,  84 => 10,  76 => 8,  65 => 10,  34 => 4,  53 => 20,  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  184 => 25,  178 => 20,  153 => 12,  146 => 14,  137 => 9,  97 => 13,  77 => 32,  307 => 75,  297 => 68,  284 => 58,  275 => 53,  265 => 44,  262 => 43,  257 => 39,  233 => 19,  226 => 11,  216 => 8,  211 => 46,  200 => 8,  195 => 7,  185 => 8,  180 => 10,  174 => 9,  170 => 18,  165 => 7,  155 => 8,  150 => 7,  127 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 97,  305 => 95,  298 => 59,  294 => 58,  285 => 89,  283 => 88,  278 => 54,  268 => 47,  264 => 46,  258 => 81,  252 => 80,  247 => 78,  241 => 38,  229 => 73,  220 => 9,  214 => 29,  177 => 65,  169 => 60,  140 => 8,  132 => 51,  128 => 7,  107 => 63,  61 => 9,  273 => 96,  269 => 94,  254 => 38,  243 => 88,  240 => 61,  238 => 85,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 42,  102 => 32,  71 => 7,  67 => 19,  63 => 22,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 24,  56 => 18,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 43,  27 => 24,  44 => 5,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 13,  156 => 9,  151 => 63,  142 => 13,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 17,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 25,  69 => 10,  47 => 6,  40 => 184,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 14,  123 => 64,  120 => 63,  115 => 2,  111 => 37,  108 => 36,  101 => 14,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 7,  50 => 10,  43 => 12,  41 => 9,  35 => 45,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 21,  193 => 17,  189 => 9,  187 => 26,  182 => 66,  176 => 9,  173 => 19,  168 => 72,  164 => 59,  162 => 14,  154 => 58,  149 => 51,  147 => 7,  144 => 9,  141 => 10,  133 => 8,  130 => 6,  125 => 44,  122 => 10,  116 => 14,  112 => 13,  109 => 7,  106 => 36,  103 => 10,  99 => 9,  95 => 8,  92 => 12,  86 => 14,  82 => 27,  80 => 9,  73 => 19,  64 => 22,  60 => 6,  57 => 8,  54 => 84,  51 => 14,  48 => 11,  45 => 17,  42 => 9,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
