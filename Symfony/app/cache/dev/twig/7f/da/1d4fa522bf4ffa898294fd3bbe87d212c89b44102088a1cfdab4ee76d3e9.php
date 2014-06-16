<?php

/* healthLifestyleBundle:Lifestyle:lifestyle.html.twig */
class __TwigTemplate_7fda1d4fa522bf4ffa898294fd3bbe87d212c89b44102088a1cfdab4ee76d3e9 extends Twig_Template
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

       <h2>Lifestyle</h2>
        <p>
       ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diet"]) ? $context["diet"] : $this->getContext($context, "diet")));
        foreach ($context['_seq'] as $context["_key"] => $context["diets"]) {
            // line 15
            echo "          <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diets"]) ? $context["diets"] : $this->getContext($context, "diets")), "content"), "html", null, true);
            echo "</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "       </p>

       <section class=\"col-md-4\">

           <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/contImg1.png"), "html", null, true);
        echo "\" alt=\"recipes\" />

           <h3>Ideal Way of Eating</h3>

            <a href=\"/HealthApp/Symfony/web/app_dev.php/healthsample\">
                <p>Here's a sample day of how one should eat to live a healthy balanced lifestyle and lose weight
                </p></a>

       </section>

       <section class=\"col-md-4\">

           <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/contImg2.png"), "html", null, true);
        echo "\" alt=\"recipes\" />

           <h3>More Green = More Lean</h3>

           <a href=\"/HealthApp/Symfony/web/app_dev.php/greenlean\">
           <p>Find out the the green foods that are not only delicious but will help burn that fat
               and reveal your toned sleek body
           </p></a>
       </section>

       <section class=\"col-md-4\">

           <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/contImg3.png"), "html", null, true);
        echo "\" alt=\"recipes\" />

           <h3>BMI & Heart Rate Calculator</h3>

           <a href=\"/HealthApp/Symfony/web/app_dev.php/cheat-generator\">
               <p>Cheat days can fuel your body but also make you lose track, this generator will help
                   give you belly friendly cheat meals sweet enough to satisfy your craving
               </p></a>
       </section>


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
        return array (  98 => 46,  83 => 34,  68 => 22,  62 => 18,  52 => 15,  48 => 14,  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
