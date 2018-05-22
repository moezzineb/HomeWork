<?php

/* WebProjectBundle:Default:projects.html.twig */
class __TwigTemplate_64bdf5e0be266c1b77c71bf08a782ef58caf9c5bd77306cafea8ca2de694c2b6 extends Twig_Template
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
        $__internal_23fe584f19d2d04ecafd220935e42b95bb5c488d9a2acd7bc905e411c950d03d = $this->env->getExtension("native_profiler");
        $__internal_23fe584f19d2d04ecafd220935e42b95bb5c488d9a2acd7bc905e411c950d03d->enter($__internal_23fe584f19d2d04ecafd220935e42b95bb5c488d9a2acd7bc905e411c950d03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProjectBundle:Default:projects.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Projects | HomeWork</title>

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
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858"), "html", null, true);
        echo "\" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/bootstrap.css?1422792965"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/materialadmin.css?1425466319"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/font-awesome.min.css?1422529194"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/material-design-iconic-font.min.css?1421434286"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/bootstrap-multiselect/bootstrap-multiselect.css?1419109895"), "html", null, true);
        echo "\" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"../../../assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"../../../assets/js/libs/utils/respond.min.js?1403934956\"></script>
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
                        <a href=\"../../../html/dashboards/dashboard.html\">
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

                ";
        // line 67
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 68
            echo "                    <ul class=\"header-nav header-nav-profile\">
                        <li class=\"dropdown\">
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                                <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
            echo "\" alt=\"hédhi loula\" />
                                <span class=\"profile-info\">
                                    ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                    <small>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()), "html", null, true);
            echo "</small>
                                </span>
                            </a>
                            <ul class=\"dropdown-menu animation-zoom\">
                                <li class=\"dropdown-header\">Config</li>
                                <li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("user_profile");
            echo "\">Profile</a></li>
                                <li><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("edit_profile");
            echo "\">Edit</a></li>
                                <li class=\"divider\"></li>
                                <!--<li><a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>-->
                                <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul>
                ";
        } else {
            // line 88
            echo "                    <ul class=\"header-nav header-nav-options\">
                        <li class=\"dropdown hidden-xs\">
                            <a href=\"javascript:void(0);\" class=\"btn btn-icon-toggle btn-default\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-sign-in\"></i>
                            </a>
                            <ul class=\"dropdown-menu animation-zoom\">
                                <li class=\"dropdown-header\">Authentification</li>
                                <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                                <li><a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul>
                ";
        }
        // line 101
        echo "            </ul><!--end .header-nav-profile -->
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
                    <li class=\"active\">Projects - Search</li>
                </ol>
            </div>
            <div class=\"section-body contain-lg\">
                <div class=\"card tabs-left style-default-light\">

                    <!-- BEGIN SEARCH HEADER -->
                            <div class=\"card-head style-primary\">
                                <div class=\"tools pull-left\">
                                    <form class=\"navbar-search\" role=\"search\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" name=\"contactSearch\" placeholder=\"Enter your keyword\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-icon-toggle ink-reaction\"><i class=\"fa fa-search\"></i></button>
                                    </form>
                                </div>
                                ";
        // line 136
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Employer"))) {
            // line 137
            echo "                                <div class=\"tools\">
                                    <a class=\"btn btn-floating-action btn-default-light\" href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("web_project_homepage");
            echo "\"><i class=\"fa fa-plus\"></i></a>
                                </div>
                                ";
        }
        // line 141
        echo "                            </div><!--end .card-head -->
                            <!-- END SEARCH HEADER -->

                    <!-- BEGIN TAB RESULT -->
                    <!--<ul class=\"card-head nav nav-tabs tabs-accent\" data-toggle=\"tabs\">
                        <li class=\"active\"><a href=\"#web1\">Web</a></li>
                        <li><a href=\"#web1\">Images</a></li>
                        <li><a href=\"#web1\">Documents</a></li>
                        <li><a href=\"#web1\">Videos</a></li>
                        <li><a href=\"#web1\">Contacts</a></li>
                    </ul>-->
                    <!-- END TAB RESULTS -->

                    <!-- BEGIN TAB CONTENT -->
                    <div class=\"card-body tab-content style-default-bright\">
                        <div class=\"tab-pane active\" id=\"web1\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">

                                    <!-- BEGIN PAGE HEADER -->
                                    <div class=\"margin-bottom-xxl\">
                                        <span class=\"text-light text-lg\">Search results <strong>";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["xx"]) ? $context["xx"] : $this->getContext($context, "xx")), "html", null, true);
        echo "</strong></span>
                                        <!--<div class=\"btn-group btn-group-sm pull-right\">
                                            <button type=\"button\" class=\"btn btn-default-light dropdown-toggle\" data-toggle=\"dropdown\">
                                                <span class=\"glyphicon glyphicon-arrow-down\"></span> Sort
                                            </button>
                                            <ul class=\"dropdown-menu dropdown-menu-right animation-dock\" role=\"menu\">
                                                <li class=\"active\"><a href=\"#\">Date asc</a></li>
                                                <li><a href=\"#\">Date desc</a></li>
                                                <li><a href=\"#\">Title asc</a></li>
                                                <li><a href=\"#\">Title desc</a></li>
                                            </ul>
                                        </div>-->
                                    </div><!--end .margin-bottom-xxl -->
                                    <!-- END PAGE HEADER -->

                                    <!-- BEGIN RESULT LIST -->
                                    <div class=\"list-results list-results-underlined\">
                                        ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pr"]) ? $context["pr"] : $this->getContext($context, "pr")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 180
            echo "                                        <div class=\"col-xs-12\">
                                            <p>
                                                ";
            // line 182
            if (($this->getAttribute($context["p"], "statut", array()) == "debut")) {
                // line 183
                echo "                                                    <span class=\"badge style-primary-dark\">Open</span>
                                                ";
            } elseif (($this->getAttribute(            // line 184
$context["p"], "statut", array()) == "travaille")) {
                // line 185
                echo "                                                    <span class=\"badge style-warning\">Working</span>
                                                ";
            } elseif (($this->getAttribute(            // line 186
$context["p"], "statut", array()) == "fin")) {
                // line 187
                echo "                                                    <span class=\"badge style-info\">Finished</span>
                                                ";
            }
            // line 189
            echo "                                                <a class=\"text-medium text-lg telib\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_propost_homepage", array("idProjet" => $this->getAttribute($context["p"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titre", array()), "html", null, true);
            echo "</a><br/>
                                                <p class=\"opacity-75\">";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</p>
                                            </p>
                                            <div class=\"contain-xs pull-left\">
                                                ";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "
                                            </div>
                                        </div><!--end .col -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                                    </div><!--end .list-results -->
                                    <!-- END RESULTS LIST -->
                                    <div class=\"navigation\">
                                        ";
        // line 200
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pr"]) ? $context["pr"] : $this->getContext($context, "pr")));
        echo "
                                    </div>

                                    <!-- BEGIN PAGING -->
                                    <!--<ul class=\"pagination\">
                                        <li class=\"disabled\"><a href=\"#\">PREV</a></li>
                                        <li class=\"active\"><a href=\"#\">1 <span class=\"sr-only\">(current)</span></a></li>
                                        <li><a href=\"#\">2</a></li>
                                        <li><a href=\"#\">3</a></li>
                                        <li><a href=\"#\">4</a></li>
                                        <li><a href=\"#\">5</a></li>
                                        <li><a href=\"#\">NEXT</a></li>
                                    </ul>
                                    <!-- END PAGING -->

                                </div><!--end .col -->
                            </div><!--end .row -->
                        </div><!--end .tab-pane -->
                    </div><!--end .card-body -->
                    <!-- END TAB CONTENT -->

                </div><!--end .card -->
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
        // line 236
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
        // line 248
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
        // line 257
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
        // line 266
        echo $this->env->getExtension('routing')->getPath("user_profile");
        echo "\" >
                        <div class=\"gui-icon\"><i class=\"md md-account-circle\"></i></div>
                        <span class=\"title\">Profile</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN UI -->
                <li class=\"active expanding\">
                    <a href=\"";
        // line 275
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
        // line 284
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
        // line 293
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
        // line 302
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
        // line 311
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
        // line 320
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
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap-multiselect/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/microtemplating/microtemplating.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoPageSearch.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_23fe584f19d2d04ecafd220935e42b95bb5c488d9a2acd7bc905e411c950d03d->leave($__internal_23fe584f19d2d04ecafd220935e42b95bb5c488d9a2acd7bc905e411c950d03d_prof);

    }

    public function getTemplateName()
    {
        return "WebProjectBundle:Default:projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 361,  561 => 360,  557 => 359,  553 => 358,  549 => 357,  545 => 356,  541 => 355,  537 => 354,  533 => 353,  529 => 352,  525 => 351,  521 => 350,  517 => 349,  513 => 348,  509 => 347,  505 => 346,  501 => 345,  497 => 344,  493 => 343,  467 => 320,  455 => 311,  443 => 302,  431 => 293,  419 => 284,  407 => 275,  395 => 266,  383 => 257,  371 => 248,  356 => 236,  317 => 200,  312 => 197,  302 => 193,  296 => 190,  289 => 189,  285 => 187,  283 => 186,  280 => 185,  278 => 184,  275 => 183,  273 => 182,  269 => 180,  265 => 179,  245 => 162,  222 => 141,  216 => 138,  213 => 137,  211 => 136,  174 => 101,  166 => 96,  162 => 95,  153 => 88,  145 => 83,  139 => 80,  135 => 79,  127 => 74,  123 => 73,  118 => 71,  113 => 68,  111 => 67,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Projects | HomeWork</title>*/
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
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858')}}" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/bootstrap.css?1422792965')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/materialadmin.css?1425466319')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/font-awesome.min.css?1422529194')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/bootstrap-multiselect/bootstrap-multiselect.css?1419109895')}}" />*/
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="../../../assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="../../../assets/js/libs/utils/respond.min.js?1403934956"></script>*/
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
/*                         <a href="../../../html/dashboards/dashboard.html">*/
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
/*                 */
/*             </ul><!--end .header-nav-options -->*/
/* */
/*                 {% if is_granted("ROLE_USER") %}*/
/*                     <ul class="header-nav header-nav-profile">*/
/*                         <li class="dropdown">*/
/*                             <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                                 <img src="{{ asset('uploads/profile/' ~ app.user.id ~'/' ~ app.user.path)}}" alt="hédhi loula" />*/
/*                                 <span class="profile-info">*/
/*                                     {{ app.user.username }}*/
/*                                     <small>{{ app.user.type }}</small>*/
/*                                 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu animation-zoom">*/
/*                                 <li class="dropdown-header">Config</li>*/
/*                                 <li><a href="{{ path('user_profile') }}">Profile</a></li>*/
/*                                 <li><a href="{{ path('edit_profile') }}">Edit</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <!--<li><a href="#"><i class="fa fa-fw fa-lock"></i> Lock</a></li>-->*/
/*                                 <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                             </ul><!--end .dropdown-menu -->*/
/*                         </li><!--end .dropdown -->*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     <ul class="header-nav header-nav-options">*/
/*                         <li class="dropdown hidden-xs">*/
/*                             <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">*/
/*                                 <i class="fa fa-sign-in"></i>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu animation-zoom">*/
/*                                 <li class="dropdown-header">Authentification</li>*/
/*                                 <li><a href="{{ path('fos_user_security_login') }}">Login</a></li>*/
/*                                 <li><a href="{{ path('fos_user_registration_register') }}">Register</a></li>*/
/*                             </ul><!--end .dropdown-menu -->*/
/*                         </li><!--end .dropdown -->*/
/*                     </ul>*/
/*                 {% endif %}*/
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
/*                     <li class="active">Projects - Search</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="section-body contain-lg">*/
/*                 <div class="card tabs-left style-default-light">*/
/* */
/*                     <!-- BEGIN SEARCH HEADER -->*/
/*                             <div class="card-head style-primary">*/
/*                                 <div class="tools pull-left">*/
/*                                     <form class="navbar-search" role="search">*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" class="form-control" name="contactSearch" placeholder="Enter your keyword">*/
/*                                         </div>*/
/*                                         <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 {% if(is_granted("ROLE_USER")) and (app.user.type=='Employer') %}*/
/*                                 <div class="tools">*/
/*                                     <a class="btn btn-floating-action btn-default-light" href="{{ path('web_project_homepage') }}"><i class="fa fa-plus"></i></a>*/
/*                                 </div>*/
/*                                 {% endif %}*/
/*                             </div><!--end .card-head -->*/
/*                             <!-- END SEARCH HEADER -->*/
/* */
/*                     <!-- BEGIN TAB RESULT -->*/
/*                     <!--<ul class="card-head nav nav-tabs tabs-accent" data-toggle="tabs">*/
/*                         <li class="active"><a href="#web1">Web</a></li>*/
/*                         <li><a href="#web1">Images</a></li>*/
/*                         <li><a href="#web1">Documents</a></li>*/
/*                         <li><a href="#web1">Videos</a></li>*/
/*                         <li><a href="#web1">Contacts</a></li>*/
/*                     </ul>-->*/
/*                     <!-- END TAB RESULTS -->*/
/* */
/*                     <!-- BEGIN TAB CONTENT -->*/
/*                     <div class="card-body tab-content style-default-bright">*/
/*                         <div class="tab-pane active" id="web1">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/* */
/*                                     <!-- BEGIN PAGE HEADER -->*/
/*                                     <div class="margin-bottom-xxl">*/
/*                                         <span class="text-light text-lg">Search results <strong>{{ xx }}</strong></span>*/
/*                                         <!--<div class="btn-group btn-group-sm pull-right">*/
/*                                             <button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">*/
/*                                                 <span class="glyphicon glyphicon-arrow-down"></span> Sort*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu dropdown-menu-right animation-dock" role="menu">*/
/*                                                 <li class="active"><a href="#">Date asc</a></li>*/
/*                                                 <li><a href="#">Date desc</a></li>*/
/*                                                 <li><a href="#">Title asc</a></li>*/
/*                                                 <li><a href="#">Title desc</a></li>*/
/*                                             </ul>*/
/*                                         </div>-->*/
/*                                     </div><!--end .margin-bottom-xxl -->*/
/*                                     <!-- END PAGE HEADER -->*/
/* */
/*                                     <!-- BEGIN RESULT LIST -->*/
/*                                     <div class="list-results list-results-underlined">*/
/*                                         {% for p in pr %}*/
/*                                         <div class="col-xs-12">*/
/*                                             <p>*/
/*                                                 {% if p.statut == 'debut' %}*/
/*                                                     <span class="badge style-primary-dark">Open</span>*/
/*                                                 {% elseif p.statut == 'travaille' %}*/
/*                                                     <span class="badge style-warning">Working</span>*/
/*                                                 {% elseif p.statut == 'fin' %}*/
/*                                                     <span class="badge style-info">Finished</span>*/
/*                                                 {% endif %}*/
/*                                                 <a class="text-medium text-lg telib" href="{{ path('web_propost_homepage', {'idProjet' : p.idProjet}) }}">{{ p.titre }}</a><br/>*/
/*                                                 <p class="opacity-75">{{ p.categorie }}</p>*/
/*                                             </p>*/
/*                                             <div class="contain-xs pull-left">*/
/*                                                 {{ p.description }}*/
/*                                             </div>*/
/*                                         </div><!--end .col -->*/
/*                                         {% endfor %}*/
/*                                     </div><!--end .list-results -->*/
/*                                     <!-- END RESULTS LIST -->*/
/*                                     <div class="navigation">*/
/*                                         {{ knp_pagination_render(pr) }}*/
/*                                     </div>*/
/* */
/*                                     <!-- BEGIN PAGING -->*/
/*                                     <!--<ul class="pagination">*/
/*                                         <li class="disabled"><a href="#">PREV</a></li>*/
/*                                         <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>*/
/*                                         <li><a href="#">2</a></li>*/
/*                                         <li><a href="#">3</a></li>*/
/*                                         <li><a href="#">4</a></li>*/
/*                                         <li><a href="#">5</a></li>*/
/*                                         <li><a href="#">NEXT</a></li>*/
/*                                     </ul>*/
/*                                     <!-- END PAGING -->*/
/* */
/*                                 </div><!--end .col -->*/
/*                             </div><!--end .row -->*/
/*                         </div><!--end .tab-pane -->*/
/*                     </div><!--end .card-body -->*/
/*                     <!-- END TAB CONTENT -->*/
/* */
/*                 </div><!--end .card -->*/
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
/*                 <li class="active expanding">*/
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
/* <script src="{{asset('lib/js/libs/moment/moment.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/microtemplating/microtemplating.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/App.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppNavigation.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppOffcanvas.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppCard.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppForm.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppNavSearch.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/source/AppVendor.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/Demo.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/DemoPageSearch.js')}}"></script>*/
/* <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
