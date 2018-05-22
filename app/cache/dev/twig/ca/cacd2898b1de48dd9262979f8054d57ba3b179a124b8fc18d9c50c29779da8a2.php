<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_84ebe4ebbd1823c16c2a72cbc05f5342d619aab50779050d55734367bf5621ed extends Twig_Template
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
        $__internal_ceedb97801119c8a6ddfefdf9cb904352ca5412be03067c5d772a35f4923bd5b = $this->env->getExtension("native_profiler");
        $__internal_ceedb97801119c8a6ddfefdf9cb904352ca5412be03067c5d772a35f4923bd5b->enter($__internal_ceedb97801119c8a6ddfefdf9cb904352ca5412be03067c5d772a35f4923bd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ceedb97801119c8a6ddfefdf9cb904352ca5412be03067c5d772a35f4923bd5b->leave($__internal_ceedb97801119c8a6ddfefdf9cb904352ca5412be03067c5d772a35f4923bd5b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ value|date(field_options.format) }}*/
/* */
