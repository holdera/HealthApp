<?php

/* healthuserBundle:Profile:editprofile.html.twig */
class __TwigTemplate_9599ebee61e1e856b308da007bae6d8b1a705c36c97450a8499fe17d3db4dce7 extends Twig_Template
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
        <link href=\"";
            // line 10
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
        <link href=\"";
            // line 10
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
        <link href=\"";
            // line 10
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
        <link href=\"";
            // line 10
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
        <link href=\"";
            // line 10
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
        <link href=\"";
            // line 10
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
        <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("Profile_addprofile");
        echo "\" data-validate=\"parsley\">
         ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")));
        foreach ($context['_seq'] as $context["_key"] => $context["profiles"]) {
            // line 59
            echo "            <h2 class=\"form-signin-heading\">Update Profile</h2>
            <input type=\"text\" id=\"firstname\" class=\"input-block-level\" name=\"firstname\" placeholder=\"First Name\"  value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), "firstname"), "html", null, true);
            echo "\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"lastname\" class=\"input-block-level\" name=\"lastname\" placeholder=\"Last Name\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), "lastname"), "html", null, true);
            echo "\" data-trigger=\"change\" data-required=\"true\">
             <input type=\"text\" id=\"gender\" class=\"input-block-level\" name=\"gender\" placeholder=\"Gender\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"dob\" class=\"input-block-level\" name=\"dob\" placeholder=\"Date of Birth\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"email\" class=\"input-block-level\" name=\"email\" placeholder=\"Email\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), "email"), "html", null, true);
            echo "\" data-type=\"email\">
            <input type=\"text\" id=\"cnumber\" class=\"input-block-level\" name=\"cnumber\" placeholder=\"Contact Number\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"city\" class=\"input-block-level\" name=\"city\" placeholder=\"City\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"country\" class=\"input-block-level\" name=\"country\" placeholder=\"Country\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"province\" class=\"input-block-level\" name=\"province\" placeholder=\"Province\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"height\" class=\"input-block-level\" name=\"height\" placeholder=\"Height=\"true\">
            <input type=\"text\" id=\"weight\" class=\"input-block-level\" name=\"weight\" placeholder=\"Weight\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"bodyType\" class=\"input-block-level\" name=\"bodyType\" placeholder=\"Body Type\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"dweight\" class=\"input-block-level\" name=\"dweight\" placeholder=\"Desired Weight\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"hproblem\" class=\"input-block-level\" name=\"hproblem\" placeholder=\"Health Problem\" data-trigger=\"change\" data-required=\"true\">
            <input type=\"text\" id=\"alevel\" class=\"input-block-level\" name=\"alevel\" placeholder=\"Activity Level\" data-trigger=\"change\" data-required=\"true\">
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
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
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
        return "healthuserBundle:Profile:editprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 86,  307 => 84,  304 => 83,  302 => 82,  294 => 76,  276 => 64,  270 => 61,  266 => 60,  263 => 59,  259 => 58,  255 => 57,  249 => 53,  246 => 52,  240 => 48,  237 => 47,  200 => 12,  194 => 10,  190 => 9,  186 => 8,  181 => 7,  174 => 10,  170 => 9,  166 => 8,  161 => 7,  155 => 10,  151 => 9,  147 => 8,  142 => 7,  136 => 10,  132 => 9,  128 => 8,  123 => 7,  117 => 10,  113 => 9,  109 => 8,  104 => 7,  98 => 10,  94 => 9,  90 => 8,  85 => 7,  79 => 10,  75 => 9,  71 => 8,  66 => 7,  60 => 10,  56 => 9,  52 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  31 => 3,);
    }
}
