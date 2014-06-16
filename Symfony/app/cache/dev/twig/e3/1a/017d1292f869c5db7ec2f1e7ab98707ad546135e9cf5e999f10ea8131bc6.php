<?php

/* healthResourcesBundle:Resource:resource.html.twig */
class __TwigTemplate_e31a017d1292f869c5db7ec2f1e7ab98707ad546135e9cf5e999f10ea8131bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <section class=\"col-md-8 main_content\">

        <h1>Resources</h1>

       <section class=\"col-md-6\">

           <a href=\"/HealthApp/Symfony/web/app_dev.php/findgym\"><h2>Find a Gym</h2>
           <p>
               Have you decided to start working out but you do not know where. Click here to find the closes health clubs
               in your areas.
           </p></a>
       </section>



        <section class=\"col-md-6\">

            <a href=\"/HealthApp/Symfony/web/app_dev.php/videos\"><h2>Top Workout Videos</h2>
            <p>
                Have you decided to start working out but you do not know where. Click here to find the closes health clubs
                in your areas.
            </p>
                </a>
        </section>


    </section>
";
    }

    public function getTemplateName()
    {
        return "healthResourcesBundle:Resource:resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 7,  23 => 2,  281 => 96,  250 => 82,  236 => 77,  232 => 76,  228 => 75,  223 => 73,  213 => 70,  205 => 68,  197 => 66,  192 => 64,  335 => 65,  331 => 64,  326 => 63,  323 => 62,  289 => 98,  266 => 96,  261 => 43,  215 => 29,  194 => 17,  191 => 16,  181 => 10,  161 => 18,  148 => 8,  134 => 8,  129 => 7,  110 => 7,  104 => 39,  100 => 38,  81 => 9,  58 => 5,  302 => 61,  292 => 57,  287 => 55,  280 => 50,  272 => 47,  263 => 44,  249 => 39,  231 => 34,  212 => 27,  202 => 22,  190 => 16,  186 => 12,  172 => 8,  167 => 7,  160 => 10,  152 => 8,  118 => 9,  114 => 8,  90 => 7,  84 => 10,  76 => 30,  65 => 10,  34 => 4,  53 => 7,  367 => 177,  364 => 176,  348 => 163,  332 => 150,  239 => 60,  234 => 35,  210 => 45,  207 => 44,  184 => 25,  178 => 20,  153 => 8,  146 => 14,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 97,  275 => 47,  265 => 44,  262 => 43,  257 => 42,  233 => 19,  226 => 31,  216 => 71,  211 => 28,  200 => 21,  195 => 7,  185 => 62,  180 => 10,  174 => 59,  170 => 58,  165 => 7,  155 => 8,  150 => 52,  127 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 67,  305 => 95,  298 => 55,  294 => 90,  285 => 89,  283 => 88,  278 => 54,  268 => 100,  264 => 84,  258 => 43,  252 => 39,  247 => 78,  241 => 77,  229 => 32,  220 => 72,  214 => 69,  177 => 9,  169 => 60,  140 => 8,  132 => 8,  128 => 7,  107 => 12,  61 => 9,  273 => 96,  269 => 94,  254 => 42,  243 => 37,  240 => 78,  238 => 36,  235 => 35,  230 => 18,  227 => 81,  224 => 54,  221 => 77,  219 => 76,  217 => 28,  208 => 26,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  119 => 43,  102 => 8,  71 => 7,  67 => 19,  63 => 6,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 10,  75 => 17,  68 => 7,  56 => 9,  87 => 8,  21 => 2,  26 => 6,  93 => 6,  88 => 6,  78 => 6,  46 => 43,  27 => 24,  44 => 5,  31 => 5,  28 => 4,  201 => 67,  196 => 90,  183 => 82,  171 => 26,  166 => 57,  163 => 62,  158 => 17,  156 => 9,  151 => 63,  142 => 10,  138 => 9,  136 => 56,  121 => 46,  117 => 8,  105 => 40,  91 => 7,  62 => 18,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 31,  72 => 8,  69 => 10,  47 => 20,  40 => 13,  37 => 11,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 6,  120 => 5,  115 => 42,  111 => 37,  108 => 6,  101 => 47,  98 => 7,  96 => 37,  83 => 7,  74 => 14,  66 => 10,  55 => 4,  52 => 15,  50 => 21,  43 => 12,  41 => 9,  35 => 4,  32 => 5,  29 => 4,  209 => 82,  203 => 22,  199 => 21,  193 => 17,  189 => 63,  187 => 12,  182 => 61,  176 => 9,  173 => 8,  168 => 25,  164 => 59,  162 => 56,  154 => 10,  149 => 51,  147 => 51,  144 => 7,  141 => 10,  133 => 8,  130 => 6,  125 => 44,  122 => 44,  116 => 14,  112 => 41,  109 => 7,  106 => 36,  103 => 10,  99 => 9,  95 => 8,  92 => 36,  86 => 33,  82 => 49,  80 => 9,  73 => 19,  64 => 27,  60 => 6,  57 => 8,  54 => 22,  51 => 14,  48 => 14,  45 => 17,  42 => 9,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
