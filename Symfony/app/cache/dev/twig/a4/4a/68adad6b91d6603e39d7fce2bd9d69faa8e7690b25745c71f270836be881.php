<?php

/* healthforumBundle:Forum:Forum.html.twig */
class __TwigTemplate_a44a68adad6b91d6603e39d7fce2bd9d69faa8e7690b25745c71f270836be881 extends Twig_Template
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

        <table>
            <tr>
                <th>Newbies</th>
                <th>Posts</th>
            </tr>
        </table>

        <table>
            <tr>
                <th>Topics</th>
                <th>The Latest</th>
            </tr>
            <tr>
                <td>Weight-loss</td>
            </tr>
            <tr>
                <td>Fitness</td>
            </tr>
            <tr>
                <td>Transformations</td>
            </tr>

        </table>


    </section>
";
    }

    public function getTemplateName()
    {
        return "healthforumBundle:Forum:Forum.html.twig";
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
