<?php

/* healthDetoxBundle:Detox:detox.html.twig */
class __TwigTemplate_6b3fac8822a7aff71250342d15233e36cc77355de0617976d520ce82e06719ed extends Twig_Template
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
    <section class=\"col-md-9 main_content\">

        <h2>Detox</h2>

        <p>It is so important to detox your body. As we live in a fast paced society we ingest a tone of junk food
            filled with chemicals and preservatives. As a result of this, a tone of waste is sitting in your body
            that contributes to bloating; ads water, and of course weight gain. Detoxing is a great way to cleanse
            your body of these toxins, and be healthier on the inside. It also helps in cancer and disease prevention.</p>

         <p>To find the detox that’s the right fit for you fill out this questionnaire.</p>
    </section>

    <section class=\"col-md-8 questons\">

        <form action=\"get_info.php\" method=\"post\" class=\"allForms\">

            <label class=\"question\">Have you ever done a detox?</label>
            <input type=\"radio\" value=\"1\"><label>Yes</label>
            <input type=\"radio\" value=\"2\"><label>No</label>

            <label class=\"question\">If so which one?</label>
            <input type=\"radio\" value=\"1\"><label>Master Cleanse</label>
            <input type=\"radio\" value=\"2\"><label>Water Cleanse</label>
            <input type=\"radio\" value=\"3\"><label>Wholly Tea</label>
            <input type=\"radio\" value=\"4\"><label>Juice cleanse</label>
            <label>Other</label><input type=\"text\"/>

            <label class=\"question\">Why do you detox?</label>
            <input type=\"radio\" value=\"1\"><label>Weight-loss</label>
            <input type=\"radio\" value=\"2\"><label>Health benefits</label>
            <input type=\"radio\" value=\"3\"><label>For surgery</label>
            <label>Other</label><input type=\"text\"/>

            <label class=\"question\">How often do you detox?</label>
            <input type=\"radio\" value=\"1\"><label>Once a year</label>
            <input type=\"radio\" value=\"2\"><label>Three times a year</label>
            <input type=\"radio\" value=\"3\"><label>Once a month</label>
            <input type=\"radio\" value=\"4\"><label>Once every couple of years</label>
            <label>Other</label><input type=\"text\"/>

            <label class=\"question\">Do you have self discipline?</label>
            <input type=\"radio\" value=\"1\"><label>Yes</label>
            <input type=\"radio\" value=\"2\"><label>No</label>
            <input type=\"radio\" value=\"3\"><label>It depends on what for</label>

            <label class=\"question\">What is the longest time you have ever been on a detox?</label>
            <input type=\"radio\" value=\"1\"><label>1-3 days</label>
            <input type=\"radio\" value=\"2\"><label>7-14 days</label>
            <input type=\"radio\" value=\"3\"><label>21 days +</label>

            <input type=\"submit\" value=\"submit\" class=\"btn allBtn\" name=\"submit_info\">

        </form>

    </section>
";
    }

    public function getTemplateName()
    {
        return "healthDetoxBundle:Detox:detox.html.twig";
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