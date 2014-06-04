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
        <h2>Cheat Meal</h2>

        <p>Cheat meals are so important in your lifestyle. Not only do they confuse your body
        with the release of hormones, they leave you content so you stay on your healthy lifestyle
        and don't feel constricted, However because cheat meals are only once a week, make sure
        you don't regret it. But remember, it is a cheat meal, not a cheat day. Have that cheat
        meal before 7pm if you can. Here ya go!</p>

        <script>

            for(count = 1; count <= 7; ++count){
                document.write(count);
            }

        </script>

        <form class=\"allForms\" method=\"post\" action=\"\">

            <label>Favorite Types of Food:</label>
                <select name=\"types\" onchange=\"getType();\" id=\"cTypes\">
                    <option value=\"1\">Sweet</option>
                    <option value=\"2\">Savory</option>
                    <option value=\"3\">Salt</option>
                    <option value=\"4\">All</option>
                </select>

            <p id=\"chosen\"></p>
        </form>



    </section>
    you prefer  sweet
    savory
    salt
    all

    if sweet
    try:
    frozen yogurt
    gelato
    healthy cheesecake
    doughnut
    cookies(2)
    regular sized chocolate bar


    salt
    french fries (small to medium)
    extra buttery popcorn
    chips + dip
    fried chicken

    savory
    pasta
    lasagna
    burger
    pizza (max 3 slices if before 3pm), 1 or after 3pm
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
        return array (  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
