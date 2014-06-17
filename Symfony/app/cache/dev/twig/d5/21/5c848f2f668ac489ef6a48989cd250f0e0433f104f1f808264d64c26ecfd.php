<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d5215c848f2f668ac489ef6a48989cd250f0e0433f104f1f808264d64c26ecfd extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  286 => 112,  270 => 102,  267 => 101,  256 => 96,  248 => 94,  70 => 19,  124 => 44,  113 => 48,  23 => 2,  281 => 96,  250 => 82,  236 => 77,  232 => 76,  228 => 75,  223 => 73,  213 => 78,  205 => 68,  197 => 71,  192 => 64,  335 => 134,  331 => 64,  326 => 63,  323 => 128,  289 => 113,  266 => 96,  261 => 43,  215 => 29,  194 => 70,  191 => 67,  181 => 65,  161 => 63,  148 => 8,  134 => 54,  129 => 7,  110 => 40,  104 => 39,  100 => 39,  81 => 23,  58 => 5,  302 => 61,  292 => 57,  287 => 55,  280 => 50,  272 => 47,  263 => 44,  249 => 39,  231 => 34,  212 => 27,  202 => 22,  190 => 16,  186 => 12,  172 => 64,  167 => 7,  160 => 10,  152 => 8,  118 => 49,  114 => 8,  90 => 27,  84 => 24,  76 => 31,  65 => 10,  34 => 4,  53 => 12,  367 => 177,  364 => 176,  348 => 140,  332 => 150,  239 => 60,  234 => 35,  210 => 45,  207 => 75,  184 => 25,  178 => 66,  153 => 56,  146 => 54,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 97,  275 => 105,  265 => 44,  262 => 98,  257 => 42,  233 => 87,  226 => 84,  216 => 79,  211 => 28,  200 => 72,  195 => 7,  185 => 66,  180 => 10,  174 => 59,  170 => 58,  165 => 60,  155 => 8,  150 => 55,  127 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 67,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 100,  264 => 84,  258 => 43,  252 => 39,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 9,  169 => 60,  140 => 58,  132 => 8,  128 => 7,  107 => 12,  61 => 19,  273 => 96,  269 => 94,  254 => 42,  243 => 37,  240 => 78,  238 => 36,  235 => 35,  230 => 18,  227 => 81,  224 => 54,  221 => 77,  219 => 76,  217 => 28,  208 => 26,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  119 => 40,  102 => 40,  71 => 7,  67 => 24,  63 => 6,  59 => 14,  38 => 6,  94 => 33,  89 => 20,  85 => 10,  75 => 17,  68 => 7,  56 => 17,  87 => 34,  21 => 2,  26 => 6,  93 => 6,  88 => 30,  78 => 6,  46 => 13,  27 => 3,  44 => 5,  31 => 5,  28 => 4,  201 => 67,  196 => 90,  183 => 82,  171 => 26,  166 => 57,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 10,  138 => 9,  136 => 56,  121 => 50,  117 => 42,  105 => 34,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 31,  72 => 8,  69 => 10,  47 => 20,  40 => 13,  37 => 11,  22 => 2,  246 => 93,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 42,  120 => 43,  115 => 42,  111 => 47,  108 => 6,  101 => 47,  98 => 7,  96 => 37,  83 => 33,  74 => 14,  66 => 10,  55 => 16,  52 => 15,  50 => 14,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 21,  193 => 17,  189 => 63,  187 => 12,  182 => 61,  176 => 63,  173 => 8,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 7,  141 => 51,  133 => 8,  130 => 46,  125 => 51,  122 => 44,  116 => 39,  112 => 41,  109 => 7,  106 => 36,  103 => 10,  99 => 31,  95 => 8,  92 => 36,  86 => 33,  82 => 49,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 8,  54 => 22,  51 => 14,  48 => 14,  45 => 10,  42 => 11,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
