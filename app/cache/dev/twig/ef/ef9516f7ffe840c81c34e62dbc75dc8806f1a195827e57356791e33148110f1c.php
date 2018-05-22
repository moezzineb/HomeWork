<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b9e7feaef23d5cd2536438b1f940d13f7845b14129dff15b9c61e490cd90cad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f40c4d770a66f4a925e22c42b1a9bf2b9c4d02502265997d832cd2e176ed810e = $this->env->getExtension("native_profiler");
        $__internal_f40c4d770a66f4a925e22c42b1a9bf2b9c4d02502265997d832cd2e176ed810e->enter($__internal_f40c4d770a66f4a925e22c42b1a9bf2b9c4d02502265997d832cd2e176ed810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40c4d770a66f4a925e22c42b1a9bf2b9c4d02502265997d832cd2e176ed810e->leave($__internal_f40c4d770a66f4a925e22c42b1a9bf2b9c4d02502265997d832cd2e176ed810e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7a797af90333d7c8ac652ee1db81e0031352355265484f79f3a943300cad74f = $this->env->getExtension("native_profiler");
        $__internal_e7a797af90333d7c8ac652ee1db81e0031352355265484f79f3a943300cad74f->enter($__internal_e7a797af90333d7c8ac652ee1db81e0031352355265484f79f3a943300cad74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e7a797af90333d7c8ac652ee1db81e0031352355265484f79f3a943300cad74f->leave($__internal_e7a797af90333d7c8ac652ee1db81e0031352355265484f79f3a943300cad74f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
