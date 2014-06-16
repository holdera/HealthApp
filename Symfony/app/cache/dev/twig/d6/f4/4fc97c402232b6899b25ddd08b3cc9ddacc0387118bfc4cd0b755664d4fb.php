<?php

/* healthhealthUserBundle:Upper:upperbody.html.twig */
class __TwigTemplate_d6f44fc97c402232b6899b25ddd08b3cc9ddacc0387118bfc4cd0b755664d4fb extends Twig_Template
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

        <h1>Upper</h1>

        




    </section>



";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Upper:upperbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
