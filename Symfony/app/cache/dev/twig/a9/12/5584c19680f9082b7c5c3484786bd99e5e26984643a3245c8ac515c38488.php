<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_a9125584c19680f9082b7c5c3484786bd99e5e26984643a3245c8ac515c38488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getContext($context, "bag"), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getContext($context, "bag"), "get", array(0 => $this->getContext($context, "key")), "method"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  371 => 156,  343 => 146,  334 => 141,  293 => 120,  290 => 119,  152 => 46,  363 => 153,  357 => 123,  344 => 119,  306 => 107,  231 => 83,  212 => 78,  202 => 94,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 155,  353 => 149,  347 => 191,  188 => 90,  175 => 58,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  338 => 135,  303 => 106,  286 => 112,  262 => 98,  248 => 97,  233 => 87,  207 => 75,  172 => 57,  84 => 40,  70 => 15,  315 => 131,  272 => 68,  267 => 101,  329 => 188,  291 => 102,  251 => 61,  351 => 120,  345 => 147,  342 => 137,  332 => 116,  324 => 113,  320 => 127,  316 => 72,  313 => 183,  302 => 125,  276 => 111,  270 => 102,  259 => 103,  255 => 101,  249 => 53,  237 => 47,  190 => 76,  321 => 135,  308 => 70,  300 => 105,  297 => 104,  287 => 70,  279 => 75,  271 => 69,  263 => 95,  260 => 66,  155 => 47,  34 => 5,  23 => 2,  281 => 114,  228 => 75,  216 => 79,  213 => 78,  205 => 108,  197 => 69,  185 => 74,  174 => 65,  76 => 34,  335 => 134,  331 => 140,  326 => 138,  323 => 128,  307 => 128,  289 => 113,  284 => 97,  280 => 72,  275 => 105,  266 => 60,  257 => 59,  215 => 8,  200 => 72,  194 => 68,  181 => 65,  148 => 8,  129 => 7,  110 => 40,  104 => 32,  100 => 39,  81 => 23,  340 => 145,  330 => 68,  325 => 129,  318 => 111,  310 => 58,  301 => 55,  292 => 66,  288 => 118,  265 => 105,  261 => 60,  256 => 96,  242 => 36,  234 => 9,  223 => 73,  192 => 64,  134 => 39,  124 => 44,  90 => 42,  58 => 25,  378 => 157,  358 => 151,  328 => 139,  296 => 121,  225 => 7,  211 => 28,  184 => 63,  178 => 59,  170 => 84,  153 => 77,  137 => 12,  127 => 35,  97 => 13,  77 => 20,  327 => 114,  317 => 185,  304 => 181,  295 => 178,  282 => 71,  277 => 66,  274 => 110,  253 => 100,  250 => 9,  244 => 15,  239 => 14,  236 => 77,  232 => 88,  226 => 84,  222 => 83,  210 => 77,  206 => 8,  195 => 7,  191 => 67,  186 => 8,  180 => 7,  165 => 83,  161 => 63,  150 => 55,  146 => 54,  126 => 13,  113 => 48,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 65,  314 => 99,  312 => 130,  309 => 129,  305 => 90,  298 => 120,  294 => 76,  285 => 175,  283 => 115,  278 => 98,  268 => 100,  264 => 84,  258 => 94,  252 => 39,  247 => 37,  241 => 93,  229 => 87,  220 => 81,  214 => 22,  177 => 9,  169 => 60,  140 => 58,  132 => 9,  128 => 8,  107 => 63,  61 => 12,  273 => 174,  269 => 107,  254 => 62,  243 => 92,  240 => 48,  238 => 36,  235 => 89,  230 => 8,  227 => 86,  224 => 81,  221 => 77,  219 => 9,  217 => 23,  208 => 76,  204 => 9,  179 => 98,  159 => 90,  143 => 51,  135 => 7,  119 => 40,  102 => 24,  71 => 8,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 20,  85 => 24,  75 => 19,  68 => 30,  56 => 16,  87 => 41,  21 => 2,  26 => 1,  93 => 27,  88 => 25,  78 => 6,  46 => 13,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 82,  171 => 26,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 7,  138 => 9,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 5,  37 => 35,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 2,  111 => 47,  108 => 6,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 14,  66 => 7,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 4,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 5,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 51,  99 => 23,  95 => 28,  92 => 43,  86 => 33,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 10,  57 => 21,  54 => 79,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}