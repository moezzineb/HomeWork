<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_d58935681ff0ff4ea1df87605018a503e8360e291d9624fcac3d8caed610128c extends Twig_Template
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
        $__internal_62f806fa25f7a79bcb0118ecadde7d340aaded3eba505f3db1b177bdf256a576 = $this->env->getExtension("native_profiler");
        $__internal_62f806fa25f7a79bcb0118ecadde7d340aaded3eba505f3db1b177bdf256a576->enter($__internal_62f806fa25f7a79bcb0118ecadde7d340aaded3eba505f3db1b177bdf256a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_62f806fa25f7a79bcb0118ecadde7d340aaded3eba505f3db1b177bdf256a576->leave($__internal_62f806fa25f7a79bcb0118ecadde7d340aaded3eba505f3db1b177bdf256a576_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
