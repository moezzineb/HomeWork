<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_12941b7b0625eeef564112eee3cd486edcfdb8700c5951c3573971c64ce57ac5 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenom", array()), "html", null, true);
        echo " | HomeWork</title>

    <!-- BEGIN META -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"your,keywords\">
    <meta name=\"description\" content=\"Short explanation about this website\">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/bootstrap.css?1422792965"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/materialadmin.css?1425466319"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/font-awesome.min.css?1422529194"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/material-design-iconic-font.min.css?1421434286"), "html", null, true);
        echo "\" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"../../assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed menubar-first \">

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
                        <img src=\"../img/avatar1.jpg?1403934956\" alt=\"hédhi loula\" />
\t\t\t\t\t\t\t\t<span class=\"profile-info\">
                                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "type", array()), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t\t</span>
                    </a>
                    <ul class=\"dropdown-menu animation-dock\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"./profile.html\">Profile</a></li>
                        <li><a href=\"#\">Edit</a></li>
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

        <!-- BEGIN PROFILE HEADER -->
        <section class=\"full-bleed\">
            <div class=\"section-body style-default-dark force-padding text-shadow\">
                <div class=\"img-backdrop\" style=\"background-image: url(";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/img16.jpg"), "html", null, true);
        echo ")\"></div>
                <div class=\"overlay overlay-shade-top stick-top-left height-3\"></div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-xs-5\">
                        <center><img class=\"img-circle border-white border-xl img-responsive\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) . "/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "path", array()))), "html", null, true);
        echo "\" alt=\"\" height=\"140px\" width=\"140px\" />
                            <h3>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenom", array()), "html", null, true);
        echo "<br/><small>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "speciality", array()), "html", null, true);
        echo "</small></h3></center>
                    </div><!--end .col -->
                    <!--<div class=\"col-md-9 col-xs-7\">
                        <div class=\"width-3 text-center pull-right\">
                            <strong class=\"text-xl\">643</strong><br/>
                            <span class=\"text-light opacity-75\">followers</span>
                        </div>
                        <div class=\"width-3 text-center pull-right\">
                            <strong class=\"text-xl\">108</strong><br/>
                            <span class=\"text-light opacity-75\">following</span>
                        </div>
                    </div>-->
                </div><!--end .row -->
                <div class=\"overlay overlay-shade-bottom stick-bottom-left force-padding text-right\">
                    <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("user_recomplete");
        echo "\" class=\"btn btn-raised btn-primary\"><i class=\"md-settings\"></i> Settings</a>
                </div>
            </div><!--end .section-body -->
        </section>
        <!-- END PROFILE HEADER  -->

        <section>
            <div class=\"section-body no-margin\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card tabs-left style-default-light\">
                            <ul class=\"card-head nav nav-tabs text-center\" data-toggle=\"\">
                                <li class=\"active\"><a href=\"#first5\"><i class=\"fa fa-lg fa-user\"></i><br/><h4>Profile<br/><small>Personal details</small></h4></a></li>
                                <li><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("user_edit");
        echo "\"><i class=\"fa fa-lg fa-lock\"></i><br/><h4>Password<br/><small>Reset</small></h4></a></li>
                                <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("web_tag_homepage");
        echo "\"><i class=\"fa fa-lg fa-code\"></i><br/><h4>Skills<br/><small>Pratices</small></h4></a></li>
                            </ul>

                            <div class=\"card-body tab-content style-default-bright\">
                                <div class=\"tab-pane active\" id=\"first5\">
                                    <h3 class=\"text-light\">";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenom", array()), "html", null, true);
        echo "</strong></h3>
                                    <p>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "biolographie", array()), "html", null, true);
        echo "</p>
                                    <dl class=\"dl-horizontal\">
                                        <dt>Username</dt>
                                        <dd>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</dd>
                                        <dt>Email</dt>
                                        <dd>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "</dd>
                                        <dt>Phone N°</dt>
                                        <dd>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "telephone", array()), "html", null, true);
        echo "</dd>
                                        <dt>Adress</dt>
                                        <dd>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "country", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "city", array()), "html", null, true);
        echo "</dd>
                                        <dt>Specialized</dt>
                                        <dd>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "speciality", array()), "html", null, true);
        echo "</dd>
                                        <br><br>
                                    </dl>
                                </div>
                                <div class=\"tab-pane\" id=\"second5\">
                                    <h1><i class=\"fa fa-fw fa-clock-o text-accent\"></i> History</h1>
                                    <p class=\"lead\">Ad ius duis dissentiunt, an sit harum primis persecuti, adipisci tacimates mediocrem sit et. Id illud voluptaria omittantur qui, te affert nostro mel. Cu conceptam vituperata temporibus has.</p>
                                    <p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                </div>
                                <div class=\"tab-pane\" id=\"third5\"><p>Duo semper accumsan ea, quidam convenire cum cu, oportere maiestatis incorrupte est eu. Soluta audiam timeam ius te, idque gubergren forensibus ad mel, persius urbanitas usu id. Civibus nostrum fabellas mea te, ne pri lucilius iudicabit. Ut cibo semper vituperatoribus vix, cum in error elitr. Vix molestiae intellegat omittantur an, nam cu modo ullum scriptorem.</p>
                                    <p>Quod option numquam vel in, et fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Dicant vituperata consequuntur at sea, mazim commodo</p>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END LAYOUT LEFT SIDEBAR -->

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
                <a href=\"../../html/dashboards/dashboard.html\">
                    <span class=\"text-lg text-bold text-primary \">HOMEWORK</span>
                </a>
            </div>
        </div>
        <div class=\"menubar-scroll-panel\">

            <!-- BEGIN MAIN MENU -->
            <ul id=\"main-menu\" class=\"gui-controls\">

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href=\"../../html/dashboards/dashboard.html\" >
                        <div class=\"gui-icon\"><i class=\"md md-home\"></i></div>
                        <span class=\"title\">Dashboard</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN EMAIL -->
                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"md md-email\"></i></div>
                        <span class=\"title\">Email</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href=\"../../html/mail/inbox.html\" ><span class=\"title\">Inbox</span></a></li>
                        <li><a href=\"../../html/mail/compose.html\" ><span class=\"title\">Compose</span></a></li>
                        <li><a href=\"../../html/mail/reply.html\" ><span class=\"title\">Reply</span></a></li>
                        <li><a href=\"../../html/mail/message.html\" ><span class=\"title\">View message</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END EMAIL -->

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href=\"../../html/layouts/builder.html\" >
                        <div class=\"gui-icon\"><i class=\"md md-web\"></i></div>
                        <span class=\"title\">Layouts</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN UI -->
                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"fa fa-puzzle-piece fa-fw\"></i></div>
                        <span class=\"title\">UI elements</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href=\"../../html/ui/colors.html\" ><span class=\"title\">Colors</span></a></li>
                        <li><a href=\"../../html/ui/typography.html\" ><span class=\"title\">Typography</span></a></li>
                        <li><a href=\"../../html/ui/cards.html\" ><span class=\"title\">Cards</span></a></li>
                        <li><a href=\"../../html/ui/buttons.html\" ><span class=\"title\">Buttons</span></a></li>
                        <li><a href=\"../../html/ui/lists.html\" ><span class=\"title\">Lists</span></a></li>
                        <li><a href=\"../../html/ui/tabs.html\" ><span class=\"title\">Tabs</span></a></li>
                        <li><a href=\"../../html/ui/accordions.html\" ><span class=\"title\">Accordions</span></a></li>
                        <li><a href=\"../../html/ui/messages.html\" ><span class=\"title\">Messages</span></a></li>
                        <li><a href=\"../../html/ui/offcanvas.html\" ><span class=\"title\">Off-canvas</span></a></li>
                        <li><a href=\"../../html/ui/grid.html\" ><span class=\"title\">Grid</span></a></li>
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Icons</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"../../html/ui/icons/materialicons.html\" ><span class=\"title\">Material Design Icons</span></a></li>
                                <li><a href=\"../../html/ui/icons/fontawesome.html\" ><span class=\"title\">Font Awesome</span></a></li>
                                <li><a href=\"../../html/ui/icons/glyphicons.html\" ><span class=\"title\">Glyphicons</span></a></li>
                                <li><a href=\"../../html/ui/icons/skycons.html\" ><span class=\"title\">Skycons</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END UI -->

                <!-- BEGIN TABLES -->
                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"fa fa-table\"></i></div>
                        <span class=\"title\">Tables</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href=\"../../html/tables/static.html\" ><span class=\"title\">Static Tables</span></a></li>
                        <li><a href=\"../../html/tables/dynamic.html\" ><span class=\"title\">Dynamic Tables</span></a></li>
                        <li><a href=\"../../html/tables/responsive.html\" ><span class=\"title\">Responsive Table</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END TABLES -->

                <!-- BEGIN FORMS -->
                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><span class=\"glyphicon glyphicon-list-alt\"></span></div>
                        <span class=\"title\">Forms</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href=\"../../html/forms/basic.html\" ><span class=\"title\">Form basic</span></a></li>
                        <li><a href=\"../../html/forms/advanced.html\" ><span class=\"title\">Form advanced</span></a></li>
                        <li><a href=\"../../html/forms/layouts.html\" ><span class=\"title\">Form layouts</span></a></li>
                        <li><a href=\"../../html/forms/editors.html\" ><span class=\"title\">Editors</span></a></li>
                        <li><a href=\"../../html/forms/validation.html\" ><span class=\"title\">Form validation</span></a></li>
                        <li><a href=\"../../html/forms/wizard.html\" ><span class=\"title\">Form wizard</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN PAGES -->
                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"md md-computer\"></i></div>
                        <span class=\"title\">Pages</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Contacts</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"../../html/pages/contacts/search.html\" ><span class=\"title\">Search</span></a></li>
                                <li><a href=\"../../html/pages/contacts/details.html\" ><span class=\"title\">Contact card</span></a></li>
                                <li><a href=\"../../html/pages/contacts/add.html\" ><span class=\"title\">Insert contact</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Search</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"../../html/pages/search/results-text.html\" ><span class=\"title\">Results - Text</span></a></li>
                                <li><a href=\"../../html/pages/search/results-text-image.html\" ><span class=\"title\">Results - Text and Image</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Blog</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"../../html/pages/blog/masonry.html\" ><span class=\"title\">Blog masonry</span></a></li>
                                <li><a href=\"../../html/pages/blog/list.html\" ><span class=\"title\">Blog list</span></a></li>
                                <li><a href=\"../../html/pages/blog/post.html\" ><span class=\"title\">Blog post</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Error pages</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"../../html/pages/404.html\" ><span class=\"title\">404 page</span></a></li>
                                <li><a href=\"../../html/pages/500.html\" ><span class=\"title\">500 page</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li><a href=\"../../html/pages/profile.html\" class=\"active\"><span class=\"title\">User profile<span class=\"badge style-accent\">42</span></span></a></li>
                        <li><a href=\"../../html/pages/invoice.html\" ><span class=\"title\">Invoice</span></a></li>
                        <li><a href=\"../../html/pages/calendar.html\" ><span class=\"title\">Calendar</span></a></li>
                        <li><a href=\"../../html/pages/pricing.html\" ><span class=\"title\">Pricing</span></a></li>
                        <li><a href=\"../../html/pages/timeline.html\" ><span class=\"title\">Timeline</span></a></li>
                        <li><a href=\"../../html/pages/maps.html\" ><span class=\"title\">Maps</span></a></li>
                        <li><a href=\"../../html/pages/locked.html\" ><span class=\"title\">Lock screen</span></a></li>
                        <li><a href=\"../../html/pages/login.html\" ><span class=\"title\">Login</span></a></li>
                        <li><a href=\"../../html/pages/blank.html\" ><span class=\"title\">Blank page</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN CHARTS -->
                <li>
                    <a href=\"../../html/charts/charts.html\" >
                        <div class=\"gui-icon\"><i class=\"md md-assessment\"></i></div>
                        <span class=\"title\">Charts</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END CHARTS -->

                <!-- BEGIN LEVELS -->
                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"fa fa-folder-open fa-fw\"></i></div>
                        <span class=\"title\">Menu levels demo</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href=\"#\"><span class=\"title\">Item 1</span></a></li>
                        <li><a href=\"#\"><span class=\"title\">Item 1</span></a></li>
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Open level 2</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"#\"><span class=\"title\">Item 2</span></a></li>
                                <li class=\"gui-folder\">
                                    <a href=\"javascript:void(0);\">
                                        <span class=\"title\">Open level 3</span>
                                    </a>
                                    <!--start submenu -->
                                    <ul>
                                        <li><a href=\"#\"><span class=\"title\">Item 3</span></a></li>
                                        <li><a href=\"#\"><span class=\"title\">Item 3</span></a></li>
                                        <li class=\"gui-folder\">
                                            <a href=\"javascript:void(0);\">
                                                <span class=\"title\">Open level 4</span>
                                            </a>
                                            <!--start submenu -->
                                            <ul>
                                                <li><a href=\"#\"><span class=\"title\">Item 4</span></a></li>
                                                <li class=\"gui-folder\">
                                                    <a href=\"javascript:void(0);\">
                                                        <span class=\"title\">Open level 5</span>
                                                    </a>
                                                    <!--start submenu -->
                                                    <ul>
                                                        <li><a href=\"#\"><span class=\"title\">Item 5</span></a></li>
                                                        <li><a href=\"#\"><span class=\"title\">Item 5</span></a></li>
                                                    </ul><!--end /submenu -->
                                                </li><!--end /submenu-li -->
                                            </ul><!--end /submenu -->
                                        </li><!--end /submenu-li -->
                                    </ul><!--end /submenu -->
                                </li><!--end /submenu-li -->
                            </ul><!--end /submenu -->
                        </li><!--end /submenu-li -->
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END LEVELS -->

            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class=\"menubar-foot-panel\">
                <small class=\"no-linebreak hidden-folded\">
                    <span class=\"opacity-75\">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->

    

        

</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 450,  578 => 449,  574 => 448,  570 => 447,  566 => 446,  562 => 445,  558 => 444,  554 => 443,  550 => 442,  546 => 441,  542 => 440,  538 => 439,  534 => 438,  530 => 437,  240 => 150,  233 => 148,  228 => 146,  223 => 144,  218 => 142,  212 => 139,  206 => 138,  198 => 133,  194 => 132,  178 => 119,  157 => 105,  153 => 104,  146 => 100,  120 => 77,  108 => 68,  104 => 67,  52 => 18,  48 => 17,  44 => 16,  40 => 15,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>{{ app.user.nom }} {{ app.user.prenom }} | HomeWork</title>*/
/* */
/*     <!-- BEGIN META -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="keywords" content="your,keywords">*/
/*     <meta name="description" content="Short explanation about this website">*/
/*     <!-- END META -->*/
/* */
/*     <!-- BEGIN STYLESHEETS -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/bootstrap.css?1422792965')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/materialadmin.css?1425466319')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/font-awesome.min.css?1422529194')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />*/
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed menubar-first ">*/
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
/*                             </ul><!--end .header-nav-options -->*/
/*             <ul class="header-nav header-nav-profile">*/
/*                 <li class="dropdown">*/
/*                     <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                         <img src="../img/avatar1.jpg?1403934956" alt="hédhi loula" />*/
/* 								<span class="profile-info">*/
/*                                     {{ app.user.username }}*/
/*                                     <small>{{ app.user.type }}</small>*/
/* 								</span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu animation-dock">*/
/*                         <li class="dropdown-header">Config</li>*/
/*                         <li><a href="./profile.html">Profile</a></li>*/
/*                         <li><a href="#">Edit</a></li>*/
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
/* */
/*         <!-- BEGIN PROFILE HEADER -->*/
/*         <section class="full-bleed">*/
/*             <div class="section-body style-default-dark force-padding text-shadow">*/
/*                 <div class="img-backdrop" style="background-image: url({{asset  ('lib/img/img16.jpg')}})"></div>*/
/*                 <div class="overlay overlay-shade-top stick-top-left height-3"></div>*/
/*                 <div class="row">*/
/*                     <div class="col-md-3 col-xs-5">*/
/*                         <center><img class="img-circle border-white border-xl img-responsive" src="{{ asset('uploads/profile/' ~ user.id ~'/' ~ user.path)}}" alt="" height="140px" width="140px" />*/
/*                             <h3>{{ app.user.nom }} {{ app.user.prenom}}<br/><small>{{ app.user.speciality }}</small></h3></center>*/
/*                     </div><!--end .col -->*/
/*                     <!--<div class="col-md-9 col-xs-7">*/
/*                         <div class="width-3 text-center pull-right">*/
/*                             <strong class="text-xl">643</strong><br/>*/
/*                             <span class="text-light opacity-75">followers</span>*/
/*                         </div>*/
/*                         <div class="width-3 text-center pull-right">*/
/*                             <strong class="text-xl">108</strong><br/>*/
/*                             <span class="text-light opacity-75">following</span>*/
/*                         </div>*/
/*                     </div>-->*/
/*                 </div><!--end .row -->*/
/*                 <div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">*/
/*                     <a href="{{ path('user_recomplete') }}" class="btn btn-raised btn-primary"><i class="md-settings"></i> Settings</a>*/
/*                 </div>*/
/*             </div><!--end .section-body -->*/
/*         </section>*/
/*         <!-- END PROFILE HEADER  -->*/
/* */
/*         <section>*/
/*             <div class="section-body no-margin">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="card tabs-left style-default-light">*/
/*                             <ul class="card-head nav nav-tabs text-center" data-toggle="">*/
/*                                 <li class="active"><a href="#first5"><i class="fa fa-lg fa-user"></i><br/><h4>Profile<br/><small>Personal details</small></h4></a></li>*/
/*                                 <li><a href="{{ path('user_edit') }}"><i class="fa fa-lg fa-lock"></i><br/><h4>Password<br/><small>Reset</small></h4></a></li>*/
/*                                 <li><a href="{{ path('web_tag_homepage') }}"><i class="fa fa-lg fa-code"></i><br/><h4>Skills<br/><small>Pratices</small></h4></a></li>*/
/*                             </ul>*/
/* */
/*                             <div class="card-body tab-content style-default-bright">*/
/*                                 <div class="tab-pane active" id="first5">*/
/*                                     <h3 class="text-light">{{ app.user.nom }} <strong>{{ app.user.prenom}}</strong></h3>*/
/*                                     <p>{{ app.user.biolographie }}</p>*/
/*                                     <dl class="dl-horizontal">*/
/*                                         <dt>Username</dt>*/
/*                                         <dd>{{ app.user.username }}</dd>*/
/*                                         <dt>Email</dt>*/
/*                                         <dd>{{ app.user.email }}</dd>*/
/*                                         <dt>Phone N°</dt>*/
/*                                         <dd>{{ app.user.telephone }}</dd>*/
/*                                         <dt>Adress</dt>*/
/*                                         <dd>{{ app.user.country }} {{ app.user.city }}</dd>*/
/*                                         <dt>Specialized</dt>*/
/*                                         <dd>{{ app.user.speciality }}</dd>*/
/*                                         <br><br>*/
/*                                     </dl>*/
/*                                 </div>*/
/*                                 <div class="tab-pane" id="second5">*/
/*                                     <h1><i class="fa fa-fw fa-clock-o text-accent"></i> History</h1>*/
/*                                     <p class="lead">Ad ius duis dissentiunt, an sit harum primis persecuti, adipisci tacimates mediocrem sit et. Id illud voluptaria omittantur qui, te affert nostro mel. Cu conceptam vituperata temporibus has.</p>*/
/*                                     <p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>*/
/*                                 </div>*/
/*                                 <div class="tab-pane" id="third5"><p>Duo semper accumsan ea, quidam convenire cum cu, oportere maiestatis incorrupte est eu. Soluta audiam timeam ius te, idque gubergren forensibus ad mel, persius urbanitas usu id. Civibus nostrum fabellas mea te, ne pri lucilius iudicabit. Ut cibo semper vituperatoribus vix, cum in error elitr. Vix molestiae intellegat omittantur an, nam cu modo ullum scriptorem.</p>*/
/*                                     <p>Quod option numquam vel in, et fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Dicant vituperata consequuntur at sea, mazim commodo</p>*/
/*                                 </div>*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                     <!-- END LAYOUT LEFT SIDEBAR -->*/
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
/*                 <a href="../../html/dashboards/dashboard.html">*/
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
/*                     <a href="../../html/dashboards/dashboard.html" >*/
/*                         <div class="gui-icon"><i class="md md-home"></i></div>*/
/*                         <span class="title">Dashboard</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END DASHBOARD -->*/
/* */
/*                 <!-- BEGIN EMAIL -->*/
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="md md-email"></i></div>*/
/*                         <span class="title">Email</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="../../html/mail/inbox.html" ><span class="title">Inbox</span></a></li>*/
/*                         <li><a href="../../html/mail/compose.html" ><span class="title">Compose</span></a></li>*/
/*                         <li><a href="../../html/mail/reply.html" ><span class="title">Reply</span></a></li>*/
/*                         <li><a href="../../html/mail/message.html" ><span class="title">View message</span></a></li>*/
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END EMAIL -->*/
/* */
/*                 <!-- BEGIN DASHBOARD -->*/
/*                 <li>*/
/*                     <a href="../../html/layouts/builder.html" >*/
/*                         <div class="gui-icon"><i class="md md-web"></i></div>*/
/*                         <span class="title">Layouts</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END DASHBOARD -->*/
/* */
/*                 <!-- BEGIN UI -->*/
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>*/
/*                         <span class="title">UI elements</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="../../html/ui/colors.html" ><span class="title">Colors</span></a></li>*/
/*                         <li><a href="../../html/ui/typography.html" ><span class="title">Typography</span></a></li>*/
/*                         <li><a href="../../html/ui/cards.html" ><span class="title">Cards</span></a></li>*/
/*                         <li><a href="../../html/ui/buttons.html" ><span class="title">Buttons</span></a></li>*/
/*                         <li><a href="../../html/ui/lists.html" ><span class="title">Lists</span></a></li>*/
/*                         <li><a href="../../html/ui/tabs.html" ><span class="title">Tabs</span></a></li>*/
/*                         <li><a href="../../html/ui/accordions.html" ><span class="title">Accordions</span></a></li>*/
/*                         <li><a href="../../html/ui/messages.html" ><span class="title">Messages</span></a></li>*/
/*                         <li><a href="../../html/ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>*/
/*                         <li><a href="../../html/ui/grid.html" ><span class="title">Grid</span></a></li>*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Icons</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="../../html/ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>*/
/*                                 <li><a href="../../html/ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>*/
/*                                 <li><a href="../../html/ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>*/
/*                                 <li><a href="../../html/ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END UI -->*/
/* */
/*                 <!-- BEGIN TABLES -->*/
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="fa fa-table"></i></div>*/
/*                         <span class="title">Tables</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="../../html/tables/static.html" ><span class="title">Static Tables</span></a></li>*/
/*                         <li><a href="../../html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>*/
/*                         <li><a href="../../html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>*/
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END TABLES -->*/
/* */
/*                 <!-- BEGIN FORMS -->*/
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>*/
/*                         <span class="title">Forms</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="../../html/forms/basic.html" ><span class="title">Form basic</span></a></li>*/
/*                         <li><a href="../../html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>*/
/*                         <li><a href="../../html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>*/
/*                         <li><a href="../../html/forms/editors.html" ><span class="title">Editors</span></a></li>*/
/*                         <li><a href="../../html/forms/validation.html" ><span class="title">Form validation</span></a></li>*/
/*                         <li><a href="../../html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>*/
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END FORMS -->*/
/* */
/*                 <!-- BEGIN PAGES -->*/
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="md md-computer"></i></div>*/
/*                         <span class="title">Pages</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Contacts</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="../../html/pages/contacts/search.html" ><span class="title">Search</span></a></li>*/
/*                                 <li><a href="../../html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>*/
/*                                 <li><a href="../../html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Search</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="../../html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>*/
/*                                 <li><a href="../../html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Blog</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="../../html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>*/
/*                                 <li><a href="../../html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>*/
/*                                 <li><a href="../../html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Error pages</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="../../html/pages/404.html" ><span class="title">404 page</span></a></li>*/
/*                                 <li><a href="../../html/pages/500.html" ><span class="title">500 page</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/*                         <li><a href="../../html/pages/profile.html" class="active"><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>*/
/*                         <li><a href="../../html/pages/invoice.html" ><span class="title">Invoice</span></a></li>*/
/*                         <li><a href="../../html/pages/calendar.html" ><span class="title">Calendar</span></a></li>*/
/*                         <li><a href="../../html/pages/pricing.html" ><span class="title">Pricing</span></a></li>*/
/*                         <li><a href="../../html/pages/timeline.html" ><span class="title">Timeline</span></a></li>*/
/*                         <li><a href="../../html/pages/maps.html" ><span class="title">Maps</span></a></li>*/
/*                         <li><a href="../../html/pages/locked.html" ><span class="title">Lock screen</span></a></li>*/
/*                         <li><a href="../../html/pages/login.html" ><span class="title">Login</span></a></li>*/
/*                         <li><a href="../../html/pages/blank.html" ><span class="title">Blank page</span></a></li>*/
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END FORMS -->*/
/* */
/*                 <!-- BEGIN CHARTS -->*/
/*                 <li>*/
/*                     <a href="../../html/charts/charts.html" >*/
/*                         <div class="gui-icon"><i class="md md-assessment"></i></div>*/
/*                         <span class="title">Charts</span>*/
/*                     </a>*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END CHARTS -->*/
/* */
/*                 <!-- BEGIN LEVELS -->*/
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>*/
/*                         <span class="title">Menu levels demo</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="#"><span class="title">Item 1</span></a></li>*/
/*                         <li><a href="#"><span class="title">Item 1</span></a></li>*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Open level 2</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="#"><span class="title">Item 2</span></a></li>*/
/*                                 <li class="gui-folder">*/
/*                                     <a href="javascript:void(0);">*/
/*                                         <span class="title">Open level 3</span>*/
/*                                     </a>*/
/*                                     <!--start submenu -->*/
/*                                     <ul>*/
/*                                         <li><a href="#"><span class="title">Item 3</span></a></li>*/
/*                                         <li><a href="#"><span class="title">Item 3</span></a></li>*/
/*                                         <li class="gui-folder">*/
/*                                             <a href="javascript:void(0);">*/
/*                                                 <span class="title">Open level 4</span>*/
/*                                             </a>*/
/*                                             <!--start submenu -->*/
/*                                             <ul>*/
/*                                                 <li><a href="#"><span class="title">Item 4</span></a></li>*/
/*                                                 <li class="gui-folder">*/
/*                                                     <a href="javascript:void(0);">*/
/*                                                         <span class="title">Open level 5</span>*/
/*                                                     </a>*/
/*                                                     <!--start submenu -->*/
/*                                                     <ul>*/
/*                                                         <li><a href="#"><span class="title">Item 5</span></a></li>*/
/*                                                         <li><a href="#"><span class="title">Item 5</span></a></li>*/
/*                                                     </ul><!--end /submenu -->*/
/*                                                 </li><!--end /submenu-li -->*/
/*                                             </ul><!--end /submenu -->*/
/*                                         </li><!--end /submenu-li -->*/
/*                                     </ul><!--end /submenu -->*/
/*                                 </li><!--end /submenu-li -->*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /submenu-li -->*/
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <!-- END LEVELS -->*/
/* */
/*             </ul><!--end .main-menu -->*/
/*             <!-- END MAIN MENU -->*/
/* */
/*             <div class="menubar-foot-panel">*/
/*                 <small class="no-linebreak hidden-folded">*/
/*                     <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>*/
/*                 </small>*/
/*             </div>*/
/*         </div><!--end .menubar-scroll-panel-->*/
/*     </div><!--end #menubar-->*/
/*     <!-- END MENUBAR -->*/
/* */
/*     */
/* */
/*         */
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
/* <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
