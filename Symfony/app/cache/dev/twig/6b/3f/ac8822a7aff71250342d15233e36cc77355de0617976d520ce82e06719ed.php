<?php

/* healthDetoxBundle:Detox:detox.html.twig */
class __TwigTemplate_6b3fac8822a7aff71250342d15233e36cc77355de0617976d520ce82e06719ed extends Twig_Template
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
        return array (  289 => 98,  284 => 97,  281 => 96,  268 => 100,  266 => 96,  250 => 82,  240 => 78,  236 => 77,  232 => 76,  228 => 75,  223 => 73,  220 => 72,  216 => 71,  213 => 70,  205 => 68,  201 => 67,  197 => 66,  192 => 64,  189 => 63,  185 => 62,  182 => 61,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  157 => 54,  154 => 53,  150 => 52,  147 => 51,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  122 => 44,  119 => 43,  115 => 42,  112 => 41,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  86 => 33,  83 => 32,  79 => 31,  76 => 30,  68 => 28,  64 => 27,  58 => 24,  54 => 22,  50 => 21,  32 => 5,  29 => 4,);
    }
}
