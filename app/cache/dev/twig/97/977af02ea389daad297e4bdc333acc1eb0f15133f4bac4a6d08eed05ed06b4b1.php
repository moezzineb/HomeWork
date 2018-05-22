<?php

/* WebPaymentBundle:Default:index.html.twig */
class __TwigTemplate_ba22c703fb5735bf063b07a9fb75ef7bb1fac10e257824664570448734b8b9ad extends Twig_Template
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
        $__internal_a5073c0c85c850e9158b67fc498b934c3e05acffdd0db66a85f061f3a98b8b5f = $this->env->getExtension("native_profiler");
        $__internal_a5073c0c85c850e9158b67fc498b934c3e05acffdd0db66a85f061f3a98b8b5f->enter($__internal_a5073c0c85c850e9158b67fc498b934c3e05acffdd0db66a85f061f3a98b8b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebPaymentBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Payments | HomeWork</title>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990"), "html", null, true);
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
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"hédhi loula\" />
                                <span class=\"profile-info\">
                                    ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()), "html", null, true);
        echo "</small>
                                </span>
                    </a>
                    <ul class=\"dropdown-menu animation-zoom\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("user_profile");
        echo "\">Profile</a></li>
                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("edit_profile");
        echo "\">Edit</a></li>
                        <li class=\"divider\"></li>
                        <!--<li><a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>-->
                        <li><a href=\"";
        // line 82
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
                    <li class=\"active\">Payments</li>
                </ol>
            </div>
            <div class=\"section-body\">
                <div class=\"card\">

                    <!-- BEGIN SEARCH HEADER -->
                    <div class=\"card-head style-primary\">
                        <div class=\"tools pull-left\">
                            <header>Account balance</header>
                        </div><!--end .tools -->
                        <div class=\"tools\">
                            <a class=\"btn btn-flat hidden-xs\" data-toggle=\"modal\" data-target=\"#formModal\"><span class=\"glyphicon glyphicon-plus-sign\"></span> &nbsp;Recharge</a>
                        </div><!--end .tools -->

                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->
                    <!-- MODAL CODE -->
                    <!-- BEGIN FORM MODAL MARKUP -->
                    <div class=\"modal fade\" id=\"formModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <center><h4 class=\"modal-title\" id=\"formModalLabel\">Recharge Amount</h4></center>
                                </div>
                                <form class=\"form-horizontal\" role=\"form\">
                                    <div class=\"modal-body\">
                                        <div class=\"form-group\">
                                            <div class=\"col-sm-6\">
                                                <select id=\"card\" name=\"card\" class=\"form-control\" required>
                                                    <option value=\"Paypal\">Paypal</option>
                                                    <option value=\"MasterCard\">MasterCard</option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input type=\"number\" name=\"money\" id=\"money\" class=\"form-control\" placeholder=\"USD \$\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\" id=\"x1\">
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" name=\"cardname\" id=\"cardname\" class=\"form-control\" placeholder=\"Full Name on Card\">
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" name=\"cardnumber\" id=\"cardnumber\" class=\"form-control\" placeholder=\"Card Number\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\" id=\"x2\">
                                            <div class=\"col-sm-3\">
                                                <select id=\"cardyear\" name=\"cardyear\" class=\"form-control\" required>
                                                            <option value=\"2016\" selected >2016</option>
                                                            <option value=\"2017\"  >2017</option>
                                                            <option value=\"2018\"  >2018</option>
                                                            <option value=\"2019\"  >2019</option>
                                                            <option value=\"2020\"  >2020</option>
                                                            <option value=\"2021\"  >2021</option>
                                                            <option value=\"2022\"  >2022</option>
                                                            <option value=\"2023\"  >2023</option>
                                                            <option value=\"2024\"  >2024</option>
                                                            <option value=\"2025\"  >2025</option>
                                                            <option value=\"2026\"  >2026</option>
                                                            <option value=\"2027\"  >2027</option>
                                                            <option value=\"2028\"  >2028</option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <select id=\"cardmonth\" name=\"cardmonth\" class=\"form-control\" required>
                                                            <option value=\"1\">1</option>
                                                            <option value=\"2\">2</option>
                                                            <option value=\"3\">3</option>
                                                            <option value=\"4\">4</option>
                                                            <option value=\"5\" selected>5</option>
                                                            <option value=\"6\">6</option>
                                                            <option value=\"7\">7</option>
                                                            <option value=\"8\">8</option>
                                                            <option value=\"9\">9</option>
                                                            <option value=\"10\">10</option>
                                                            <option value=\"11\">11</option>
                                                            <option value=\"12\">12</option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input type=\"text\" name=\"cvc\" id=\"cvc\" class=\"form-control\" placeholder=\"Security Code\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                        <button type=\"button\" class=\"btn btn-primary\">Recharge</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- END FORM MODAL MARKUP -->

                    <!-- END MODAL CODE -->
                    <!-- BEGIN SEARCH RESULTS -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-6 col-xs-12\"><center>
                                    <h4>Total balance</h4>
                                    <div class=\"text-beta \"><h3 class=\"text-ultra-bold\">\$0.00</h3></div>
                                    <div class=\"text-zeta copy\">
                                        Full credits now, profits and balance also includes a commentator.
                                    </div></center>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\"><center>
                                    <h4>Balance retractable</h4>
                                    <div class=\"text-beta \"><h3 class=\"text-ultra-bold\">\$0.00</h3></div>
                                    <div class=\"text-zeta copy\">
                                        Projects under way and any amount includes budget requested to withdraw and still under conversion, as well as your earnings in the last 14 days.
                                    </div></center>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\"><center>
                                    <h4>Outstanding balance</h4>
                                    <div class=\"text-beta \"><h3 class=\"text-ultra-bold\">\$0.00</h3></div>
                                    <div class=\"text-zeta copy\">
                                        Balance which you can use to open new projects.
                                    </div></center>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\"><center>
                                    <h4>Available balance</h4>
                                    <div class=\"text-beta \"><h3 class=\"text-ultra-bold\">\$0.00</h3></div>
                                    <div class=\"text-zeta copy\">
                                        The remaining amount of the profits made and can be withdrawn now.
                                    </div></center>
                            </div>
                        </div>
                    </div><!--end .card-body -->
                    <!-- END SEARCH RESULTS -->

                </div><!--end .card -->
                <div class=\"card\">

                    <!-- BEGIN SEARCH HEADER -->
                    <div class=\"card-head style-default-dark\">
                        <div class=\"tools pull-left\">
                            <header>Financial transactions</header>
                        </div><!--end .tools -->
                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->

                    <!-- BEGIN SEARCH RESULTS -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"table-responsive\">
                                    <table id=\"datatable1\" class=\"table table-striped table-hover\">
                                        <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Amount</th>
                                            <th>Details</th>
                                            <th class=\"sort-numeric\">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td></td><td></td><td><center> No transactions found !</center></td></tr>
                                        <tr></tr>
                                        </tbody>
                                    </table>
                                </div><!--end .table-responsive -->
                            </div><!--end .col -->
                        </div>
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
        // line 287
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
        // line 299
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
        // line 308
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
        // line 317
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
        // line 326
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
        // line 335
        echo $this->env->getExtension('routing')->getPath("user_freelancers");
        echo "\">
                        <div class=\"gui-icon\"><i class=\"fa fa-group\"></i></div>
                        <span class=\"title\">Freelancers</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END TABLES -->

                <!-- BEGIN FORMS -->
                <li class=\"active expanding\">
                    <a href=\"";
        // line 344
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
        // line 353
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
        // line 362
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
        // line 371
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
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoFormComponents.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoUIMessages.js"), "html", null, true);
        echo "\"></script>
    <!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_a5073c0c85c850e9158b67fc498b934c3e05acffdd0db66a85f061f3a98b8b5f->leave($__internal_a5073c0c85c850e9158b67fc498b934c3e05acffdd0db66a85f061f3a98b8b5f_prof);

    }

    public function getTemplateName()
    {
        return "WebPaymentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 412,  557 => 411,  553 => 410,  549 => 409,  545 => 408,  541 => 407,  537 => 406,  533 => 405,  529 => 404,  525 => 403,  521 => 402,  517 => 401,  513 => 400,  509 => 399,  505 => 398,  501 => 397,  497 => 396,  493 => 395,  489 => 394,  463 => 371,  451 => 362,  439 => 353,  427 => 344,  415 => 335,  403 => 326,  391 => 317,  379 => 308,  367 => 299,  352 => 287,  144 => 82,  138 => 79,  134 => 78,  126 => 73,  122 => 72,  117 => 70,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Payments | HomeWork</title>*/
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
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990')}}" />*/
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
/* */
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
/*                     <li class="active">Payments</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="section-body">*/
/*                 <div class="card">*/
/* */
/*                     <!-- BEGIN SEARCH HEADER -->*/
/*                     <div class="card-head style-primary">*/
/*                         <div class="tools pull-left">*/
/*                             <header>Account balance</header>*/
/*                         </div><!--end .tools -->*/
/*                         <div class="tools">*/
/*                             <a class="btn btn-flat hidden-xs" data-toggle="modal" data-target="#formModal"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Recharge</a>*/
/*                         </div><!--end .tools -->*/
/* */
/*                     </div><!--end .card-head -->*/
/*                     <!-- END SEARCH HEADER -->*/
/*                     <!-- MODAL CODE -->*/
/*                     <!-- BEGIN FORM MODAL MARKUP -->*/
/*                     <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">*/
/*                         <div class="modal-dialog">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                     <center><h4 class="modal-title" id="formModalLabel">Recharge Amount</h4></center>*/
/*                                 </div>*/
/*                                 <form class="form-horizontal" role="form">*/
/*                                     <div class="modal-body">*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-sm-6">*/
/*                                                 <select id="card" name="card" class="form-control" required>*/
/*                                                     <option value="Paypal">Paypal</option>*/
/*                                                     <option value="MasterCard">MasterCard</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <input type="number" name="money" id="money" class="form-control" placeholder="USD $">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group" id="x1">*/
/*                                             <div class="col-sm-6">*/
/*                                                 <input type="text" name="cardname" id="cardname" class="form-control" placeholder="Full Name on Card">*/
/*                                             </div>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <input type="text" name="cardnumber" id="cardnumber" class="form-control" placeholder="Card Number">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group" id="x2">*/
/*                                             <div class="col-sm-3">*/
/*                                                 <select id="cardyear" name="cardyear" class="form-control" required>*/
/*                                                             <option value="2016" selected >2016</option>*/
/*                                                             <option value="2017"  >2017</option>*/
/*                                                             <option value="2018"  >2018</option>*/
/*                                                             <option value="2019"  >2019</option>*/
/*                                                             <option value="2020"  >2020</option>*/
/*                                                             <option value="2021"  >2021</option>*/
/*                                                             <option value="2022"  >2022</option>*/
/*                                                             <option value="2023"  >2023</option>*/
/*                                                             <option value="2024"  >2024</option>*/
/*                                                             <option value="2025"  >2025</option>*/
/*                                                             <option value="2026"  >2026</option>*/
/*                                                             <option value="2027"  >2027</option>*/
/*                                                             <option value="2028"  >2028</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <div class="col-sm-3">*/
/*                                                 <select id="cardmonth" name="cardmonth" class="form-control" required>*/
/*                                                             <option value="1">1</option>*/
/*                                                             <option value="2">2</option>*/
/*                                                             <option value="3">3</option>*/
/*                                                             <option value="4">4</option>*/
/*                                                             <option value="5" selected>5</option>*/
/*                                                             <option value="6">6</option>*/
/*                                                             <option value="7">7</option>*/
/*                                                             <option value="8">8</option>*/
/*                                                             <option value="9">9</option>*/
/*                                                             <option value="10">10</option>*/
/*                                                             <option value="11">11</option>*/
/*                                                             <option value="12">12</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <input type="text" name="cvc" id="cvc" class="form-control" placeholder="Security Code">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="modal-footer">*/
/*                                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/*                                         <button type="button" class="btn btn-primary">Recharge</button>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div><!-- /.modal-content -->*/
/*                         </div><!-- /.modal-dialog -->*/
/*                     </div><!-- /.modal -->*/
/*                     <!-- END FORM MODAL MARKUP -->*/
/* */
/*                     <!-- END MODAL CODE -->*/
/*                     <!-- BEGIN SEARCH RESULTS -->*/
/*                     <div class="card-body">*/
/*                         <div class="row">*/
/*                             <div class="col-md-3 col-sm-6 col-xs-12"><center>*/
/*                                     <h4>Total balance</h4>*/
/*                                     <div class="text-beta "><h3 class="text-ultra-bold">$0.00</h3></div>*/
/*                                     <div class="text-zeta copy">*/
/*                                         Full credits now, profits and balance also includes a commentator.*/
/*                                     </div></center>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6 col-xs-12"><center>*/
/*                                     <h4>Balance retractable</h4>*/
/*                                     <div class="text-beta "><h3 class="text-ultra-bold">$0.00</h3></div>*/
/*                                     <div class="text-zeta copy">*/
/*                                         Projects under way and any amount includes budget requested to withdraw and still under conversion, as well as your earnings in the last 14 days.*/
/*                                     </div></center>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6 col-xs-12"><center>*/
/*                                     <h4>Outstanding balance</h4>*/
/*                                     <div class="text-beta "><h3 class="text-ultra-bold">$0.00</h3></div>*/
/*                                     <div class="text-zeta copy">*/
/*                                         Balance which you can use to open new projects.*/
/*                                     </div></center>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6 col-xs-12"><center>*/
/*                                     <h4>Available balance</h4>*/
/*                                     <div class="text-beta "><h3 class="text-ultra-bold">$0.00</h3></div>*/
/*                                     <div class="text-zeta copy">*/
/*                                         The remaining amount of the profits made and can be withdrawn now.*/
/*                                     </div></center>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--end .card-body -->*/
/*                     <!-- END SEARCH RESULTS -->*/
/* */
/*                 </div><!--end .card -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- BEGIN SEARCH HEADER -->*/
/*                     <div class="card-head style-default-dark">*/
/*                         <div class="tools pull-left">*/
/*                             <header>Financial transactions</header>*/
/*                         </div><!--end .tools -->*/
/*                     </div><!--end .card-head -->*/
/*                     <!-- END SEARCH HEADER -->*/
/* */
/*                     <!-- BEGIN SEARCH RESULTS -->*/
/*                     <div class="card-body">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-12">*/
/*                                 <div class="table-responsive">*/
/*                                     <table id="datatable1" class="table table-striped table-hover">*/
/*                                         <thead>*/
/*                                         <tr>*/
/*                                             <th>N°</th>*/
/*                                             <th>Amount</th>*/
/*                                             <th>Details</th>*/
/*                                             <th class="sort-numeric">Date</th>*/
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         <tr><td></td><td></td><td><center> No transactions found !</center></td></tr>*/
/*                                         <tr></tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div><!--end .table-responsive -->*/
/*                             </div><!--end .col -->*/
/*                         </div>*/
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
/*                 <li>*/
/*                     <a href="{{ path('user_freelancers') }}">*/
/*                         <div class="gui-icon"><i class="fa fa-group"></i></div>*/
/*                         <span class="title">Freelancers</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END TABLES -->*/
/* */
/*                 <!-- BEGIN FORMS -->*/
/*                 <li class="active expanding">*/
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
/* <script src="{{asset('lib/js/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/libs/jquery-validation/dist/additional-methods.min.js')}}"></script>*/
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
/* <script src="{{asset('lib/js/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>*/
/* <script src="{{asset('lib/js/core/demo/DemoFormComponents.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/demo/DemoUIMessages.js')}}"></script>*/
/*     <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
