<?php

/* WebProjectBundle:Default:post.html.twig */
class __TwigTemplate_777d3b15fe0526fe3c68f3cc7ef3b3fae1c8292b9a7fc3e677242a53310068e8 extends Twig_Template
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
        $__internal_d0eb7af5dec533eb0ea4e8b41d5eecdeaacda20bb5f1cbb35030de5ca584bace = $this->env->getExtension("native_profiler");
        $__internal_d0eb7af5dec533eb0ea4e8b41d5eecdeaacda20bb5f1cbb35030de5ca584bace->enter($__internal_d0eb7af5dec533eb0ea4e8b41d5eecdeaacda20bb5f1cbb35030de5ca584bace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProjectBundle:Default:post.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "titre", array()), "html", null, true);
        echo " | HomeWork</title>

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
<body class=\"menubar-hoverable header-fixed menubar-first \">

<!-- BEGIN HEADER-->
<header id=\"header\">
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
        // line 66
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 67
            echo "                <ul class=\"header-nav header-nav-profile\">
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
                </ul>
            ";
        } else {
            // line 87
            echo "                <ul class=\"header-nav header-nav-options\">
                    <li class=\"dropdown hidden-xs\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-icon-toggle btn-default\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-sign-in\"></i>
                        </a>
                        <ul class=\"dropdown-menu animation-zoom\">
                            <li class=\"dropdown-header\">Authentification</li>
                            <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul>
            ";
        }
        // line 100
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
                    <li><a href=\"../../../html/pages/blog/masonry.html\">Projects</a></li>
                    <li class=\"active\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "titre", array()), "html", null, true);
        echo "</li>
                </ol>
            </div>
            <div class=\"section-body contain-lg\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card card-tiles style-default-light\">

                            <!-- BEGIN BLOG POST HEADER -->
                            <div class=\"row style-primary\">
                                <div class=\"col-sm-9\">
                                    <div class=\"card-body style-default-dark\">
                                        <h2>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "titre", array()), "html", null, true);
        echo "</h2>
                                        <div class=\"text-default-light\">Posted by <a href=\"#\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idAbonne", array()), "html", null, true);
        echo "</a></div>
                                    </div>
                                </div><!--end .col -->
                                <div class=\"col-sm-3\">
                                    <div class=\"card-body\">
                                        <div class=\"hidden-xs\">
                                            <h3 class=\"text-light\"><strong>";
        // line 139
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateDebut", array()), "d"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateDebut", array()), "F"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateDebut", array()), "Y"), "html", null, true);
        echo "</strong></h3>
                                            ";
        // line 140
        if (($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "debut")) {
            // line 141
            echo "                                            <span class=\"badge style-primary-dark\">Recieve offers</span>
                                            ";
        } elseif (($this->getAttribute(        // line 142
(isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "travaille")) {
            // line 143
            echo "                                                <span class=\"badge style-warning\">Work in progress</span>
                                            ";
        } elseif (($this->getAttribute(        // line 144
(isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "fin")) {
            // line 145
            echo "                                                <span class=\"badge style-info\">Finished</span>
                                            ";
        }
        // line 147
        echo "                                            ";
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idAbonne", array())))) {
            // line 148
            echo "                                            <div class=\"stick-top-right\">
                                                <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_propost_edit", array("idProjet" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idProjet", array()))), "html", null, true);
            echo " \" class=\"btn btn-icon-toggle\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Modify your project\"><i class=\"fa fa-edit\"></i></a>
                                            </div>
                                            ";
        }
        // line 152
        echo "                                        </div>
                                        <div class=\"visible-xs\">
                                            <strong>";
        // line 154
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateDebut", array()), "d"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateDebut", array()), "F"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateDebut", array()), "Y"), "html", null, true);
        echo "</strong><a href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                </div><!--end .col -->
                            </div><!--end .row -->
                            <!-- END BLOG POST HEADER -->

                            <div class=\"row\">

                                <!-- BEGIN BLOG POST TEXT -->
                                <div class=\"col-md-9\">
                                    <article class=\"style-default-bright\">

                                        <div class=\"card-body\">
                                            <p class=\"lead\">";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "description", array()), "html", null, true);
        echo "</p>
                                            <br/>
                                            <div class=\"well clearfix\">
                                                <h4>Project Owner : ";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idAbonne", array()), "html", null, true);
        echo "</h4>
                                                <img class=\"height-3 pull-right img-circle\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idAbonne", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idAbonne", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"\" height=\"140px\" width=\"140px\"/>
                                                <p>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idAbonne", array()), "biolographie", array()), "html", null, true);
        echo "</p>
                                            </div>
                                            ";
        // line 175
        if (((($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "choix") || ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "travaille")) || ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "fin"))) {
            // line 176
            echo "                                            <div class=\"well clearfix\">
                                                <h4>Freelancer : ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free")), "username", array()), "html", null, true);
            echo "</h4>
                                                <img class=\"height-3 pull-right img-circle\" src=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free")), "id", array())) . "/") . $this->getAttribute((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free")), "path", array()))), "html", null, true);
            echo "\" alt=\"\" height=\"140px\" width=\"140px\"/>
                                                <p>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free")), "biolographie", array()), "html", null, true);
            echo "</p>
                                            </div>
                                            ";
        }
        // line 182
        echo "                                        </div><!--end .card-body -->
                                    </article>
                                </div><!--end .col -->
                                <!-- END BLOG POST TEXT -->

                                <!-- BEGIN BLOG POST MENUBAR -->
                                <div class=\"col-md-3\">
                                    <div class=\"card-body\">
                                        <h3 class=\"text-light\">Categories</h3>
                                        <ul class=\"nav nav-pills nav-stacked nav-transparent\">
                                            <li><a href=\"#\">";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "categorie", array()), "html", null, true);
        echo "</a></li>
                                        </ul>
                                        <h3 class=\"text-light\">Expect budget</h3>
                                        <ul class=\"nav nav-pills nav-stacked nav-transparent\">
                                            <li><a href=\"#\">";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "budget", array()), "html", null, true);
        echo " \$</a></li>
                                        </ul>
                                        <h3 class=\"text-light\">Expect Time</h3>
                                        <ul class=\"nav nav-pills nav-stacked nav-transparent\">
                                            <li><a href=\"#\">";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "duree", array()), "html", null, true);
        echo " DAYS</a></li>
                                        </ul>
                                    </div><!--end .card-body -->
                                </div><!--end .col -->
                                <!-- END BLOG POST MENUBAR -->

                            </div><!--end .row -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                </div><!--end .row -->

                <!-- BEGIN Offres -->
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <strong><h4>";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " Offers</h4></strong>
                        <ul class=\"list-comments\">
                            ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 217
            echo "                            <li>
                                <div class=\"card\">
                                    <div class=\"comment-avatar\">
                                        <img class=\"img-circle\" src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("uploads/profile/" . $this->getAttribute($this->getAttribute($context["pro"], "idAbonne", array()), "id", array())) . "/") . $this->getAttribute($this->getAttribute($context["pro"], "idAbonne", array()), "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"comment-title\">";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "idAbonne", array()), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "dateOffre", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "dateOffre", array()), "h:i"), "html", null, true);
            echo " pm</small></h4>
                                        <p class=\"btn btn-default-dark stick-top-right\">";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "cout", array()), "html", null, true);
            echo " \$ / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "delai", array()), "html", null, true);
            echo " Days</p>
                                        <p>";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "details", array()), "html", null, true);
            echo "</p>
                                        ";
            // line 226
            if (($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["pro"], "idAbonne", array())))) {
                // line 227
                echo "                                            <div class=\"stick-bottom-right\">
                                                <a href=\"#\" class=\"btn btn-icon-toggle\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Modify your offer\"><i class=\"fa fa-edit\"></i></a>
                                            </div>
                                        ";
            }
            // line 231
            echo "                                    </div>
                                </div><!--end .card -->
                            </li><!-- end comment -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                        </ul>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END COMMENTS -->
                ";
        // line 239
        if ((($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "debut")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Freelancer"))) {
            // line 240
            echo "                <!-- BEGIN LEAVE COMMENT -->
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <h4>Post your offer</h4>
                        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_propost_homepage", array("idProjet" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "idProjet", array()))), "html", null, true);
            echo "\">
                            <div class=\"form-group\">
                                <div class=\"col-md-2\">
                                    <label for=\"name\" class=\"control-label\">Time of delivery</label>
                                </div>
                                <div class=\"col-md-10\">
                                    ";
            // line 250
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delai", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Time of delivery")));
            echo "
                                    <!--<input type=\"number\" name=\"devliver\" id=\"devliver\" class=\"form-control control-width-normal\" placeholder=\"Time of delivery\">-->
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-2\">
                                    <label for=\"email\" class=\"control-label\">Offer Amount</label>
                                </div>
                                <div class=\"col-md-10\">
                                    ";
            // line 259
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cout", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Offer Amount")));
            echo "
                                    <!--<input type=\"number\" name=\"amount\" id=\"amount\" class=\"form-control control-width-normal\" placeholder=\"Offer Amount\">-->
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-2\">
                                    <label for=\"readonly5\" class=\"control-label\">HomeWork commission</label>
                                </div>
                                <div class=\"col-md-10\">
                                    <input type=\"number\" step=\"0.1\" class=\"form-control\" id=\"readonly5\" value=\"0\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-2\">
                                    <label for=\"detail\" class=\"control-label\">Offre details</label>
                                </div>
                                <div class=\"col-md-10\">
                                    ";
            // line 276
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "details", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Describe your offre")));
            echo "
                                    <!--<textarea name=\"detail\" id=\"detail\" class=\"form-control autosize\" rows=\"3\" placeholder=\"Describe your offre\"></textarea>-->
                                </div>
                            </div>
                            <div class=\"form-footer col-md-offset-2\">
                                <button type=\"submit\" id=\"btn\" class=\"btn btn-primary\">Post your offre</button>
                                <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                            </div>
                            ";
            // line 284
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END LEAVE COMMENT -->
                ";
        } elseif (((($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute(        // line 289
(isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "choix")) || ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "travaille")) || ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "fin"))) {
            // line 290
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        <b>Note !</b> This project is in progress you can't post your offer anymore.
                    </div>
                ";
        } elseif (($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute(        // line 293
(isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "statut", array()) == "fin"))) {
            // line 294
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        <b>Note !</b> This project is closed.
                    </div>
                ";
        } elseif (($this->env->getExtension('security')->isGranted("ROLE_USER") && ($this->getAttribute($this->getAttribute(        // line 297
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Employer"))) {
            // line 298
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        Note ! You should be Freelancer to post an offer, You can change your account type in <b><a href=\"";
            // line 299
            echo $this->env->getExtension('routing')->getPath("edit_profile");
            echo "\">Settings</a></b> .
                    </div>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 302
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <b>Note !</b> You can't post your offers till you get <b><a href=\"";
            // line 303
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">logged in</a></b> .
                    </div>
                ";
        }
        // line 306
        echo "            </div><!--end .section-body -->
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
        // line 320
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
        // line 332
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
        // line 341
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
        // line 350
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
        // line 359
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
        // line 368
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
        // line 377
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
        // line 386
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
        // line 395
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
        // line 404
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
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
        
        $__internal_d0eb7af5dec533eb0ea4e8b41d5eecdeaacda20bb5f1cbb35030de5ca584bace->leave($__internal_d0eb7af5dec533eb0ea4e8b41d5eecdeaacda20bb5f1cbb35030de5ca584bace_prof);

    }

    public function getTemplateName()
    {
        return "WebProjectBundle:Default:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 443,  743 => 442,  739 => 441,  735 => 440,  731 => 439,  727 => 438,  723 => 437,  719 => 436,  715 => 435,  711 => 434,  707 => 433,  703 => 432,  699 => 431,  695 => 430,  691 => 429,  687 => 428,  660 => 404,  648 => 395,  636 => 386,  624 => 377,  612 => 368,  600 => 359,  588 => 350,  576 => 341,  564 => 332,  549 => 320,  533 => 306,  527 => 303,  524 => 302,  518 => 299,  515 => 298,  513 => 297,  508 => 294,  506 => 293,  501 => 290,  499 => 289,  491 => 284,  480 => 276,  460 => 259,  448 => 250,  439 => 244,  433 => 240,  431 => 239,  425 => 235,  416 => 231,  410 => 227,  408 => 226,  404 => 225,  398 => 224,  390 => 223,  384 => 220,  379 => 217,  375 => 216,  370 => 214,  353 => 200,  346 => 196,  339 => 192,  327 => 182,  321 => 179,  317 => 178,  313 => 177,  310 => 176,  308 => 175,  303 => 173,  299 => 172,  295 => 171,  289 => 168,  266 => 154,  262 => 152,  256 => 149,  253 => 148,  250 => 147,  246 => 145,  244 => 144,  241 => 143,  239 => 142,  236 => 141,  234 => 140,  226 => 139,  217 => 133,  213 => 132,  198 => 120,  176 => 100,  168 => 95,  164 => 94,  155 => 87,  147 => 82,  141 => 79,  137 => 78,  129 => 73,  125 => 72,  120 => 70,  115 => 67,  113 => 66,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  44 => 15,  40 => 14,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>{{ test.titre }} | HomeWork</title>*/
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
/* <body class="menubar-hoverable header-fixed menubar-first ">*/
/* */
/* <!-- BEGIN HEADER-->*/
/* <header id="header">*/
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
/*                         <ul class="dropdown-menu animation-zoom">*/
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
/* */
/*         <section>*/
/*             <div class="section-header">*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="../../../html/pages/blog/masonry.html">Projects</a></li>*/
/*                     <li class="active">{{ test.titre }}</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="section-body contain-lg">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="card card-tiles style-default-light">*/
/* */
/*                             <!-- BEGIN BLOG POST HEADER -->*/
/*                             <div class="row style-primary">*/
/*                                 <div class="col-sm-9">*/
/*                                     <div class="card-body style-default-dark">*/
/*                                         <h2>{{ test.titre }}</h2>*/
/*                                         <div class="text-default-light">Posted by <a href="#">{{ test.idAbonne }}</a></div>*/
/*                                     </div>*/
/*                                 </div><!--end .col -->*/
/*                                 <div class="col-sm-3">*/
/*                                     <div class="card-body">*/
/*                                         <div class="hidden-xs">*/
/*                                             <h3 class="text-light"><strong>{{ test.dateDebut|date('d')}}</strong> {{ test.dateDebut|date('F')}} <strong>{{ test.dateDebut|date('Y')}}</strong></h3>*/
/*                                             {% if test.statut == 'debut' %}*/
/*                                             <span class="badge style-primary-dark">Recieve offers</span>*/
/*                                             {% elseif test.statut == 'travaille' %}*/
/*                                                 <span class="badge style-warning">Work in progress</span>*/
/*                                             {% elseif test.statut == 'fin' %}*/
/*                                                 <span class="badge style-info">Finished</span>*/
/*                                             {% endif %}*/
/*                                             {% if (is_granted("ROLE_USER") and (app.user.username == test.idAbonne)) %}*/
/*                                             <div class="stick-top-right">*/
/*                                                 <a href="{{ path('web_propost_edit',{'idProjet' : test.idProjet}) }} " class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Modify your project"><i class="fa fa-edit"></i></a>*/
/*                                             </div>*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                         <div class="visible-xs">*/
/*                                             <strong>{{ test.dateDebut|date('d')}}</strong> {{ test.dateDebut|date('F')}} <strong>{{ test.dateDebut|date('Y')}}</strong><a href="#">{{ test.statut }}</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div><!--end .col -->*/
/*                             </div><!--end .row -->*/
/*                             <!-- END BLOG POST HEADER -->*/
/* */
/*                             <div class="row">*/
/* */
/*                                 <!-- BEGIN BLOG POST TEXT -->*/
/*                                 <div class="col-md-9">*/
/*                                     <article class="style-default-bright">*/
/* */
/*                                         <div class="card-body">*/
/*                                             <p class="lead">{{ test.description }}</p>*/
/*                                             <br/>*/
/*                                             <div class="well clearfix">*/
/*                                                 <h4>Project Owner : {{ test.idAbonne }}</h4>*/
/*                                                 <img class="height-3 pull-right img-circle" src="{{ asset('uploads/profile/' ~ test.idAbonne.id ~'/' ~ test.idAbonne.path)}}" alt="" height="140px" width="140px"/>*/
/*                                                 <p>{{ test.idAbonne.biolographie }}</p>*/
/*                                             </div>*/
/*                                             {% if (test.statut == 'choix') or (test.statut == 'travaille') or (test.statut == 'fin') %}*/
/*                                             <div class="well clearfix">*/
/*                                                 <h4>Freelancer : {{ free.username }}</h4>*/
/*                                                 <img class="height-3 pull-right img-circle" src="{{ asset('uploads/profile/' ~ free.id ~'/' ~ free.path)}}" alt="" height="140px" width="140px"/>*/
/*                                                 <p>{{ free.biolographie }}</p>*/
/*                                             </div>*/
/*                                             {% endif %}*/
/*                                         </div><!--end .card-body -->*/
/*                                     </article>*/
/*                                 </div><!--end .col -->*/
/*                                 <!-- END BLOG POST TEXT -->*/
/* */
/*                                 <!-- BEGIN BLOG POST MENUBAR -->*/
/*                                 <div class="col-md-3">*/
/*                                     <div class="card-body">*/
/*                                         <h3 class="text-light">Categories</h3>*/
/*                                         <ul class="nav nav-pills nav-stacked nav-transparent">*/
/*                                             <li><a href="#">{{ test.categorie }}</a></li>*/
/*                                         </ul>*/
/*                                         <h3 class="text-light">Expect budget</h3>*/
/*                                         <ul class="nav nav-pills nav-stacked nav-transparent">*/
/*                                             <li><a href="#">{{ test.budget }} $</a></li>*/
/*                                         </ul>*/
/*                                         <h3 class="text-light">Expect Time</h3>*/
/*                                         <ul class="nav nav-pills nav-stacked nav-transparent">*/
/*                                             <li><a href="#">{{ test.duree }} DAYS</a></li>*/
/*                                         </ul>*/
/*                                     </div><!--end .card-body -->*/
/*                                 </div><!--end .col -->*/
/*                                 <!-- END BLOG POST MENUBAR -->*/
/* */
/*                             </div><!--end .row -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/*                 </div><!--end .row -->*/
/* */
/*                 <!-- BEGIN Offres -->*/
/*                 <div class="row">*/
/*                     <div class="col-md-9">*/
/*                         <strong><h4>{{ count }} Offers</h4></strong>*/
/*                         <ul class="list-comments">*/
/*                             {% for pro in projet %}*/
/*                             <li>*/
/*                                 <div class="card">*/
/*                                     <div class="comment-avatar">*/
/*                                         <img class="img-circle" src="{{ asset('uploads/profile/' ~ pro.idAbonne.id ~'/' ~ pro.idAbonne.path)}}" alt="">*/
/*                                     </div>*/
/*                                     <div class="card-body">*/
/*                                         <h4 class="comment-title">{{ pro.idAbonne }} <small>{{ pro.dateOffre|date("d/m/Y") }} at {{ pro.dateOffre|date("h:i") }} pm</small></h4>*/
/*                                         <p class="btn btn-default-dark stick-top-right">{{ pro.cout }} $ / {{ pro.delai }} Days</p>*/
/*                                         <p>{{ pro.details }}</p>*/
/*                                         {% if (is_granted("ROLE_USER") and (app.user.username == pro.idAbonne)) %}*/
/*                                             <div class="stick-bottom-right">*/
/*                                                 <a href="#" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Modify your offer"><i class="fa fa-edit"></i></a>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div><!--end .card -->*/
/*                             </li><!-- end comment -->*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div><!--end .col -->*/
/*                 </div><!--end .row -->*/
/*                 <!-- END COMMENTS -->*/
/*                 {% if is_granted("ROLE_USER") and (test.statut == 'debut') and (app.user.type == "Freelancer") %}*/
/*                 <!-- BEGIN LEAVE COMMENT -->*/
/*                 <div class="row">*/
/*                     <div class="col-md-9">*/
/*                         <h4>Post your offer</h4>*/
/*                         <form class="form-horizontal" role="form" method="POST" action="{{ path('web_propost_homepage', {'idProjet' : test.idProjet}) }}">*/
/*                             <div class="form-group">*/
/*                                 <div class="col-md-2">*/
/*                                     <label for="name" class="control-label">Time of delivery</label>*/
/*                                 </div>*/
/*                                 <div class="col-md-10">*/
/*                                     {{ form_widget(form.delai, {'attr': {'class': 'form-control', 'placeholder':'Time of delivery' }}) }}*/
/*                                     <!--<input type="number" name="devliver" id="devliver" class="form-control control-width-normal" placeholder="Time of delivery">-->*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-md-2">*/
/*                                     <label for="email" class="control-label">Offer Amount</label>*/
/*                                 </div>*/
/*                                 <div class="col-md-10">*/
/*                                     {{ form_widget(form.cout, {'attr': {'class': 'form-control', 'placeholder':'Offer Amount' }}) }}*/
/*                                     <!--<input type="number" name="amount" id="amount" class="form-control control-width-normal" placeholder="Offer Amount">-->*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-md-2">*/
/*                                     <label for="readonly5" class="control-label">HomeWork commission</label>*/
/*                                 </div>*/
/*                                 <div class="col-md-10">*/
/*                                     <input type="number" step="0.1" class="form-control" id="readonly5" value="0" readonly>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-md-2">*/
/*                                     <label for="detail" class="control-label">Offre details</label>*/
/*                                 </div>*/
/*                                 <div class="col-md-10">*/
/*                                     {{ form_widget(form.details, {'attr': {'class': 'form-control', 'placeholder':'Describe your offre' }}) }}*/
/*                                     <!--<textarea name="detail" id="detail" class="form-control autosize" rows="3" placeholder="Describe your offre"></textarea>-->*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-footer col-md-offset-2">*/
/*                                 <button type="submit" id="btn" class="btn btn-primary">Post your offre</button>*/
/*                                 <button type="reset" class="btn btn-secondary">Cancel</button>*/
/*                             </div>*/
/*                             {{ form_widget(form) }}*/
/*                         </form>*/
/*                     </div><!--end .col -->*/
/*                 </div><!--end .row -->*/
/*                 <!-- END LEAVE COMMENT -->*/
/*                 {% elseif (is_granted("ROLE_USER")) and (test.statut == 'choix') or (test.statut == 'travaille') or (test.statut == 'fin') %}*/
/*                     <div class="alert alert-warning" role="alert">*/
/*                         <b>Note !</b> This project is in progress you can't post your offer anymore.*/
/*                     </div>*/
/*                 {% elseif (is_granted("ROLE_USER")) and (test.statut == 'fin') %}*/
/*                     <div class="alert alert-warning" role="alert">*/
/*                         <b>Note !</b> This project is closed.*/
/*                     </div>*/
/*                 {% elseif (is_granted("ROLE_USER")) and (app.user.type == "Employer") %}*/
/*                     <div class="alert alert-warning" role="alert">*/
/*                         Note ! You should be Freelancer to post an offer, You can change your account type in <b><a href="{{ path('edit_profile') }}">Settings</a></b> .*/
/*                     </div>*/
/*                 {% elseif is_granted("IS_AUTHENTICATED_ANONYMOUSLY") %}*/
/*                     <div class="alert alert-danger" role="alert">*/
/*                         <b>Note !</b> You can't post your offers till you get <b><a href="{{ path('fos_user_security_login') }}">logged in</a></b> .*/
/*                     </div>*/
/*                 {% endif %}*/
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
/*         */
/* */
/* </div><!--end #base-->*/
/* <!-- END BASE -->*/
/* */
/* <!-- BEGIN JAVASCRIPT -->*/
/*     <script src="{{asset('lib/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/jquery-validation/dist/additional-methods.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/bootstrap/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/spin.js/spin.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/autosize/jquery.autosize.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/App.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/AppNavigation.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/AppOffcanvas.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/AppCard.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/AppForm.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/AppNavSearch.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/source/AppVendor.js')}}"></script>*/
/*     <script src="{{asset('lib/js/core/demo/Demo.js')}}"></script>*/
/* <!-- END JAVASCRIPT -->*/
/* */
/* </body>*/
/* </html>*/
/* */
