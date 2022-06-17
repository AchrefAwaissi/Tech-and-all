<?php get_header();?>

<?php require('img.php');?>

<!-- section1 -->

<section id="section1" class="section1">
    <div class="container d-flex justify-content-center gap100">
      <div class="col-md-10 text-center">
       <h2 class="titre1"><?php echo get_theme_mod('section1_heading', 'Custom Bootstrap Wordpress Theme'); ?> </h2> 
         <p class="p1">
         <?php echo get_theme_mod('section1_text', ''); ?>
          </p>
        </div>
    </div>
</section>
<!-- end section1 -->

<!-- section2 -->
  
  <section class="section2" id="section2" style="background-image: url(<?php echo $bg;?>">
  <div class="container">
     <div class="row">
          <div class=" col-sm-12col-md-10 col-lg-6 " id="maccontainer">
          <img src="<?php echo $my_img; ?>"alt="mac " class="img-fluid ord"/>  

                   </div>
          <div class="col-sm-12col-md-10 col-lg-6" id="texte2">
             <h3 class="title"><?php echo get_theme_mod('section2_heading', 'Custom Bootstrap Wordpress Theme'); ?></h3>
             <p class="paragraphe1"><?php echo get_theme_mod('section2_text', ''); ?>
             </p>
           </div>
       </div>
   </div>
</section>
    <!--end section2 -->
     <!-- section3 -->
  <section class="section3" id="section3" style="background-image: url(<?php echo $bg2;?>">
    <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-10 col-lg-6 " id="texte2">
            <h3 class="title"><?php echo get_theme_mod('section3_heading', 'Custom Bootstrap Wordpress Theme'); ?></h3>
            <p class="paragraphe1"><?php echo get_theme_mod('section3_text', ''); ?>
            </p>
         </div>
         <div class="col-sm-12 col-md-10 col-lg-6 " id="texte2">
         <img src="<?php echo $my_img2 ?>" alt="mac " class="img-fluid ord"/>  
        </div>
       </div>
    </div>
</section>
  <!--end section4 -->

  <!--section4 -->
  <section class="section4"id="section4" style="background-image: url(<?php echo $bg3;?>">
  <div class="container">
     <div class="row">
          <div class=" col-sm-12col-md-10 col-lg-6 " id="maccontainer">
          <img src="<?php echo $my_img3?>" alt="mac " class="img-fluid ord"/>        
          </div>
          <div class="col-sm-12col-md-10 col-lg-6" id="texte2">
             <h3 class="title"><?php echo get_theme_mod('section4_heading', 'Custom Bootstrap Wordpress Theme'); ?></h3>
             <p class="paragraphe1">
             <?php echo get_theme_mod('section4_text', '');?>
             </p>
           </div>
           </div>
       </div>
   </div>
</section>
  <!--end section4 -->
     <!--section5 -->
<section class="section5"id="section5" style="background-image: url(<?php echo $bg4;?>">
   <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 " id="texte2">
            <h3 class="title"><?php echo get_theme_mod('section5_heading', 'Custom Bootstrap Wordpress Theme'); ?></h3>
            <p class="paragraphe1"><?php echo get_theme_mod('section4_text', '');?>
            </p>
          
            <div class="row  justify-content-start">
               <div id=" clo-sm-6 col-md-8 col-lg-6">
                    <div class="  conteneurcheck ">
                        <img src="<?php echo $my_img5 ?>" alt="telechargement " class="checkicon "/>
                       <div class="info">
                       <p class="text"><?php echo get_theme_mod('downloader_heading', 'Custom Bootstrap Wordpress Theme'); ?></p>
                       <p class="clic"><?php echo get_theme_mod('downloader_text', '');?></p>
                       </div>
                   </div>
              </div>
             </div>
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 " id="contphone">
            <img src="<?php echo $my_imgx ?>"  alt="iphone " class="img-fluid phone"/> 
           </div>
        </div>
       </div>
    </div>
</section>
  <!--end section5 -->
<?php get_footer();?>
