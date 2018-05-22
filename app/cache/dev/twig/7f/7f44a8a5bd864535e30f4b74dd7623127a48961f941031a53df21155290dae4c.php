<?php

/* WebUserBundle:Dashboard:index.html.twig */
class __TwigTemplate_1ea660c0e26be97bee53e7086afe34cb462e1349bf47ec9d946ddaa22969ebd4 extends Twig_Template
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
        $__internal_703d1e6b2aae754f56d939fbf068ab62f2589e92331520b1e8fa6b86e4b31f24 = $this->env->getExtension("native_profiler");
        $__internal_703d1e6b2aae754f56d939fbf068ab62f2589e92331520b1e8fa6b86e4b31f24->enter($__internal_703d1e6b2aae754f56d939fbf068ab62f2589e92331520b1e8fa6b86e4b31f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebUserBundle:Dashboard:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Dashboard | HomeWork</title>

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

    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"../../assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed menubar-first  \">

<!-- BEGIN HEADER-->
<header id=\"header\" >
    <div class=\"headerbar\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"headerbar-left\">
            <ul class=\"header-nav header-nav-options\">
                <li class=\"header-nav-brand\" >
                    <div class=\"brand-holder\">
                        <a href=\"#\">
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
                            <input type=\"text\" class=\"form-control\" name=\"headerSearch\" placeholder=\"Search for projects\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-icon-toggle ink-reaction\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
            </ul><!--end .header-nav-options -->
            <ul class=\"header-nav header-nav-profile\">
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"hédhi loula\" />
                                <span class=\"profile-info\">
                                    ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()), "html", null, true);
        echo "</small>
                                </span>
                    </a>
                    <ul class=\"dropdown-menu animation-zoom\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("user_profile");
        echo "\">Profile</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("edit_profile");
        echo "\">Edit</a></li>
                        <li class=\"divider\"></li>
                        <!--<li><a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>-->
                        <li><a href=\"";
        // line 79
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
            <div class=\"section-body\">
                <div class=\"row\">

                    <!-- BEGIN ALERT - REVENUE -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body no-padding\">
                                <div class=\"alert alert-callout alert-info no-margin\">
                                    <!--<strong class=\"pull-right text-success text-lg\">0,38% <i class=\"md md-trending-up\"></i></strong>-->
                                    <strong class=\"text-xl\">\$ 0,00</strong><br/>
                                    <span class=\"opacity-50\">Total balance</span>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - REVENUE -->

                    <!-- BEGIN ALERT - VISITS -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body no-padding\">
                                <div class=\"alert alert-callout alert-warning no-margin\">
                                    <!--<strong class=\"pull-right text-warning text-lg\">0,01% <i class=\"md md-swap-vert\"></i></strong>-->
                                    <strong class=\"text-xl\">\$ 0,00</strong><br/>
                                    <span class=\"opacity-50\">Balance retractable</span>
                                    <div class=\"stick-bottom-right\">
                                        <div class=\"height-1 sparkline-visits\" data-bar-color=\"#e5e6e6\"></div>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - VISITS -->

                    <!-- BEGIN ALERT - BOUNCE RATES -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body no-padding\">
                                <div class=\"alert alert-callout alert-danger no-margin\">
                                    <!--<strong class=\"pull-right text-danger text-lg\">0,18% <i class=\"md md-trending-down\"></i></strong>-->
                                    <strong class=\"text-xl\">\$ 0.00</strong><br/>
                                    <span class=\"opacity-50\">Outstanding balance</span>
                                    <div class=\"stick-bottom-left-right\">

                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - BOUNCE RATES -->

                    <!-- BEGIN ALERT - TIME ON SITE -->
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body no-padding\">
                                <div class=\"alert alert-callout alert-success no-margin\">
                                    <!--<h1 class=\"pull-right text-success\"><i class=\"md md-timer\"></i></h1>-->
                                    <strong class=\"text-xl\">\$ 0.00</strong><br/>
                                    <span class=\"opacity-50\">Available balance</span>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - TIME ON SITE -->

                </div><!--end .row -->
                <div class=\"row\">

                    <!-- BEGIN SITE ACTIVITY -->
                    <div class=\"col-md-9\">
                        <div class=\"card \">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"card-head\">
                                        <header>My Projects</header>
                                    </div><!--end .card-head -->
                                    <div class=\"card-body height-8\">
                                        Recieve offers
                                        <span class=\"pull-right\">";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["rec"]) ? $context["rec"] : $this->getContext($context, "rec")), "html", null, true);
        echo "</span>
                                        <div class=\"progress progress-hairline\">
                                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:0%\"></div>
                                        </div>
                                        Work in progress
                                        <span class=\"pull-right\">";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "html", null, true);
        echo "</span>
                                        <div class=\"progress progress-hairline\">
                                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:0%\"></div>
                                        </div>
                                        Finished
                                        <span class=\"pull-right\">";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")), "html", null, true);
        echo "</span>
                                        <div class=\"progress progress-hairline\">
                                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:0%\"></div>
                                        </div>
                                        ";
        // line 191
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Employer")) {
            // line 192
            echo "                                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("web_project_homepage");
            echo "\" class=\"btn btn-block ink-reaction btn-info\">Create Project</a>
                                        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 193
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Freelancer")) {
            // line 194
            echo "                                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("web_activity_homepage");
            echo "\" class=\"btn btn-block ink-reaction btn-info\">My Activities</a>
                                        ";
        }
        // line 196
        echo "                                    </div><!--end .card-body -->
                                </div><!--end .col -->
                                <div class=\"col-md-4\">
                                    <div class=\"card-head\">
                                        <header>My Offers</header>
                                    </div>
                                    <div class=\"card-body height-8\">
                                        Waiting for approval
                                        <span class=\"pull-right\">0</span>
                                        <div class=\"progress progress-hairline\">
                                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:0%\"></div>
                                        </div>
                                        Accepted
                                        <span class=\"pull-right\">0</span>
                                        <div class=\"progress progress-hairline\">
                                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:0%\"></div>
                                        </div>
                                        Disqualified
                                        <span class=\"pull-right\">0</span>
                                        <div class=\"progress progress-hairline\">
                                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:0%\"></div>
                                        </div>
                                        <a href=\"";
        // line 218
        echo $this->env->getExtension('routing')->getPath("create_portfolio");
        echo "\" class=\"btn btn-block ink-reaction btn-accent\">Create Portfolio</a>
                                    </div><!--end .card-body -->
                                </div><!--end .col -->

                            </div><!--end .row -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END SITE ACTIVITY -->

                    <!-- BEGIN SERVER STATUS -->
                    <div class=\"col-md-3\">
                        <div class=\"card\">
                            <div class=\"card-head\">
                                <header class=\"text-primary\">User</header>
                            </div><!--end .card-head -->
                            <div class=\"card-body height-8\">
                                <div class=\"pull-center text-center\">
                                    <center><img class=\"img-circle border-white border-xl img-responsive\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"\" height=\"140px\" width=\"140px\" /></center>
                                    <h3>";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "<br/><small>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()), "html", null, true);
        echo "</small></h3>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END SERVER STATUS -->

                </div><!--end .row -->
                <div class=\"row\">



                </div><!--end .row -->
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
        // line 263
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
                <li class=\"active expanding\">
                    <a href=\"";
        // line 275
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
        // line 284
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
        // line 293
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
        // line 302
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
        // line 311
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
        // line 320
        echo $this->env->getExtension('routing')->getPath("payment_homepage");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-money\"></i></div>
                        <span class=\"title\">Payments</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN PAGES -->
                <li>
                    <a href=\"";
        // line 329
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
        // line 338
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
        // line 347
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
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoDashboard.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_703d1e6b2aae754f56d939fbf068ab62f2589e92331520b1e8fa6b86e4b31f24->leave($__internal_703d1e6b2aae754f56d939fbf068ab62f2589e92331520b1e8fa6b86e4b31f24_prof);

    }

    public function getTemplateName()
    {
        return "WebUserBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 384,  542 => 383,  538 => 382,  534 => 381,  530 => 380,  526 => 379,  522 => 378,  518 => 377,  514 => 376,  510 => 375,  506 => 374,  502 => 373,  498 => 372,  494 => 371,  490 => 370,  464 => 347,  452 => 338,  440 => 329,  428 => 320,  416 => 311,  404 => 302,  392 => 293,  380 => 284,  368 => 275,  353 => 263,  319 => 236,  315 => 235,  295 => 218,  271 => 196,  265 => 194,  263 => 193,  258 => 192,  256 => 191,  249 => 187,  241 => 182,  233 => 177,  132 => 79,  126 => 76,  122 => 75,  114 => 70,  110 => 69,  105 => 67,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Dashboard | HomeWork</title>*/
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
/* */
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed menubar-first  ">*/
/* */
/* <!-- BEGIN HEADER-->*/
/* <header id="header" >*/
/*     <div class="headerbar">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="headerbar-left">*/
/*             <ul class="header-nav header-nav-options">*/
/*                 <li class="header-nav-brand" >*/
/*                     <div class="brand-holder">*/
/*                         <a href="#">*/
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
/*                             <input type="text" class="form-control" name="headerSearch" placeholder="Search for projects">*/
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
/*             <div class="section-body">*/
/*                 <div class="row">*/
/* */
/*                     <!-- BEGIN ALERT - REVENUE -->*/
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <div class="card">*/
/*                             <div class="card-body no-padding">*/
/*                                 <div class="alert alert-callout alert-info no-margin">*/
/*                                     <!--<strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>-->*/
/*                                     <strong class="text-xl">$ 0,00</strong><br/>*/
/*                                     <span class="opacity-50">Total balance</span>*/
/*                                 </div>*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END ALERT - REVENUE -->*/
/* */
/*                     <!-- BEGIN ALERT - VISITS -->*/
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <div class="card">*/
/*                             <div class="card-body no-padding">*/
/*                                 <div class="alert alert-callout alert-warning no-margin">*/
/*                                     <!--<strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>-->*/
/*                                     <strong class="text-xl">$ 0,00</strong><br/>*/
/*                                     <span class="opacity-50">Balance retractable</span>*/
/*                                     <div class="stick-bottom-right">*/
/*                                         <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END ALERT - VISITS -->*/
/* */
/*                     <!-- BEGIN ALERT - BOUNCE RATES -->*/
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <div class="card">*/
/*                             <div class="card-body no-padding">*/
/*                                 <div class="alert alert-callout alert-danger no-margin">*/
/*                                     <!--<strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>-->*/
/*                                     <strong class="text-xl">$ 0.00</strong><br/>*/
/*                                     <span class="opacity-50">Outstanding balance</span>*/
/*                                     <div class="stick-bottom-left-right">*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END ALERT - BOUNCE RATES -->*/
/* */
/*                     <!-- BEGIN ALERT - TIME ON SITE -->*/
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <div class="card">*/
/*                             <div class="card-body no-padding">*/
/*                                 <div class="alert alert-callout alert-success no-margin">*/
/*                                     <!--<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>-->*/
/*                                     <strong class="text-xl">$ 0.00</strong><br/>*/
/*                                     <span class="opacity-50">Available balance</span>*/
/*                                 </div>*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END ALERT - TIME ON SITE -->*/
/* */
/*                 </div><!--end .row -->*/
/*                 <div class="row">*/
/* */
/*                     <!-- BEGIN SITE ACTIVITY -->*/
/*                     <div class="col-md-9">*/
/*                         <div class="card ">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-8">*/
/*                                     <div class="card-head">*/
/*                                         <header>My Projects</header>*/
/*                                     </div><!--end .card-head -->*/
/*                                     <div class="card-body height-8">*/
/*                                         Recieve offers*/
/*                                         <span class="pull-right">{{ rec }}</span>*/
/*                                         <div class="progress progress-hairline">*/
/*                                             <div class="progress-bar progress-bar-primary-dark" style="width:0%"></div>*/
/*                                         </div>*/
/*                                         Work in progress*/
/*                                         <span class="pull-right">{{ pro }}</span>*/
/*                                         <div class="progress progress-hairline">*/
/*                                             <div class="progress-bar progress-bar-primary-dark" style="width:0%"></div>*/
/*                                         </div>*/
/*                                         Finished*/
/*                                         <span class="pull-right">{{ fin }}</span>*/
/*                                         <div class="progress progress-hairline">*/
/*                                             <div class="progress-bar progress-bar-primary-dark" style="width:0%"></div>*/
/*                                         </div>*/
/*                                         {% if (app.user.type=='Employer') %}*/
/*                                         <a href="{{ path('web_project_homepage') }}" class="btn btn-block ink-reaction btn-info">Create Project</a>*/
/*                                         {% elseif (app.user.type=='Freelancer') %}*/
/*                                             <a href="{{ path('web_activity_homepage') }}" class="btn btn-block ink-reaction btn-info">My Activities</a>*/
/*                                         {% endif %}*/
/*                                     </div><!--end .card-body -->*/
/*                                 </div><!--end .col -->*/
/*                                 <div class="col-md-4">*/
/*                                     <div class="card-head">*/
/*                                         <header>My Offers</header>*/
/*                                     </div>*/
/*                                     <div class="card-body height-8">*/
/*                                         Waiting for approval*/
/*                                         <span class="pull-right">0</span>*/
/*                                         <div class="progress progress-hairline">*/
/*                                             <div class="progress-bar progress-bar-primary-dark" style="width:0%"></div>*/
/*                                         </div>*/
/*                                         Accepted*/
/*                                         <span class="pull-right">0</span>*/
/*                                         <div class="progress progress-hairline">*/
/*                                             <div class="progress-bar progress-bar-primary-dark" style="width:0%"></div>*/
/*                                         </div>*/
/*                                         Disqualified*/
/*                                         <span class="pull-right">0</span>*/
/*                                         <div class="progress progress-hairline">*/
/*                                             <div class="progress-bar progress-bar-primary-dark" style="width:0%"></div>*/
/*                                         </div>*/
/*                                         <a href="{{ path('create_portfolio') }}" class="btn btn-block ink-reaction btn-accent">Create Portfolio</a>*/
/*                                     </div><!--end .card-body -->*/
/*                                 </div><!--end .col -->*/
/* */
/*                             </div><!--end .row -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END SITE ACTIVITY -->*/
/* */
/*                     <!-- BEGIN SERVER STATUS -->*/
/*                     <div class="col-md-3">*/
/*                         <div class="card">*/
/*                             <div class="card-head">*/
/*                                 <header class="text-primary">User</header>*/
/*                             </div><!--end .card-head -->*/
/*                             <div class="card-body height-8">*/
/*                                 <div class="pull-center text-center">*/
/*                                     <center><img class="img-circle border-white border-xl img-responsive" src="{{ asset('uploads/profile/' ~ app.user.id ~'/' ~ app.user.path)}}" alt="" height="140px" width="140px" /></center>*/
/*                                     <h3>{{ app.user.nom }} {{ app.user.prenom}}<br/><small>{{ app.user.type }}</small></h3>*/
/*                                 </div>*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END SERVER STATUS -->*/
/* */
/*                 </div><!--end .row -->*/
/*                 <div class="row">*/
/* */
/* */
/* */
/*                 </div><!--end .row -->*/
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
/*                 <li class="active expanding">*/
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
/*                 <li>*/
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
/* */
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
/* <script src="{{asset('lib/js/core/source/App.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppNavigation.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppOffcanvas.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppCard.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppForm.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppNavSearch.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppVendor.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/Demo.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/DemoDashboard.js')}}"></script>*/
/* <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
