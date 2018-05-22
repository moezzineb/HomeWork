<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_358e593264f5d400f82715471f76e540d956e04c98c304c348b8db71f3f2d469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e61f3cc11d27c5c3b34cde99c8d4c4b33da285c9c9aacf7f8ff6d1906af1fd69 = $this->env->getExtension("native_profiler");
        $__internal_e61f3cc11d27c5c3b34cde99c8d4c4b33da285c9c9aacf7f8ff6d1906af1fd69->enter($__internal_e61f3cc11d27c5c3b34cde99c8d4c4b33da285c9c9aacf7f8ff6d1906af1fd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61f3cc11d27c5c3b34cde99c8d4c4b33da285c9c9aacf7f8ff6d1906af1fd69->leave($__internal_e61f3cc11d27c5c3b34cde99c8d4c4b33da285c9c9aacf7f8ff6d1906af1fd69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3a83d2a8858347f3acf6870baa0589111cee529cfb9ae84fd18bd86e711822e = $this->env->getExtension("native_profiler");
        $__internal_d3a83d2a8858347f3acf6870baa0589111cee529cfb9ae84fd18bd86e711822e->enter($__internal_d3a83d2a8858347f3acf6870baa0589111cee529cfb9ae84fd18bd86e711822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d3a83d2a8858347f3acf6870baa0589111cee529cfb9ae84fd18bd86e711822e->leave($__internal_d3a83d2a8858347f3acf6870baa0589111cee529cfb9ae84fd18bd86e711822e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aba0747de28898a4b224b26cc005e33ba802e3c6f0ef7171ee06c4aacb6b4b34 = $this->env->getExtension("native_profiler");
        $__internal_aba0747de28898a4b224b26cc005e33ba802e3c6f0ef7171ee06c4aacb6b4b34->enter($__internal_aba0747de28898a4b224b26cc005e33ba802e3c6f0ef7171ee06c4aacb6b4b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aba0747de28898a4b224b26cc005e33ba802e3c6f0ef7171ee06c4aacb6b4b34->leave($__internal_aba0747de28898a4b224b26cc005e33ba802e3c6f0ef7171ee06c4aacb6b4b34_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ba3532d7b6eeb8771e3c2b2b2018c9d7e1b50ebd7722fcb9789bdd2c534bea0 = $this->env->getExtension("native_profiler");
        $__internal_4ba3532d7b6eeb8771e3c2b2b2018c9d7e1b50ebd7722fcb9789bdd2c534bea0->enter($__internal_4ba3532d7b6eeb8771e3c2b2b2018c9d7e1b50ebd7722fcb9789bdd2c534bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4ba3532d7b6eeb8771e3c2b2b2018c9d7e1b50ebd7722fcb9789bdd2c534bea0->leave($__internal_4ba3532d7b6eeb8771e3c2b2b2018c9d7e1b50ebd7722fcb9789bdd2c534bea0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
