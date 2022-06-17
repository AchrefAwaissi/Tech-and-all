<?php
  require('img.php');?>
  <!--footer -->
  <footer class="blog-footer" style="background-image: url(<?php echo $bgfooter;?>">
  <div class="container">
  <div class="row ">
        <div class="col-sm-12 col-md-10 col-lg-6 " id="footimagecontainer">
           <img src="<?php echo $logo1 ?>" alt="Logo du site" class="img-fluid logo1"/> 
        </div>
                      <!--text of the footer-->

         <div class="col-sm-12 col-md-10 col-lg-6 " id="texte2">
            <h3 class="title"><?php echo get_theme_mod('blog-footer_heading', 'Custom Bootstrap Wordpress Theme'); ?></h3>
            <p class="paragraphe1"><?php echo get_theme_mod('blog-footer_text', ''); ?>
            </p>
              <!--Social media images -->
            <div class="row  justify-content-end">
        <div id=" clo-sm-6 icongroup">
          <img src="<?php  echo $twiter ?>" alt="twiter" class="icon1"/>         
          <img src="<?php  echo $twitch ?>" alt="twitch " class="icon1"/>         
          <img src="<?php  echo $timblr ?>" alt="timbler " class="icon1"/>         
          <img src="<?php  echo $facebook ?>" alt="facebook " class="icon1"/>         
           <img src="<?php  echo $skype ?>" alt="skype " class="icon1"/>       
            <p class="copyright"><?php echo get_theme_mod('blog-footer_copyright', ''); ?></p>
         </div>
        </div>

         </div>
       </div>
      
  </div>
</footer>
  <!--end of footer -->
  <?php wp_footer();?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>