<?php

/* healthDetoxBundle:liquid:liquid.html.twig */
class __TwigTemplate_ecc0b1eed7a7df25c3ac51fb2111fe5108f819c6d0237a1ab2fc7f1e9d2a149f extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["liquid"]) ? $context["liquid"] : $this->getContext($context, "liquid")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 2
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "dName"), "html", null, true);
            echo "</h2>
    <p>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "dContent"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "healthDetoxBundle:liquid:liquid.html.twig";
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
