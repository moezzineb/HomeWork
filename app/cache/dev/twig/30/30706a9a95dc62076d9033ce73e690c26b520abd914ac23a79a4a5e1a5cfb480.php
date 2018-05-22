<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_449e91c9715e69e1d4efcfb622e3fb6406613a47f01a1b9a5ed30c173847aee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42e5a2ebb2b11ae0919f8163f69fa14f837f72ced2b15c0915cd4a304e72fe8b = $this->env->getExtension("native_profiler");
        $__internal_42e5a2ebb2b11ae0919f8163f69fa14f837f72ced2b15c0915cd4a304e72fe8b->enter($__internal_42e5a2ebb2b11ae0919f8163f69fa14f837f72ced2b15c0915cd4a304e72fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42e5a2ebb2b11ae0919f8163f69fa14f837f72ced2b15c0915cd4a304e72fe8b->leave($__internal_42e5a2ebb2b11ae0919f8163f69fa14f837f72ced2b15c0915cd4a304e72fe8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a2a2a7a398e8f64748cedce70d5ce25daebeac36c5c0da08248a54e5182bf1f = $this->env->getExtension("native_profiler");
        $__internal_2a2a2a7a398e8f64748cedce70d5ce25daebeac36c5c0da08248a54e5182bf1f->enter($__internal_2a2a2a7a398e8f64748cedce70d5ce25daebeac36c5c0da08248a54e5182bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2a2a2a7a398e8f64748cedce70d5ce25daebeac36c5c0da08248a54e5182bf1f->leave($__internal_2a2a2a7a398e8f64748cedce70d5ce25daebeac36c5c0da08248a54e5182bf1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
