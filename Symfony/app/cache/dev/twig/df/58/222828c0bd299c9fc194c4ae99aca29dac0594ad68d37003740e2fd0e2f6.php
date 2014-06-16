<?php

/* healthhealthUserBundle:Contest:contest.html.twig */
class __TwigTemplate_df58222828c0bd299c9fc194c4ae99aca29dac0594ad68d37003740e2fd0e2f6 extends Twig_Template
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

    // line 4
    public function block_visual_heading($context, array $blocks = array())
    {
        // line 5
        echo "

";
    }

    // line 9
    public function block_main_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <section class=\"col-md-9 main_content\">

        <h1>Contest</h1>


</section>
";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Contest:contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  38 => 9,  32 => 5,  29 => 4,);
    }
}
