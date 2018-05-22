<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1af93b4408af8302646efb941e6c8e0d2fcfc4663960130ef1a354dc0ab5ca6f extends Twig_Template
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
    <title>Login | HomeWork</title>

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
<body class=\"menubar-hoverable header-fixed \">

<!-- BEGIN LOGIN SECTION -->
<section class=\"section-account\">
    <div class=\"img-backdrop\" style=\"background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/img.png"), "html", null, true);
        echo ")\"></div>
    <div class=\"spacer\"></div>
    <div class=\"card contain-sm \">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <br/>
                    <span class=\"text-lg text-bold text-primary\">LOGIN</span>
                    <br/><br/>
                    <form class=\"form form-validate\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                        <input   type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
                            <label for=\"username\">Email</label>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                            <label for=\"password\">Password</label>
                            <!--<p class=\"help-block\"><a href=\"#\">Forgotten?</a></p>-->
                        </div>
                        <br/>
                        <div class=\"row\">
                            <div class=\"col-xs-6 text-left\">
                                <div class=\"checkbox checkbox-inline checkbox-styled\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> <span>Remember me</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            <div class=\"col-xs-6 text-right\">
                                <button class=\"btn btn-primary btn-raised\" type=\"submit\" id=\"submit\" name=\"_submit\">Login</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
                <div class=\"col-sm-5 col-sm-offset-1 text-center\">
                    <br><br>
                    <h3 class=\"text-light\">
                        No account yet?
                    </h3>
                    <a class=\"btn btn-block btn-raised btn-primary\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Sign up here</a>
                    <br><br>
                    <h3 class=\"text-light\">
                        or
                    </h3>
                    <p>
                        <a href=\"#\" class=\"btn btn-block btn-raised btn-info\"><i class=\"fa fa-facebook pull-left\"></i>Login with Facebook</a>
                    </p>
                    <p>
                        <a href=\"#\" class=\"btn btn-block btn-raised btn-info\"><i class=\"fa fa-twitter pull-left\"></i>Login with Twitter</a>
                    </p>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->

<!-- BEGIN JAVASCRIPT -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 105,  190 => 104,  186 => 103,  182 => 102,  178 => 101,  174 => 100,  170 => 99,  166 => 98,  162 => 97,  158 => 96,  154 => 95,  150 => 94,  146 => 93,  142 => 92,  138 => 91,  134 => 90,  112 => 71,  79 => 41,  75 => 40,  63 => 31,  47 => 18,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Login | HomeWork</title>*/
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
/* <body class="menubar-hoverable header-fixed ">*/
/* */
/* <!-- BEGIN LOGIN SECTION -->*/
/* <section class="section-account">*/
/*     <div class="img-backdrop" style="background-image: url({{asset ('lib/img/img.png')}})"></div>*/
/*     <div class="spacer"></div>*/
/*     <div class="card contain-sm ">*/
/*         <div class="card-body">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <br/>*/
/*                     <span class="text-lg text-bold text-primary">LOGIN</span>*/
/*                     <br/><br/>*/
/*                     <form class="form form-validate" action="{{ path("fos_user_security_check") }}" method="POST">*/
/*                         <input   type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" id="username" name="_username">*/
/*                             <label for="username">Email</label>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" class="form-control" id="password" name="_password">*/
/*                             <label for="password">Password</label>*/
/*                             <!--<p class="help-block"><a href="#">Forgotten?</a></p>-->*/
/*                         </div>*/
/*                         <br/>*/
/*                         <div class="row">*/
/*                             <div class="col-xs-6 text-left">*/
/*                                 <div class="checkbox checkbox-inline checkbox-styled">*/
/*                                     <label>*/
/*                                         <input type="checkbox" id="remember_me" name="_remember_me" value="on"> <span>Remember me</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div><!--end .col -->*/
/*                             <div class="col-xs-6 text-right">*/
/*                                 <button class="btn btn-primary btn-raised" type="submit" id="submit" name="_submit">Login</button>*/
/*                             </div><!--end .col -->*/
/*                         </div><!--end .row -->*/
/*                     </form>*/
/*                 </div><!--end .col -->*/
/*                 <div class="col-sm-5 col-sm-offset-1 text-center">*/
/*                     <br><br>*/
/*                     <h3 class="text-light">*/
/*                         No account yet?*/
/*                     </h3>*/
/*                     <a class="btn btn-block btn-raised btn-primary" href="{{ path('fos_user_registration_register') }}">Sign up here</a>*/
/*                     <br><br>*/
/*                     <h3 class="text-light">*/
/*                         or*/
/*                     </h3>*/
/*                     <p>*/
/*                         <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login with Facebook</a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Login with Twitter</a>*/
/*                     </p>*/
/*                 </div><!--end .col -->*/
/*             </div><!--end .row -->*/
/*         </div><!--end .card-body -->*/
/*     </div><!--end .card -->*/
/* </section>*/
/* <!-- END LOGIN SECTION -->*/
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
