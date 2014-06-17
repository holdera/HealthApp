<?php

/* healthLifestyleBundle:Lifestyle:lifestyle.html.twig */
class __TwigTemplate_1bc3ce5dadb801cb17b62c4ac9a18373dedec4210f6bc8ab29b952539caa0e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
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
        echo "
   <section class=\"col-md-9 main_content\">

       <h2>Lifestyle</h2>
        <p>
       ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diet"]) ? $context["diet"] : $this->getContext($context, "diet")));
        foreach ($context['_seq'] as $context["_key"] => $context["diets"]) {
            // line 15
            echo "          <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diets"]) ? $context["diets"] : $this->getContext($context, "diets")), "content"), "html", null, true);
            echo "</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "       </p>

       <section class=\"col-md-4 life\">

           <a href=\"/HealthApp/Symfony/web/app_dev.php/healthsample\">
           <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/contImg1.png"), "html", null, true);
        echo "\" alt=\"recipes\" />

           <h3>Ideal Way of Eating</h3>


                <p>Here's a sample day of how one should eat to live a healthy balanced lifestyle and lose weight
                </p></a>

       </section>

       <section class=\"col-md-4 life\">

           <a href=\"/HealthApp/Symfony/web/app_dev.php/greenlean\">

           <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/contImg2.png"), "html", null, true);
        echo "\" alt=\"recipes\" />

           <h3>More Green = More Lean</h3>


           <p>Find out the the green foods that are not only delicious but will help burn that fat
               and reveal your toned sleek body
           </p></a>
       </section>

       <section class=\"col-md-4 life\">

           <a href=\"/HealthApp/Symfony/web/app_dev.php/cheat-generator\">

           <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/contImg3.png"), "html", null, true);
        echo "\" alt=\"recipes\" />

           <h3>BMI & Heart Rate Calculator</h3>


               <p>Cheat days can fuel your body but also make you lose track, this generator will help
                   give you belly friendly cheat meals sweet enough to satisfy your craving
               </p></a>
       </section>


   </section>



";
    }

    public function getTemplateName()
    {
        return "healthLifestyleBundle:Lifestyle:lifestyle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 65,  331 => 64,  326 => 63,  323 => 62,  289 => 52,  280 => 50,  266 => 44,  261 => 43,  234 => 35,  215 => 29,  194 => 17,  191 => 16,  181 => 10,  161 => 10,  148 => 7,  134 => 8,  129 => 7,  110 => 7,  104 => 10,  100 => 9,  81 => 9,  58 => 8,  316 => 66,  306 => 62,  301 => 60,  286 => 52,  277 => 49,  272 => 48,  259 => 43,  250 => 40,  245 => 39,  237 => 37,  232 => 34,  223 => 31,  218 => 30,  210 => 28,  202 => 22,  190 => 16,  186 => 12,  172 => 8,  167 => 7,  160 => 10,  152 => 8,  118 => 9,  114 => 8,  90 => 7,  84 => 10,  76 => 8,  65 => 10,  34 => 4,  53 => 7,  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  184 => 25,  178 => 20,  153 => 8,  146 => 14,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 51,  275 => 47,  265 => 44,  262 => 43,  257 => 42,  233 => 19,  226 => 11,  216 => 8,  211 => 28,  200 => 21,  195 => 7,  185 => 8,  180 => 10,  174 => 9,  170 => 18,  165 => 7,  155 => 8,  150 => 7,  127 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 67,  305 => 95,  298 => 55,  294 => 58,  285 => 89,  283 => 88,  278 => 54,  268 => 47,  264 => 46,  258 => 81,  252 => 39,  247 => 78,  241 => 38,  229 => 32,  220 => 30,  214 => 29,  177 => 9,  169 => 60,  140 => 8,  132 => 51,  128 => 7,  107 => 63,  61 => 9,  273 => 96,  269 => 94,  254 => 38,  243 => 37,  240 => 61,  238 => 36,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 9,  102 => 32,  71 => 7,  67 => 19,  63 => 22,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 10,  75 => 17,  68 => 24,  56 => 18,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 43,  27 => 24,  44 => 5,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 13,  156 => 9,  151 => 63,  142 => 10,  138 => 9,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 7,  69 => 23,  47 => 6,  40 => 13,  37 => 5,  22 => 2,  246 => 90,  157 => 9,  145 => 46,  139 => 45,  131 => 14,  123 => 10,  120 => 63,  115 => 8,  111 => 37,  108 => 36,  101 => 14,  98 => 31,  96 => 8,  83 => 25,  74 => 14,  66 => 10,  55 => 15,  52 => 15,  50 => 10,  43 => 12,  41 => 9,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 22,  199 => 21,  193 => 17,  189 => 9,  187 => 12,  182 => 66,  176 => 9,  173 => 8,  168 => 7,  164 => 59,  162 => 14,  154 => 58,  149 => 51,  147 => 7,  144 => 9,  141 => 10,  133 => 8,  130 => 6,  125 => 44,  122 => 10,  116 => 14,  112 => 13,  109 => 7,  106 => 36,  103 => 51,  99 => 9,  95 => 8,  92 => 12,  86 => 37,  82 => 27,  80 => 9,  73 => 19,  64 => 22,  60 => 6,  57 => 8,  54 => 84,  51 => 14,  48 => 14,  45 => 5,  42 => 9,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
