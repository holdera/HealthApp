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

       <a href=\"/HealthApp/Symfony/web/app_dev.php/newpost\"><span class=\"new\">create new thread</span></a>
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "       <table class=\"table table-condensed\">
           <tr>
               <th>Subject</th>
               <th>Poster</th>
               <th>Posted On</th>
           </tr>
           <tr>
               <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "permalink"), "html", null, true);
            echo "\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
            echo "</a>
                   </td>
               <td>
                   ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author"), "html", null, true);
            echo "
                   </td>
                <td>
                    Date
                </td>
           </tr>
       </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        <table>
            <tr>

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
        return array (  77 => 32,  63 => 24,  57 => 21,  53 => 20,  43 => 12,  39 => 11,  31 => 5,  28 => 4,);
    }
}
