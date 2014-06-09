<?php

/* healthDetoxBundle:vegan:vegan.html.twig */
class __TwigTemplate_87c836a371f32d682240081ca48157e32e28a89da140d09d742e32c95fe28aba extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vegan"]) ? $context["vegan"] : $this->getContext($context, "vegan")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 2
            echo "<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "dName"), "html", null, true);
            echo "</h2>
    <p>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "dContent"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "healthDetoxBundle:vegan:vegan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  23 => 2,  19 => 1,);
    }
}
