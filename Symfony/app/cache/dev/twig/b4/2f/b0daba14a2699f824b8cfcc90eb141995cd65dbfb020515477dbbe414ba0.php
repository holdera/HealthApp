<?php

/* healthhealthUserBundle:Exercises:exercises.html.twig */
class __TwigTemplate_b42fb0daba14a2699f824b8cfcc90eb141995cd65dbfb020515477dbbe414ba0 extends Twig_Template
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



        <p>Skateboard kale chips pickled, before they sold out master cleanse quinoa hashtag PBR irony try-hard gentrify.
            Wolf Neutra kale chips, pop-up meh tote bag artisan twee. Small batch plaid swag typewriter Tonx forage PBR
            gluten-free hoodie, twee VHS. Next level tattooed Carles, cornhole meh Neutra disrupt. Bicycle rights
            sartorial 8-bit, ethical lomo retro put a bird on it mixtape keffiyeh. Sustainable Williamsburg yr iPhone,
            Schlitz farm-to-table umami Neutra tote bag Kickstarter biodiesel pour-over XOXO. Tonx tote bag master
            cleanse, vegan cardigan gentrify wolf XOXO VHS hella jean shorts fingerstache lo-fi flannel sustainable.</p>

        <p>Skateboard kale chips pickled, before they sold out master cleanse quinoa hashtag PBR irony try-hard gentrify.
            Wolf Neutra kale chips, pop-up meh tote bag artisan twee. Small batch plaid swag typewriter Tonx forage PBR
            gluten-free hoodie, twee VHS. Next level tattooed Carles, cornhole meh Neutra disrupt. Bicycle rights
            sartorial 8-bit, ethical lomo retro put a bird on it mixtape keffiyeh. Sustainable Williamsburg yr iPhone,
            Schlitz farm-to-table umami Neutra tote bag Kickstarter biodiesel pour-over XOXO. Tonx tote bag master
            cleanse, vegan cardigan gentrify wolf XOXO VHS hella jean shorts fingerstache lo-fi flannel sustainable.</p>

        <p>Skateboard kale chips pickled, before they sold out master cleanse quinoa hashtag PBR irony try-hard gentrify.
            Wolf Neutra kale chips, pop-up meh tote bag artisan twee. Small batch plaid swag typewriter Tonx forage PBR
            gluten-free hoodie, twee VHS. Next level tattooed Carles, cornhole meh Neutra disrupt. Bicycle rights
            sartorial 8-bit, ethical lomo retro put a bird on it mixtape keffiyeh. Sustainable Williamsburg yr iPhone,
            Schlitz farm-to-table umami Neutra tote bag Kickstarter biodiesel pour-over XOXO. Tonx tote bag master
            cleanse, vegan cardigan gentrify wolf XOXO VHS hella jean shorts fingerstache lo-fi flannel sustainable.</p>


    </section>



";
    }

    public function getTemplateName()
    {
        return "healthhealthUserBundle:Exercises:exercises.html.twig";
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
