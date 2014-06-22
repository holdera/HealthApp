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

        <h2>Health Calculators</h2>


    <section class=\"col-md-4 heart\">

    <h3>BMI Calculator</h3>

     <form class=\"allForms\">
         <label>Weight (lbs):</label>
         <input type=\"text\" id=\"weight\">

         <label>Height (inches)</label>
         <input type=\"text\" id=\"height\">

         <input type=\"button\" id=\"submit\" onclick=\"calcBMI();\" class=\"btn\" value=\"calculate\" />

     </form>


      </section>

        <section class=\"col-md-4 heart\">

            <h3>Maximum Heart-Rate Calculator</h3>
        <form class=\"allForms\">
            <label>Age:</label>
            <input type=\"text\" id=\"age\">

            <input type=\"button\" id=\"submit\" onclick=\"calcBPM();\" value=\"calculate\" class=\"btn\" />

        </form>

            <input type=\"button\" class=\"btn allBtn\" value=\"Back\" style=\"clear:both;\" onclick=\"goBack();\" />

        </section>

        <section class=\"col-md-4 heart\">

            <h3>Calorie Counter</h3>

            <script src=\"http://platform.fatsecret.com/js?key=a4e50ded35ad42e480164e8c12245010&auto_load=true\"></script>

            <input type=\"button\" class=\"btn allBtn\" value=\"Back\" style=\"clear:both;\" onclick=\"goBack();\" />

        </section>

        <section class=\"col-md-4 heart res\">
            <p id=\"bmiResults\"></p>

            <p id=\"results\"></p>

            <p id=\"bmiResults\"></p>

            <p id=\"ageResults\"></p>

            <p id=\"calResults\"></p>
        </section>

    </section><!--end of container-->

    ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "
    <script>

        function goBack() {history.back();}

    </script>

";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthlifestyle/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
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
        return array (  127 => 73,  122 => 72,  119 => 71,  108 => 75,  106 => 71,  42 => 9,  39 => 8,  33 => 4,  30 => 3,);
    }
}
