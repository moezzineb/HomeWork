<?php

/* WebUserBundle:Default:freelancers.html.twig */
class __TwigTemplate_58475a11c1c37c4173fdbdaf7f90c22dfc9e7a79f0c21dbd471233b5bc944377 extends Twig_Template
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
        $__internal_981b1feb4dcea6635f79fcdcb70641ff6cce89bd132ee57bc7660c3b48b878f2 = $this->env->getExtension("native_profiler");
        $__internal_981b1feb4dcea6635f79fcdcb70641ff6cce89bd132ee57bc7660c3b48b878f2->enter($__internal_981b1feb4dcea6635f79fcdcb70641ff6cce89bd132ee57bc7660c3b48b878f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebUserBundle:Default:freelancers.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Freelancers | HomeWork</title>

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
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"../../../assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"../../../assets/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed menubar-first full-content \">

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
                    <form class=\"navbar-search\" role=\"search\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"headerSearch\" placeholder=\"Enter your keyword\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-icon-toggle ink-reaction\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
                <!--end .dropdown -->
            </ul><!--end .header-nav-options -->
            ";
        // line 67
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 68
            echo "                <ul class=\"header-nav header-nav-profile\">
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
            echo "                <ul class=\"header-nav header-nav-options\">
                    <li class=\"dropdown hidden-xs\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-icon-toggle btn-default\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-sign-in\"></i>
                        </a>
                        <ul class=\"dropdown-menu animation-dock\">
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
        echo "        </div><!--end #header-navbar-collapse -->
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
                    <li class=\"active\">Freelancers</li>
                </ol>
            </div>
            <div class=\"section-body\">
                <div class=\"card\">

                    <!-- BEGIN SEARCH HEADER -->
                    <div class=\"card-head style-primary\">
                        <div class=\"tools pull-left\">
                            <form class=\"navbar-search\" role=\"search\" method=\"post\" action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("user_freelancers");
        echo "\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"contactSearch\" placeholder=\"Enter your keyword\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-icon-toggle ink-reaction\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>

                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->

                    <!-- BEGIN SEARCH RESULTS -->
                    <div class=\"card-body\">
                        <div class=\"row\">

                            <div class=\"col-sm-8 col-md-9 col-lg-10\">

                                <!-- BEGIN SEARCH RESULTS LIST -->
                                <!--<div class=\"margin-bottom-xxl\">
                                    <span class=\"text-light text-lg\">Filtered results <strong>34</strong></span>

                                </div><!--end .margin-bottom-xxl -->
                                <div class=\"list-results\">
                                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free")));
        foreach ($context['_seq'] as $context["_key"] => $context["fr"]) {
            // line 152
            echo "                                    <div class=\"col-xs-12 col-lg-6 hbox-xs\">

                                        <div class=\"hbox-column width-2\">
                                            <img class=\"img-circle img-responsive pull-left\" src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($context["fr"], "id", array())) . "/") . $this->getAttribute($context["fr"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" />
                                        </div><!--end .hbox-column -->
                                        <div class=\"hbox-column v-top\">
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-12 margin-bottom-lg\">
                                                    <a class=\"text-lg text-medium\" href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_profile", array("username" => $this->getAttribute($context["fr"], "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fr"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fr"], "nom", array()), "html", null, true);
            echo "</a>
                                                </div>
                                            </div>
                                            <div class=\"clearfix opacity-75\">
                                                <div class=\"col-md-5\">
                                                    <span class=\"glyphicon glyphicon-briefcase text-sm\"></span> ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["fr"], "speciality", array()), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <div class=\"col-lg-12\">
                                                    <span class=\"opacity-75\"><span class=\"glyphicon glyphicon-map-marker text-sm\"></span> ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["fr"], "city", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fr"], "country", array()), "html", null, true);
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"stick-top-right small-padding\">
                                                <!--<i class=\"fa fa-dot-circle-o fa-fw text-success\" data-toggle=\"tooltip\" data-placement=\"left\" data-original-title=\"User online\"></i>-->
                                            </div>
                                        </div><!--end .hbox-column -->

                                    </div><!--end .hbox-xs -->
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                                </div><!--end .list-results -->

                                <!-- BEGIN SEARCH RESULTS LIST -->

                                <!-- BEGIN SEARCH RESULTS PAGING -->
                                <div class=\"text-center\">
                                    <div class=\"navigation\">
                                        ";
        // line 187
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["free"]) ? $context["free"] : $this->getContext($context, "free")));
        echo "
                                    </div>
                                </div><!--end .text-center -->

                                <!-- BEGIN SEARCH RESULTS PAGING -->
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </div><!--end .card-body -->
                    <!-- END SEARCH RESULTS -->

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
        // line 212
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
        // line 224
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
        // line 233
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
        // line 242
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
        // line 251
        echo $this->env->getExtension('routing')->getPath("web_projects_homepage");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-briefcase\"></i></div>
                        <span class=\"title\">Projects</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END UI -->

                <!-- BEGIN TABLES -->
                <li class=\"active expanding\">
                    <a href=\"";
        // line 260
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
        // line 269
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
        // line 278
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
        // line 287
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
        // line 296
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
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoFormWizard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/inputmask/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/dropzone/dropzone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/typeahead/typeahead.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_981b1feb4dcea6635f79fcdcb70641ff6cce89bd132ee57bc7660c3b48b878f2->leave($__internal_981b1feb4dcea6635f79fcdcb70641ff6cce89bd132ee57bc7660c3b48b878f2_prof);

    }

    public function getTemplateName()
    {
        return "WebUserBundle:Default:freelancers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 342,  549 => 341,  545 => 340,  541 => 339,  537 => 338,  533 => 337,  529 => 336,  525 => 335,  521 => 334,  517 => 333,  513 => 332,  509 => 331,  505 => 330,  501 => 329,  497 => 328,  493 => 327,  489 => 326,  485 => 325,  481 => 324,  477 => 323,  473 => 322,  469 => 321,  465 => 320,  461 => 319,  435 => 296,  423 => 287,  411 => 278,  399 => 269,  387 => 260,  375 => 251,  363 => 242,  351 => 233,  339 => 224,  324 => 212,  296 => 187,  287 => 180,  269 => 170,  261 => 165,  249 => 160,  241 => 155,  236 => 152,  232 => 151,  206 => 128,  177 => 101,  169 => 96,  165 => 95,  156 => 88,  148 => 83,  142 => 80,  138 => 79,  130 => 74,  126 => 73,  121 => 71,  116 => 68,  114 => 67,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Freelancers | HomeWork</title>*/
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
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="../../../assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="../../../assets/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed menubar-first full-content ">*/
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
/*                     <form class="navbar-search" role="search" method="post">*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>*/
/*                     </form>*/
/*                 </li>*/
/*                 <!--end .dropdown -->*/
/*             </ul><!--end .header-nav-options -->*/
/*             {% if is_granted("ROLE_USER") %}*/
/*                 <ul class="header-nav header-nav-profile">*/
/*                     <li class="dropdown">*/
/*                         <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                             <img src="{{ asset('uploads/profile/' ~ app.user.id ~'/' ~ app.user.path)}}" alt="hédhi loula" />*/
/*                                 <span class="profile-info">*/
/*                                     {{ app.user.username }}*/
/*                                     <small>{{ app.user.type }}</small>*/
/*                                 </span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu animation-zoom">*/
/*                             <li class="dropdown-header">Config</li>*/
/*                             <li><a href="{{ path('user_profile') }}">Profile</a></li>*/
/*                             <li><a href="{{ path('edit_profile') }}">Edit</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <!--<li><a href="#"><i class="fa fa-fw fa-lock"></i> Lock</a></li>-->*/
/*                             <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                         </ul><!--end .dropdown-menu -->*/
/*                     </li><!--end .dropdown -->*/
/*                 </ul>*/
/*             {% else %}*/
/*                 <ul class="header-nav header-nav-options">*/
/*                     <li class="dropdown hidden-xs">*/
/*                         <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">*/
/*                             <i class="fa fa-sign-in"></i>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu animation-dock">*/
/*                             <li class="dropdown-header">Authentification</li>*/
/*                             <li><a href="{{ path('fos_user_security_login') }}">Login</a></li>*/
/*                             <li><a href="{{ path('fos_user_registration_register') }}">Register</a></li>*/
/*                         </ul><!--end .dropdown-menu -->*/
/*                     </li><!--end .dropdown -->*/
/*                 </ul>*/
/*             {% endif %}*/
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
/*                     <li class="active">Freelancers</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="section-body">*/
/*                 <div class="card">*/
/* */
/*                     <!-- BEGIN SEARCH HEADER -->*/
/*                     <div class="card-head style-primary">*/
/*                         <div class="tools pull-left">*/
/*                             <form class="navbar-search" role="search" method="post" action="{{ path('user_freelancers') }}">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="contactSearch" placeholder="Enter your keyword">*/
/*                                 </div>*/
/*                                 <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>*/
/*                             </form>*/
/*                         </div>*/
/* */
/*                     </div><!--end .card-head -->*/
/*                     <!-- END SEARCH HEADER -->*/
/* */
/*                     <!-- BEGIN SEARCH RESULTS -->*/
/*                     <div class="card-body">*/
/*                         <div class="row">*/
/* */
/*                             <div class="col-sm-8 col-md-9 col-lg-10">*/
/* */
/*                                 <!-- BEGIN SEARCH RESULTS LIST -->*/
/*                                 <!--<div class="margin-bottom-xxl">*/
/*                                     <span class="text-light text-lg">Filtered results <strong>34</strong></span>*/
/* */
/*                                 </div><!--end .margin-bottom-xxl -->*/
/*                                 <div class="list-results">*/
/*                                     {% for fr in free %}*/
/*                                     <div class="col-xs-12 col-lg-6 hbox-xs">*/
/* */
/*                                         <div class="hbox-column width-2">*/
/*                                             <img class="img-circle img-responsive pull-left" src="{{ asset('uploads/profile/' ~ fr.id ~'/' ~ fr.path)}}" alt="" />*/
/*                                         </div><!--end .hbox-column -->*/
/*                                         <div class="hbox-column v-top">*/
/*                                             <div class="clearfix">*/
/*                                                 <div class="col-lg-12 margin-bottom-lg">*/
/*                                                     <a class="text-lg text-medium" href="{{ path('freelancer_profile',{'username' : fr.username}) }}">{{ fr.prenom }} {{ fr.nom }}</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="clearfix opacity-75">*/
/*                                                 <div class="col-md-5">*/
/*                                                     <span class="glyphicon glyphicon-briefcase text-sm"></span> {{ fr.speciality }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="clearfix">*/
/*                                                 <div class="col-lg-12">*/
/*                                                     <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> {{ fr.city }}, {{ fr.country }}</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="stick-top-right small-padding">*/
/*                                                 <!--<i class="fa fa-dot-circle-o fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>-->*/
/*                                             </div>*/
/*                                         </div><!--end .hbox-column -->*/
/* */
/*                                     </div><!--end .hbox-xs -->*/
/*                                     {% endfor %}*/
/*                                 </div><!--end .list-results -->*/
/* */
/*                                 <!-- BEGIN SEARCH RESULTS LIST -->*/
/* */
/*                                 <!-- BEGIN SEARCH RESULTS PAGING -->*/
/*                                 <div class="text-center">*/
/*                                     <div class="navigation">*/
/*                                         {{ knp_pagination_render(free) }}*/
/*                                     </div>*/
/*                                 </div><!--end .text-center -->*/
/* */
/*                                 <!-- BEGIN SEARCH RESULTS PAGING -->*/
/*                             </div><!--end .col -->*/
/*                         </div><!--end .row -->*/
/*                     </div><!--end .card-body -->*/
/*                     <!-- END SEARCH RESULTS -->*/
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
/*                 <li>*/
/*                     <a href="{{ path('web_projects_homepage') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-briefcase"></i></div>*/
/*                         <span class="title">Projects</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END UI -->*/
/* */
/*                 <!-- BEGIN TABLES -->*/
/*                 <li class="active expanding">*/
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
/* <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
