<?php 
/*echo'<pre>';
print_r(get_field('background'));
echo'</pre>';
die();*/  
get_header();
?> 
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<< HEAD
<<<<<<< HEAD
                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url')?>/assets/img/logo180-50.png" alt=""  /></a>
=======
                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url')?>/assets/img/ee.jpg" alt=""  /></a>
>>>>>>> updating
=======

            

                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php bloginfo('template_url')?>/assets/img/ee.jpg" alt=""  /></a>

>>>>>>> advenced update
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
      <!--NAVBAR SECTION END-->
      
       <div class="home-sec" id="home" style="background: no-repeat center center url('<?php echo the_field('background');?>'); ">
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h1><?php the_field('menu');?></h1>
                           <h3><?php the_field('menu_copie');?></h3>
                            
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h1><?php the_field('menu');?></h1>
                           <h3><?php the_field('menu_copie2');?></h3>
                            
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h1><?php the_field('menu');?></h1>
                           <h3><?php the_field('menu_copie3');?></h3>
                           
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> bienvenu <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line"><?php the_field('titrelist');?> </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                     <?php the_field('textlist');?>
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                     <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>
<<<<<<< HEAD
<<<<<<< HEAD
                   <h3 >Quality Education</h3>
=======
                   <h3 >qualité de l'éducation</h3>
>>>>>>> updating
=======


                   <h3 >qualité de l'éducation</h3>

>>>>>>> advenced update
                 <hr />
                       <hr />
                   <p >
                       <?php the_field('first_champs');?>
                       
                   </p>
<<<<<<< HEAD
<<<<<<< HEAD
               <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
=======
               
>>>>>>> updating
=======

             

>>>>>>> advenced update
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     <i class="fa fa-bolt fa-4x icon-round-border" ></i>
<<<<<<< HEAD
<<<<<<< HEAD
                   <h3 >SYSTEMATIC APPROACH</h3>
=======
                   <h3 >le systéme de l'école</h3>
>>>>>>> updating
=======

             <h3 >le systéme de l'école</h3>

>>>>>>> advenced update
                 <hr />
                       <hr />
                   <p >
                       <?php the_field('secend_champs');?>
                       
                   </p>
<<<<<<< HEAD
<<<<<<< HEAD
               <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
=======
               
>>>>>>> updating
=======

               

>>>>>>> advenced update
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
<<<<<<< HEAD
<<<<<<< HEAD
                   <h3 >ONE TO ONE STUDY</h3>
=======
                   <h3 >La formation appliquée</h3>
>>>>>>> updating
=======

               

                   <h3 >La formation appliquée</h3>

>>>>>>> advenced update
                 <hr />
                       <hr />
                   <p >
                       <?php the_field('tred_champs');?>
                   </p>
<<<<<<< HEAD
<<<<<<< HEAD
               <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
=======
               
>>>>>>> updating
=======

               

               

>>>>>>> advenced update
                </div>
                   </div>
                 
                 
               </div>
             </div>
<<<<<<< HEAD
   <!-- FEATURES SECTION END-->
   
    <!-- FACULTY SECTION END-->
   
             <!--/.HEADER LINE END-->


       
      <!-- COURSES SECTION END-->
=======

>>>>>>> advenced update
    <div id="contact-sec"  style="background: no-repeat center center url('<?php echo the_field('background2');?>'); ">
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
<<<<<<< HEAD
<<<<<<< HEAD
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
=======
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >contactez nous </h1>
>>>>>>> updating
=======

                     

                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >contactez nous </h1>

>>>>>>> advenced update
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                       <?php the_field('contact');?>
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD
                            <input type="text" class="form-control "  required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " required="required"  placeholder="Your Email" />
=======
=======


>>>>>>> advenced update
                            <input type="text" class="form-control "  required="required" placeholder="votre nom" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " required="required"  placeholder="voter email" />
<<<<<<< HEAD
>>>>>>> updating
=======

>>>>>>> advenced update
                        </div>
                        <div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD
                            <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
=======
                            <button type="submit" class="btn btn-info btn-block btn-lg">envoyer</button>
>>>>>>> updating
=======

                            

                            <button type="submit" class="btn btn-info btn-block btn-lg">envoyer</button>

>>>>>>> advenced update
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                </div>
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

<<<<<<< HEAD
<<<<<<< HEAD
                    <h2 ><strong>Our Location </strong></h2>
=======
                    <h2 ><strong>Notre emplacement </strong></h2>
>>>>>>> updating
=======

                

                    <h2 ><strong>Notre emplacement </strong></h2>

>>>>>>> advenced update
        <hr />
                    <div ">
                        <h4><?php the_field('adresse');?></h4>
                        
<<<<<<< HEAD
                        <h4><strong>Call:</strong> <?php the_field('tele');?></h4>
=======
                        <h4><strong>Appel:</strong> <?php the_field('tele');?></h4>
>>>>>>> advenced update
                        <h4><strong>Email: </strong><?php the_field('email');?></h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

<<<<<<< HEAD
<<<<<<< HEAD
                    <h2 ><strong>Social Conectivity </strong></h2>
=======
                    <h2 ><strong>Connectivité sociale </strong></h2>
>>>>>>> updating
=======

                    

                    <h2 ><strong>Connectivité sociale </strong></h2>

>>>>>>> advenced update
        <hr />
                    <div id="Social">
                      <?php
                      $button1=get_field('button1');
                      ?>
                        <a href="<?php echo $button1['url'];?>">  
                          <!--target="<?php echo $button1['target'];?>"-->
                          <?php echo $button1['title'];?>


                          <img src="<?php bloginfo('template_url')?>/assets/img/Social/facebook.png" alt="" /> </a>
   
                    </div>
                    </div>


                </div>
                 </div>
<?php get_footer();?>