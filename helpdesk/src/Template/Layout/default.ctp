<?= $this->Html->charset() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ITHelpdesk</title>
        <?= $this->Html->meta('icon') ?>

        <!-- Bootstrap -->
        <?= $this->Html->css('bootstrap.min.css') ?>

        <!-- Custom -->
        <?= $this->Html->css('custom.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css"> -->
        <?= $this->Html->css('/font-awesome-4.0.3/css/font-awesome.min.css') ?>

        <!-- CSS STYLE-->
        <?= $this->Html->css('style.css') ?>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <?= $this->Html->css('/rs-plugin/css/settings.css',array('media'=>'screen','type'=>'text/css')) ?>

        <?= $this->Html->script('/js/jquery.tagsinput.js') ?>
        <?= $this->Html->css('jquery.tagsinput.css') ?>



    </head>
    <body>
        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <?= $this->Html->image(
                              '/images/slide.jpg',
                              array(
                                'alt'=>'slidebg1',
                                'data-bgfit'=>'cover',
                                'data-bgposition'=>'left top',
                                'data-bgrepeat'=>'no-repeat')) ?>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo ">
                          <a href="index.html">
                            <?= $this->Html->image('/images/logo.jpg') ?>
                          </a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">

                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="" method="post" class="form" onclick="window.location = 'advance_search.html';">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">
                                <!-- <form action="" method="post" class="form">
                                    <button class="btn btn-primary">Start New Topic</button>
                                </form> -->
                                <?= $this->Html->link("Start New Topic",
                                  array('controller'=>'questions','action'=>'newQuestion'),
                                  array('class'=>'btn btn-primary'))?>
                            </div>
                            <div class="stnt pull-left">&nbsp;</div>

                            <?php if($authUser->user('userid') == null){ ?>
                            <div class="stnt pull-right">
                              <?= $this->Html->link("Sign In",
                                array('controller'=>'users','action'=>'login'),
                                array('class'=>'btn btn-info'))?>
                            </div>
                            <div class="stnt pull-right">&nbsp;</div>
                            <div class="stnt pull-right">
                              <?= $this->Html->link("Register",
                                array('controller'=>'users','action'=>'register'),
                                array('class'=>'btn btn-alert'))?>
                            </div>
                            <?php } ?>

                            <?php if($authUser->user('userid') != null){ ?>
                            <div class="stnt pull-right">&nbsp;</div>
                            <div class="avatar pull-right dropdown">
                                <a data-toggle="dropdown" href="#">
                                  <?= $this->Html->image('/images/profile.png') ?>
                                </a>
                                <b class="caret"></b>
                                <div class="status green">&nbsp;</div>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= $this->Url->build(["controller"=>"users","action"=>"profile"]);?>">My Profile</a></li>
                                    <!-- <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li> -->
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="<?= $this->Url->build(["controller"=>"users","action"=>"logout"]);?>">Log Out</a></li>
                                    <!-- <li role="presentation"><a role="menuitem" tabindex="-4" href="04_new_account.html">Create account</a></li> -->
                                </ul>
                            </div>
                            <?php } ?>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content and body here -->
            <section class="content">
                <?= $this->fetch('content') ?>
            </section>
            <!-- content and body here -->

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo ">
                          <a href="#">
                            <?= $this->Html->image('/images/logo.jpg') ?>
                          </a>
                        </div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2015, ITHelpdesk-mju.ac.th</div>
                        <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- get jQuery from the google apis -->
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>-->

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <?= $this->Html->script('/rs-plugin/js/jquery.themepunch.plugins.min.js') ?>
        <?= $this->Html->script('/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>

        <?= $this->Html->script('/js/bootstrap.min.js') ?>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    </body>
</html>
