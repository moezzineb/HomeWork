<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_261b2b90495f887e791284c0ad16f0b4ff3e09f973766abbe19b3f10985d34bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72b4b03cf0456a43f6480896d00ddf1a51b3732736667858222b1d206a9ae31c = $this->env->getExtension("native_profiler");
        $__internal_72b4b03cf0456a43f6480896d00ddf1a51b3732736667858222b1d206a9ae31c->enter($__internal_72b4b03cf0456a43f6480896d00ddf1a51b3732736667858222b1d206a9ae31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_72b4b03cf0456a43f6480896d00ddf1a51b3732736667858222b1d206a9ae31c->leave($__internal_72b4b03cf0456a43f6480896d00ddf1a51b3732736667858222b1d206a9ae31c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
