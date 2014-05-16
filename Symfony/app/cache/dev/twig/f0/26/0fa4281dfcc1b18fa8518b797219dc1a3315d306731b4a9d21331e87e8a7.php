<?php

/* healthhealthUserBundle:Default:index.html.twig */
class __TwigTemplate_f0260fa4281dfcc1b18fa8518b797219dc1a3315d306731b4a9d21331e87e8a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"health, fitness, exercise, lifestyle, healthy, weightloss\">
    <meta name=\"description\" content=\"spreading awareness of living a healthy lifestyle,
\t lose weight, build muscle, its not a diet, its a lifestyle change\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
    <title>The Healthy LifeStyle</title>

";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    ";
        // line 20
        echo "</head>

<header>
    <h1 id=\"logo\">The Healthy Lifestyle</h1>
</header>

<section >


<section class=\"row container content\">

    <section id=\"non-slider\">

    </section>

    <section class=\"col-md-6 welcome\">
        <h1>Change Your Lifestyle!</h1>

        <p>Fingerstache wayfarers mlkshk, flexitarian skateboard paleo banh mi Austin.
            Fingerstache synth gastropub art party cornhole sriracha, iPhone Odd Future. Blue Bottle church-key roof party
            fingerstache tofu banh mi. Jean shorts ethical craft beer, Thundercats hella ennui tote bag High Life Wes Anderson.
            Ethical seitan cliche, chillwave artisan Odd Future iPhone lo-fi art party fingerstache flexitarian locavore meh kale chips.
            Williamsburg Tumblr kitsch bicycle rights, Shoreditch craft beer distillery. Banh mi YOLO quinoa, Banksy Neutra drinking vinegar
            dreamcatcher stumptown Etsy blog organic McSweeney's banjo.</p>
    </section><!--end of welcome-->

    <section class=\"col-md-6\">
        <h1>Login/Sign Up</h1>
<form class=\"form-horizontal login\" method=\"post\">
    <section class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"username\">Username:</label>
      <input type=\"text\" name=\"username\" class=\"form-control inputW\" id=\"userName\" />

        <label class=\"col-sm-2 control-label\" for=\"password\">Password</label>
        <input type=\"password\" name=\"password\" class=\"form-control inputW\" id=\"passWord\" />

        </section>

        <input type=\"submit\" class=\"btn btn-default\" name=\"submit\" id=\"subMit\" />

</form>
    </section><!--end of homeIMG-->

</section><!--end of row-->

    </section><!--container fluid ends-->

<footer class=\"row\">

    <section class=\"col-md-4 foot_nav\">
        <ul>
            <li>links</li>
            <li>links</li>
            <li>links</li>
            <li>links</li>
        </ul>
    </section>

    <section class=\"col-md-4 foot_nav\">
        <ul>
            <li>links</li>
            <li>links</li>
            <li>links</li>
            <li>links</li>
        </ul>
    </section>


    <section class=\"col-md-4\">
        <form id=\"subscribe\" method=\"post\" action=\"\">
            <label for=\"name\">Name: </label>
            <input type=\"text\" name=\"name\" class=\"form-control fields\">
            <label for=\"email\">Email:</label>
            <input type=\"text\" name=\"email\" class=\"form-control fields\">

            <input type=\"submit\" name=\"sub\" class=\"btn\" id=\"submitBut\" value=\"subscribe\">
        </form>
    </section>

</footer>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f9dc43_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_bootstrap.min_1.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_2.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
            // asset "4f9dc43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43_part_1_styles_3.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
        } else {
            // asset "4f9dc43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f9dc43") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4f9dc43.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\">
        <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  rel=\"stylesheet\" >
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 13,  160 => 12,  153 => 13,  148 => 12,  142 => 13,  137 => 12,  131 => 13,  126 => 12,  121 => 11,  118 => 10,  35 => 20,  32 => 16,  30 => 10,  20 => 2,);
    }
}
