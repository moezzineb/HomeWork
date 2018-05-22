<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_030dd39c4da66cb2dc5e84abd40c9051ca2b99e4099e5ab1202a2e42e7321c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header_logo' => array($this, 'block_header_logo'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a64099b8b97524fae2edb72d1df760f8d3d0baaf25c4b398fa6b6ea81265cf78 = $this->env->getExtension("native_profiler");
        $__internal_a64099b8b97524fae2edb72d1df760f8d3d0baaf25c4b398fa6b6ea81265cf78->enter($__internal_a64099b8b97524fae2edb72d1df760f8d3d0baaf25c4b398fa6b6ea81265cf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 44
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 128
        echo "</html>
";
        
        $__internal_a64099b8b97524fae2edb72d1df760f8d3d0baaf25c4b398fa6b6ea81265cf78->leave($__internal_a64099b8b97524fae2edb72d1df760f8d3d0baaf25c4b398fa6b6ea81265cf78_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d2a4b12696cbfa496ab5ae78a14f096ba4d48ea717c2781648ce095359a9418c = $this->env->getExtension("native_profiler");
        $__internal_d2a4b12696cbfa496ab5ae78a14f096ba4d48ea717c2781648ce095359a9418c->enter($__internal_d2a4b12696cbfa496ab5ae78a14f096ba4d48ea717c2781648ce095359a9418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_d2a4b12696cbfa496ab5ae78a14f096ba4d48ea717c2781648ce095359a9418c->leave($__internal_d2a4b12696cbfa496ab5ae78a14f096ba4d48ea717c2781648ce095359a9418c_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_94f252fa823e734ef95b5a1f140a7cc09861fae1bd16d049454dccc01fad75b3 = $this->env->getExtension("native_profiler");
        $__internal_94f252fa823e734ef95b5a1f140a7cc09861fae1bd16d049454dccc01fad75b3->enter($__internal_94f252fa823e734ef95b5a1f140a7cc09861fae1bd16d049454dccc01fad75b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 14
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_94f252fa823e734ef95b5a1f140a7cc09861fae1bd16d049454dccc01fad75b3->leave($__internal_94f252fa823e734ef95b5a1f140a7cc09861fae1bd16d049454dccc01fad75b3_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_d30aa597c7613c7a75d03cb16668a8897f68d1244b5fa2d14c9c0a8f9dab8bad = $this->env->getExtension("native_profiler");
        $__internal_d30aa597c7613c7a75d03cb16668a8897f68d1244b5fa2d14c9c0a8f9dab8bad->enter($__internal_d30aa597c7613c7a75d03cb16668a8897f68d1244b5fa2d14c9c0a8f9dab8bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_d30aa597c7613c7a75d03cb16668a8897f68d1244b5fa2d14c9c0a8f9dab8bad->leave($__internal_d30aa597c7613c7a75d03cb16668a8897f68d1244b5fa2d14c9c0a8f9dab8bad_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_5003faeff25c58a1c593967d6d9232ca67b5c43ea15ee2b0cc251962c07b239b = $this->env->getExtension("native_profiler");
        $__internal_5003faeff25c58a1c593967d6d9232ca67b5c43ea15ee2b0cc251962c07b239b->enter($__internal_5003faeff25c58a1c593967d6d9232ca67b5c43ea15ee2b0cc251962c07b239b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 28
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 41
        echo "
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5003faeff25c58a1c593967d6d9232ca67b5c43ea15ee2b0cc251962c07b239b->leave($__internal_5003faeff25c58a1c593967d6d9232ca67b5c43ea15ee2b0cc251962c07b239b_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_3d1559bdb0858db859340204cd88057945f71244e050d6071c718ea16fc2a2e9 = $this->env->getExtension("native_profiler");
        $__internal_3d1559bdb0858db859340204cd88057945f71244e050d6071c718ea16fc2a2e9->enter($__internal_3d1559bdb0858db859340204cd88057945f71244e050d6071c718ea16fc2a2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 29
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_3d1559bdb0858db859340204cd88057945f71244e050d6071c718ea16fc2a2e9->leave($__internal_3d1559bdb0858db859340204cd88057945f71244e050d6071c718ea16fc2a2e9_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3e7588d912883b7a55673c2710a069380eb391fc2cbbf417a6a1ee92c419cd0 = $this->env->getExtension("native_profiler");
        $__internal_a3e7588d912883b7a55673c2710a069380eb391fc2cbbf417a6a1ee92c419cd0->enter($__internal_a3e7588d912883b7a55673c2710a069380eb391fc2cbbf417a6a1ee92c419cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 54
        $this->displayBlock('wrapper', $context, $blocks);
        // line 119
        echo "        </div>

        ";
        // line 121
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 122
        echo "
        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 124
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </body>
    ";
        
        $__internal_a3e7588d912883b7a55673c2710a069380eb391fc2cbbf417a6a1ee92c419cd0->leave($__internal_a3e7588d912883b7a55673c2710a069380eb391fc2cbbf417a6a1ee92c419cd0_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6fe16830e3781dd5eaefff528676b9e9cbd02206f0789c275ed575ba126b3264 = $this->env->getExtension("native_profiler");
        $__internal_6fe16830e3781dd5eaefff528676b9e9cbd02206f0789c275ed575ba126b3264->enter($__internal_6fe16830e3781dd5eaefff528676b9e9cbd02206f0789c275ed575ba126b3264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6fe16830e3781dd5eaefff528676b9e9cbd02206f0789c275ed575ba126b3264->leave($__internal_6fe16830e3781dd5eaefff528676b9e9cbd02206f0789c275ed575ba126b3264_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a4f576c23b2f0c0cace8f21855fd5030586c4aaa4ed7cbf634241cb48d110d08 = $this->env->getExtension("native_profiler");
        $__internal_a4f576c23b2f0c0cace8f21855fd5030586c4aaa4ed7cbf634241cb48d110d08->enter($__internal_a4f576c23b2f0c0cace8f21855fd5030586c4aaa4ed7cbf634241cb48d110d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_a4f576c23b2f0c0cace8f21855fd5030586c4aaa4ed7cbf634241cb48d110d08->leave($__internal_a4f576c23b2f0c0cace8f21855fd5030586c4aaa4ed7cbf634241cb48d110d08_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_788bb63a43fd1532b82ec10bbcb27c4a293ad5270598d44d8752ffccc432711c = $this->env->getExtension("native_profiler");
        $__internal_788bb63a43fd1532b82ec10bbcb27c4a293ad5270598d44d8752ffccc432711c->enter($__internal_788bb63a43fd1532b82ec10bbcb27c4a293ad5270598d44d8752ffccc432711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 55
        echo "            <header class=\"main-header\">
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 62
        $this->displayBlock('header_logo', $context, $blocks);
        // line 67
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 72
        $this->displayBlock('user_menu', $context, $blocks);
        // line 81
        echo "                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 88
        $this->displayBlock('sidebar', $context, $blocks);
        // line 99
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "            </div>
        ";
        
        $__internal_788bb63a43fd1532b82ec10bbcb27c4a293ad5270598d44d8752ffccc432711c->leave($__internal_788bb63a43fd1532b82ec10bbcb27c4a293ad5270598d44d8752ffccc432711c_prof);

    }

    // line 62
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_c569ad48dd6422049a7c98ebf47efdf988d900ed176098bdb60761e916283959 = $this->env->getExtension("native_profiler");
        $__internal_c569ad48dd6422049a7c98ebf47efdf988d900ed176098bdb60761e916283959->enter($__internal_c569ad48dd6422049a7c98ebf47efdf988d900ed176098bdb60761e916283959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 63
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                ";
        // line 64
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_c569ad48dd6422049a7c98ebf47efdf988d900ed176098bdb60761e916283959->leave($__internal_c569ad48dd6422049a7c98ebf47efdf988d900ed176098bdb60761e916283959_prof);

    }

    // line 72
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_c7f293bac5d7aeb3eca670f8b1dd5bff906e07332fd38c10fa321e20b1f3125f = $this->env->getExtension("native_profiler");
        $__internal_c7f293bac5d7aeb3eca670f8b1dd5bff906e07332fd38c10fa321e20b1f3125f->enter($__internal_c7f293bac5d7aeb3eca670f8b1dd5bff906e07332fd38c10fa321e20b1f3125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 73
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 75
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 76
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 78
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 80
        echo "                                ";
        
        $__internal_c7f293bac5d7aeb3eca670f8b1dd5bff906e07332fd38c10fa321e20b1f3125f->leave($__internal_c7f293bac5d7aeb3eca670f8b1dd5bff906e07332fd38c10fa321e20b1f3125f_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fa772556104fdfed38940394546e6f4551d2c203c09da68c259e49e45469709f = $this->env->getExtension("native_profiler");
        $__internal_fa772556104fdfed38940394546e6f4551d2c203c09da68c259e49e45469709f->enter($__internal_fa772556104fdfed38940394546e6f4551d2c203c09da68c259e49e45469709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 89
        echo "                <section class=\"sidebar\">
                    ";
        // line 90
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 97
        echo "                </section>
            ";
        
        $__internal_fa772556104fdfed38940394546e6f4551d2c203c09da68c259e49e45469709f->leave($__internal_fa772556104fdfed38940394546e6f4551d2c203c09da68c259e49e45469709f_prof);

    }

    // line 90
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_479df10f3eba85f063d9383cf88a426523a621ee20f3f3ef1035d17029c9de9f = $this->env->getExtension("native_profiler");
        $__internal_479df10f3eba85f063d9383cf88a426523a621ee20f3f3ef1035d17029c9de9f->enter($__internal_479df10f3eba85f063d9383cf88a426523a621ee20f3f3ef1035d17029c9de9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 91
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 92
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 95
        echo "
                    ";
        
        $__internal_479df10f3eba85f063d9383cf88a426523a621ee20f3f3ef1035d17029c9de9f->leave($__internal_479df10f3eba85f063d9383cf88a426523a621ee20f3f3ef1035d17029c9de9f_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_adef55daa5a8c140ace2d025eaa507b907315398e68f9b79a4c7a586ee3190de = $this->env->getExtension("native_profiler");
        $__internal_adef55daa5a8c140ace2d025eaa507b907315398e68f9b79a4c7a586ee3190de->enter($__internal_adef55daa5a8c140ace2d025eaa507b907315398e68f9b79a4c7a586ee3190de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 103
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 106
        echo "
                <section class=\"content-header\">
                ";
        // line 108
        $this->displayBlock('content_header', $context, $blocks);
        // line 111
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 114
        $this->displayBlock('main', $context, $blocks);
        // line 115
        echo "                </section>
            ";
        
        $__internal_adef55daa5a8c140ace2d025eaa507b907315398e68f9b79a4c7a586ee3190de->leave($__internal_adef55daa5a8c140ace2d025eaa507b907315398e68f9b79a4c7a586ee3190de_prof);

    }

    // line 103
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_f71e81a5f12149f582e32d872442a3b10a8367fa6c841ded1207238cc9fbef34 = $this->env->getExtension("native_profiler");
        $__internal_f71e81a5f12149f582e32d872442a3b10a8367fa6c841ded1207238cc9fbef34->enter($__internal_f71e81a5f12149f582e32d872442a3b10a8367fa6c841ded1207238cc9fbef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 104
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_f71e81a5f12149f582e32d872442a3b10a8367fa6c841ded1207238cc9fbef34->leave($__internal_f71e81a5f12149f582e32d872442a3b10a8367fa6c841ded1207238cc9fbef34_prof);

    }

    // line 108
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ac51174ec3a270f3a7a1035a2719f3246c96ba9c7180d6c067b77349f837c51e = $this->env->getExtension("native_profiler");
        $__internal_ac51174ec3a270f3a7a1035a2719f3246c96ba9c7180d6c067b77349f837c51e->enter($__internal_ac51174ec3a270f3a7a1035a2719f3246c96ba9c7180d6c067b77349f837c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 109
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_ac51174ec3a270f3a7a1035a2719f3246c96ba9c7180d6c067b77349f837c51e->leave($__internal_ac51174ec3a270f3a7a1035a2719f3246c96ba9c7180d6c067b77349f837c51e_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_634b76bdc00a5b41e2c6d548cee1d889d22675cf9032560962a2bed47d646287 = $this->env->getExtension("native_profiler");
        $__internal_634b76bdc00a5b41e2c6d548cee1d889d22675cf9032560962a2bed47d646287->enter($__internal_634b76bdc00a5b41e2c6d548cee1d889d22675cf9032560962a2bed47d646287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_634b76bdc00a5b41e2c6d548cee1d889d22675cf9032560962a2bed47d646287->leave($__internal_634b76bdc00a5b41e2c6d548cee1d889d22675cf9032560962a2bed47d646287_prof);

    }

    // line 114
    public function block_main($context, array $blocks = array())
    {
        $__internal_b1334c2174e0e67622bd665bca3a7bb4a7241d24e456e0e64d41fc20089e3aec = $this->env->getExtension("native_profiler");
        $__internal_b1334c2174e0e67622bd665bca3a7bb4a7241d24e456e0e64d41fc20089e3aec->enter($__internal_b1334c2174e0e67622bd665bca3a7bb4a7241d24e456e0e64d41fc20089e3aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b1334c2174e0e67622bd665bca3a7bb4a7241d24e456e0e64d41fc20089e3aec->leave($__internal_b1334c2174e0e67622bd665bca3a7bb4a7241d24e456e0e64d41fc20089e3aec_prof);

    }

    // line 121
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8134122a56bebe140fc2ce5eb9a334d420c52907039bd87ddbf97a9fba8add45 = $this->env->getExtension("native_profiler");
        $__internal_8134122a56bebe140fc2ce5eb9a334d420c52907039bd87ddbf97a9fba8add45->enter($__internal_8134122a56bebe140fc2ce5eb9a334d420c52907039bd87ddbf97a9fba8add45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_8134122a56bebe140fc2ce5eb9a334d420c52907039bd87ddbf97a9fba8add45->leave($__internal_8134122a56bebe140fc2ce5eb9a334d420c52907039bd87ddbf97a9fba8add45_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 121,  503 => 114,  483 => 109,  477 => 108,  467 => 104,  461 => 103,  453 => 115,  451 => 114,  446 => 111,  444 => 108,  440 => 106,  437 => 103,  431 => 102,  423 => 95,  421 => 92,  419 => 91,  413 => 90,  405 => 97,  403 => 90,  400 => 89,  394 => 88,  387 => 80,  381 => 78,  375 => 76,  373 => 75,  367 => 73,  361 => 72,  351 => 64,  342 => 63,  336 => 62,  328 => 117,  326 => 102,  321 => 99,  319 => 88,  310 => 81,  308 => 72,  301 => 67,  299 => 62,  292 => 58,  287 => 55,  281 => 54,  260 => 52,  252 => 126,  243 => 124,  239 => 123,  236 => 122,  234 => 121,  230 => 119,  228 => 54,  218 => 52,  212 => 51,  194 => 29,  188 => 28,  179 => 42,  176 => 41,  173 => 28,  167 => 27,  155 => 24,  152 => 23,  146 => 22,  136 => 14,  130 => 12,  124 => 11,  112 => 9,  104 => 128,  102 => 51,  95 => 47,  91 => 46,  87 => 44,  85 => 27,  82 => 26,  80 => 22,  77 => 21,  68 => 19,  64 => 18,  61 => 17,  59 => 11,  54 => 9,  44 => 2,  41 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}">*/
/*             <style>*/
/*                 {{ easyadmin_config('_internal.custom_css')|raw }}*/
/*             </style>*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}*/
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'normal',*/
/*                         sidebarExpandOnHover: false,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}"></script>*/
/*         {% endblock head_javascript %}*/
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*                 <nav class="navbar" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/* */
/*                     <div id="header-logo">*/
/*                         {% block header_logo %}*/
/*                             <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                                 {{ easyadmin_config('site_name')|raw }}*/
/*                             </a>*/
/*                         {% endblock header_logo %}*/
/*                     </div>*/
/* */
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                                     <i class="hidden-xs fa fa-user"></i>*/
/*                                     {% if app.user %}*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                 {% endblock content_header %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}{% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
