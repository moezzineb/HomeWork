<?php

/* WebProjectBundle:Default:activity.html.twig */
class __TwigTemplate_e18896024225dd02946bcf776733f2aab693358b611ae9d18a91fb5b90d75de7 extends Twig_Template
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
        $__internal_f086a29e90aee65edbc97a6f131fce72a6cd01711fb1ef4a7fa357e2b336548b = $this->env->getExtension("native_profiler");
        $__internal_f086a29e90aee65edbc97a6f131fce72a6cd01711fb1ef4a7fa357e2b336548b->enter($__internal_f086a29e90aee65edbc97a6f131fce72a6cd01711fb1ef4a7fa357e2b336548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProjectBundle:Default:activity.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>My Activity | HomeWork</title>

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
    <script type=\"text/javascript\" src=\"../../../assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"../../../assets/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed menubar-first \">

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
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"hédhi loula\" />
                                <span class=\"profile-info\">
                                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()), "html", null, true);
        echo "</small>
                                </span>
                    </a>
                    <ul class=\"dropdown-menu animation-zoom\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("user_profile");
        echo "\">Profile</a></li>
                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("edit_profile");
        echo "\">Edit</a></li>
                        <li class=\"divider\"></li>
                        <!--<li><a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>-->
                        <li><a href=\"";
        // line 77
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
                    <li class=\"active\">Activity /</li>
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
                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->

                    <!-- BEGIN TAB RESULTS -->
                    <ul class=\"card-head nav nav-tabs tabs-accent\" data-toggle=\"tabs\">
                        <li class=\"active\"><a href=\"#web1\">Projects</a></li>
                        <li><a href=\"#web2\">Offers</a></li>
                    </ul>
                    <!-- END TAB RESULTS -->

                    <!-- BEGIN TAB CONTENT -->
                    <div class=\"card-body tab-content style-default-bright\">
                        <div class=\"tab-pane active\" id=\"web1\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">

                                    <!-- BEGIN PAGE HEADER -->
                                    <div class=\"margin-bottom-xxl\">
                                        <span class=\"text-light text-lg\">Search results <strong>";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["cnt"]) ? $context["cnt"] : $this->getContext($context, "cnt")), "html", null, true);
        echo "</strong></span>
                                    </div><!--end .margin-bottom-xxl -->
                                    <!-- END PAGE HEADER -->

                                    <!-- BEGIN RESULT LIST -->
                                    <div class=\"list-results list-results-underlined\">
                                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mypro"]) ? $context["mypro"] : $this->getContext($context, "mypro")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 140
            echo "                                            <div class=\"col-xs-12\">
                                                <p>
                                                    ";
            // line 142
            if (($this->getAttribute($context["p"], "statut", array()) == "debut")) {
                // line 143
                echo "                                                        <span class=\"badge style-primary-dark\">Open</span>
                                                    ";
            } elseif (($this->getAttribute(            // line 144
$context["p"], "statut", array()) == "travaille")) {
                // line 145
                echo "                                                        <span class=\"badge style-warning\">Working</span>
                                                    ";
            } elseif (($this->getAttribute(            // line 146
$context["p"], "statut", array()) == "fin")) {
                // line 147
                echo "                                                        <span class=\"badge style-info\">Finished</span>
                                                    ";
            }
            // line 149
            echo "                                                    <a class=\"text-medium text-lg telib\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_propost_homepage", array("idProjet" => $this->getAttribute($context["p"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titre", array()), "html", null, true);
            echo "</a><br/>
                                                    <a class=\"opacity-75\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</a>
                                                </p>
                                                <div class=\"contain-xs pull-left\">
                                                    ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "
                                                </div>
                                            </div><!--end .col -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                    </div><!--end .list-results -->
                                    <!-- END RESULTS LIST -->

                                    <!-- BEGIN PAGING -->
                                    <div class=\"navigation\">
                                        ";
        // line 162
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["mypro"]) ? $context["mypro"] : $this->getContext($context, "mypro")));
        echo "
                                    </div>
                                    <!-- END PAGING -->

                                </div><!--end .col -->
                            </div><!--end .row -->
                        </div><!--end .tab-pane -->
                        <div class=\"tab-pane\" id=\"web2\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">

                                    <!-- BEGIN PAGE HEADER -->
                                    <div class=\"margin-bottom-xxl\">
                                        <span class=\"text-light text-lg\">Search results <strong>";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo "</strong></span>
                                    </div><!--end .margin-bottom-xxl -->
                                    <!-- END PAGE HEADER -->
                                    <!-- BEGIN RESULT LIST -->
                                    <div class=\"list-results list-results-underlined\">
                                        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pass"]) ? $context["pass"] : $this->getContext($context, "pass")));
        foreach ($context['_seq'] as $context["_key"] => $context["pa"]) {
            // line 181
            echo "                                            <div class=\"col-xs-12\">
                                                <p>
                                                    ";
            // line 183
            if (($this->getAttribute($context["pa"], "statut", array()) == "debut")) {
                // line 184
                echo "                                                        <span class=\"badge style-primary-dark\">Open</span>
                                                    ";
            } elseif (($this->getAttribute(            // line 185
$context["pa"], "statut", array()) == "travaille")) {
                // line 186
                echo "                                                        <span class=\"badge style-warning\">Working</span>
                                                    ";
            } elseif (($this->getAttribute(            // line 187
$context["pa"], "statut", array()) == "fin")) {
                // line 188
                echo "                                                        <span class=\"badge style-info\">Finished</span>
                                                    ";
            }
            // line 190
            echo "                                                    <a class=\"text-medium text-lg telib\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_propost_homepage", array("idProjet" => $this->getAttribute($context["pa"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pa"], "titre", array()), "html", null, true);
            echo "</a><br/>
                                                    <a class=\"opacity-75\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["pa"], "categorie", array()), "html", null, true);
            echo "</a>
                                                </p>
                                                <div class=\"contain-xs pull-left\">
                                                    ";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["pa"], "description", array()), "html", null, true);
            echo "
                                                </div>
                                            </div><!--end .col -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                                    </div><!--end .list-results -->
                                    <!-- END RESULTS LIST -->
                                    <!-- BEGIN PAGING -->
                                    <div class=\"navigation\">
                                        ";
        // line 202
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pass"]) ? $context["pass"] : $this->getContext($context, "pass")));
        echo "
                                    </div>
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
        // line 227
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
        // line 239
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
        // line 248
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
        // line 257
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
        // line 266
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
        // line 275
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
        // line 284
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
        // line 293
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
        // line 302
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
        // line 311
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
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/microtemplating/microtemplating.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/DemoPageSearch.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_f086a29e90aee65edbc97a6f131fce72a6cd01711fb1ef4a7fa357e2b336548b->leave($__internal_f086a29e90aee65edbc97a6f131fce72a6cd01711fb1ef4a7fa357e2b336548b_prof);

    }

    public function getTemplateName()
    {
        return "WebProjectBundle:Default:activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 349,  550 => 348,  546 => 347,  542 => 346,  538 => 345,  534 => 344,  530 => 343,  526 => 342,  522 => 341,  518 => 340,  514 => 339,  510 => 338,  506 => 337,  502 => 336,  498 => 335,  494 => 334,  468 => 311,  456 => 302,  444 => 293,  432 => 284,  420 => 275,  408 => 266,  396 => 257,  384 => 248,  372 => 239,  357 => 227,  329 => 202,  323 => 198,  313 => 194,  307 => 191,  300 => 190,  296 => 188,  294 => 187,  291 => 186,  289 => 185,  286 => 184,  284 => 183,  280 => 181,  276 => 180,  268 => 175,  252 => 162,  245 => 157,  235 => 153,  229 => 150,  222 => 149,  218 => 147,  216 => 146,  213 => 145,  211 => 144,  208 => 143,  206 => 142,  202 => 140,  198 => 139,  189 => 133,  130 => 77,  124 => 74,  120 => 73,  112 => 68,  108 => 67,  103 => 65,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>My Activity | HomeWork</title>*/
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
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="../../../assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="../../../assets/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed menubar-first ">*/
/* */
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
/*             <div class="section-header">*/
/*                 <ol class="breadcrumb">*/
/*                     <li class="active">Activity /</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="section-body contain-lg">*/
/*                 <div class="card tabs-left style-default-light">*/
/* */
/*                     <!-- BEGIN SEARCH HEADER -->*/
/*                     <div class="card-head style-primary">*/
/*                         <div class="tools pull-left">*/
/*                             <form class="navbar-search" role="search">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="contactSearch" placeholder="Enter your keyword">*/
/*                                 </div>*/
/*                                 <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div><!--end .card-head -->*/
/*                     <!-- END SEARCH HEADER -->*/
/* */
/*                     <!-- BEGIN TAB RESULTS -->*/
/*                     <ul class="card-head nav nav-tabs tabs-accent" data-toggle="tabs">*/
/*                         <li class="active"><a href="#web1">Projects</a></li>*/
/*                         <li><a href="#web2">Offers</a></li>*/
/*                     </ul>*/
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
/*                                         <span class="text-light text-lg">Search results <strong>{{ cnt }}</strong></span>*/
/*                                     </div><!--end .margin-bottom-xxl -->*/
/*                                     <!-- END PAGE HEADER -->*/
/* */
/*                                     <!-- BEGIN RESULT LIST -->*/
/*                                     <div class="list-results list-results-underlined">*/
/*                                         {% for p in mypro %}*/
/*                                             <div class="col-xs-12">*/
/*                                                 <p>*/
/*                                                     {% if p.statut == 'debut' %}*/
/*                                                         <span class="badge style-primary-dark">Open</span>*/
/*                                                     {% elseif p.statut == 'travaille' %}*/
/*                                                         <span class="badge style-warning">Working</span>*/
/*                                                     {% elseif p.statut == 'fin' %}*/
/*                                                         <span class="badge style-info">Finished</span>*/
/*                                                     {% endif %}*/
/*                                                     <a class="text-medium text-lg telib" href="{{ path('web_propost_homepage', {'idProjet' : p.idProjet}) }}">{{ p.titre }}</a><br/>*/
/*                                                     <a class="opacity-75">{{ p.categorie }}</a>*/
/*                                                 </p>*/
/*                                                 <div class="contain-xs pull-left">*/
/*                                                     {{ p.description }}*/
/*                                                 </div>*/
/*                                             </div><!--end .col -->*/
/*                                         {% endfor %}*/
/*                                     </div><!--end .list-results -->*/
/*                                     <!-- END RESULTS LIST -->*/
/* */
/*                                     <!-- BEGIN PAGING -->*/
/*                                     <div class="navigation">*/
/*                                         {{ knp_pagination_render(mypro) }}*/
/*                                     </div>*/
/*                                     <!-- END PAGING -->*/
/* */
/*                                 </div><!--end .col -->*/
/*                             </div><!--end .row -->*/
/*                         </div><!--end .tab-pane -->*/
/*                         <div class="tab-pane" id="web2">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/* */
/*                                     <!-- BEGIN PAGE HEADER -->*/
/*                                     <div class="margin-bottom-xxl">*/
/*                                         <span class="text-light text-lg">Search results <strong>{{ count }}</strong></span>*/
/*                                     </div><!--end .margin-bottom-xxl -->*/
/*                                     <!-- END PAGE HEADER -->*/
/*                                     <!-- BEGIN RESULT LIST -->*/
/*                                     <div class="list-results list-results-underlined">*/
/*                                         {% for pa in pass %}*/
/*                                             <div class="col-xs-12">*/
/*                                                 <p>*/
/*                                                     {% if pa.statut == 'debut' %}*/
/*                                                         <span class="badge style-primary-dark">Open</span>*/
/*                                                     {% elseif pa.statut == 'travaille' %}*/
/*                                                         <span class="badge style-warning">Working</span>*/
/*                                                     {% elseif pa.statut == 'fin' %}*/
/*                                                         <span class="badge style-info">Finished</span>*/
/*                                                     {% endif %}*/
/*                                                     <a class="text-medium text-lg telib" href="{{ path('web_propost_homepage', {'idProjet' : pa.idProjet}) }}">{{ pa.titre }}</a><br/>*/
/*                                                     <a class="opacity-75">{{ pa.categorie }}</a>*/
/*                                                 </p>*/
/*                                                 <div class="contain-xs pull-left">*/
/*                                                     {{ pa.description }}*/
/*                                                 </div>*/
/*                                             </div><!--end .col -->*/
/*                                         {% endfor %}*/
/*                                     </div><!--end .list-results -->*/
/*                                     <!-- END RESULTS LIST -->*/
/*                                     <!-- BEGIN PAGING -->*/
/*                                     <div class="navigation">*/
/*                                         {{ knp_pagination_render(pass) }}*/
/*                                     </div>*/
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
