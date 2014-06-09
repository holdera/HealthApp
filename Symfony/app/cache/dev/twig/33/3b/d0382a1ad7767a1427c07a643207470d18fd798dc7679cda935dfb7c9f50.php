<?php

/* healthLifestyleBundle:Cheat:cheatGenerator.html.twig */
class __TwigTemplate_333bd0382a1ad7767a1427c07a643207470d18fd798dc7679cda935dfb7c9f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("healthhealthUserBundle::layout.html.twig");

        $this->blocks = array(
            'visual_heading' => array($this, 'block_visual_heading'),
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
        echo "    <section class=\"col-md-9 main_content\">
        <h2>BMI Calculator</h2>

     <form>
         <label>Weight (lbs):</label>
         <input type=\"text\" id=\"weight\">

         <label>Height (inches)</label>
         <input type=\"text\" id=\"height\">

         <input type=\"button\" id=\"submit\" onclick=\"calcBMI();\" class=\"btn\" value=\"calculate\" />

     </form>

        <section>
            <p id=\"bmiResults\"></p>
            <p id=\"results\"></p>
        </section>

        <p id=\"bmiResults\"></p>

        <form>
            <label>Age:</label>
            <input type=\"text\" id=\"age\">

            <input type=\"button\" id=\"submit\" onclick=\"calcBPM();\" value=\"calculate\" class=\"btn\" />

        </form>

        <section>
            <p id=\"ageResults\"></p>
        </section>

        <input type=\"button\" class=\"btn allBtn\" value=\"Back\" onclick=\"goBack();\" />
    </section><!--end of container-->

    ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
    <script>

        function goBack() {history.back();}

    </script>

";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/cheat.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "healthLifestyleBundle:Cheat:cheatGenerator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  96 => 46,  93 => 45,  82 => 49,  80 => 45,  42 => 9,  39 => 8,  33 => 4,  30 => 3,);
    }
}
