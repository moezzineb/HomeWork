<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_2a012aebf59d65ac1a3aba04fd90f205a2846fcf52b492ee1e7a26ebf012d756 extends Twig_Template
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
        $__internal_92d72cb4fea13418b3426626ee4eddebd3cf7055039fe96109f258e06bfe1044 = $this->env->getExtension("native_profiler");
        $__internal_92d72cb4fea13418b3426626ee4eddebd3cf7055039fe96109f258e06bfe1044->enter($__internal_92d72cb4fea13418b3426626ee4eddebd3cf7055039fe96109f258e06bfe1044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_92d72cb4fea13418b3426626ee4eddebd3cf7055039fe96109f258e06bfe1044->leave($__internal_92d72cb4fea13418b3426626ee4eddebd3cf7055039fe96109f258e06bfe1044_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
