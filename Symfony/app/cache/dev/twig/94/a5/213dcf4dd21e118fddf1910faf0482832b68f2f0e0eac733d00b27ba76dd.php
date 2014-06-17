<?php

/* healthhealthUserBundle:Midsection:abs.html.twig */
class __TwigTemplate_94a5213dcf4dd21e118fddf1910faf0482832b68f2f0e0eac733d00b27ba76dd extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")));
        foreach ($context['_seq'] as $context["_key"] => $context["mids"]) {
            // line 11
            echo "        <section class=\"col-md-9 main_content\">

            <h1>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "bodyPart"), "html", null, true);
            echo "</h1>

            <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "exercise1"), "html", null, true);
            echo "</p>

            <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "exercise2"), "html", null, true);
            echo "</p>

            <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "exercise3"), "html", null, true);
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
        return array (  53 => 19,  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  184 => 25,  178 => 20,  153 => 12,  146 => 14,  137 => 12,  97 => 13,  77 => 12,  307 => 75,  297 => 68,  284 => 58,  275 => 53,  265 => 44,  262 => 43,  257 => 39,  233 => 19,  226 => 11,  216 => 8,  211 => 46,  200 => 8,  195 => 7,  185 => 8,  180 => 7,  174 => 9,  170 => 18,  165 => 7,  155 => 8,  150 => 7,  127 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 54,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 9,  214 => 69,  177 => 65,  169 => 60,  140 => 8,  132 => 51,  128 => 49,  107 => 12,  61 => 13,  273 => 96,  269 => 94,  254 => 38,  243 => 88,  240 => 61,  238 => 85,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 42,  102 => 32,  71 => 19,  67 => 19,  63 => 22,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 43,  27 => 24,  44 => 10,  31 => 16,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 13,  156 => 66,  151 => 63,  142 => 13,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 17,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 25,  69 => 10,  47 => 2,  40 => 184,  37 => 183,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 14,  123 => 47,  120 => 5,  115 => 2,  111 => 37,  108 => 36,  101 => 14,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 9,  35 => 45,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 9,  187 => 26,  182 => 66,  176 => 64,  173 => 19,  168 => 72,  164 => 59,  162 => 14,  154 => 58,  149 => 51,  147 => 58,  144 => 9,  141 => 48,  133 => 55,  130 => 6,  125 => 44,  122 => 12,  116 => 14,  112 => 13,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 12,  86 => 14,  82 => 27,  80 => 19,  73 => 19,  64 => 22,  60 => 6,  57 => 15,  54 => 84,  51 => 14,  48 => 11,  45 => 17,  42 => 41,  39 => 9,  36 => 5,  33 => 4,  30 => 25,);
    }
}