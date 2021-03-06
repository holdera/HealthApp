<?php

/* healthResourcesBundle:Resource:resource.html.twig */
class __TwigTemplate_3f284511d4b8af2eb0e1954f68065398479a8b1a4fc1f121fa44242d08c759ce extends Twig_Template
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

        <h1>Resources</h1>

       <section class=\"col-md-6 gym\">

           <a href=\"/HealthApp/Symfony/web/app_dev.php/findgym\">
               <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/res1.png"), "html", null, true);
        echo "\" alt=\"weights\" />

               <h2>Find a Gym</h2>

           <p>
               Have you decided to start working out but you do not know where. Click here to find the closes health clubs
               in your areas.
           </p></a>
       </section>



        <section class=\"col-md-6 gym\">

            <a href=\"/HealthApp/Symfony/web/app_dev.php/videos\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/healthhealthuser/images/res2.png"), "html", null, true);
        echo "\" alt=\"weights\" />
                <h2>Top Workout Videos</h2>
            <p>
                Have you decided to start working out but you do not know where. Click here to find the closes health clubs
                in your areas.
            </p>
                </a>
        </section>


    </section>
";
    }

    public function getTemplateName()
    {
        return "healthResourcesBundle:Resource:resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 28,  41 => 13,  31 => 5,  28 => 4,);
    }
}
