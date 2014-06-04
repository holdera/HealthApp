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
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
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
        ";
            // asset "8b11947_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b11947_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b11947_part_1_styles_4.css");
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
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 19
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 20
        echo "

";
    }

    // line 24
    public function block_main_content($context, array $blocks = array())
    {
        // line 25
        echo "
    <section class=\"col-md-9 main_content\">

       <section class=\"slider\">
           <article class=\"slide1\">

            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["life"]) ? $context["life"] : $this->getContext($context, "life")));
        foreach ($context['_seq'] as $context["_key"] => $context["lifeS"]) {
            // line 32
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lifeS"]) ? $context["lifeS"] : $this->getContext($context, "lifeS")), "contentTitle"), "html", null, true);
            echo "</h3>
        <p> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lifeS"]) ? $context["lifeS"] : $this->getContext($context, "lifeS")), "content"), "html", null, true);
            echo "</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lifeS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "           </article>

           <article class=\"slide2\">

               ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["snack"]) ? $context["snack"] : $this->getContext($context, "snack")));
        foreach ($context['_seq'] as $context["_key"] => $context["snackS"]) {
            // line 41
            echo "                   <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["snackS"]) ? $context["snackS"] : $this->getContext($context, "snackS")), "contentTitle"), "html", null, true);
            echo "</h3>
                   <p> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["snackS"]) ? $context["snackS"] : $this->getContext($context, "snackS")), "content"), "html", null, true);
            echo "</p>

               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['snackS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "           </article>

           <article class=\"slide3\">

               ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lunch"]) ? $context["lunch"] : $this->getContext($context, "lunch")));
        foreach ($context['_seq'] as $context["_key"] => $context["lunchS"]) {
            // line 50
            echo "                   <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lunchS"]) ? $context["lunchS"] : $this->getContext($context, "lunchS")), "contentTitle"), "html", null, true);
            echo "</h3>
                   <p> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lunchS"]) ? $context["lunchS"] : $this->getContext($context, "lunchS")), "content"), "html", null, true);
            echo "</p>

               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lunchS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "           </article>

           <article class=\"slide4\">

               ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dinner"]) ? $context["dinner"] : $this->getContext($context, "dinner")));
        foreach ($context['_seq'] as $context["_key"] => $context["dinnerS"]) {
            // line 59
            echo "                   <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dinnerS"]) ? $context["dinnerS"] : $this->getContext($context, "dinnerS")), "contentTitle"), "html", null, true);
            echo "</h3>
                   <p> ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dinnerS"]) ? $context["dinnerS"] : $this->getContext($context, "dinnerS")), "content"), "html", null, true);
            echo "</p>

               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dinnerS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "           </article>

           <span class=\"arrows\"> >> </span>
       </section><!--end for slider-->

        <input type=\"button\" class=\"btn allBtn\" value=\"Back\" onclick=\"goBack();\" />

    </section><!--end of main content-->

    <script>

        function goBack() {history.back();}

        \$(document).ready(function(){
            \$('.arrows').click(function(){
                \$('').load(\"medo\");
            });
        });
    </script>



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
        return array (  273 => 63,  264 => 60,  259 => 59,  255 => 58,  249 => 54,  240 => 51,  235 => 50,  231 => 49,  225 => 45,  216 => 42,  211 => 41,  207 => 40,  201 => 36,  192 => 33,  187 => 32,  183 => 31,  175 => 25,  172 => 24,  166 => 20,  163 => 19,  156 => 14,  153 => 13,  149 => 11,  143 => 9,  139 => 8,  134 => 7,  127 => 9,  123 => 8,  118 => 7,  112 => 9,  108 => 8,  103 => 7,  97 => 9,  93 => 8,  88 => 7,  82 => 9,  78 => 8,  73 => 7,  67 => 9,  63 => 8,  58 => 7,  53 => 6,  50 => 5,  45 => 16,  43 => 13,  40 => 12,  38 => 5,  35 => 4,  32 => 3,);
    }
}
