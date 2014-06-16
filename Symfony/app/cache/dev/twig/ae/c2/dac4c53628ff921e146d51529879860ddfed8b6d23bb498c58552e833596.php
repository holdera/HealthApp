<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_aec2dac4c53628ff921e146d51529879860ddfed8b6d23bb498c58552e833596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  344 => 119,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  306 => 107,  291 => 102,  274 => 97,  255 => 93,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  353 => 121,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  295 => 178,  288 => 101,  188 => 102,  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 206,  373 => 156,  361 => 195,  351 => 120,  342 => 137,  338 => 135,  329 => 188,  325 => 129,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  286 => 112,  270 => 102,  267 => 101,  256 => 96,  248 => 94,  113 => 48,  70 => 19,  23 => 2,  281 => 96,  250 => 82,  236 => 77,  232 => 76,  228 => 75,  223 => 73,  213 => 78,  205 => 108,  197 => 104,  192 => 64,  335 => 134,  331 => 64,  326 => 63,  323 => 128,  289 => 113,  266 => 96,  261 => 43,  215 => 29,  194 => 70,  191 => 67,  181 => 65,  161 => 63,  148 => 7,  134 => 54,  129 => 7,  110 => 7,  104 => 32,  100 => 39,  81 => 23,  58 => 14,  302 => 61,  292 => 57,  287 => 55,  280 => 50,  272 => 47,  263 => 95,  249 => 39,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  186 => 12,  172 => 64,  167 => 7,  160 => 10,  152 => 8,  118 => 49,  114 => 8,  90 => 26,  84 => 24,  76 => 25,  65 => 10,  34 => 5,  53 => 12,  367 => 198,  364 => 176,  348 => 140,  332 => 116,  239 => 60,  234 => 35,  210 => 45,  207 => 75,  184 => 101,  178 => 66,  153 => 56,  146 => 14,  137 => 9,  97 => 13,  77 => 20,  307 => 62,  297 => 104,  284 => 97,  275 => 105,  265 => 96,  262 => 98,  257 => 42,  233 => 87,  226 => 84,  216 => 79,  211 => 28,  200 => 72,  195 => 7,  185 => 74,  180 => 10,  174 => 65,  170 => 96,  165 => 60,  155 => 8,  150 => 55,  127 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 100,  278 => 98,  268 => 100,  264 => 84,  258 => 94,  252 => 39,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 9,  169 => 60,  140 => 58,  132 => 51,  128 => 7,  107 => 12,  61 => 15,  273 => 174,  269 => 94,  254 => 42,  243 => 92,  240 => 78,  238 => 36,  235 => 85,  230 => 18,  227 => 81,  224 => 81,  221 => 77,  219 => 76,  217 => 28,  208 => 26,  204 => 9,  179 => 98,  159 => 90,  143 => 51,  135 => 48,  119 => 40,  102 => 40,  71 => 7,  67 => 20,  63 => 18,  59 => 16,  38 => 7,  94 => 28,  89 => 20,  85 => 24,  75 => 19,  68 => 28,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 27,  88 => 25,  78 => 24,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 106,  196 => 90,  183 => 82,  171 => 61,  166 => 95,  163 => 62,  158 => 62,  156 => 62,  151 => 59,  142 => 10,  138 => 9,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 11,  24 => 4,  25 => 1,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 13,  37 => 5,  22 => 2,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 5,  115 => 42,  111 => 47,  108 => 36,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 14,  66 => 10,  55 => 13,  52 => 12,  50 => 21,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 21,  193 => 17,  189 => 63,  187 => 75,  182 => 61,  176 => 63,  173 => 8,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 9,  141 => 51,  133 => 8,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 36,  103 => 10,  99 => 31,  95 => 8,  92 => 27,  86 => 33,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 6,  57 => 8,  54 => 22,  51 => 13,  48 => 14,  45 => 9,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
