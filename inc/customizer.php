<?php
  function wpb_customize_register($wp_customize){

//add section Edit header
$wp_customize->add_section('blog-header',array(
  'title'  => __('Edit header','Tech and all Theme'),
  'description' =>sprintf(__('opton for header','Tech and All theme')),
  'priority' =>120

));
        //add Edit title of header settings 


$wp_customize->add_setting('header_dicover', array(
  'default'   => _x('Discover more', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
        //add Edit title of header controls 

  $wp_customize->add_control('header_dicover', array(
  'label'   => __('text', 'Tech and All theme'),
  'section' => 'blog-header',
  'priority'  => 2
  ));
    //change the logo of the header
    $wp_customize->add_setting('pdn_home_img_settings_header', array(
      'default'   => get_bloginfo('template_directory').'/images/logo.png',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlH', array(
      'label' => 'Edit My logo',
      'settings'  => 'pdn_home_img_settings_header',
      'section'   => 'blog-header'
    ) ));
    //background of the header
 $wp_customize->add_setting('pdn_home_img_settings_bgheader', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/headerbg.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlV', array(
  'label' => 'Edit My Background Image of the header',
  'settings'  => 'pdn_home_img_settings_bgheader',
  'section'   => 'blog-header'
) ));
 //change the image of the header
 $wp_customize->add_setting('pdn_home_img_settings_headerdevices', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/devices.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlF', array(
  'label' => 'Edit My devices image',
  'settings'  => 'pdn_home_img_settings_headerdevices',
  'section'   => 'blog-header'
) ));

  //customize image discover
  $wp_customize->add_setting('pdn_home_img_settings_headerdiscover', array(
    //default value
    'default'   => get_bloginfo('template_directory').'/images/down arrow.png',

  ));
  
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlQ', array(
    'label' => 'Edit My down arrow image',
    'settings'  => 'pdn_home_img_settings_headerdiscover',
    'section'   => 'blog-header'
  ) ));
  



    //add section section1
    $wp_customize->add_section('section1',array(
      'title'  => __('Edit section 1','Tech and all Theme'),
      'description' =>sprintf(__('opton for section1','Tech and All theme')),
      'priority' =>120
    
    ));

   //add title of section1 settings 

   $wp_customize->add_setting('section1_heading', array(
    'default'   => _x('Hi!welocome to tech and all', 'Tech and All theme'),
    'type'      => 'theme_mod'
    ));
          //add title of section1 controls 

    $wp_customize->add_control('section1_heading', array(
    'label'   => __('title of section 1', 'Tech and All theme'),
    'section' => 'section1',
    'priority'  => 2
    ));


 //add texte setting section1
 $wp_customize->add_setting('section1_text', array(
  'default'   => _x('', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
    //add texte control section1

  $wp_customize->add_control('section1_text', array(
  'label'   => __('text for section1', 'Tech and All theme'),
  'section' => 'section1',
  'type' => 'textarea',
  'priority'  => 3
  ));
//add background color to section1

$wp_customize->add_section( 'diwp_color_section', array(
  'title' => 'DIWP Colors',
  'description' => 'Set Colors For Background & Links',
  'priority' => '40'                  
));

// Add Settings 
$wp_customize->add_setting( 'diwp_theme_color', array(
'default' => '#04bfbf',
));

// Add Controls
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_theme_color', array(
'label' => 'background Color',
'section' => 'section1',
'settings' => 'diwp_theme_color'

)));

//Customize section 2
    //add section section2
$wp_customize->add_section('section2',array(
  'title'  => __('Edit section 2','Tech and all Theme'),
  'description' =>sprintf(__('opton for section2','Tech and All theme')),
  'priority' =>130

)); 
  //add title setting section2
  $wp_customize->add_setting('section2_heading', array(
  'default'   => _x('Desktop Version', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
  //add title control section2
  $wp_customize->add_control('section2_heading', array(
  'label'   => __('title', 'Tech and All theme'),
  'section' => 'section2',
  'priority'  => 2
  ));
  //add texte control section2
  $wp_customize->add_setting('section2_text', array(
  'default'   => _x('Changer le paragraph pour la section2', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
  
  $wp_customize->add_control('section2_text', array(
  'label'   => __('paragraph', 'Tech and All theme'),
  'section' => 'section2',
  'type' => 'textarea',
  'priority'  => 3
  ));
//add image for section2

$wp_customize->add_setting('pdn_home_img_settings', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/desktop.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_control', array(
  'label' => 'Edit My Image',
  'settings'  => 'pdn_home_img_settings',
  'section'   => 'section2'
) ));

 //add image background of section2

 $wp_customize->add_setting('pdn_home_img_settings_bg1', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/backgroundred.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlZs', array(
  'label' => 'Edit My Background Image',
  'settings'  => 'pdn_home_img_settings_bg1',
  'section'   => 'section2'
) ));




  //Customize section 3
    
    //Add Text + Title + Image to section 3
    //add section3
    $wp_customize->add_section('section3',array(
      'title'  => __('Edit section3','Tech and all Theme'),
      'description' =>sprintf(__('opton for section3','Tech and All theme')),
      'priority' =>140
    
    ));
      //add title of section3 settings 

    $wp_customize->add_setting('section3_heading', array(
      'default'   => _x('Mobile Version', 'Tech and All theme'),
      'type'      => 'theme_mod'
      ));
            //add title of section3 controls 

      $wp_customize->add_control('section3_heading', array(
      'label'   => __('title', 'Tech and All theme'),
      'section' => 'section3',
      'priority'  => 2
      ));
  //add texte setting section3
  $wp_customize->add_setting('section3_text', array(
    'default'   => _x('Changer le paragraph pour la section3', 'Tech and All theme'),
    'type'      => 'theme_mod'
    ));
      //add texte control section3

    $wp_customize->add_control('section3_text', array(
    'label'   => __('paragraph', 'Tech and All theme'),
    'section' => 'section3',
    'type' => 'textarea',
    'priority'  => 3
    ));
//add image for section3
$wp_customize->add_setting('pdn_home_img_settings3', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/deuxapareils.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_control1', array(
  'label' => 'Edit My Image',
  'settings'  => 'pdn_home_img_settings3',
  'section'   => 'section3'
) ));

 //add image background of section3
 $wp_customize->add_setting('pdn_home_img_settings_bg2', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/backgroundblue1.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlB', array(
  'label' => 'Edit My Background Image',
  'settings'  => 'pdn_home_img_settings_bg2',
  'section'   => 'section3'
) ));


    



    //Customize section 4
    //add section section4
    $wp_customize->add_section('section4',array(
      'title'  => __('Edit section 4','Tech and all Theme'),
      'description' =>sprintf(__('opton for section4','Tech and All theme')),
      'priority' =>150
    
    ));

   //add title of section4 settings 

   $wp_customize->add_setting('section4_heading', array(
    'default'   => _x('Free Cloud Backup', 'Tech and All theme'),
    'type'      => 'theme_mod'
    ));
          //add title of section4 controls 

    $wp_customize->add_control('section4_heading', array(
    'label'   => __('title', 'Tech and All theme'),
    'section' => 'section4',
    'priority'  => 2
    ));


 //add texte setting section4
 $wp_customize->add_setting('section4_text', array(
  'default'   => _x('', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
    //add texte control section4

  $wp_customize->add_control('section4_text', array(
  'label'   => __('paragraph', 'Tech and All theme'),
  'section' => 'section4',
  'type' => 'textarea',
  'priority'  => 3
  ));
 //add image custome for section 4
  $wp_customize->add_setting('pdn_home_img_settings4', array(
    'default'   => get_bloginfo('template_directory').'/images/mac.png',
  ));
  
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_control2', array(
    'label' => 'Edit My Image',
    'settings'  => 'pdn_home_img_settings4',
    'section'   => 'section4'
  ) ));
  
   //add image background of section4
 $wp_customize->add_setting('pdn_home_img_settings_bg3', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/background5.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlC', array(
  'label' => 'Edit My Background Image',
  'settings'  => 'pdn_home_img_settings_bg3',
  'section'   => 'section4'

) ));
//customize the download app of section5

 //add title of the app downloader settings 

 $wp_customize->add_setting('downloader_heading', array(
  'default'   => _x('Download the app ', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
        //add title of the app downloader controls 

  $wp_customize->add_control('downloader_heading', array(
  'label'   => __('title', 'Tech and All theme'),
  'section' => 'section5',
  'priority'  => 12
  ));
 //add texte setting of the app downloader 
 $wp_customize->add_setting('downloader_text', array(
  'default'   => _x('click her to visit the app stop', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
    //add texte   control of the app downloader  

  $wp_customize->add_control('downloader_text', array(
  'label'   => __('paragraph1', 'Tech and All theme'),
  'section' => 'section5',
  'priority'  => 13
  ));

//add images settings and controls of the app downloader
$wp_customize->add_setting('pdn_home_img_settings_downloader', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/down arrow.png',

  
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlA', array(
  'label' => 'Edit My Image',
  'settings'  => 'pdn_home_img_settings_downloader',
  'section'   => 'section5',
  'priority'  => 14

) ));







  
    //Customize section 5
    //add section section5
    $wp_customize->add_section('section5',array(
      'title'  => __('Edit section 5','Tech and all Theme'),
      'description' =>sprintf(__('opton for section5','Tech and All theme')),
      'priority' =>157
    
    ));

   //add title of section5 settings 

   $wp_customize->add_setting('section5_heading', array(
    'default'   => _x('Download Our App', 'Tech and All theme'),
    'type'      => 'theme_mod'
    ));
          //add title of section5 controls 

    $wp_customize->add_control('section5_heading', array(
    'label'   => __('title', 'Tech and All theme'),
    'section' => 'section5',
    'priority'  => 2
    ));


 //add texte setting section5
 $wp_customize->add_setting('section5_text', array(
  'default'   => _x('Changer le paragraph pour la section4', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
    //add texte control section5

  $wp_customize->add_control('section5_text', array(
  'label'   => __('paragraph', 'Tech and All theme'),
  'section' => 'section5',
  'type' => 'textarea',
  'priority'  => 3
  ));

  $wp_customize->add_setting('pdn_home_img_settings_phone', array(
    //default value
    'default'   => get_bloginfo('template_directory').'/images/B.png',

  ));
  
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlx', array(
    'label' => 'Edit My Image',
    'settings'  => 'pdn_home_img_settings_phone',
    'section'   => 'section5'
  ) ));
     //add image background of section5
 $wp_customize->add_setting('pdn_home_img_settings_bg4', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/Backgroundblurdark.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlD', array(
  'label' => 'Edit My Background Image',
  'settings'  => 'pdn_home_img_settings_bg4',
  'section'   => 'section5'
) ));

  //Customize footer
    //add section 
    $wp_customize->add_section('blog-footer',array(
      'title'  => __('Edit blog-footer','Tech and all Theme'),
      'description' =>sprintf(__('opton for blog-footer','Tech and All theme')),
      'priority' =>170
    
    ));

   //add title of footer settings 

   $wp_customize->add_setting('blog-footer_heading', array(
    'default'   => _x('About Our Team', 'Tech and All theme'),
    'type'      => 'theme_mod'
    ));
          //add title of footer controls 

    $wp_customize->add_control('blog-footer_heading', array(
    'label'   => __('title', 'Tech and All theme'),
    'section' => 'blog-footer',
    'priority'  => 2
    ));


 //add texte setting section1
 $wp_customize->add_setting('blog-footer_text', array(
  'default'   => _x('About Our Team', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
    //add texte control section1

  $wp_customize->add_control('blog-footer_text', array(
  'label'   => __('paragraph', 'Tech and All theme'),
  'section' => 'blog-footer',
  'type' => 'textarea',
  'priority'  => 3
  ));

  //change the logo of the footer
  $wp_customize->add_setting('pdn_home_img_settings_logo', array(
    //default value
    'default'   => get_bloginfo('template_directory').'/images/logo.png',

  ));
  
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlX', array(
    'label' => 'Edit My logo Image',
    'settings'  => 'pdn_home_img_settings_logo',
    'section'   => 'blog-footer'
  ) ));
  


       //add image background of the footer
       $wp_customize->add_setting('pdn_home_img_settings_bg5', array(
        //default value
        'default'   => get_bloginfo('template_directory').'/images/bacgroundlogun.png',

      ));
      
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pdn_home_img_controlE', array(
        'label' => 'Edit My Background Image',
        'settings'  => 'pdn_home_img_settings_bg5',
        'section'   => 'blog-footer'
      ) ));
      

//ADD social media images
//skype
$wp_customize->add_setting('skype', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/Shape 47.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'skype', array(
  'label' => 'Edit My skype logo',
  'settings'  => 'skype',
  'section'   => 'blog-footer'
) ));
//facebook
$wp_customize->add_setting('facebook', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/Shape 46.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook', array(
  'label' => 'Edit My facebook logo',
  'settings'  => 'facebook',
  'section'   => 'blog-footer'
) ));
//twiter
$wp_customize->add_setting('twiter', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/Shape 43.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twiter', array(
  'label' => 'Edit My twiter logo',
  'settings'  => 'twiter',
  'section'   => 'blog-footer'
) ));
//timblr
$wp_customize->add_setting('timblr', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/Shape 45.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'timblr', array(
  'label' => 'Edit My timblr logo',
  'settings'  => 'timblr',
  'section'   => 'blog-footer'
) ));
//twitch
$wp_customize->add_setting('twitch', array(
  //default value
  'default'   => get_bloginfo('template_directory').'/images/Shape 44.png',

));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitch', array(
  'label' => 'Edit My twitch logo',
  'settings'  => 'twitch',
  'section'   => 'blog-footer'
) ));
//edit text copyright
//add texte setting footer
$wp_customize->add_setting('blog-footer_copyright', array(
  'default'   => _x('copiright 2013 :All rights reserved Tech & All', 'Tech and All theme'),
  'type'      => 'theme_mod'
  ));
    //add texte control footer

  $wp_customize->add_control('blog-footer_copyright', array(
  'label'   => __('paragraph', 'Tech and All theme'),
  'section' => 'blog-footer',
  'priority'  => 10
  ));


  }
  add_action('customize_register','wpb_customize_register');

  //output Customize CSS
