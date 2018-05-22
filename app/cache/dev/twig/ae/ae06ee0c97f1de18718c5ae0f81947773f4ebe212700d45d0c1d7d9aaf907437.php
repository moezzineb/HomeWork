<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_14365f7e0a2869f45c6efc688dc5e23e85970ea2cd05b642aa3cf0ed99c6f5c2 extends Twig_Template
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
        $__internal_7a8dfc0e21bfd386a766f092e438c73be8d9ea066458f746e0e890c36549f931 = $this->env->getExtension("native_profiler");
        $__internal_7a8dfc0e21bfd386a766f092e438c73be8d9ea066458f746e0e890c36549f931->enter($__internal_7a8dfc0e21bfd386a766f092e438c73be8d9ea066458f746e0e890c36549f931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Edit Profile - HomeWork</title>

    <!-- BEGIN META -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"your,keywords\">
    <meta name=\"description\" content=\"Short explanation about this website\">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/hw.ico"), "html", null, true);
        echo "\" sizes=\"16x16 32x32 48x48 64x64\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/bootstrap.css?1422792965"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/materialadmin.css?1425466319"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/font-awesome.min.css?1422529194"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/material-design-iconic-font.min.css?1421434286"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/wizard/wizard.css?1425466601"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/multi-select/multi-select.css?1424887857"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/select2/select2.css?1424887856"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/dropzone/dropzone-theme.css?1424887864"), "html", null, true);
        echo "\" />



    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"lib/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"lib/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed menubar-first\">

<!-- BEGIN HEADER-->
<header id=\"header\" >
    <div class=\"headerbar\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"headerbar-left\">
            <ul class=\"header-nav header-nav-options\">
                <li class=\"header-nav-brand\" >
                    <div class=\"brand-holder\">
                        <a href=\"../../html/dashboards/dashboard.html\">
                            <span class=\"text-lg text-bold text-primary\">HOMEWORK</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class=\"btn btn-icon-toggle menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                        <i class=\"fa fa-bars\"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"headerbar-right\">
            <ul class=\"header-nav header-nav-options\">
                <li>
                    <!-- Search form -->
                    <form class=\"navbar-search\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"headerSearch\" placeholder=\"Enter your keyword\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-icon-toggle ink-reaction\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
            </ul><!--end .header-nav-options -->
            <ul class=\"header-nav header-nav-profile\">
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"hédhi loula\" />
                                <span class=\"profile-info\">
                                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()), "html", null, true);
        echo "</small>
                                </span>
                    </a>
                    <ul class=\"dropdown-menu animation-zoom\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("user_profile");
        echo "\">Profile</a></li>
                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("edit_profile");
        echo "\">Edit</a></li>
                        <li class=\"divider\"></li>
                        <!--<li><a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>-->
                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id=\"base\">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class=\"offcanvas\">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <div id=\"content\">
        <section>
            <div class=\"section-header\">
                <ol class=\"breadcrumb\">
                    <li class=\"active\">Setting</li>
                </ol>
            </div>
            <div class=\"section-body contain-lg\">

                <!-- BEGIN INTRO -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"text-primary\">Edit Profile</h1>
                    </div><!--end .col -->

                </div><!--end .row -->
                <!-- END INTRO -->

                <!-- BEGIN FORM WIZARD -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body \">
                                <div id=\"rootwizard1\" class=\"form-wizard form-wizard-horizontal\">
                                    <form action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form floating-label\">
                                        <div class=\"form-wizard-nav\">
                                            <div class=\"progress\"><div class=\"progress-bar progress-bar-primary\"></div></div>
                                            <ul class=\"nav nav-justified\">
                                                <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\"><span class=\"step\">1</span> <span class=\"title\">PERSONAL</span></a></li>
                                                <li><a href=\"#tab2\" data-toggle=\"tab\"><span class=\"step\">2</span> <span class=\"title\">ADDRESS</span></a></li>
                                                <li><a href=\"#tab3\" data-toggle=\"tab\"><span class=\"step\">3</span> <span class=\"title\">SKILLS</span></a></li>
                                                <li><a href=\"#tab4\" data-toggle=\"tab\"><span class=\"step\">4</span> <span class=\"title\">UPLOAD</span></a></li>
                                                <li><a href=\"#tab5\" data-toggle=\"tab\"><span class=\"step\">5</span> <span class=\"title\">CONFIRM</span></a></li>
                                            </ul>
                                        </div><!--end .form-wizard-nav -->
                                        <div class=\"tab-content clearfix\">
                                            <div class=\"tab-pane active\" id=\"tab1\">
                                                <br/><br/>
                                                <div class=\"row\">
                                                        <div class=\"col-sm-6\">
                                                            <div class=\"form-group\">
                                                                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "Fname")));
        echo "
                                                                <!--<input type=\"text\" name=\"Fname\" id=\"Fname\" class=\"form-control\">-->
                                                                <label for=\"Fname\" class=\"control-label\">Username</label>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <div class=\"form-group\">
                                                                ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                                <!--<input type=\"text\" name=\"Lname\" id=\"Lname\" class=\"form-control\">-->
                                                                <label for=\"Lname\" class=\"control-label\">Email</label>
                                                            </div>
                                                        </div>
                                                    <div class=\"col-sm-6\">
                                                        <div class=\"form-group\">
                                                        \t";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "Fname")));
        echo "
                                                            <!--<input type=\"text\" name=\"Fname\" id=\"Fname\" class=\"form-control\">-->
                                                            <label for=\"Fname\" class=\"control-label\">First Name</label>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <div class=\"form-group\">
                                                        \t";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            <!--<input type=\"text\" name=\"Lname\" id=\"Lname\" class=\"form-control\">-->
                                                            <label for=\"Lname\" class=\"control-label\">Last Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane active\" id=\"tab1\">
                                                    <div class=\"form-group\">
                                                    \t";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "data-rule-minlength" => "6", "maxlength" => "8", "aria-required" => "true")));
        echo "
                                                        <!--<input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\" class=\"form-control\" data-rule-minlength=\"6\" maxlength=\"12\" required=\"\" aria-required=\"true\">-->
                                                        <label for=\"phone\" class=\"control-label\">Phone Number</label>
                                                    </div>
                                                    ";
        // line 178
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Employer")) {
            // line 179
            echo "                                                        <div class=\"form-group\">
                                                            ";
            // line 180
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "societe", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                                            <!--<input type=\"text\" name=\"Lname\" id=\"Lname\" class=\"form-control\">-->
                                                            <label for=\"Lname\" class=\"control-label\">Company</label>
                                                        </div>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 184
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Freelancer")) {
            // line 185
            echo "                                                        <div class=\"form-group\">
                                                            ";
            // line 186
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "societe", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "true")));
            echo "
                                                            <!--<input type=\"text\" name=\"Lname\" id=\"Lname\" class=\"form-control\">-->
                                                            <label for=\"Lname\" class=\"control-label\">Company</label>
                                                        </div>
                                                    ";
        }
        // line 191
        echo "                                                    <div>
                                                        ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 193
            echo "
                                                            <label class=\"radio-inline radio-styled radio-primary\">
                                                                ";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'widget', array("attr" => array("name" => "radio_demo", "class" => "radio-inline radiprimary")));
            echo "
                                                                ";
            // line 196
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'label');
            echo "

                                                            </label>

                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                                                    </div>
                                                </div></div><!--end #tab1 -->
                                            <div class=\"tab-pane\" id=\"tab2\">
                                                <br/><br/>
                                                <div class=\"form-group\">
                                                \t";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                    <!--<input type=\"text\" name=\"country\" id=\"Country\" class=\"form-control\">-->
                                                    <label for=\"Country\" class=\"control-label\">Country</label>
                                                </div>
                                                <div class=\"form-group\">
                                                \t";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                    <!--<input type=\"text\" name=\"city\" id=\"City\" class=\"form-control\">-->
                                                    <label for=\"City\" class=\"control-label\">City</label>
                                                </div>
                                            </div><!--end #tab2 -->
                                            <div class=\"tab-pane\" id=\"tab3\">
                                                <br/><br/>
                                                <div class=\"form-group\">
                                                \t";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speciality", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                    <!--<select id=\"select1\" name=\"specialty\" class=\"form-control\" required>
                                                        <option value=\"\">&nbsp;</option>
                                                        <option value=\"webdev\">Web Developer</option>
                                                        <option value=\"webdesign\">Web Design</option>
                                                        <option value=\"mobdev\">Mobile Developers</option>
                                                        <option value=\"seo\">SEO</option>
                                                    </select>-->
                                                    <label for=\"select1\">Specialty</label>
                                                </div>
                                                <div class=\"form-group\">
                                                    ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biolographie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                    <label>Biolographie</label>
                                                </div>

                                            </div><!--end #tab3 -->
                                            <div class=\"tab-pane\" id=\"tab4\">
                                                <br/><br/>
                                                <center>
                                                    <p>Choose your profile picture </p>
                                                    ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                                                </center>
                                            </div><!--end .tab-content -->
                                            <div class=\"tab-pane\" id=\"tab5\">
                                                <br/><br/>
                                                <center>
                                                    <p>This is it all you need is to validate now !</p>
                                                    <button type=\"submit\" name=\"btn\" class=\"btn btn-raised btn-primary\">Validate</button>
                                                </center>
                                            </div><!--end .tab-content -->
                                            <ul class=\"pager wizard\">
                                                <li class=\"previous first\"><a class=\"btn-raised\" href=\"javascript:void(0);\">First</a></li>
                                                <li class=\"previous\"><a class=\"btn-raised\" href=\"javascript:void(0);\">Previous</a></li>
                                                <li class=\"next last\"><a class=\"btn-raised\" href=\"javascript:void(0);\">Last</a></li>
                                                <li class=\"next\"><a class=\"btn-raised\" href=\"javascript:void(0);\">Next</a></li>
                                            </ul>
                                        </div>
                                        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                \t\t
                                    </form>
                                </div><!--end #rootwizard -->
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END FORM WIZARD -->

            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <div id=\"menubar\" class=\"menubar-inverse \">
        <div class=\"menubar-fixed-panel\">
            <div>
                <a class=\"btn btn-icon-toggle btn-default menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
            <div class=\"expanded\">
                <a href=\"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("web_dashboard");
        echo "\">
                    <span class=\"text-lg text-bold text-primary \">HOMEWORK</span>
                </a>
            </div>
        </div>
        <div class=\"menubar-scroll-panel\">

            <!-- BEGIN MAIN MENU -->
            <ul id=\"main-menu\" class=\"gui-controls\">

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href=\"";
        // line 292
        echo $this->env->getExtension('routing')->getPath("web_dashboard");
        echo "\" >
                        <div class=\"gui-icon\"><i class=\"md md-dashboard\"></i></div>
                        <span class=\"title\">Dashboard</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN EMAIL -->
                <li>
                    <a href=\"";
        // line 301
        echo $this->env->getExtension('routing')->getPath("email_compose");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"md md-email\"></i></div>
                        <span class=\"title\">Email</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END EMAIL -->

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href=\"";
        // line 310
        echo $this->env->getExtension('routing')->getPath("user_profile");
        echo "\" >
                        <div class=\"gui-icon\"><i class=\"md md-account-circle\"></i></div>
                        <span class=\"title\">Profile</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN UI -->
                <li>
                    <a href=\"";
        // line 319
        echo $this->env->getExtension('routing')->getPath("web_projects_homepage");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-briefcase\"></i></div>
                        <span class=\"title\">Projects</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END UI -->

                <!-- BEGIN TABLES -->
                <li>
                    <a href=\"";
        // line 328
        echo $this->env->getExtension('routing')->getPath("user_freelancers");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-group\"></i></div>
                        <span class=\"title\">Freelancers</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END TABLES -->

                <!-- BEGIN FORMS -->
                <li>
                    <a href=\"";
        // line 337
        echo $this->env->getExtension('routing')->getPath("payment_homepage");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-money\"></i></div>
                        <span class=\"title\">Payments</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN PAGES -->
                <li class=\"active expanding\">
                    <a href=\"";
        // line 346
        echo $this->env->getExtension('routing')->getPath("edit_profile");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-wrench\"></i></div>
                        <span class=\"title\">Settings</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN CHARTS -->
                <li>
                    <a href=\"";
        // line 355
        echo $this->env->getExtension('routing')->getPath("browse_portfolios");
        echo "\" >
                        <div class=\"gui-icon\"><i class=\"fa fa-clipboard\"></i></div>
                        <span class=\"title\">Portfolios</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END CHARTS -->

                <!-- BEGIN LEVELS -->
                <li>
                    <a href=\"";
        // line 364
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-sign-out\"></i></div>
                        <span class=\"title\">Disconnection</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END LEVELS -->

            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class=\"menubar-foot-panel\">
                <small class=\"no-linebreak hidden-folded\">
                    <span class=\"opacity-75\">© 2016 HomeWork.<br></span>Made by <strong>Moez Zineb</strong> & <strong>Abdelaziz Dridi</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->
</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoFormWizard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/inputmask/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/dropzone/dropzone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/typeahead/typeahead.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"https://rawgit.com/enyo/dropzone/master/dist/dropzone.js\"></script>-->
<script type=\"text/javascript\">
    \$('#skills').select2();
    //\$(\"#my-awesome-dropzone\").dropzone({ url: \"/file-upload\" });
</script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_7a8dfc0e21bfd386a766f092e438c73be8d9ea066458f746e0e890c36549f931->leave($__internal_7a8dfc0e21bfd386a766f092e438c73be8d9ea066458f746e0e890c36549f931_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 409,  643 => 408,  639 => 407,  635 => 406,  631 => 405,  627 => 404,  623 => 403,  619 => 402,  615 => 401,  611 => 400,  607 => 399,  603 => 398,  599 => 397,  595 => 396,  591 => 395,  587 => 394,  583 => 393,  579 => 392,  575 => 391,  571 => 390,  567 => 389,  563 => 388,  559 => 387,  555 => 386,  530 => 364,  518 => 355,  506 => 346,  494 => 337,  482 => 328,  470 => 319,  458 => 310,  446 => 301,  434 => 292,  419 => 280,  392 => 256,  372 => 239,  360 => 230,  346 => 219,  335 => 211,  327 => 206,  320 => 201,  309 => 196,  305 => 195,  301 => 193,  297 => 192,  294 => 191,  286 => 186,  283 => 185,  281 => 184,  274 => 180,  271 => 179,  269 => 178,  262 => 174,  251 => 166,  241 => 159,  231 => 152,  221 => 145,  199 => 128,  154 => 86,  148 => 83,  144 => 82,  136 => 77,  132 => 76,  127 => 74,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Edit Profile - HomeWork</title>*/
/* */
/*     <!-- BEGIN META -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="keywords" content="your,keywords">*/
/*     <meta name="description" content="Short explanation about this website">*/
/*     <!-- END META -->*/
/* */
/*     <!-- BEGIN STYLESHEETS -->*/
/*     <link rel="icon" href="{{asset ('lib/img/hw.ico')}}" sizes="16x16 32x32 48x48 64x64">*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/bootstrap.css?1422792965')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/materialadmin.css?1425466319')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/font-awesome.min.css?1422529194')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/wizard/wizard.css?1425466601')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/multi-select/multi-select.css?1424887857')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/select2/select2.css?1424887856')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/dropzone/dropzone-theme.css?1424887864')}}" />*/
/* */
/* */
/* */
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="lib/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="lib/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed menubar-first">*/
/* */
/* <!-- BEGIN HEADER-->*/
/* <header id="header" >*/
/*     <div class="headerbar">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="headerbar-left">*/
/*             <ul class="header-nav header-nav-options">*/
/*                 <li class="header-nav-brand" >*/
/*                     <div class="brand-holder">*/
/*                         <a href="../../html/dashboards/dashboard.html">*/
/*                             <span class="text-lg text-bold text-primary">HOMEWORK</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                         <i class="fa fa-bars"></i>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="headerbar-right">*/
/*             <ul class="header-nav header-nav-options">*/
/*                 <li>*/
/*                     <!-- Search form -->*/
/*                     <form class="navbar-search" role="search">*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>*/
/*                     </form>*/
/*                 </li>*/
/*             </ul><!--end .header-nav-options -->*/
/*             <ul class="header-nav header-nav-profile">*/
/*                 <li class="dropdown">*/
/*                     <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                         <img src="{{ asset('uploads/profile/' ~ app.user.id ~'/' ~ app.user.path)}}" alt="hédhi loula" />*/
/*                                 <span class="profile-info">*/
/*                                     {{ app.user.username }}*/
/*                                     <small>{{ app.user.type }}</small>*/
/*                                 </span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu animation-zoom">*/
/*                         <li class="dropdown-header">Config</li>*/
/*                         <li><a href="{{ path('user_profile') }}">Profile</a></li>*/
/*                         <li><a href="{{ path('edit_profile') }}">Edit</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <!--<li><a href="#"><i class="fa fa-fw fa-lock"></i> Lock</a></li>-->*/
/*                         <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                     </ul><!--end .dropdown-menu -->*/
/*                 </li><!--end .dropdown -->*/
/*             </ul><!--end .header-nav-profile -->*/
/*         </div><!--end #header-navbar-collapse -->*/
/*     </div>*/
/* </header>*/
/* <!-- END HEADER-->*/
/* */
/* <!-- BEGIN BASE-->*/
/* <div id="base">*/
/* */
/*     <!-- BEGIN OFFCANVAS LEFT -->*/
/*     <div class="offcanvas">*/
/*     </div><!--end .offcanvas-->*/
/*     <!-- END OFFCANVAS LEFT -->*/
/* */
/*     <!-- BEGIN CONTENT-->*/
/*     <div id="content">*/
/*         <section>*/
/*             <div class="section-header">*/
/*                 <ol class="breadcrumb">*/
/*                     <li class="active">Setting</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="section-body contain-lg">*/
/* */
/*                 <!-- BEGIN INTRO -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h1 class="text-primary">Edit Profile</h1>*/
/*                     </div><!--end .col -->*/
/* */
/*                 </div><!--end .row -->*/
/*                 <!-- END INTRO -->*/
/* */
/*                 <!-- BEGIN FORM WIZARD -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="card">*/
/*                             <div class="card-body ">*/
/*                                 <div id="rootwizard1" class="form-wizard form-wizard-horizontal">*/
/*                                     <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="form floating-label">*/
/*                                         <div class="form-wizard-nav">*/
/*                                             <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>*/
/*                                             <ul class="nav nav-justified">*/
/*                                                 <li class="active"><a href="#tab1" data-toggle="tab"><span class="step">1</span> <span class="title">PERSONAL</span></a></li>*/
/*                                                 <li><a href="#tab2" data-toggle="tab"><span class="step">2</span> <span class="title">ADDRESS</span></a></li>*/
/*                                                 <li><a href="#tab3" data-toggle="tab"><span class="step">3</span> <span class="title">SKILLS</span></a></li>*/
/*                                                 <li><a href="#tab4" data-toggle="tab"><span class="step">4</span> <span class="title">UPLOAD</span></a></li>*/
/*                                                 <li><a href="#tab5" data-toggle="tab"><span class="step">5</span> <span class="title">CONFIRM</span></a></li>*/
/*                                             </ul>*/
/*                                         </div><!--end .form-wizard-nav -->*/
/*                                         <div class="tab-content clearfix">*/
/*                                             <div class="tab-pane active" id="tab1">*/
/*                                                 <br/><br/>*/
/*                                                 <div class="row">*/
/*                                                         <div class="col-sm-6">*/
/*                                                             <div class="form-group">*/
/*                                                                 {{ form_widget(form.username, {'attr': {'class': 'form-control', 'id': 'Fname'}}) }}*/
/*                                                                 <!--<input type="text" name="Fname" id="Fname" class="form-control">-->*/
/*                                                                 <label for="Fname" class="control-label">Username</label>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="col-sm-6">*/
/*                                                             <div class="form-group">*/
/*                                                                 {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*                                                                 <!--<input type="text" name="Lname" id="Lname" class="form-control">-->*/
/*                                                                 <label for="Lname" class="control-label">Email</label>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     <div class="col-sm-6">*/
/*                                                         <div class="form-group">*/
/*                                                         	{{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'Fname'}}) }}*/
/*                                                             <!--<input type="text" name="Fname" id="Fname" class="form-control">-->*/
/*                                                             <label for="Fname" class="control-label">First Name</label>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="col-sm-6">*/
/*                                                         <div class="form-group">*/
/*                                                         	{{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}*/
/*                                                             <!--<input type="text" name="Lname" id="Lname" class="form-control">-->*/
/*                                                             <label for="Lname" class="control-label">Last Name</label>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="tab-pane active" id="tab1">*/
/*                                                     <div class="form-group">*/
/*                                                     	{{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'data-rule-minlength': '6', 'maxlength': '8', 'aria-required': 'true'}}) }}*/
/*                                                         <!--<input type="text" class="form-control" name="phone" id="phone" class="form-control" data-rule-minlength="6" maxlength="12" required="" aria-required="true">-->*/
/*                                                         <label for="phone" class="control-label">Phone Number</label>*/
/*                                                     </div>*/
/*                                                     {% if (app.user.type=='Employer') %}*/
/*                                                         <div class="form-group">*/
/*                                                             {{ form_widget(form.societe, {'attr': {'class': 'form-control'}}) }}*/
/*                                                             <!--<input type="text" name="Lname" id="Lname" class="form-control">-->*/
/*                                                             <label for="Lname" class="control-label">Company</label>*/
/*                                                         </div>*/
/*                                                     {% elseif (app.user.type=='Freelancer') %}*/
/*                                                         <div class="form-group">*/
/*                                                             {{ form_widget(form.societe, {'attr': {'class': 'form-control','readonly':'true'}}) }}*/
/*                                                             <!--<input type="text" name="Lname" id="Lname" class="form-control">-->*/
/*                                                             <label for="Lname" class="control-label">Company</label>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     <div>*/
/*                                                         {% for type in form.type %}*/
/* */
/*                                                             <label class="radio-inline radio-styled radio-primary">*/
/*                                                                 {{ form_widget(type, { 'attr': { 'name': 'radio_demo','class':'radio-inline radiprimary'}}) }}*/
/*                                                                 {{ form_label(type) }}*/
/* */
/*                                                             </label>*/
/* */
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 </div></div><!--end #tab1 -->*/
/*                                             <div class="tab-pane" id="tab2">*/
/*                                                 <br/><br/>*/
/*                                                 <div class="form-group">*/
/*                                                 	{{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}*/
/*                                                     <!--<input type="text" name="country" id="Country" class="form-control">-->*/
/*                                                     <label for="Country" class="control-label">Country</label>*/
/*                                                 </div>*/
/*                                                 <div class="form-group">*/
/*                                                 	{{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}*/
/*                                                     <!--<input type="text" name="city" id="City" class="form-control">-->*/
/*                                                     <label for="City" class="control-label">City</label>*/
/*                                                 </div>*/
/*                                             </div><!--end #tab2 -->*/
/*                                             <div class="tab-pane" id="tab3">*/
/*                                                 <br/><br/>*/
/*                                                 <div class="form-group">*/
/*                                                 	{{ form_widget(form.speciality, {'attr': {'class': 'form-control'}}) }}*/
/*                                                     <!--<select id="select1" name="specialty" class="form-control" required>*/
/*                                                         <option value="">&nbsp;</option>*/
/*                                                         <option value="webdev">Web Developer</option>*/
/*                                                         <option value="webdesign">Web Design</option>*/
/*                                                         <option value="mobdev">Mobile Developers</option>*/
/*                                                         <option value="seo">SEO</option>*/
/*                                                     </select>-->*/
/*                                                     <label for="select1">Specialty</label>*/
/*                                                 </div>*/
/*                                                 <div class="form-group">*/
/*                                                     {{ form_widget(form.biolographie, {'attr': {'class': 'form-control'}}) }}*/
/*                                                     <label>Biolographie</label>*/
/*                                                 </div>*/
/* */
/*                                             </div><!--end #tab3 -->*/
/*                                             <div class="tab-pane" id="tab4">*/
/*                                                 <br/><br/>*/
/*                                                 <center>*/
/*                                                     <p>Choose your profile picture </p>*/
/*                                                     {{ form_widget(form.file) }}*/
/*                                                 </center>*/
/*                                             </div><!--end .tab-content -->*/
/*                                             <div class="tab-pane" id="tab5">*/
/*                                                 <br/><br/>*/
/*                                                 <center>*/
/*                                                     <p>This is it all you need is to validate now !</p>*/
/*                                                     <button type="submit" name="btn" class="btn btn-raised btn-primary">Validate</button>*/
/*                                                 </center>*/
/*                                             </div><!--end .tab-content -->*/
/*                                             <ul class="pager wizard">*/
/*                                                 <li class="previous first"><a class="btn-raised" href="javascript:void(0);">First</a></li>*/
/*                                                 <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>*/
/*                                                 <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li>*/
/*                                                 <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         {{ form_widget(form) }}*/
/*                                 		*/
/*                                     </form>*/
/*                                 </div><!--end #rootwizard -->*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                 </div><!--end .row -->*/
/*                 <!-- END FORM WIZARD -->*/
/* */
/*             </div><!--end .section-body -->*/
/*         </section>*/
/*     </div><!--end #content-->*/
/*     <!-- END CONTENT -->*/
/* */
/*     <!-- BEGIN MENUBAR-->*/
/*     <div id="menubar" class="menubar-inverse ">*/
/*         <div class="menubar-fixed-panel">*/
/*             <div>*/
/*                 <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                     <i class="fa fa-bars"></i>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="expanded">*/
/*                 <a href="{{ path('web_dashboard') }}">*/
/*                     <span class="text-lg text-bold text-primary ">HOMEWORK</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="menubar-scroll-panel">*/
/* */
/*             <!-- BEGIN MAIN MENU -->*/
/*             <ul id="main-menu" class="gui-controls">*/
/* */
/*                 <!-- BEGIN DASHBOARD -->*/
/*                 <li>*/
/*                     <a href="{{ path('web_dashboard') }}" >*/
/*                         <div class="gui-icon"><i class="md md-dashboard"></i></div>*/
/*                         <span class="title">Dashboard</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END DASHBOARD -->*/
/* */
/*                 <!-- BEGIN EMAIL -->*/
/*                 <li>*/
/*                     <a href="{{ path('email_compose') }}">*/
/*                         <div class="gui-icon"><i class="md md-email"></i></div>*/
/*                         <span class="title">Email</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END EMAIL -->*/
/* */
/*                 <!-- BEGIN DASHBOARD -->*/
/*                 <li>*/
/*                     <a href="{{ path('user_profile') }}" >*/
/*                         <div class="gui-icon"><i class="md md-account-circle"></i></div>*/
/*                         <span class="title">Profile</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END DASHBOARD -->*/
/* */
/*                 <!-- BEGIN UI -->*/
/*                 <li>*/
/*                     <a href="{{ path('web_projects_homepage') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-briefcase"></i></div>*/
/*                         <span class="title">Projects</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END UI -->*/
/* */
/*                 <!-- BEGIN TABLES -->*/
/*                 <li>*/
/*                     <a href="{{ path('user_freelancers') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-group"></i></div>*/
/*                         <span class="title">Freelancers</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END TABLES -->*/
/* */
/*                 <!-- BEGIN FORMS -->*/
/*                 <li>*/
/*                     <a href="{{ path('payment_homepage') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-money"></i></div>*/
/*                         <span class="title">Payments</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END FORMS -->*/
/* */
/*                 <!-- BEGIN PAGES -->*/
/*                 <li class="active expanding">*/
/*                     <a href="{{ path('edit_profile') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-wrench"></i></div>*/
/*                         <span class="title">Settings</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END FORMS -->*/
/* */
/*                 <!-- BEGIN CHARTS -->*/
/*                 <li>*/
/*                     <a href="{{ path('browse_portfolios') }}" >*/
/*                         <div class="gui-icon"><i class="fa fa-clipboard"></i></div>*/
/*                         <span class="title">Portfolios</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END CHARTS -->*/
/* */
/*                 <!-- BEGIN LEVELS -->*/
/*                 <li>*/
/*                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-sign-out"></i></div>*/
/*                         <span class="title">Disconnection</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END LEVELS -->*/
/* */
/*             </ul><!--end .main-menu -->*/
/*             <!-- END MAIN MENU -->*/
/* */
/*             <div class="menubar-foot-panel">*/
/*                 <small class="no-linebreak hidden-folded">*/
/*                     <span class="opacity-75">© 2016 HomeWork.<br></span>Made by <strong>Moez Zineb</strong> & <strong>Abdelaziz Dridi</strong>*/
/*                 </small>*/
/*             </div>*/
/*         </div><!--end .menubar-scroll-panel-->*/
/*     </div><!--end #menubar-->*/
/*     <!-- END MENUBAR -->*/
/* </div><!--end #base-->*/
/* <!-- END BASE -->*/
/* */
/* <!-- BEGIN JAVASCRIPT -->*/
/* <script src="{{asset('lib/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/bootstrap/bootstrap.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/spin.js/spin.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/autosize/jquery.autosize.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/jquery-validation/dist/additional-methods.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/wizard/jquery.bootstrap.wizard.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/App.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppNavigation.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppOffcanvas.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppCard.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppForm.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppNavSearch.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppVendor.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/Demo.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/DemoFormWizard.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/multi-select/jquery.multi-select.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/inputmask/jquery.inputmask.bundle.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/select2/select2.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/dropzone/dropzone.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/typeahead/typeahead.bundle.min.js')}}"></script>*/
/* <!--<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>-->*/
/* <script type="text/javascript">*/
/*     $('#skills').select2();*/
/*     //$("#my-awesome-dropzone").dropzone({ url: "/file-upload" });*/
/* </script>*/
/* <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
