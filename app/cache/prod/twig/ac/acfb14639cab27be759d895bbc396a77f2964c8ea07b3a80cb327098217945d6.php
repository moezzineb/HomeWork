<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e815d40ea921c046b73818afef2dffc020eabb50474e2303ec0c42877966179e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_436253dbabd99bcd830c181c390717170cdb70c2ca4ea113b9ffaa45c0a97d46 = $this->env->getExtension("native_profiler");
        $__internal_436253dbabd99bcd830c181c390717170cdb70c2ca4ea113b9ffaa45c0a97d46->enter($__internal_436253dbabd99bcd830c181c390717170cdb70c2ca4ea113b9ffaa45c0a97d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_436253dbabd99bcd830c181c390717170cdb70c2ca4ea113b9ffaa45c0a97d46->leave($__internal_436253dbabd99bcd830c181c390717170cdb70c2ca4ea113b9ffaa45c0a97d46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78efc4775f9a031182978a050adb33b389f568d118440c536d277b7906912617 = $this->env->getExtension("native_profiler");
        $__internal_78efc4775f9a031182978a050adb33b389f568d118440c536d277b7906912617->enter($__internal_78efc4775f9a031182978a050adb33b389f568d118440c536d277b7906912617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78efc4775f9a031182978a050adb33b389f568d118440c536d277b7906912617->leave($__internal_78efc4775f9a031182978a050adb33b389f568d118440c536d277b7906912617_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a23179dd539f6d9538802352520676e62aa6e9ec9e8bc3a6b253f0a11bfb870b = $this->env->getExtension("native_profiler");
        $__internal_a23179dd539f6d9538802352520676e62aa6e9ec9e8bc3a6b253f0a11bfb870b->enter($__internal_a23179dd539f6d9538802352520676e62aa6e9ec9e8bc3a6b253f0a11bfb870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a23179dd539f6d9538802352520676e62aa6e9ec9e8bc3a6b253f0a11bfb870b->leave($__internal_a23179dd539f6d9538802352520676e62aa6e9ec9e8bc3a6b253f0a11bfb870b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd3eb12b36b1f6ce083f5c29ec13ff00b33d8e773b53779812f63ee6b09864d = $this->env->getExtension("native_profiler");
        $__internal_8cd3eb12b36b1f6ce083f5c29ec13ff00b33d8e773b53779812f63ee6b09864d->enter($__internal_8cd3eb12b36b1f6ce083f5c29ec13ff00b33d8e773b53779812f63ee6b09864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8cd3eb12b36b1f6ce083f5c29ec13ff00b33d8e773b53779812f63ee6b09864d->leave($__internal_8cd3eb12b36b1f6ce083f5c29ec13ff00b33d8e773b53779812f63ee6b09864d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
