<?php

/* healthLifestyleBundle:Cheat:cheatGenerator.html.twig */
class __TwigTemplate_333bd0382a1ad7767a1427c07a643207470d18fd798dc7679cda935dfb7c9f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 4
        echo "

";
    }

    // line 8
    public function block_main_content($context, array $blocks = array())
    {
        // line 9
        echo "    <section class=\"col-md-9 main_content\">
        <h2>BMI Calculator</h2>

     <form>
         <label>Weight (lbs):</label>
         <input type=\"text\" id=\"weight\">

         <label>Height (inches)</label>
         <input type=\"text\" id=\"height\">

         <input type=\"button\" id=\"submit\" onclick=\"calcBMI();\" class=\"btn\" value=\"calculate\" />

     </form>

        <section>
            <p id=\"bmiResults\"></p>
            <p id=\"results\"></p>
        </section>

        <p id=\"bmiResults\"></p>

        <form>
            <label>Age:</label>
            <input type=\"text\" id=\"age\">

            <input type=\"button\" id=\"submit\" onclick=\"calcBPM();\" value=\"calculate\" class=\"btn\" />

        </form>

        <section>
            <p id=\"ageResults\"></p>
        </section>

        <input type=\"button\" class=\"btn allBtn\" value=\"Back\" onclick=\"goBack();\" />
    </section><!--end of container-->

    ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
    <script>

        function goBack() {history.back();}

    </script>

";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/cheat.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "healthLifestyleBundle:Cheat:cheatGenerator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  367 => 177,  364 => 176,  348 => 163,  332 => 150,  239 => 60,  234 => 58,  210 => 45,  207 => 44,  184 => 25,  178 => 20,  153 => 12,  146 => 14,  137 => 12,  97 => 13,  77 => 32,  307 => 75,  297 => 68,  284 => 58,  275 => 53,  265 => 44,  262 => 43,  257 => 39,  233 => 19,  226 => 11,  216 => 49,  211 => 7,  200 => 8,  195 => 7,  185 => 8,  180 => 7,  174 => 9,  170 => 18,  165 => 7,  155 => 8,  150 => 7,  127 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 54,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 56,  220 => 9,  214 => 69,  177 => 65,  169 => 60,  140 => 8,  132 => 51,  128 => 49,  107 => 12,  61 => 13,  273 => 96,  269 => 94,  254 => 38,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 18,  227 => 81,  224 => 54,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 42,  102 => 32,  71 => 19,  67 => 19,  63 => 24,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 45,  88 => 6,  78 => 24,  46 => 43,  27 => 24,  44 => 10,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 13,  156 => 66,  151 => 63,  142 => 13,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 17,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 25,  69 => 10,  47 => 2,  40 => 176,  37 => 175,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 14,  123 => 47,  120 => 5,  115 => 2,  111 => 37,  108 => 36,  101 => 47,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 12,  41 => 9,  35 => 44,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 9,  187 => 26,  182 => 66,  176 => 64,  173 => 19,  168 => 72,  164 => 59,  162 => 14,  154 => 58,  149 => 51,  147 => 58,  144 => 9,  141 => 48,  133 => 55,  130 => 6,  125 => 44,  122 => 12,  116 => 14,  112 => 13,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 12,  86 => 14,  82 => 49,  80 => 45,  73 => 19,  64 => 22,  60 => 6,  57 => 21,  54 => 84,  51 => 14,  48 => 11,  45 => 17,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
