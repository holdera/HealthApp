<?php

/* healthResourcesBundle:Video:videos.html.twig */
class __TwigTemplate_00228931d7893cb735ae23b02dacf8f6ec5e16640c29deeb437993a45936e25d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_main_content($context, array $blocks = array())
    {
        // line 5
        echo "
<section class=\"col-md-8 main_content\">

    <h1>Workout Videos</h1>

    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tone"]) ? $context["tone"] : $this->getContext($context, "tone")));
        foreach ($context['_seq'] as $context["_key"] => $context["tones"]) {
            // line 11
            echo "<section id=\"tone\" class=\"workIt col-md-4\">
    <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/vid1.png"), "html", null, true);
            echo "\" class=\"slider\" alt=\"health\" />

    <h3>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tones"]) ? $context["tones"] : $this->getContext($context, "tones")), "intensity"), "html", null, true);
            echo "</h3>

    <section class=\"gone\">
        <h4>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tones"]) ? $context["tones"] : $this->getContext($context, "tones")), "workout"), "html", null, true);
            echo "</h4>
        <p>
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tones"]) ? $context["tones"] : $this->getContext($context, "tones")), "content"), "html", null, true);
            echo "
        </p>
    </section>

</section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardio"]) ? $context["cardio"] : $this->getContext($context, "cardio")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "    <section id=\"cardio\" class=\"workIt col-md-4\">
        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/vid2.png"), "html", null, true);
            echo "\" class=\"slider\" alt=\"health\" />

        <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "intensity"), "html", null, true);
            echo "</h3>

        <section class=\"gone\">
            <h4>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "workout"), "html", null, true);
            echo "</h4>
            <p>
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "content"), "html", null, true);
            echo "
            </p>
        </section>
    </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intense"]) ? $context["intense"] : $this->getContext($context, "intense")));
        foreach ($context['_seq'] as $context["_key"] => $context["int"]) {
            // line 42
            echo "    <section id=\"intense\" class=\"workIt col-md-4\">
        <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/vid3.png"), "html", null, true);
            echo "\" class=\"slider\" alt=\"health\" />
        <h3>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["int"]) ? $context["int"] : $this->getContext($context, "int")), "intensity"), "html", null, true);
            echo "</h3>

        <section class=\"gone\">
            <h4>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["int"]) ? $context["int"] : $this->getContext($context, "int")), "workout"), "html", null, true);
            echo "</h4>
            <p>
                ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["int"]) ? $context["int"] : $this->getContext($context, "int")), "content"), "html", null, true);
            echo "
            </p>
        </section>
    </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['int'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "

</section>

    <script>
        //jquery dom manipulation

        \$(document).ready(function(){
            \$('gone').hide();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "healthResourcesBundle:Video:videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  135 => 49,  130 => 47,  124 => 44,  120 => 43,  117 => 42,  113 => 41,  110 => 40,  99 => 35,  94 => 33,  88 => 30,  83 => 28,  80 => 27,  76 => 26,  73 => 25,  61 => 19,  56 => 17,  50 => 14,  45 => 12,  42 => 11,  38 => 10,  31 => 5,  28 => 4,);
    }
}
