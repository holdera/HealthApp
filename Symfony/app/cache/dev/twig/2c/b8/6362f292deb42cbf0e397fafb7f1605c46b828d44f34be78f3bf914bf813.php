<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2cb86362f292deb42cbf0e397fafb7f1605c46b828d44f34be78f3bf914bf813 extends Twig_Template
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
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  348 => 140,  338 => 135,  325 => 129,  303 => 122,  248 => 94,  207 => 75,  70 => 19,  315 => 125,  295 => 72,  267 => 101,  329 => 131,  317 => 96,  291 => 85,  251 => 61,  351 => 141,  345 => 84,  342 => 137,  340 => 82,  332 => 76,  324 => 84,  320 => 127,  292 => 66,  288 => 65,  282 => 71,  274 => 70,  313 => 80,  304 => 74,  302 => 82,  276 => 74,  270 => 102,  255 => 57,  249 => 53,  321 => 52,  318 => 82,  308 => 70,  300 => 121,  287 => 70,  279 => 75,  271 => 69,  263 => 67,  260 => 66,  256 => 96,  124 => 44,  113 => 48,  23 => 2,  281 => 77,  236 => 77,  228 => 75,  213 => 78,  205 => 68,  197 => 71,  192 => 64,  335 => 134,  331 => 64,  326 => 102,  323 => 128,  289 => 113,  280 => 72,  266 => 60,  261 => 60,  234 => 9,  215 => 8,  194 => 70,  191 => 67,  181 => 65,  161 => 63,  148 => 8,  134 => 54,  129 => 7,  110 => 40,  104 => 7,  100 => 39,  81 => 23,  58 => 5,  316 => 72,  306 => 62,  301 => 60,  286 => 112,  277 => 66,  272 => 68,  259 => 58,  250 => 9,  245 => 39,  237 => 47,  232 => 76,  223 => 73,  218 => 30,  210 => 7,  202 => 22,  190 => 9,  186 => 8,  172 => 64,  167 => 7,  160 => 10,  152 => 8,  118 => 49,  114 => 8,  90 => 27,  84 => 24,  76 => 25,  65 => 10,  34 => 4,  53 => 12,  378 => 184,  358 => 167,  328 => 140,  296 => 87,  225 => 7,  184 => 25,  178 => 66,  153 => 56,  146 => 54,  137 => 9,  97 => 13,  77 => 8,  307 => 84,  297 => 36,  284 => 97,  275 => 105,  265 => 64,  262 => 98,  257 => 59,  233 => 87,  226 => 84,  216 => 79,  211 => 28,  200 => 72,  195 => 7,  185 => 66,  180 => 7,  174 => 10,  170 => 9,  165 => 60,  155 => 10,  150 => 55,  127 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 67,  305 => 90,  298 => 120,  294 => 76,  285 => 77,  283 => 73,  278 => 106,  268 => 100,  264 => 46,  258 => 81,  252 => 39,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 29,  177 => 9,  169 => 60,  140 => 58,  132 => 9,  128 => 8,  107 => 63,  61 => 17,  273 => 68,  269 => 68,  254 => 62,  243 => 37,  240 => 48,  238 => 36,  235 => 59,  230 => 8,  227 => 81,  224 => 71,  221 => 77,  219 => 9,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 7,  119 => 40,  102 => 40,  71 => 8,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 9,  89 => 20,  85 => 7,  75 => 9,  68 => 7,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 6,  88 => 32,  78 => 6,  46 => 13,  27 => 3,  44 => 5,  31 => 3,  28 => 14,  201 => 67,  196 => 90,  183 => 82,  171 => 26,  166 => 8,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 7,  138 => 9,  136 => 10,  121 => 50,  117 => 10,  105 => 34,  91 => 33,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 10,  72 => 8,  69 => 23,  47 => 7,  40 => 5,  37 => 35,  22 => 2,  246 => 93,  157 => 54,  145 => 46,  139 => 6,  131 => 47,  123 => 42,  120 => 5,  115 => 2,  111 => 47,  108 => 6,  101 => 14,  98 => 10,  96 => 37,  83 => 33,  74 => 14,  66 => 7,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 13,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 21,  193 => 17,  189 => 9,  187 => 12,  182 => 61,  176 => 63,  173 => 8,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 9,  141 => 51,  133 => 8,  130 => 46,  125 => 51,  122 => 12,  116 => 39,  112 => 1,  109 => 8,  106 => 36,  103 => 51,  99 => 31,  95 => 8,  92 => 36,  86 => 33,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 10,  57 => 8,  54 => 79,  51 => 14,  48 => 49,  45 => 9,  42 => 39,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
