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
        return array (  316 => 66,  306 => 62,  301 => 60,  298 => 59,  294 => 58,  286 => 52,  277 => 49,  272 => 48,  268 => 47,  264 => 46,  259 => 43,  250 => 40,  245 => 39,  241 => 38,  237 => 37,  232 => 34,  223 => 31,  218 => 30,  214 => 29,  210 => 28,  202 => 22,  199 => 21,  193 => 17,  190 => 16,  186 => 12,  180 => 10,  176 => 9,  172 => 8,  167 => 7,  160 => 10,  156 => 9,  152 => 8,  147 => 7,  141 => 10,  137 => 9,  133 => 8,  128 => 7,  122 => 10,  118 => 9,  114 => 8,  109 => 7,  103 => 10,  99 => 9,  95 => 8,  90 => 7,  84 => 10,  80 => 9,  76 => 8,  71 => 7,  65 => 10,  61 => 9,  57 => 8,  52 => 7,  47 => 6,  44 => 5,  39 => 13,  37 => 5,  34 => 4,  31 => 3,);
    }
}
