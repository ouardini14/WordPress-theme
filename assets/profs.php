<?php /* Template Name: professeurs */ 
get_header();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="<?php bloginfo('template_url');?>/ flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/bootstrap.css">
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url');?>/assets/img/logo180-50.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                  <?php 
                wp_nav_menu(
                        array(
                        'theme_location' => 'top-menu',
                        'menu_id' =>  'main-menu',
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav navbar-right'
                        )

                );
                ?>
            </div>
           
        </div>
    </div>
<div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="<?php bloginfo('template_url')?>/assets/img/faculty/1.jpg"  class="img-rounded" />
                   <h3 >ROXI CHI LUENA </h3>
                 <hr />
                         <h4>Desigining <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <img src="<?php bloginfo('template_url')?>/assets/img/faculty/2.jpg"  class="img-rounded" />
                   <h3 >JANE DEO ALEX</h3>
                 <hr />
                         <h4>Enginering <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
                </div>
                   </div>
               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <img src="<?php bloginfo('template_url')?>/assets/img/faculty/3.jpg" class="img-rounded" />
                   <h3 >RUBY DECORSA</h3>
                 <hr />
                         <h4>Management <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
                </div>
                   </div>
                 
               </div>
             </div>
        </div>
        <?php get_footer();?>
