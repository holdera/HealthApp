<?php

/* healthhealthUserBundle:Midsection:abs.html.twig */
class __TwigTemplate_2195e3f46e0f2e73d590a342d7b235410fdd1ccb37111a53b1175a68357ecaa5 extends Twig_Template
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
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")));
        foreach ($context['_seq'] as $context["_key"] => $context["mids"]) {
            // line 11
            echo "        <section class=\"col-md-9 main_content\">

            <h1>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "bodyPart"), "html", null, true);
            echo "</h1>

            <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "exercise1"), "html", null, true);
            echo "</p>

            <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "exercise2"), "html", null, true);
            echo "</p>

            <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mids"]) ? $context["mids"] : $this->getContext($context, "mids")), "exercise3"), "html", null, true);
            echo "</p>


        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mids'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "


";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Midsection:abs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  67 => 19,  62 => 17,  57 => 15,  52 => 13,  48 => 11,  44 => 10,  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
