<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_5c88a5eb71759fc9100e223705e65798bcaed25ce71b8f38cb6add16dad127b6 extends Twig_Template
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
        $__internal_a805affb20e8b0044d37a8962493cfcfc528557fe76aa4f1c6690c323340df0b = $this->env->getExtension("native_profiler");
        $__internal_a805affb20e8b0044d37a8962493cfcfc528557fe76aa4f1c6690c323340df0b->enter($__internal_a805affb20e8b0044d37a8962493cfcfc528557fe76aa4f1c6690c323340df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_a805affb20e8b0044d37a8962493cfcfc528557fe76aa4f1c6690c323340df0b->leave($__internal_a805affb20e8b0044d37a8962493cfcfc528557fe76aa4f1c6690c323340df0b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
