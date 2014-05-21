<?php

/* healthLifestyleBundle:Lifestyle:lifestyle.html.twig */
class __TwigTemplate_7fda1d4fa522bf4ffa898294fd3bbe87d212c89b44102088a1cfdab4ee76d3e9 extends Twig_Template
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

       <h2>Lifestyle</h2>

       <p>Pie liquorice halvah liquorice apple pie candy canes chupa chups bonbon. Chupa chups soufflé tart pie wafer. Brownie macaroon dragée wafer candy cookie. Macaroon lollipop pastry cheesecake sesame snaps chocolate lemon drops chocolate dragée. Pudding toffee soufflé fruitcake jelly-o chocolate. Pastry gummi bears fruitcake carrot cake sesame snaps tootsie roll lollipop.</p>

   </section>
";
    }

    public function getTemplateName()
    {
        return "healthLifestyleBundle:Lifestyle:lifestyle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
