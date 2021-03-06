<?php

/* default/index.html.twig */
class __TwigTemplate_d6c3d64ee68af260c0cde6220c2c7cfbf5233cfc1337fd6dced6e8b8109976f7 extends Twig_Template
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
        $__internal_1f0add4da8ed7525ca9c5cc6a60b354523c3c577f06d430abed2d226868c109f = $this->env->getExtension("native_profiler");
        $__internal_1f0add4da8ed7525ca9c5cc6a60b354523c3c577f06d430abed2d226868c109f->enter($__internal_1f0add4da8ed7525ca9c5cc6a60b354523c3c577f06d430abed2d226868c109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
    <title>HomeWork | Home of freelancers</title>

    <!-- CSS  -->
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/hw.ico"), "html", null, true);
        echo "\" sizes=\"16x16 32x32 48x48 64x64\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/theme-default/font-awesome.min.css?1422529194"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/jquery.progresstracker.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/materialize.css"), "html", null, true);
        echo "\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/style.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>

</head>
<body>

<!-- Loader -->
<div id=\"loader-wrapper\">
    <div id=\"loader\"></div>
    <div class=\"loader-section section-left\"></div>
    <div class=\"loader-section section-right\"></div>
</div>
<!-- /Loader -->

<header>
    <!-- Dropdown Structure -->
    <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li><a href=\"#userwords\">Customer's words</a></li>
        <li><a href=\"#tutorial\">Tutorial</a></li>
        <li><a href=\"#details\">Details</a></li>
        <li><a href=\"#feedback\">Feedback</a></li>
        <li><a href=\"#slider\">Slider</a></li>
        <li><a href=\"#team\">Team</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"#portfolio\">Portfolio</a></li>
    </ul>

    <ul id=\"dropdown2\" class=\"dropdown-content\">
        <li><a href=\"index01.html\">Fullscreen Slider</a></li>
        <li><a href=\"index02.html\">Fullscreen Hero Image</a></li>
        <li><a href=\"index03.html\">Hero Background Video</a></li>
    </ul>

    <!-- Main Nav -->
    <nav role=\"navigation\" class=\"grey lighten-5\">
        <div class=\"nav-wrapper container\">
            <a href=\"#home\" class=\"brand-logo red-text\">HOMEWORK</a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
            <ul class=\"right hide-on-med-and-down\">
                <li></li>
                <!-- Dropdown Trigger -->
                <li></li>
                <li></li>
                <li></li>
                <!-- Dropdown Trigger -->
                <li></li>
            </ul>

            <!-- Mobile Menu -->
            <ul class=\"side-nav\" id=\"mobile-demo\">
                <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Signup</a></li>
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("web_projects_homepage");
        echo "\">Projects</a></li>
                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("user_freelancers");
        echo "\">Freelancers</a></li>
            </ul>
        </div>
    </nav>

</header>

<div id=\"home\">
    <div class=\"pt-section\" data-name=\"Home\" id=\"ptsection-one\"></div>
</div>


<div id=\"hero\" class=\"hero-bg01 valign-wrapper\">
    <div class=\"header\">
        <div class=\"container\">
            <div class=\"hero-text valign\">
                <div class=\"row\">
                    <div class=\"dark-giant-title\">
                        <h1 class=\"white-text text-lighten-2\"><span class=\"text-highlight\">HOMEWORK</span></h1>
                    </div>
                    <h6 class=\"light black-text\"><span><b>Home of Freelancers</b></span></h6>
                </div>
                <div class=\"row\">
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" id=\"download-button\" class=\"btn-large waves-effect waves-light red lighten-1\">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class=\"parallax\"><img src=\"assets/custom/images/furn01.jpg\" alt=\"Unsplashed background img 1\"></div>-->
</div>



<!-- Features Block -->
<section id=\"features\" class=\"t-block\">
    <div class=\"row no-pad-bot pt-section\" data-name=\"Features\" id=\"ptsection-two\">
        <div class=\"col s12 m6 l3 pink\">
            <div class=\"content\">
                <i class=\"material-icons\">code</i>
                <h5 class=\"white-text\">Web Developer</h5>
                <p class=\"white-text light\">
                    Build high-quality web projects fast, working with top freelance web developers.
                </p>
            </div>
        </div>
        <div class=\"col s12 m6 l3 deep-purple\">
            <div class=\"content\">
                <i class=\"material-icons\">web</i>
                <h5 class=\"white-text\">Web Designer</h5>
                <p class=\"white-text light\">
                    Make high-quality web design with freelance talent for a budget that works for you.
                </p>
            </div>
        </div>
        <div class=\"col s12 m6 l3 red\">
            <div class=\"content\">
                <i class=\"material-icons\">developer_mode</i>
                <h5 class=\"white-text\">Mobile Developer</h5>
                <p class=\"white-text light\">
                    Hire top mobile developers to help you build an amazing mobile app.
                </p>
            </div>
        </div>
        <div class=\"col s12 m6 l3 orange\">
            <div class=\"content\">
                <i class=\"material-icons\">trending_up</i>
                <h5 class=\"white-text\">SEO</h5>
                <p class=\"white-text light\">
                    Our SEO consultants assist you in setting up a strategy for the SEO of your website.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Block -->
<section id=\"about\" class=\"white\">
    <div class=\"container\">
        <div class=\"section pt-section\" data-name=\"About\" id=\"ptsection-three\">
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 l4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center red-text\"><i class=\"material-icons\">insert_drive_file</i></h2>
                        <h4 class=\"center light\">Add your project</h4>
                        <p class=\"center light\">
                            Post your project and the skills required to complete the details, and start to receive offers by freelancers
                        </p>
                    </div>
                    <div class=\"divider4\"></div>
                </div>

                <div class=\"col s12 l4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center red-text\"><i class=\"material-icons\">favorite</i></h2>
                        <h4 class=\"center light\">Choose the right offre</h4>
                        <p class=\"center light\">
                            Among the presentations of the project, choosing the right offer to the requirements of the project and then start immediately the implementation phase
                        </p>
                    </div>
                    <div class=\"divider4\"></div>
                </div>

                <div class=\"col s12 l4\">
                    <div class=\"icon-block\">
                        <h2 class=\"center red-text\"><i class=\"material-icons\">assistant_photo</i></h2>
                        <h4 class=\"center light\">Receive the project</h4>
                        <p class=\"center light\">
                            Freelancer work you have chosen with you until the end of the project and delivered to you fully as you wanted
                        </p>
                    </div>
                    <div class=\"divider4\"></div>
                </div>
            </div>

            <div class=\"row center\">
                <a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("web_projects_homepage");
        echo "\" id=\"download-button\" class=\"btn-large waves-effect waves-light red lighten-1\" target=\"_blank\">See Projects</a>
            </div>

        </div>
    </div>
</section>

<!-- Details Block -->
<section id=\"details\" class=\"white\">
    <div class=\"container\">
        <div class=\"section pt-section\" data-name=\"Details\" id=\"ptsection-six\">
            <div class=\"row\">
                <h3 class=\"light center cyan-text text-darken-3\">Our Services</h3>
                <p class=\"center light\">What we offer to our Customers. Brief list.</p>
                <div class=\"divider4\"></div>

                <div class=\"col s12 l4\">
                    <div class=\"row\">
                        <div class=\"col s12 m2 l3 icon-block\">
                            <h2 class=\"cyan-text text-darken-3\"><i class=\"material-icons\">payment</i></h2>
                        </div>
                        <div class=\"col s12 m10 l9\">
                            <h5 class=\"\">Pay with ease</h5>
                            <p class=\"light\">
                                You would not pay only for just what is being done from jobs
                            </p>
                        </div>
                    </div>
                    <div class=\"divider2\"></div>
                </div>

                <div class=\"col s12 l4\">
                    <div class=\"row\">
                        <div class=\"col s12 m2 l3 icon-block\">
                            <h2 class=\"cyan-text text-darken-3\"><i class=\"material-icons\">near_me</i></h2>
                        </div>
                        <div class=\"col s12 m10 l9\">
                            <h5 class=\"\">Hire freelancers quickly</h5>
                            <p class=\"light\">
                                Choose the best freelancer and send him a direct job.
                            </p>
                        </div>
                    </div>
                    <div class=\"divider2\"></div>
                </div>

                <div class=\"col s12 l4\">
                    <div class=\"row\">
                        <div class=\"col s12 m2 l3 icon-block\">
                            <h2 class=\"cyan-text text-darken-3\"><i class=\"material-icons\">work</i></h2>
                        </div>
                        <div class=\"col s12 m10 l9\">
                            <h5 class=\"\">Perform your projects all with generosity</h5>
                            <p class=\"light\">
                                Host your project and let the freelancer that you choose do all the rest work.
                            </p>
                        </div>
                    </div>
                    <div class=\"divider2\"></div>
                </div>

            </div>

            <div class=\"row\">

                <div class=\"col s12 l4\">
                    <div class=\"row\">
                        <div class=\"col s12 m2 l3 icon-block\">
                            <h2 class=\"cyan-text text-darken-3\"><i class=\"material-icons\">local_atm</i></h2>
                        </div>
                        <div class=\"col s12 m10 l9\">
                            <h5 class=\"\">Projects carried out at the lowest cost</h5>
                            <p class=\"light\">
                                Hire the best expertise as appropriate with your budget.
                            </p>
                        </div>
                    </div>
                    <div class=\"divider2\"></div>
                </div>

                <div class=\"col s12 l4\">
                    <div class=\"row\">
                        <div class=\"col s12 m2 l3 icon-block\">
                            <h2 class=\"cyan-text text-darken-3\"><i class=\"material-icons\">thumb_up</i></h2>
                        </div>
                        <div class=\"col s12 m10 l9\">
                            <h5 class=\"\">Hire the best and most appropriate</h5>
                            <p class=\"light\">
                                Visit freelancer's profiles, watch their previous works and hire the best for you.
                            </p>
                            <!--<i class=\"material-icons teal-text\">trending_flat</i>
                            <a href=\"\" class=\"grey-text m-inline light\">Learn more</a>-->
                        </div>
                    </div>
                    <div class=\"divider2\"></div>
                </div>

                <div class=\"col s12 l4\">
                    <div class=\"row\">
                        <div class=\"col s12 m2 l3 icon-block\">
                            <h2 class=\"cyan-text text-darken-3\"><i class=\"material-icons\">people</i></h2>
                        </div>
                        <div class=\"col s12 m10 l9\">
                            <h5 class=\"\">Build an integrated team easily</h5>
                            <p class=\"light\">
                                Experts in various fields and from different countries.
                            </p>
                        </div>
                    </div>
                    <div class=\"divider2\"></div>
                </div>

            </div>
                <div class=\"row center\">
                <a href=\"";
        // line 296
        echo $this->env->getExtension('routing')->getPath("user_freelancers");
        echo "\" id=\"download-button\" class=\"btn-large waves-effect waves-light red lighten-1\" target=\"_blank\">See Freelancers</a>
            </div>
        </div>
    </div>
</section>
<!-- Feedback Block -->
<section id=\"feedback\" class=\"blue-grey darken-3\">
    <div class=\"section pt-section\" data-name=\"Contacts\" id=\"ptsection-seven\">
        <div class=\"container\">
            <h3 class=\"center light white-text\">Contact Us</h3>
            <!--<p class=\"center  white-text light\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>-->
            <div class=\"divider4\"></div>
            <div class=\"row\">
                <div class=\"col s12 m12 l6\">&nbsp;
                    <div class=\"embed-responsive embed-responsive-4by3\">
                        <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed/v1/search?q=Institut+Supérieur+des+Études+Technologiques+de+Nabeul&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    </div>
                    <div class=\"divider4\"></div>
                </div>
                <form class=\"col s12 m12 l5 offset-l1\" method=\"post\" action=\"";
        // line 315
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            <input id=\"email\" name=\"email\" type=\"email\" class=\"validate\">
                            <label for=\"email\">Email</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"input-field col s12 m6\">
                            <input id=\"input_text\" name=\"object\" type=\"text\" length=\"20\">
                            <label for=\"input_text\">Message object</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"input-field col s12\">
                            <textarea id=\"textarea1\" name=\"text\" class=\"materialize-textarea\" length=\"120\"></textarea>
                            <label for=\"textarea1\">Message Text</label>
                        </div>
                    </div>
                    <button class=\"btn btn-large waves-effect waves-light orange\" type=\"submit\" name=\"";
        // line 334
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Team Block -->
<section id=\"team\" class=\"parallax-container\">
    <div class=\"section pt-section\" data-name=\"Team\" id=\"ptsection-eight\">
        <div class=\"container\">
            <div class=\"row\">
                <h3 class=\"white-text light center\">Amazing Team</h3>
                <p class=\"center white-text light\">Work as partners for more than two years, the trust and hard work and sharing parts of work is our strong point.</p>
                <div class=\"divider4\"></div>
                <div class=\"col s12 m6 l3\">
                    <div class=\"card hoverable\">
                    </div>
                </div>
                <div class=\"col s12 m6 l3\">
                    <div class=\"card hoverable\">
                        <div class=\"card-image waves-effect waves-block waves-light\">
                            <img class=\"activator\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/me.jpg"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"card-content\">
                            <span class=\"card-title activator grey-text text-darken-4 light\">Moez Zineb<i class=\"material-icons right\">more_vert</i></span>
                            <p class=\"light grey-text\">Web Developer</p>
                            <!--<p><a href=\"#\">This is a link</a></p>-->
                        </div>
                        <div class=\"card-reveal\">
                            <span class=\"card-title grey-text text-darken-4\">Moez Zineb<i class=\"material-icons right\">close</i></span>
                            <p class=\"grey-text text-darken-4 light\">
                                I'm gonna describe my self later
                            </p>
                            <ul class=\"socials valign-wrapper\">
                                <li class=\"valign\"><a href=\"https://www.facebook.com/djmoezmixnew\"><i class=\"fa fa-facebook-official\"></i></a></li>
                                <li class=\"valign\"><a href=\"#!\"><i class=\"fa fa-linkedin-square\"></i></a></li>
                                <li class=\"valign\"><a href=\"https://www.instagram.com/moezbenzineb/\"><i class=\"fa fa-instagram\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m6 l3\">
                    <div class=\"card hoverable\">
                        <div class=\"card-image waves-effect waves-block waves-light\">
                            <img class=\"activator\" src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/aziz.jpg"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"card-content\">
                            <span class=\"card-title activator grey-text text-darken-4 light\">Abdelaziz Dridi<i class=\"material-icons right\">more_vert</i></span>
                            <p class=\"light grey-text\">Concepteur</p>
                            <!--<p><a href=\"#\">This is a link</a></p>-->
                        </div>
                        <div class=\"card-reveal\">
                            <span class=\"card-title grey-text text-darken-4\">Abdelaziz Dridi<i class=\"material-icons right\">close</i></span>
                            <p class=\"grey-text text-darken-4 light\">
                                I'm gonna describe my self later
                            </p>
                            <ul class=\"socials valign-wrapper\">
                                <li class=\"valign\"><a href=\"#!\"><i class=\"fa fa-facebook-official\"></i></a></li>
                                <li class=\"valign\"><a href=\"#!\"><i class=\"fa fa-linkedin-square\"></i></a></li>
                                <li class=\"valign\"><a href=\"#!\"><i class=\"fa fa-instagram\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"parallax\"><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/img/poly-bg01.jpg"), "html", null, true);
        echo "\" alt=\"Unsplashed background img 2\"></div>
</section>

<!-- Footer -->
<footer class=\"page-footer blue-grey darken-3\">
    <!-- Ontop link -->
    <a href=\"#home\" class=\"white-text\">
        <div id=\"ontop\" class=\"blue-grey darken-2 center\">
            <div class=\"top-arr center-align\">
                <i class=\"fa fa-long-arrow-up white-text\"></i>
            </div>
        </div>
    </a>

    <div class=\"footer-menu\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <h5 class=\"white-text\">HomeWork</h5>
                    <p class=\"grey-text text-lighten-1 light\">'HomeWork' is a platform connects employers and freelancers in the world. If you are an employer you can host your projects through HomeWork easily and safely as a freelancer can browse existing projects and add your offers on projects that can be completed. HomeWork ensures full rights and acts as an intermediary between the enmployer and freelancer.</p>
                </div>

            </div>
        </div>
    </div>
    <div class=\"footer-copyright blue-grey darken-4\">
        <div class=\"container\">
            © 2016 <a class=\"grey-text text-lighten-3\" href=\"#\">HomeWork</a>. Made by <a class=\"grey-text text-lighten-3\" href=\"#\">Moez Zineb</a> & <a class=\"grey-text text-lighten-3\" href=\"#\">Abdelaziz Dridi</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/materialize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/jquery.progresstracker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/js/init.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_1f0add4da8ed7525ca9c5cc6a60b354523c3c577f06d430abed2d226868c109f->leave($__internal_1f0add4da8ed7525ca9c5cc6a60b354523c3c577f06d430abed2d226868c109f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 440,  519 => 439,  515 => 438,  511 => 437,  474 => 403,  448 => 380,  422 => 357,  396 => 334,  374 => 315,  352 => 296,  235 => 182,  139 => 89,  113 => 66,  109 => 65,  105 => 64,  101 => 63,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>*/
/*     <title>HomeWork | Home of freelancers</title>*/
/* */
/*     <!-- CSS  -->*/
/*     <link rel="icon" href="{{asset ('lib/img/hw.ico')}}" sizes="16x16 32x32 48x48 64x64">*/
/*     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/theme-default/font-awesome.min.css?1422529194')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/jquery.progresstracker.css')}}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/materialize.css')}}" media="screen,projection" />*/
/*     <link type="text/css" rel="stylesheet" href="{{asset ('lib/css/style.css')}}" media="screen,projection"/>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <!-- Loader -->*/
/* <div id="loader-wrapper">*/
/*     <div id="loader"></div>*/
/*     <div class="loader-section section-left"></div>*/
/*     <div class="loader-section section-right"></div>*/
/* </div>*/
/* <!-- /Loader -->*/
/* */
/* <header>*/
/*     <!-- Dropdown Structure -->*/
/*     <ul id="dropdown1" class="dropdown-content">*/
/*         <li><a href="#userwords">Customer's words</a></li>*/
/*         <li><a href="#tutorial">Tutorial</a></li>*/
/*         <li><a href="#details">Details</a></li>*/
/*         <li><a href="#feedback">Feedback</a></li>*/
/*         <li><a href="#slider">Slider</a></li>*/
/*         <li><a href="#team">Team</a></li>*/
/*         <li class="divider"></li>*/
/*         <li><a href="#portfolio">Portfolio</a></li>*/
/*     </ul>*/
/* */
/*     <ul id="dropdown2" class="dropdown-content">*/
/*         <li><a href="index01.html">Fullscreen Slider</a></li>*/
/*         <li><a href="index02.html">Fullscreen Hero Image</a></li>*/
/*         <li><a href="index03.html">Hero Background Video</a></li>*/
/*     </ul>*/
/* */
/*     <!-- Main Nav -->*/
/*     <nav role="navigation" class="grey lighten-5">*/
/*         <div class="nav-wrapper container">*/
/*             <a href="#home" class="brand-logo red-text">HOMEWORK</a>*/
/*             <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*             <ul class="right hide-on-med-and-down">*/
/*                 <li></li>*/
/*                 <!-- Dropdown Trigger -->*/
/*                 <li></li>*/
/*                 <li></li>*/
/*                 <li></li>*/
/*                 <!-- Dropdown Trigger -->*/
/*                 <li></li>*/
/*             </ul>*/
/* */
/*             <!-- Mobile Menu -->*/
/*             <ul class="side-nav" id="mobile-demo">*/
/*                 <li><a href="{{ path('fos_user_security_login') }}">Login</a></li>*/
/*                 <li><a href="{{ path('fos_user_registration_register') }}">Signup</a></li>*/
/*                 <li><a href="{{ path('web_projects_homepage') }}">Projects</a></li>*/
/*                 <li><a href="{{ path('user_freelancers') }}">Freelancers</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/* </header>*/
/* */
/* <div id="home">*/
/*     <div class="pt-section" data-name="Home" id="ptsection-one"></div>*/
/* </div>*/
/* */
/* */
/* <div id="hero" class="hero-bg01 valign-wrapper">*/
/*     <div class="header">*/
/*         <div class="container">*/
/*             <div class="hero-text valign">*/
/*                 <div class="row">*/
/*                     <div class="dark-giant-title">*/
/*                         <h1 class="white-text text-lighten-2"><span class="text-highlight">HOMEWORK</span></h1>*/
/*                     </div>*/
/*                     <h6 class="light black-text"><span><b>Home of Freelancers</b></span></h6>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <a href="{{ path('fos_user_security_login') }}" id="download-button" class="btn-large waves-effect waves-light red lighten-1">Get Started</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--<div class="parallax"><img src="assets/custom/images/furn01.jpg" alt="Unsplashed background img 1"></div>-->*/
/* </div>*/
/* */
/* */
/* */
/* <!-- Features Block -->*/
/* <section id="features" class="t-block">*/
/*     <div class="row no-pad-bot pt-section" data-name="Features" id="ptsection-two">*/
/*         <div class="col s12 m6 l3 pink">*/
/*             <div class="content">*/
/*                 <i class="material-icons">code</i>*/
/*                 <h5 class="white-text">Web Developer</h5>*/
/*                 <p class="white-text light">*/
/*                     Build high-quality web projects fast, working with top freelance web developers.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col s12 m6 l3 deep-purple">*/
/*             <div class="content">*/
/*                 <i class="material-icons">web</i>*/
/*                 <h5 class="white-text">Web Designer</h5>*/
/*                 <p class="white-text light">*/
/*                     Make high-quality web design with freelance talent for a budget that works for you.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col s12 m6 l3 red">*/
/*             <div class="content">*/
/*                 <i class="material-icons">developer_mode</i>*/
/*                 <h5 class="white-text">Mobile Developer</h5>*/
/*                 <p class="white-text light">*/
/*                     Hire top mobile developers to help you build an amazing mobile app.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col s12 m6 l3 orange">*/
/*             <div class="content">*/
/*                 <i class="material-icons">trending_up</i>*/
/*                 <h5 class="white-text">SEO</h5>*/
/*                 <p class="white-text light">*/
/*                     Our SEO consultants assist you in setting up a strategy for the SEO of your website.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- About Block -->*/
/* <section id="about" class="white">*/
/*     <div class="container">*/
/*         <div class="section pt-section" data-name="About" id="ptsection-three">*/
/*             <!--   Icon Section   -->*/
/*             <div class="row">*/
/*                 <div class="col s12 l4">*/
/*                     <div class="icon-block">*/
/*                         <h2 class="center red-text"><i class="material-icons">insert_drive_file</i></h2>*/
/*                         <h4 class="center light">Add your project</h4>*/
/*                         <p class="center light">*/
/*                             Post your project and the skills required to complete the details, and start to receive offers by freelancers*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="divider4"></div>*/
/*                 </div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="icon-block">*/
/*                         <h2 class="center red-text"><i class="material-icons">favorite</i></h2>*/
/*                         <h4 class="center light">Choose the right offre</h4>*/
/*                         <p class="center light">*/
/*                             Among the presentations of the project, choosing the right offer to the requirements of the project and then start immediately the implementation phase*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="divider4"></div>*/
/*                 </div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="icon-block">*/
/*                         <h2 class="center red-text"><i class="material-icons">assistant_photo</i></h2>*/
/*                         <h4 class="center light">Receive the project</h4>*/
/*                         <p class="center light">*/
/*                             Freelancer work you have chosen with you until the end of the project and delivered to you fully as you wanted*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="divider4"></div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row center">*/
/*                 <a href="{{ path('web_projects_homepage') }}" id="download-button" class="btn-large waves-effect waves-light red lighten-1" target="_blank">See Projects</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- Details Block -->*/
/* <section id="details" class="white">*/
/*     <div class="container">*/
/*         <div class="section pt-section" data-name="Details" id="ptsection-six">*/
/*             <div class="row">*/
/*                 <h3 class="light center cyan-text text-darken-3">Our Services</h3>*/
/*                 <p class="center light">What we offer to our Customers. Brief list.</p>*/
/*                 <div class="divider4"></div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="row">*/
/*                         <div class="col s12 m2 l3 icon-block">*/
/*                             <h2 class="cyan-text text-darken-3"><i class="material-icons">payment</i></h2>*/
/*                         </div>*/
/*                         <div class="col s12 m10 l9">*/
/*                             <h5 class="">Pay with ease</h5>*/
/*                             <p class="light">*/
/*                                 You would not pay only for just what is being done from jobs*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider2"></div>*/
/*                 </div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="row">*/
/*                         <div class="col s12 m2 l3 icon-block">*/
/*                             <h2 class="cyan-text text-darken-3"><i class="material-icons">near_me</i></h2>*/
/*                         </div>*/
/*                         <div class="col s12 m10 l9">*/
/*                             <h5 class="">Hire freelancers quickly</h5>*/
/*                             <p class="light">*/
/*                                 Choose the best freelancer and send him a direct job.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider2"></div>*/
/*                 </div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="row">*/
/*                         <div class="col s12 m2 l3 icon-block">*/
/*                             <h2 class="cyan-text text-darken-3"><i class="material-icons">work</i></h2>*/
/*                         </div>*/
/*                         <div class="col s12 m10 l9">*/
/*                             <h5 class="">Perform your projects all with generosity</h5>*/
/*                             <p class="light">*/
/*                                 Host your project and let the freelancer that you choose do all the rest work.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider2"></div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="row">*/
/*                         <div class="col s12 m2 l3 icon-block">*/
/*                             <h2 class="cyan-text text-darken-3"><i class="material-icons">local_atm</i></h2>*/
/*                         </div>*/
/*                         <div class="col s12 m10 l9">*/
/*                             <h5 class="">Projects carried out at the lowest cost</h5>*/
/*                             <p class="light">*/
/*                                 Hire the best expertise as appropriate with your budget.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider2"></div>*/
/*                 </div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="row">*/
/*                         <div class="col s12 m2 l3 icon-block">*/
/*                             <h2 class="cyan-text text-darken-3"><i class="material-icons">thumb_up</i></h2>*/
/*                         </div>*/
/*                         <div class="col s12 m10 l9">*/
/*                             <h5 class="">Hire the best and most appropriate</h5>*/
/*                             <p class="light">*/
/*                                 Visit freelancer's profiles, watch their previous works and hire the best for you.*/
/*                             </p>*/
/*                             <!--<i class="material-icons teal-text">trending_flat</i>*/
/*                             <a href="" class="grey-text m-inline light">Learn more</a>-->*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider2"></div>*/
/*                 </div>*/
/* */
/*                 <div class="col s12 l4">*/
/*                     <div class="row">*/
/*                         <div class="col s12 m2 l3 icon-block">*/
/*                             <h2 class="cyan-text text-darken-3"><i class="material-icons">people</i></h2>*/
/*                         </div>*/
/*                         <div class="col s12 m10 l9">*/
/*                             <h5 class="">Build an integrated team easily</h5>*/
/*                             <p class="light">*/
/*                                 Experts in various fields and from different countries.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider2"></div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*                 <div class="row center">*/
/*                 <a href="{{ path('user_freelancers') }}" id="download-button" class="btn-large waves-effect waves-light red lighten-1" target="_blank">See Freelancers</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!-- Feedback Block -->*/
/* <section id="feedback" class="blue-grey darken-3">*/
/*     <div class="section pt-section" data-name="Contacts" id="ptsection-seven">*/
/*         <div class="container">*/
/*             <h3 class="center light white-text">Contact Us</h3>*/
/*             <!--<p class="center  white-text light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>-->*/
/*             <div class="divider4"></div>*/
/*             <div class="row">*/
/*                 <div class="col s12 m12 l6">&nbsp;*/
/*                     <div class="embed-responsive embed-responsive-4by3">*/
/*                         <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/search?q=Institut+Supérieur+des+Études+Technologiques+de+Nabeul&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*                     </div>*/
/*                     <div class="divider4"></div>*/
/*                 </div>*/
/*                 <form class="col s12 m12 l5 offset-l1" method="post" action="{{ path('homepage') }}">*/
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             <input id="email" name="email" type="email" class="validate">*/
/*                             <label for="email">Email</label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="input-field col s12 m6">*/
/*                             <input id="input_text" name="object" type="text" length="20">*/
/*                             <label for="input_text">Message object</label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="input-field col s12">*/
/*                             <textarea id="textarea1" name="text" class="materialize-textarea" length="120"></textarea>*/
/*                             <label for="textarea1">Message Text</label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <button class="btn btn-large waves-effect waves-light orange" type="submit" name="{{ path('fos_user_registration_register') }}">Submit</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* <!-- Team Block -->*/
/* <section id="team" class="parallax-container">*/
/*     <div class="section pt-section" data-name="Team" id="ptsection-eight">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <h3 class="white-text light center">Amazing Team</h3>*/
/*                 <p class="center white-text light">Work as partners for more than two years, the trust and hard work and sharing parts of work is our strong point.</p>*/
/*                 <div class="divider4"></div>*/
/*                 <div class="col s12 m6 l3">*/
/*                     <div class="card hoverable">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col s12 m6 l3">*/
/*                     <div class="card hoverable">*/
/*                         <div class="card-image waves-effect waves-block waves-light">*/
/*                             <img class="activator" src="{{asset ('lib/img/me.jpg')}}">*/
/*                         </div>*/
/*                         <div class="card-content">*/
/*                             <span class="card-title activator grey-text text-darken-4 light">Moez Zineb<i class="material-icons right">more_vert</i></span>*/
/*                             <p class="light grey-text">Web Developer</p>*/
/*                             <!--<p><a href="#">This is a link</a></p>-->*/
/*                         </div>*/
/*                         <div class="card-reveal">*/
/*                             <span class="card-title grey-text text-darken-4">Moez Zineb<i class="material-icons right">close</i></span>*/
/*                             <p class="grey-text text-darken-4 light">*/
/*                                 I'm gonna describe my self later*/
/*                             </p>*/
/*                             <ul class="socials valign-wrapper">*/
/*                                 <li class="valign"><a href="https://www.facebook.com/djmoezmixnew"><i class="fa fa-facebook-official"></i></a></li>*/
/*                                 <li class="valign"><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>*/
/*                                 <li class="valign"><a href="https://www.instagram.com/moezbenzineb/"><i class="fa fa-instagram"></i></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col s12 m6 l3">*/
/*                     <div class="card hoverable">*/
/*                         <div class="card-image waves-effect waves-block waves-light">*/
/*                             <img class="activator" src="{{asset ('lib/img/aziz.jpg')}}">*/
/*                         </div>*/
/*                         <div class="card-content">*/
/*                             <span class="card-title activator grey-text text-darken-4 light">Abdelaziz Dridi<i class="material-icons right">more_vert</i></span>*/
/*                             <p class="light grey-text">Concepteur</p>*/
/*                             <!--<p><a href="#">This is a link</a></p>-->*/
/*                         </div>*/
/*                         <div class="card-reveal">*/
/*                             <span class="card-title grey-text text-darken-4">Abdelaziz Dridi<i class="material-icons right">close</i></span>*/
/*                             <p class="grey-text text-darken-4 light">*/
/*                                 I'm gonna describe my self later*/
/*                             </p>*/
/*                             <ul class="socials valign-wrapper">*/
/*                                 <li class="valign"><a href="#!"><i class="fa fa-facebook-official"></i></a></li>*/
/*                                 <li class="valign"><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>*/
/*                                 <li class="valign"><a href="#!"><i class="fa fa-instagram"></i></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="parallax"><img src="{{asset ('lib/img/poly-bg01.jpg')}}" alt="Unsplashed background img 2"></div>*/
/* </section>*/
/* */
/* <!-- Footer -->*/
/* <footer class="page-footer blue-grey darken-3">*/
/*     <!-- Ontop link -->*/
/*     <a href="#home" class="white-text">*/
/*         <div id="ontop" class="blue-grey darken-2 center">*/
/*             <div class="top-arr center-align">*/
/*                 <i class="fa fa-long-arrow-up white-text"></i>*/
/*             </div>*/
/*         </div>*/
/*     </a>*/
/* */
/*     <div class="footer-menu">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col l6 s12">*/
/*                     <h5 class="white-text">HomeWork</h5>*/
/*                     <p class="grey-text text-lighten-1 light">'HomeWork' is a platform connects employers and freelancers in the world. If you are an employer you can host your projects through HomeWork easily and safely as a freelancer can browse existing projects and add your offers on projects that can be completed. HomeWork ensures full rights and acts as an intermediary between the enmployer and freelancer.</p>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="footer-copyright blue-grey darken-4">*/
/*         <div class="container">*/
/*             © 2016 <a class="grey-text text-lighten-3" href="#">HomeWork</a>. Made by <a class="grey-text text-lighten-3" href="#">Moez Zineb</a> & <a class="grey-text text-lighten-3" href="#">Abdelaziz Dridi</a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* */
/* <!--  Scripts-->*/
/* <script src="{{asset('lib/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>*/
/* <script src="{{asset('lib/js/materialize.js')}}"></script>*/
/* <script src="{{asset('lib/js/jquery.progresstracker.js')}}"></script>*/
/* <script src="{{asset('lib/js/init.js')}}"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
