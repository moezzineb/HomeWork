<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_12393067e40e8064942230f48fdcbeefdcdc12985d483dd64d622a5599f6a6b7 extends Twig_Template
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
        $__internal_364591cc89c42225fb932ad9237545c5513aec25d788b8b7d0033698fa2bbca3 = $this->env->getExtension("native_profiler");
        $__internal_364591cc89c42225fb932ad9237545c5513aec25d788b8b7d0033698fa2bbca3->enter($__internal_364591cc89c42225fb932ad9237545c5513aec25d788b8b7d0033698fa2bbca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364591cc89c42225fb932ad9237545c5513aec25d788b8b7d0033698fa2bbca3->leave($__internal_364591cc89c42225fb932ad9237545c5513aec25d788b8b7d0033698fa2bbca3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7da6eb4243f5d6b4fc1f17dd94b189fc30f3a08bde6cb8457f1146be7872e1b2 = $this->env->getExtension("native_profiler");
        $__internal_7da6eb4243f5d6b4fc1f17dd94b189fc30f3a08bde6cb8457f1146be7872e1b2->enter($__internal_7da6eb4243f5d6b4fc1f17dd94b189fc30f3a08bde6cb8457f1146be7872e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7da6eb4243f5d6b4fc1f17dd94b189fc30f3a08bde6cb8457f1146be7872e1b2->leave($__internal_7da6eb4243f5d6b4fc1f17dd94b189fc30f3a08bde6cb8457f1146be7872e1b2_prof);

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
