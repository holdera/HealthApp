<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_a4b2a4042a81d63e19365313290c8dff2f0df2dd9ea9e2c818e179537911607a extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
        </a>
    </div>
    <style>
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  308 => 287,  20 => 1,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  371 => 156,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  290 => 119,  253 => 100,  222 => 83,  363 => 153,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  291 => 102,  231 => 83,  212 => 78,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 339,  353 => 328,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  288 => 118,  188 => 90,  175 => 58,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  329 => 188,  325 => 129,  320 => 127,  315 => 131,  270 => 102,  248 => 97,  207 => 75,  70 => 24,  282 => 71,  267 => 101,  274 => 110,  311 => 87,  302 => 125,  300 => 105,  293 => 120,  279 => 75,  271 => 69,  287 => 79,  255 => 101,  249 => 53,  319 => 53,  303 => 106,  295 => 178,  276 => 111,  263 => 95,  260 => 18,  256 => 96,  124 => 44,  113 => 48,  23 => 2,  281 => 114,  236 => 77,  228 => 75,  213 => 78,  205 => 108,  197 => 69,  192 => 64,  335 => 134,  331 => 140,  326 => 138,  323 => 128,  289 => 113,  280 => 72,  266 => 96,  261 => 60,  234 => 9,  215 => 8,  194 => 68,  191 => 67,  181 => 65,  161 => 63,  148 => 8,  134 => 39,  129 => 7,  110 => 40,  104 => 32,  100 => 39,  81 => 23,  58 => 18,  316 => 52,  306 => 286,  301 => 60,  286 => 112,  277 => 49,  272 => 68,  259 => 103,  250 => 9,  245 => 39,  237 => 47,  232 => 88,  223 => 73,  218 => 30,  210 => 77,  202 => 94,  190 => 76,  186 => 8,  172 => 57,  167 => 7,  160 => 10,  152 => 46,  118 => 49,  114 => 8,  90 => 37,  84 => 27,  76 => 28,  65 => 11,  34 => 5,  53 => 15,  378 => 157,  358 => 151,  328 => 139,  296 => 121,  225 => 7,  184 => 63,  178 => 59,  153 => 77,  146 => 54,  137 => 9,  97 => 13,  77 => 20,  307 => 128,  297 => 104,  284 => 97,  275 => 105,  265 => 105,  262 => 98,  257 => 42,  233 => 87,  226 => 84,  216 => 79,  211 => 28,  200 => 72,  195 => 7,  185 => 74,  180 => 7,  174 => 65,  170 => 84,  165 => 83,  155 => 47,  150 => 55,  127 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 85,  298 => 120,  294 => 58,  285 => 175,  283 => 115,  278 => 98,  268 => 67,  264 => 66,  258 => 94,  252 => 39,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 29,  177 => 9,  169 => 60,  140 => 58,  132 => 9,  128 => 8,  107 => 63,  61 => 23,  273 => 174,  269 => 107,  254 => 38,  243 => 92,  240 => 48,  238 => 36,  235 => 89,  230 => 8,  227 => 86,  224 => 81,  221 => 77,  219 => 9,  217 => 50,  208 => 76,  204 => 9,  179 => 98,  159 => 90,  143 => 51,  135 => 7,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 6,  93 => 38,  88 => 25,  78 => 18,  46 => 12,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 82,  171 => 26,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 7,  138 => 9,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 3,  25 => 1,  19 => 1,  79 => 18,  72 => 27,  69 => 26,  47 => 21,  40 => 5,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 2,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 14,  66 => 7,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 17,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 8,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 51,  99 => 23,  95 => 39,  92 => 28,  86 => 33,  82 => 19,  80 => 29,  73 => 33,  64 => 24,  60 => 10,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 8,  33 => 9,  30 => 5,);
    }
}
