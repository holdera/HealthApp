<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e8762d03256ec24466e764c265b844c64bb13c132a424958f6f65ff7fcc44b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  286 => 112,  270 => 102,  267 => 101,  256 => 96,  248 => 94,  113 => 48,  70 => 19,  23 => 2,  281 => 96,  250 => 82,  236 => 77,  232 => 76,  228 => 75,  223 => 73,  213 => 78,  205 => 68,  197 => 71,  192 => 64,  335 => 134,  331 => 64,  326 => 63,  323 => 128,  289 => 113,  266 => 96,  261 => 43,  215 => 29,  194 => 70,  191 => 67,  181 => 65,  161 => 63,  148 => 7,  134 => 54,  129 => 7,  110 => 7,  104 => 39,  100 => 39,  81 => 23,  58 => 24,  302 => 61,  292 => 57,  287 => 55,  280 => 50,  272 => 47,  263 => 44,  249 => 39,  231 => 34,  212 => 27,  202 => 22,  190 => 16,  186 => 12,  172 => 64,  167 => 7,  160 => 10,  152 => 8,  118 => 49,  114 => 8,  90 => 27,  84 => 24,  76 => 25,  65 => 10,  34 => 4,  53 => 12,  367 => 177,  364 => 176,  348 => 140,  332 => 150,  239 => 60,  234 => 35,  210 => 45,  207 => 75,  184 => 25,  178 => 66,  153 => 56,  146 => 14,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 97,  275 => 105,  265 => 44,  262 => 98,  257 => 42,  233 => 87,  226 => 84,  216 => 79,  211 => 28,  200 => 72,  195 => 7,  185 => 66,  180 => 10,  174 => 59,  170 => 58,  165 => 60,  155 => 8,  150 => 55,  127 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 67,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 100,  264 => 84,  258 => 43,  252 => 39,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 9,  169 => 60,  140 => 58,  132 => 51,  128 => 7,  107 => 12,  61 => 17,  273 => 96,  269 => 94,  254 => 42,  243 => 37,  240 => 78,  238 => 36,  235 => 35,  230 => 18,  227 => 81,  224 => 54,  221 => 77,  219 => 76,  217 => 28,  208 => 26,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  119 => 40,  102 => 40,  71 => 7,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 10,  75 => 17,  68 => 28,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 45,  88 => 32,  78 => 24,  46 => 13,  27 => 3,  44 => 5,  31 => 5,  28 => 4,  201 => 67,  196 => 90,  183 => 82,  171 => 61,  166 => 57,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 10,  138 => 9,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 33,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 31,  72 => 7,  69 => 10,  47 => 6,  40 => 13,  37 => 5,  22 => 2,  246 => 93,  157 => 54,  145 => 46,  139 => 49,  131 => 47,  123 => 42,  120 => 5,  115 => 42,  111 => 47,  108 => 36,  101 => 47,  98 => 46,  96 => 37,  83 => 33,  74 => 14,  66 => 10,  55 => 13,  52 => 12,  50 => 21,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 21,  193 => 17,  189 => 63,  187 => 12,  182 => 61,  176 => 63,  173 => 8,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 9,  141 => 51,  133 => 8,  130 => 46,  125 => 51,  122 => 44,  116 => 39,  112 => 41,  109 => 7,  106 => 36,  103 => 10,  99 => 31,  95 => 8,  92 => 36,  86 => 33,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 6,  57 => 8,  54 => 22,  51 => 14,  48 => 14,  45 => 9,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
