<?php

/* healthDetoxBundle:Detox:detox.html.twig */
class __TwigTemplate_973e0e9a24f5fc89319a316ac92ef9b5fc454b2e12df626204d1761adcb13553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <section class=\"col-md-9 main_content\">

        <h2>Detox</h2>

        <p>It is so important to detox your body. As we live in a fast paced society we ingest a tone of junk food
            filled with chemicals and preservatives. As a result of this, a tone of waste is sitting in your body
            that contributes to bloating; ads water, and of course weight gain. Detoxing is a great way to cleanse
            your body of these toxins, and be healthier on the inside. It also helps in cancer and disease prevention.</p>

         <p>To find the detox that’s the right fit for you, fill out this questionnaire.</p>

        <section class=\"col-md-8 questions\">

            <form action=\"\" method=\"post\" class=\"allForms\">

                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 22
            echo "                    <ol>
                        <li>
                    <label class=\"question\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "questions"), "html", null, true);
            echo "</label>
                        </li>

                    <input type=\"radio\" value=\"1\" name=\"answer1\" id=\"answer1\"><label>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "answer1"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"2\" name=\"answer1\" id=\"answer2\"><label>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "answer2"), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question2"]) ? $context["question2"] : $this->getContext($context, "question2")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest2"]) {
            // line 32
            echo "                        <li>
                     <label class=\"question\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest2"]) ? $context["quest2"] : $this->getContext($context, "quest2")), "questions"), "html", null, true);
            echo "</label>
                        </li>

                    <input type=\"radio\" value=\"3\" name=\"answer2\" id=\"answer3\"><label>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest2"]) ? $context["quest2"] : $this->getContext($context, "quest2")), "answer1"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"4\" name=\"answer2\" id=\"answer4\"><label>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest2"]) ? $context["quest2"] : $this->getContext($context, "quest2")), "answer2"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"5\" name=\"answer2\" id=\"answer5\"><label>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest2"]) ? $context["quest2"] : $this->getContext($context, "quest2")), "answer3"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"6\" name=\"answer2\" id=\"answer6\"><label>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest2"]) ? $context["quest2"] : $this->getContext($context, "quest2")), "answer4"), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question3"]) ? $context["question3"] : $this->getContext($context, "question3")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest3"]) {
            // line 43
            echo "                        <li>
                            <label class=\"question\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest3"]) ? $context["quest3"] : $this->getContext($context, "quest3")), "questions"), "html", null, true);
            echo "</label>
                        </li>
                    <input type=\"radio\" value=\"7\" name=\"answer3\" id=\"answer7\"><label>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest3"]) ? $context["quest3"] : $this->getContext($context, "quest3")), "answer1"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"8\" name=\"answer3\" id=\"answer8\"><label>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest3"]) ? $context["quest3"] : $this->getContext($context, "quest3")), "answer2"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"9\" name=\"answer3\" id=\"answer9\"><label>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest3"]) ? $context["quest3"] : $this->getContext($context, "quest3")), "answer3"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"10\" name=\"answer3\" id=\"answer10\"><label>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest3"]) ? $context["quest3"] : $this->getContext($context, "quest3")), "answer4"), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question4"]) ? $context["question4"] : $this->getContext($context, "question4")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest4"]) {
            // line 53
            echo "                        <li>
                            <label class=\"question\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest4"]) ? $context["quest4"] : $this->getContext($context, "quest4")), "questions"), "html", null, true);
            echo "</label>
                        </li>
                    <input type=\"radio\" value=\"11\" name=\"answer4\" id=\"answer11\"><label>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest4"]) ? $context["quest4"] : $this->getContext($context, "quest4")), "answer1"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"12\" name=\"answer4\" id=\"answer12\"><label>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest4"]) ? $context["quest4"] : $this->getContext($context, "quest4")), "answer2"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"13\" name=\"answer4\" id=\"answer13\"><label>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest4"]) ? $context["quest4"] : $this->getContext($context, "quest4")), "answer3"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"14\" name=\"answer4\" id=\"answer14\"><label>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest4"]) ? $context["quest4"] : $this->getContext($context, "quest4")), "answer4"), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest4'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question5"]) ? $context["question5"] : $this->getContext($context, "question5")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest5"]) {
            // line 63
            echo "                        <li>
                            <label class=\"question\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest5"]) ? $context["quest5"] : $this->getContext($context, "quest5")), "questions"), "html", null, true);
            echo "</label>
                        </li>
                    <input type=\"radio\" value=\"15\" name=\"answer5\" id=\"answer15\"><label>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest5"]) ? $context["quest5"] : $this->getContext($context, "quest5")), "answer1"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"16\" name=\"answer5\" id=\"answer16\"><label>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest5"]) ? $context["quest5"] : $this->getContext($context, "quest5")), "answer2"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"17\" name=\"answer5\" id=\"answer17\"><label>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest5"]) ? $context["quest5"] : $this->getContext($context, "quest5")), "answer3"), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest5'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question6"]) ? $context["question6"] : $this->getContext($context, "question6")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest6"]) {
            // line 72
            echo "                        <li>
                            <label class=\"question\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest6"]) ? $context["quest6"] : $this->getContext($context, "quest6")), "questions"), "html", null, true);
            echo "</label>
                        </li>
                    <input type=\"radio\" value=\"18\" name=\"answer6\" id=\"answer18\"><label>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest6"]) ? $context["quest6"] : $this->getContext($context, "quest6")), "answer1"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"19\" name=\"answer6\" id=\"answer19\"><label>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest6"]) ? $context["quest6"] : $this->getContext($context, "quest6")), "answer2"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"20\" name=\"answer6\" id=\"answer20\"><label>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest6"]) ? $context["quest6"] : $this->getContext($context, "quest6")), "answer3"), "html", null, true);
            echo "</label>
                    <input type=\"radio\" value=\"21\" name=\"answer6\" id=\"answer21\"><label>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest6"]) ? $context["quest6"] : $this->getContext($context, "quest6")), "answer4"), "html", null, true);
            echo "</label>

                    </ol>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest6'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
                 <input type=\"submit\" id=\"sub\" value=\"submit\" onclick=\"giveDetox();\" class=\"btn allBtn\" name=\"submit_info\">

            </form>



            <section id=\"detoxResult\">

            </section>

        </section>
    </section>

    ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "    <script>
       /* \$(document).ready(function(){

            \$('#sub').click(function(){
                \$('#detoxResult').load('/HealthApp/Symfony/web/app_dev.php/vegan');
            });

        });
    </script>
";
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        // line 97
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthdetox/js/detoxQ.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthdetox/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "healthDetoxBundle:Detox:detox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 96,  236 => 77,  228 => 75,  213 => 70,  205 => 68,  197 => 66,  192 => 64,  335 => 65,  331 => 64,  326 => 63,  323 => 62,  289 => 98,  280 => 50,  266 => 96,  261 => 43,  234 => 35,  215 => 29,  194 => 17,  191 => 16,  181 => 10,  161 => 10,  148 => 7,  134 => 8,  129 => 7,  110 => 7,  104 => 39,  100 => 38,  81 => 9,  58 => 24,  316 => 66,  306 => 62,  301 => 60,  286 => 52,  277 => 49,  272 => 48,  259 => 43,  250 => 82,  245 => 39,  237 => 37,  232 => 76,  223 => 73,  218 => 30,  210 => 28,  202 => 22,  190 => 16,  186 => 12,  172 => 8,  167 => 7,  160 => 10,  152 => 8,  118 => 9,  114 => 8,  90 => 7,  84 => 10,  76 => 30,  65 => 10,  34 => 4,  53 => 7,  378 => 184,  358 => 167,  328 => 140,  296 => 114,  225 => 55,  184 => 25,  178 => 20,  153 => 8,  146 => 14,  137 => 9,  97 => 13,  77 => 8,  307 => 62,  297 => 68,  284 => 97,  275 => 47,  265 => 44,  262 => 43,  257 => 42,  233 => 19,  226 => 11,  216 => 71,  211 => 28,  200 => 21,  195 => 7,  185 => 62,  180 => 10,  174 => 59,  170 => 58,  165 => 7,  155 => 8,  150 => 52,  127 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 185,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 127,  309 => 67,  305 => 95,  298 => 55,  294 => 58,  285 => 89,  283 => 88,  278 => 54,  268 => 100,  264 => 46,  258 => 81,  252 => 39,  247 => 78,  241 => 38,  229 => 32,  220 => 72,  214 => 29,  177 => 9,  169 => 60,  140 => 8,  132 => 51,  128 => 7,  107 => 63,  61 => 9,  273 => 96,  269 => 94,  254 => 38,  243 => 37,  240 => 78,  238 => 36,  235 => 59,  230 => 57,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 50,  208 => 45,  204 => 9,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  119 => 43,  102 => 32,  71 => 7,  67 => 19,  63 => 22,  59 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 10,  75 => 17,  68 => 28,  56 => 18,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 43,  27 => 24,  44 => 5,  31 => 3,  28 => 4,  201 => 67,  196 => 90,  183 => 82,  171 => 61,  166 => 57,  163 => 62,  158 => 13,  156 => 9,  151 => 63,  142 => 10,  138 => 9,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 7,  62 => 18,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 31,  72 => 7,  69 => 23,  47 => 6,  40 => 13,  37 => 5,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 49,  131 => 47,  123 => 10,  120 => 63,  115 => 42,  111 => 37,  108 => 36,  101 => 14,  98 => 31,  96 => 37,  83 => 32,  74 => 14,  66 => 10,  55 => 15,  52 => 15,  50 => 21,  43 => 12,  41 => 9,  35 => 4,  32 => 5,  29 => 4,  209 => 82,  203 => 22,  199 => 21,  193 => 17,  189 => 63,  187 => 12,  182 => 61,  176 => 9,  173 => 8,  168 => 7,  164 => 59,  162 => 56,  154 => 53,  149 => 51,  147 => 51,  144 => 9,  141 => 10,  133 => 8,  130 => 6,  125 => 44,  122 => 44,  116 => 14,  112 => 41,  109 => 7,  106 => 36,  103 => 51,  99 => 9,  95 => 8,  92 => 36,  86 => 33,  82 => 27,  80 => 9,  73 => 19,  64 => 27,  60 => 6,  57 => 8,  54 => 22,  51 => 14,  48 => 14,  45 => 5,  42 => 9,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
