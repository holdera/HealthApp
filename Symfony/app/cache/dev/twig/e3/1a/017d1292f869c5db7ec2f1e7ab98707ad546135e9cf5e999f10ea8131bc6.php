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

       <section class=\"col-md-6 gym\">

           <a href=\"/HealthApp/Symfony/web/app_dev.php/findgym\">
               <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/res1.png"), "html", null, true);
        echo "\" alt=\"weights\" />

               <h2>Find a Gym</h2>

           <p>
               Have you decided to start working out but you do not know where. Click here to find the closes health clubs
               in your areas.
           </p></a>
       </section>



        <section class=\"col-md-6 gym\">

            <a href=\"/HealthApp/Symfony/web/app_dev.php/videos\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/res2.png"), "html", null, true);
        echo "\" alt=\"weights\" />
                <h2>Top Workout Videos</h2>
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
        return array (  113 => 7,  23 => 2,  281 => 96,  236 => 77,  228 => 75,  213 => 70,  205 => 68,  197 => 66,  192 => 64,  335 => 65,  331 => 64,  326 => 63,  323 => 62,  289 => 98,  280 => 50,  266 => 96,  261 => 43,  234 => 35,  215 => 29,  194 => 17,  191 => 16,  181 => 10,  161 => 18,  148 => 8,  134 => 8,  129 => 7,  110 => 7,  104 => 39,  100 => 38,  81 => 9,  58 => 5,  316 => 66,  306 => 62,  301 => 60,  286 => 52,  277 => 49,  272 => 48,  259 => 43,  250 => 82,  245 => 39,  237 => 37,  232 => 76,  223 => 73,  218 => 30,  210 => 28,  202 => 22,  190 => 16,  186 => 12,  172 => 8,  167 => 7,  160 => 10,  152 => 8,  118 => 9,  114 => 8,  90 => 7,  84 => 10,  76 => 30,  65 => 10,  34 => 4,  53 => 7,  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  184 => 25,  178 => 20,  153 => 8,  146 => 14,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 97,  275 => 47,  265 => 44,  262 => 43,  257 => 42,  233 => 19,  226 => 11,  216 => 71,  211 => 28,  200 => 21,  195 => 7,  185 => 62,  180 => 10,  174 => 59,  170 => 58,  165 => 7,  155 => 8,  150 => 52,  127 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 67,  305 => 95,  298 => 55,  294 => 58,  285 => 89,  283 => 88,  278 => 54,  268 => 100,  264 => 46,  258 => 81,  252 => 39,  247 => 78,  241 => 38,  229 => 32,  220 => 72,  214 => 29,  177 => 9,  169 => 60,  140 => 8,  132 => 8,  128 => 7,  107 => 63,  61 => 9,  273 => 96,  269 => 94,  254 => 38,  243 => 37,  240 => 78,  238 => 36,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  119 => 43,  102 => 8,  71 => 7,  67 => 19,  63 => 6,  59 => 28,  38 => 8,  94 => 28,  89 => 20,  85 => 10,  75 => 17,  68 => 7,  56 => 18,  87 => 8,  21 => 2,  26 => 6,  93 => 6,  88 => 6,  78 => 6,  46 => 43,  27 => 24,  44 => 5,  31 => 5,  28 => 4,  201 => 67,  196 => 90,  183 => 82,  171 => 26,  166 => 57,  163 => 62,  158 => 17,  156 => 9,  151 => 63,  142 => 10,  138 => 9,  136 => 56,  121 => 46,  117 => 8,  105 => 40,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 31,  72 => 8,  69 => 23,  47 => 20,  40 => 13,  37 => 11,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 6,  120 => 63,  115 => 42,  111 => 37,  108 => 6,  101 => 14,  98 => 7,  96 => 37,  83 => 7,  74 => 14,  66 => 10,  55 => 4,  52 => 15,  50 => 21,  43 => 12,  41 => 13,  35 => 4,  32 => 5,  29 => 4,  209 => 82,  203 => 22,  199 => 21,  193 => 17,  189 => 63,  187 => 12,  182 => 61,  176 => 9,  173 => 8,  168 => 25,  164 => 59,  162 => 56,  154 => 10,  149 => 51,  147 => 51,  144 => 7,  141 => 10,  133 => 8,  130 => 6,  125 => 44,  122 => 44,  116 => 14,  112 => 41,  109 => 7,  106 => 36,  103 => 51,  99 => 9,  95 => 8,  92 => 36,  86 => 33,  82 => 27,  80 => 9,  73 => 19,  64 => 27,  60 => 6,  57 => 8,  54 => 22,  51 => 14,  48 => 14,  45 => 17,  42 => 9,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
