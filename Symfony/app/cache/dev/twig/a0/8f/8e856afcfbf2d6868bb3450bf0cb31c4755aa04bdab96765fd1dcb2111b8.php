<?php

/* healthforumBundle:Create:create.html.twig */
class __TwigTemplate_a08f8e856afcfbf2d6868bb3450bf0cb31c4755aa04bdab96765fd1dcb2111b8 extends Twig_Template
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

        <h1>Health Forum</h1>

        <form class=\"create\" method=\"post\" action=\"/health/forumBundle/Controller/addPost.php\">
            <label>Topic:</label>
            <input type=\"text\" name=\"topic\" />

            <label>Body:</label>
            <textarea name=\"content\"></textarea>

            <input type=\"submit\" name=\"post\" class=\"btn\">
        </form>

    </section>
";
    }

    public function getTemplateName()
    {
        return "healthforumBundle:Create:create.html.twig";
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
