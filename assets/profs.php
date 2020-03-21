<?php /* Template Name: professeurs */ 
get_header();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <title>EST'SB</title>
    <title>EST'SB</title>
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

                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url');?>/assets/img/ee.jpg" alt=""  /></a>

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
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"><?php the_field('titre');?> </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      <?php the_field('letexte');?>


                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->



           <div class="row" >
           <?php
           if(have_rows('photo')) :?>
           <div class="d-flex" >
           

            <?php while (have_rows('photo')) :the_row(); ?>
               
                    <div class="col-lg-3  col-md-3 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <img src="<?php echo get_sub_field('sub_photo');?>"  class="img-rounded" />
                     <h3 ><?php the_sub_field('sub_texte');?></h3>
                     <hr />
                         <h4>département <br /> <?php the_sub_field('departement');?> </h4>
                      <p >
                       <?php the_sub_field('title'); ?>
                       
                   </p>
                </div>
                
                 
                   </div>
            <?php endwhile; ?>
             </div>
            <?php endif;?> 

               

        </div>
        <?php get_footer();?>
