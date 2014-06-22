<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9f3bbb1dd99beab04e916fe61dc5c35d107d74aa0cb515922ff2806298721d8b extends Twig_Template
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
        return array (  175 => 65,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  348 => 140,  338 => 135,  303 => 122,  286 => 112,  262 => 98,  248 => 94,  233 => 87,  207 => 75,  172 => 64,  84 => 24,  70 => 19,  315 => 125,  272 => 68,  267 => 101,  329 => 131,  291 => 85,  251 => 61,  351 => 141,  345 => 84,  342 => 137,  332 => 76,  324 => 84,  320 => 127,  316 => 72,  313 => 80,  302 => 82,  276 => 74,  270 => 102,  259 => 58,  255 => 57,  249 => 53,  237 => 47,  190 => 9,  321 => 52,  308 => 70,  300 => 121,  297 => 36,  287 => 70,  279 => 75,  271 => 69,  263 => 67,  260 => 66,  155 => 10,  34 => 4,  23 => 2,  281 => 77,  228 => 75,  216 => 79,  213 => 78,  205 => 68,  197 => 71,  185 => 66,  174 => 10,  76 => 31,  335 => 134,  331 => 64,  326 => 102,  323 => 128,  307 => 84,  289 => 113,  284 => 97,  280 => 72,  275 => 105,  266 => 60,  257 => 59,  215 => 8,  200 => 72,  194 => 70,  181 => 65,  148 => 8,  129 => 7,  110 => 40,  104 => 7,  100 => 39,  81 => 23,  340 => 82,  330 => 68,  325 => 129,  318 => 82,  310 => 58,  301 => 55,  292 => 66,  288 => 65,  265 => 64,  261 => 60,  256 => 96,  242 => 36,  234 => 9,  223 => 73,  192 => 64,  134 => 54,  124 => 44,  90 => 27,  58 => 5,  378 => 184,  358 => 167,  328 => 140,  296 => 87,  225 => 7,  211 => 28,  184 => 25,  178 => 66,  170 => 9,  153 => 56,  137 => 12,  127 => 5,  97 => 13,  77 => 8,  327 => 80,  317 => 96,  304 => 74,  295 => 72,  282 => 71,  277 => 66,  274 => 70,  253 => 24,  250 => 9,  244 => 15,  239 => 14,  236 => 77,  232 => 76,  226 => 84,  222 => 8,  210 => 7,  206 => 8,  195 => 7,  191 => 67,  186 => 8,  180 => 7,  165 => 60,  161 => 63,  150 => 55,  146 => 54,  126 => 13,  113 => 48,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 65,  314 => 99,  312 => 124,  309 => 67,  305 => 90,  298 => 120,  294 => 76,  285 => 77,  283 => 73,  278 => 106,  268 => 100,  264 => 84,  258 => 81,  252 => 39,  247 => 37,  241 => 90,  229 => 85,  220 => 81,  214 => 22,  177 => 9,  169 => 60,  140 => 58,  132 => 9,  128 => 8,  107 => 63,  61 => 19,  273 => 68,  269 => 68,  254 => 62,  243 => 37,  240 => 48,  238 => 36,  235 => 59,  230 => 8,  227 => 81,  224 => 71,  221 => 77,  219 => 9,  217 => 23,  208 => 17,  204 => 9,  179 => 69,  159 => 9,  143 => 9,  135 => 7,  119 => 40,  102 => 40,  71 => 8,  67 => 24,  63 => 6,  59 => 14,  38 => 6,  94 => 9,  89 => 20,  85 => 7,  75 => 9,  68 => 7,  56 => 9,  87 => 34,  21 => 2,  26 => 1,  93 => 6,  88 => 30,  78 => 6,  46 => 13,  27 => 3,  44 => 10,  31 => 3,  28 => 14,  201 => 67,  196 => 14,  183 => 82,  171 => 26,  166 => 8,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 7,  138 => 9,  136 => 10,  121 => 50,  117 => 10,  105 => 34,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 10,  72 => 8,  69 => 23,  47 => 7,  40 => 5,  37 => 35,  22 => 2,  246 => 93,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 42,  120 => 5,  115 => 2,  111 => 47,  108 => 6,  101 => 8,  98 => 10,  96 => 37,  83 => 33,  74 => 14,  66 => 7,  55 => 16,  52 => 8,  50 => 14,  43 => 12,  41 => 13,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 15,  193 => 73,  189 => 9,  187 => 12,  182 => 61,  176 => 63,  173 => 8,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 9,  141 => 51,  133 => 5,  130 => 46,  125 => 51,  122 => 12,  116 => 39,  112 => 1,  109 => 8,  106 => 36,  103 => 51,  99 => 31,  95 => 28,  92 => 36,  86 => 33,  82 => 8,  80 => 32,  73 => 20,  64 => 23,  60 => 10,  57 => 21,  54 => 79,  51 => 14,  48 => 49,  45 => 10,  42 => 39,  39 => 8,  36 => 23,  33 => 4,  30 => 3,);
    }
}
