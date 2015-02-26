<?php

/* healthuserBundle:Profile:editprofiles.html.twig */
class __TwigTemplate_b226530e8f11c7ec935bdd41442cd029becf9b7e1f6439542c540cf9f838e0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthuserBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'visual_heading' => array($this, 'block_visual_heading'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "healthuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2cd4855_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_bootstrap-responsive_1.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "2cd4855_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_bootstrap_2.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "2cd4855_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_bootstrap.min_3.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "2cd4855_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_innerPage_4.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "2cd4855_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_innerPage_5.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "2cd4855_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_styles_6.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
            // asset "2cd4855_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855_part_1_styles_7.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        } else {
            // asset "2cd4855"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cd4855") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cd4855.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 600px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
    }

    // line 47
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 48
        echo "

";
    }

    // line 52
    public function block_main_content($context, array $blocks = array())
    {
        // line 53
        echo "
    <section class=\"col-md-9 main_content\">
<div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("Profile_updateprofile");
        echo "\" data-validate=\"parsley\">
         ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "profile"));
        foreach ($context['_seq'] as $context["_key"] => $context["profiles"]) {
            // line 59
            echo "            <h2 class=\"form-signin-heading\">Update Profile</h2>
            <input type=\"text\" id=\"firstname\" class=\"input-block-level\" name=\"firstname\" placeholder=\"First Name\"  value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "firstname"), "html", null, true);
            echo "\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"lastname\" class=\"input-block-level\" name=\"lastname\" placeholder=\"Last Name\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "lastname"), "html", null, true);
            echo "\" data-trigger=\"change\" data-required=\"true\">
             <input type=\"text\" id=\"gender\" class=\"input-block-level\" name=\"gender\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "gender"), "html", null, true);
            echo "\" placeholder=\"Gender\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"dob\" class=\"input-block-level\" name=\"dob\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "dob"), "html", null, true);
            echo "\" placeholder=\"Date of Birth\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"email\" class=\"input-block-level\" name=\"email\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "email"), "html", null, true);
            echo "\" placeholder=\"Email\" data-trigger=\"change\" data-required=\"true\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "email"), "html", null, true);
            echo "\" data-type=\"email\">
            <input type=\"text\" id=\"cnumber\" class=\"input-block-level\" name=\"cnumber\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "cnumber"), "html", null, true);
            echo "\" placeholder=\"Contact Number\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"city\" class=\"input-block-level\" name=\"city\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "city"), "html", null, true);
            echo "\" placeholder=\"City\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"country\" class=\"input-block-level\" name=\"country\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "country"), "html", null, true);
            echo "\" placeholder=\"Country\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"province\" class=\"input-block-level\" name=\"province\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "province"), "html", null, true);
            echo "\" placeholder=\"Province\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"height\" class=\"input-block-level\" name=\"height\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "height"), "html", null, true);
            echo "\" placeholder=\"Height=\"true\">
            <input type=\"text\" id=\"weight\" class=\"input-block-level\" name=\"weight\"  value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "weight"), "html", null, true);
            echo "\" placeholder=\"Weight\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"bodyType\" class=\"input-block-level\" name=\"bodyType\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "bodyType"), "html", null, true);
            echo "\" placeholder=\"Body Type\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"dweight\" class=\"input-block-level\" name=\"dweight\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "dweight"), "html", null, true);
            echo "\" placeholder=\"Desired Weight\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"hproblem\" class=\"input-block-level\" name=\"hproblem\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "hproblem"), "html", null, true);
            echo "\" placeholder=\"Health Problem\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"alevel\" class=\"input-block-level\" name=\"alevel\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profiles"), "alevel"), "html", null, true);
            echo "\" placeholder=\"Activity Level\" data-trigger=\"change\" data-required=\"true\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profiles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            <button class=\"btn btn-large btn-primary\" type=\"submit\">Update Profile</button>
           
        </form>

    </div> 
    
    ";
        // line 82
        if (array_key_exists("name", $context)) {
            // line 83
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 84
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 86
        echo "  
    </section>
";
    }

    public function getTemplateName()
    {
        return "healthuserBundle:Profile:editprofiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 86,  345 => 84,  342 => 83,  332 => 76,  324 => 74,  320 => 73,  316 => 72,  313 => 86,  302 => 82,  276 => 64,  270 => 61,  259 => 58,  255 => 57,  249 => 53,  237 => 47,  190 => 9,  321 => 52,  308 => 70,  300 => 68,  297 => 36,  287 => 29,  279 => 27,  271 => 25,  263 => 59,  260 => 18,  155 => 10,  34 => 4,  23 => 2,  281 => 96,  228 => 75,  216 => 71,  213 => 70,  205 => 68,  197 => 66,  185 => 8,  174 => 10,  76 => 26,  335 => 65,  331 => 64,  326 => 63,  323 => 62,  307 => 84,  289 => 75,  284 => 97,  280 => 72,  275 => 26,  266 => 60,  257 => 42,  215 => 8,  200 => 12,  194 => 10,  181 => 7,  148 => 8,  129 => 7,  110 => 40,  104 => 7,  100 => 38,  81 => 9,  340 => 82,  330 => 68,  325 => 66,  318 => 51,  310 => 58,  301 => 55,  292 => 66,  288 => 65,  265 => 64,  261 => 43,  256 => 11,  242 => 36,  234 => 9,  223 => 73,  192 => 64,  134 => 8,  124 => 44,  90 => 8,  58 => 5,  378 => 184,  358 => 167,  328 => 140,  296 => 67,  225 => 7,  211 => 28,  184 => 25,  178 => 8,  170 => 9,  153 => 8,  137 => 12,  127 => 5,  97 => 13,  77 => 8,  327 => 80,  317 => 73,  304 => 69,  295 => 58,  282 => 64,  277 => 44,  274 => 62,  253 => 24,  250 => 9,  244 => 15,  239 => 14,  236 => 77,  232 => 76,  226 => 28,  222 => 8,  210 => 7,  206 => 8,  195 => 7,  191 => 16,  186 => 8,  180 => 7,  165 => 7,  161 => 7,  150 => 7,  146 => 54,  126 => 13,  113 => 9,  53 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 65,  314 => 99,  312 => 71,  309 => 67,  305 => 41,  298 => 55,  294 => 76,  285 => 49,  283 => 73,  278 => 63,  268 => 100,  264 => 84,  258 => 81,  252 => 39,  247 => 37,  241 => 7,  229 => 32,  220 => 72,  214 => 22,  177 => 9,  169 => 60,  140 => 8,  132 => 9,  128 => 8,  107 => 63,  61 => 19,  273 => 96,  269 => 65,  254 => 92,  243 => 37,  240 => 48,  238 => 36,  235 => 59,  230 => 8,  227 => 81,  224 => 71,  221 => 77,  219 => 9,  217 => 23,  208 => 17,  204 => 9,  179 => 69,  159 => 9,  143 => 9,  135 => 7,  119 => 43,  102 => 8,  71 => 8,  67 => 9,  63 => 6,  59 => 28,  38 => 10,  94 => 9,  89 => 20,  85 => 7,  75 => 9,  68 => 7,  56 => 9,  87 => 8,  21 => 2,  26 => 1,  93 => 6,  88 => 30,  78 => 6,  46 => 41,  27 => 24,  44 => 10,  31 => 3,  28 => 14,  201 => 67,  196 => 14,  183 => 82,  171 => 26,  166 => 8,  163 => 62,  158 => 17,  156 => 7,  151 => 9,  142 => 7,  138 => 9,  136 => 10,  121 => 5,  117 => 10,  105 => 9,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 10,  72 => 8,  69 => 23,  47 => 7,  40 => 5,  37 => 35,  22 => 2,  246 => 52,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 7,  120 => 5,  115 => 2,  111 => 37,  108 => 6,  101 => 8,  98 => 10,  96 => 37,  83 => 28,  74 => 14,  66 => 7,  55 => 4,  52 => 8,  50 => 14,  43 => 6,  41 => 13,  35 => 18,  32 => 5,  29 => 4,  209 => 82,  203 => 22,  199 => 15,  193 => 73,  189 => 9,  187 => 12,  182 => 61,  176 => 8,  173 => 8,  168 => 25,  164 => 59,  162 => 56,  154 => 10,  149 => 51,  147 => 8,  144 => 9,  141 => 7,  133 => 5,  130 => 6,  125 => 44,  122 => 12,  116 => 14,  112 => 1,  109 => 8,  106 => 36,  103 => 51,  99 => 35,  95 => 28,  92 => 36,  86 => 33,  82 => 8,  80 => 27,  73 => 25,  64 => 27,  60 => 10,  57 => 21,  54 => 79,  51 => 14,  48 => 49,  45 => 12,  42 => 39,  39 => 8,  36 => 23,  33 => 4,  30 => 3,);
    }
}