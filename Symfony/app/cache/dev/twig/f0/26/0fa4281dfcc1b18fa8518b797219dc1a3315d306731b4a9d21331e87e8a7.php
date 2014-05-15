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
        // line 1
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"health, fitness, exercise, lifestyle, healthy, weightloss\">
    <meta name=\"description\" content=\"spreading awareness of living a healthy lifestyle,
\t lose weight, build muscle, its not a diet, its a lifestyle change\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
    <title>The Healthy LifeStyle</title>
</head>

";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
<section class=\"non-slider\">

</section>

<section class=\"row content\">


    <section class=\"col-md-6 welcome\">
        <h1>Change Your Lifestyle!</h1>

        <p>Fingerstache wayfarers mlkshk, flexitarian skateboard paleo banh mi Austin.
            Fingerstache synth gastropub art party cornhole sriracha, iPhone Odd Future. Blue Bottle church-key roof party
            fingerstache tofu banh mi. Jean shorts ethical craft beer, Thundercats hella ennui tote bag High Life Wes Anderson.
            Ethical seitan cliche, chillwave artisan Odd Future iPhone lo-fi art party fingerstache flexitarian locavore meh kale chips.
            Williamsburg Tumblr kitsch bicycle rights, Shoreditch craft beer distillery. Banh mi YOLO quinoa, Banksy Neutra drinking vinegar
            dreamcatcher stumptown Etsy blog organic McSweeney's banjo.</p>
    </section><!--end of welcome-->

    <section class=\"col-md-6 login\">
        <h1>Login/Sign Up</h1>
<form method=\"post\">
      <label for=\"username\">Username:</label>
      <input type=\"text\" name=\"username\" id=\"userName\" />

        <label for=\"password\">Password</label>
        <input type=\"password\" name=\"password\" id=\"passWord\" />

    <input type=\"submit\" name=\"submit\" id=\"subMit\" />
</form>
    </section><!--end of homeIMG-->

</section><!--end of row-->";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/styles.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    
";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  75 => 12,  72 => 11,  69 => 10,  33 => 17,  31 => 10,  20 => 1,);
    }
}
