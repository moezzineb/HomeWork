<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cd6769e899af2c5da635750b4b30819649bbc5f9afa4da3e7058fcab50fa5882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c59f81a0096d1663aab801e7be332468624dfd35379eb47e3ebbeac15be412a2 = $this->env->getExtension("native_profiler");
        $__internal_c59f81a0096d1663aab801e7be332468624dfd35379eb47e3ebbeac15be412a2->enter($__internal_c59f81a0096d1663aab801e7be332468624dfd35379eb47e3ebbeac15be412a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59f81a0096d1663aab801e7be332468624dfd35379eb47e3ebbeac15be412a2->leave($__internal_c59f81a0096d1663aab801e7be332468624dfd35379eb47e3ebbeac15be412a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_093db243000b15bda791799e6566d1b8a69812e731fc10ef9938a0dca7093e9f = $this->env->getExtension("native_profiler");
        $__internal_093db243000b15bda791799e6566d1b8a69812e731fc10ef9938a0dca7093e9f->enter($__internal_093db243000b15bda791799e6566d1b8a69812e731fc10ef9938a0dca7093e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_093db243000b15bda791799e6566d1b8a69812e731fc10ef9938a0dca7093e9f->leave($__internal_093db243000b15bda791799e6566d1b8a69812e731fc10ef9938a0dca7093e9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c74844ed699d30907ea30f7fead23a3cbe3fa96cb784711d345f7e608d55dc60 = $this->env->getExtension("native_profiler");
        $__internal_c74844ed699d30907ea30f7fead23a3cbe3fa96cb784711d345f7e608d55dc60->enter($__internal_c74844ed699d30907ea30f7fead23a3cbe3fa96cb784711d345f7e608d55dc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c74844ed699d30907ea30f7fead23a3cbe3fa96cb784711d345f7e608d55dc60->leave($__internal_c74844ed699d30907ea30f7fead23a3cbe3fa96cb784711d345f7e608d55dc60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d942190a34c668609fcb1147668c58d45ac9810217173f68b8fd19f463adaf88 = $this->env->getExtension("native_profiler");
        $__internal_d942190a34c668609fcb1147668c58d45ac9810217173f68b8fd19f463adaf88->enter($__internal_d942190a34c668609fcb1147668c58d45ac9810217173f68b8fd19f463adaf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d942190a34c668609fcb1147668c58d45ac9810217173f68b8fd19f463adaf88->leave($__internal_d942190a34c668609fcb1147668c58d45ac9810217173f68b8fd19f463adaf88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
