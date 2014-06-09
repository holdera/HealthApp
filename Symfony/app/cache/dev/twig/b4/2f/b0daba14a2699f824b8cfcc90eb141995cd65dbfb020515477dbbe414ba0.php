<?php

/* healthhealthUserBundle:Exercises:exercises.html.twig */
class __TwigTemplate_b42fb0daba14a2699f824b8cfcc90eb141995cd65dbfb020515477dbbe414ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
            'visual_heading' => array($this, 'block_visual_heading'),
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

    // line 3
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 4
        echo "

";
    }

    // line 8
    public function block_main_content($context, array $blocks = array())
    {
        // line 9
        echo "
    <section class=\"col-md-9 main_content\">

        <h1>Fitness</h1>

        <p>Its important to workout at least 3 times a week. Not only does it increase your metabolism but burns more
            fat as well. It is also important to not do so much cardio. Too much cardio could in fact burn muscle,
        leaving you flaby and not toned. Click on a body part below to see which exercises you can do to build
        lean muscle and burn fat.</p>

    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")));
        foreach ($context['_seq'] as $context["_key"] => $context["alls"]) {
            // line 20
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alls"]) ? $context["alls"] : $this->getContext($context, "alls")), "bodyPart"), "html", null, true);
            echo "</h4>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

    </section>



";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Exercises:exercises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  57 => 20,  53 => 19,  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
