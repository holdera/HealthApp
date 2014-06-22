<?php

/* healthhealthUserBundle:Midsection:abs.html.twig */
class __TwigTemplate_2195e3f46e0f2e73d590a342d7b235410fdd1ccb37111a53b1175a68357ecaa5 extends Twig_Template
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
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "mid"));
        foreach ($context['_seq'] as $context["_key"] => $context["mids"]) {
            // line 11
            echo "        <section class=\"col-md-9 main_content\">

            <h1>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mids"), "bodyPart"), "html", null, true);
            echo "</h1>

            <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mids"), "exercise1"), "html", null, true);
            echo "</p>

            <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mids"), "exercise2"), "html", null, true);
            echo "</p>

            <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mids"), "exercise3"), "html", null, true);
            echo "</p>


        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mids'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "


";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Midsection:abs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  211 => 46,  184 => 25,  178 => 20,  170 => 18,  153 => 12,  137 => 12,  127 => 13,  97 => 13,  77 => 12,  327 => 80,  317 => 73,  304 => 63,  295 => 58,  282 => 48,  277 => 44,  274 => 43,  253 => 24,  250 => 23,  244 => 15,  239 => 14,  236 => 13,  232 => 11,  226 => 9,  222 => 8,  210 => 9,  206 => 8,  195 => 9,  191 => 8,  186 => 7,  180 => 9,  165 => 9,  161 => 8,  150 => 9,  146 => 14,  126 => 13,  113 => 1,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 97,  305 => 95,  298 => 59,  294 => 90,  285 => 49,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 17,  107 => 12,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 61,  238 => 85,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 19,  63 => 22,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 24,  46 => 7,  27 => 24,  44 => 10,  31 => 5,  28 => 3,  201 => 7,  196 => 90,  183 => 82,  171 => 7,  166 => 71,  163 => 62,  158 => 13,  156 => 7,  151 => 63,  142 => 13,  138 => 54,  136 => 6,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 17,  49 => 56,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 25,  69 => 10,  47 => 2,  40 => 184,  37 => 183,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 14,  123 => 12,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 14,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 89,  52 => 13,  50 => 10,  43 => 46,  41 => 9,  35 => 45,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 26,  182 => 66,  176 => 8,  173 => 19,  168 => 72,  164 => 59,  162 => 14,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 7,  133 => 5,  130 => 41,  125 => 44,  122 => 12,  116 => 14,  112 => 13,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 12,  86 => 14,  82 => 27,  80 => 19,  73 => 19,  64 => 22,  60 => 6,  57 => 15,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 9,  36 => 23,  33 => 4,  30 => 25,);
    }
}
