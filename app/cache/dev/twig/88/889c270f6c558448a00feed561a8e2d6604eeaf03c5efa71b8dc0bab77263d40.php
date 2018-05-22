<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_02f26f7eb63762bf027df0bfbe95fb74c4cc454092c5e56014710e659c1eba2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8d4b8b3054194f0145fa0e4d9624c25ecb76824b648d50f9168925634e1b2422 = $this->env->getExtension("native_profiler");
        $__internal_8d4b8b3054194f0145fa0e4d9624c25ecb76824b648d50f9168925634e1b2422->enter($__internal_8d4b8b3054194f0145fa0e4d9624c25ecb76824b648d50f9168925634e1b2422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4b8b3054194f0145fa0e4d9624c25ecb76824b648d50f9168925634e1b2422->leave($__internal_8d4b8b3054194f0145fa0e4d9624c25ecb76824b648d50f9168925634e1b2422_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e01c0a7e400ef8b8acce57ada0856b770244d4750a330fb8819953cfbe5591a = $this->env->getExtension("native_profiler");
        $__internal_2e01c0a7e400ef8b8acce57ada0856b770244d4750a330fb8819953cfbe5591a->enter($__internal_2e01c0a7e400ef8b8acce57ada0856b770244d4750a330fb8819953cfbe5591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2e01c0a7e400ef8b8acce57ada0856b770244d4750a330fb8819953cfbe5591a->leave($__internal_2e01c0a7e400ef8b8acce57ada0856b770244d4750a330fb8819953cfbe5591a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
