<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fc441eb5ed54ed5bd68ceb57a4efe04f14f1e29ba43eaa374ed46d1291b50351 extends Twig_Template
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
        $__internal_c4bc1068dc3ca20d894447694488f8a1f8164d3b5498f980c82a7c87a9283d1b = $this->env->getExtension("native_profiler");
        $__internal_c4bc1068dc3ca20d894447694488f8a1f8164d3b5498f980c82a7c87a9283d1b->enter($__internal_c4bc1068dc3ca20d894447694488f8a1f8164d3b5498f980c82a7c87a9283d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4bc1068dc3ca20d894447694488f8a1f8164d3b5498f980c82a7c87a9283d1b->leave($__internal_c4bc1068dc3ca20d894447694488f8a1f8164d3b5498f980c82a7c87a9283d1b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1677617dd8351bf4c7429b29b8e72158959f0c364f83272d1509201728c40b5 = $this->env->getExtension("native_profiler");
        $__internal_f1677617dd8351bf4c7429b29b8e72158959f0c364f83272d1509201728c40b5->enter($__internal_f1677617dd8351bf4c7429b29b8e72158959f0c364f83272d1509201728c40b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1677617dd8351bf4c7429b29b8e72158959f0c364f83272d1509201728c40b5->leave($__internal_f1677617dd8351bf4c7429b29b8e72158959f0c364f83272d1509201728c40b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b214ea94bdba0c664ad10a58a7f45db5f885650fa23f0680661da44d52e02f8 = $this->env->getExtension("native_profiler");
        $__internal_3b214ea94bdba0c664ad10a58a7f45db5f885650fa23f0680661da44d52e02f8->enter($__internal_3b214ea94bdba0c664ad10a58a7f45db5f885650fa23f0680661da44d52e02f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b214ea94bdba0c664ad10a58a7f45db5f885650fa23f0680661da44d52e02f8->leave($__internal_3b214ea94bdba0c664ad10a58a7f45db5f885650fa23f0680661da44d52e02f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6ccdbbedc69539e76b78ba1a8b3d3971c9c52d4377e01a8ec65a152bce1887 = $this->env->getExtension("native_profiler");
        $__internal_4d6ccdbbedc69539e76b78ba1a8b3d3971c9c52d4377e01a8ec65a152bce1887->enter($__internal_4d6ccdbbedc69539e76b78ba1a8b3d3971c9c52d4377e01a8ec65a152bce1887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4d6ccdbbedc69539e76b78ba1a8b3d3971c9c52d4377e01a8ec65a152bce1887->leave($__internal_4d6ccdbbedc69539e76b78ba1a8b3d3971c9c52d4377e01a8ec65a152bce1887_prof);

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
