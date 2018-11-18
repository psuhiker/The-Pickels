<?php 

// Adds CSS to Customizer Page

function my_customizer_styles() { ?>
    <style>
    
        li#customize-control-themesimages_backgroundonesize, li#customize-control-themesimages_backgroundoneopacity,
        li#customize-control-themesimages_backgroundtwosize, li#customize-control-themesimages_backgroundtwoopacity
         {
            margin:  -20px 0px 20px 20px;
            padding:  0px 0px 0px 10px;
            border-left:  5px solid #008ec2;
        }
            li#customize-control-themesimages_backgroundtwoopacity {
                padding-top:  10px;
            }
            
        li#customize-control-themescolors_primaryfont, li#customize-control-themescolors_secondaryfont, li#customize-control-themescolors_tertiaryfont {
           margin:  0px 0px 20px 20px;
           padding:  0px 0px 0px 10px;
           border-left:  5px solid #008ec2;
        }
        li#customize-control-themessettings_maintenancemode label {
            font-weight: bold;
            color: red;
        }
        
            li#customize-control-themessettings_maintenancemode label span {
                font-weight: normal;
            }
            
    </style>
    <?php

}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );

// Removes Static Front Page

add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize) {
  $wp_customize->remove_section( 'static_front_page' );
}


function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
       // Adds Theme Logo to 'Site Identity'
   
       $wp_customize->add_setting( 'themesimages_logo' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_logo', array(
           'label'    => __( 'Logo', 'themesimages' ),
           'section'  => 'title_tagline',
           'settings' => 'themesimages_logo',
       ) ) );
       
   // Adds Theme Settings Section
   
   $wp_customize->add_section( 'themessettings_section' , array(
       'title'       => __( 'Website Settings', 'themessettings' ),
       'priority'    => 30,
       'description' => 'Customize your website\'s settings.',
   ) );
       
       // Adds Secret Password
       
       $wp_customize->add_setting( 'themessettings_password' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themessettings_password', array(
           'label'    => __( 'Secret Password', 'themessettings' ),
           'section'  => 'themessettings_section',
           'settings' => 'themessettings_password',
           'description' => 'Enter a special password that will allow non-family members to view content.',
       ) ) );
       
       // Adds Custom Welcome Text
       
       $wp_customize->add_setting( 'themessettings_welcometext' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themessettings_welcometext', array(
           'label'    => __( 'Welcome Message', 'themessettings' ),
           'section'  => 'themessettings_section',
           'settings' => 'themessettings_welcometext',
           'type'     => 'textarea',
           'description' => 'If you would like to customize the message that appears when users log into your website, enter that here.',
       ) ) );
       
       // Adds Secret Password
       
       $wp_customize->add_setting( 'themessettings_analytics' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themessettings_analytics', array(
           'label'    => __( 'Google Analytics', 'themessettings' ),
           'section'  => 'themessettings_section',
           'settings' => 'themessettings_analytics',
           'description' => 'Enter your Google Analytics ID (ID only).',
       ) ) );
       
       // Adds Maintenance Mode
       
       $wp_customize->add_setting( 'themessettings_maintenancemode' );
       
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themessettings_maintenancemode', array(
           'label'    => __( 'Enable Maintenance Mode', 'themessettings' ),
           'section'  => 'themessettings_section',
           'settings' => 'themessettings_maintenancemode',
           'type'     => 'checkbox',
           'description' => 'Check this option to enable maintenance mode. This will only allow administrators to view the website.',
       ) ) );
   
   // Adds Theme Images Section
   
   $wp_customize->add_section( 'themesimages_section' , array(
       'title'       => __( 'Theme Images', 'themesimages' ),
       'priority'    => 30,
       'description' => 'Customize your website\'s theme images.',
   ) );
       
       // Adds Background #1
       
       $wp_customize->add_setting( 'themesimages_backgroundone' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_backgroundone', array(
           'label'    => __( 'Background #1', 'themesimages' ),
           'section'  => 'themesimages_section',
           'settings' => 'themesimages_backgroundone',
           'description' => 'This background appears in various places across the website.',
       ) ) );
       
           // Adds Size for Background #1
       
           $wp_customize->add_setting( 'themesimages_backgroundonesize' );
           
           $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themesimages_backgroundonesize', array(
               'label'    => __( 'Background Size', 'themesimages' ),
               'section'  => 'themesimages_section',
               'settings' => 'themesimages_backgroundonesize',
               'type'     => 'select',
               'description' => 'Choose the size of the background',
               'choices'     => array(
                   'cover'   => __( 'Fill Screen' ),
                   '100px'  => __( '100px' ),
                   '200px'  => __( '200px' ),
                   '300px'  => __( '300px' ),
                   '400px'  => __( '400px' ),
                   '500px'  => __( '500px' ),
                   ),
           ) ) );
           
           // Adds Opacity for Background #1
           
           $wp_customize->add_setting( 'themesimages_backgroundoneopacity' );
           
           $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themesimages_backgroundoneopacity', array(
               'label'    => __( 'Background Opacity', 'themesimages' ),
               'section'  => 'themesimages_section',
               'settings' => 'themesimages_backgroundoneopacity',
               'type'     => 'select',
               'description' => 'Choose the opacity of the background',
               'choices'     => array(
                   '0'   => __( '100%' ),
                   '0.1'  => __( '90%' ),
                   '0.2'  => __( '80%' ),
                   '0.3'  => __( '70%' ),
                   '0.4'  => __( '60%' ),
                   '0.5'  => __( '50%' ),
                   '0.6'  => __( '40%' ),
                   '0.7'  => __( '30%' ),
                   '0.8'  => __( '20%' ),
                   '0.9'  => __( '10%' ),
                   '1'  => __( '0%' ),
                   ),
           ) ) );
       
       // Adds Background #2
       
       $wp_customize->add_setting( 'themesimages_backgroundtwo' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_backgroundtwo', array(
           'label'    => __( 'Background #2', 'themesimages' ),
           'section'  => 'themesimages_section',
           'settings' => 'themesimages_backgroundtwo',
           'description' => 'This background appears behind news sections.',
       ) ) );
       
           // Adds Size for Background #1
           
           $wp_customize->add_setting( 'themesimages_backgroundtwosize' );
           
           $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themesimages_backgroundtwosize', array(
               'label'    => __( 'Background Size', 'themesimages' ),
               'section'  => 'themesimages_section',
               'settings' => 'themesimages_backgroundtwosize',
               'type'     => 'select',
               'description' => 'Choose the size of the background',
               'choices'     => array(
                   'cover'   => __( 'Fill Screen' ),
                   '100px'  => __( '100px' ),
                   '200px'  => __( '200px' ),
                   '300px'  => __( '300px' ),
                   '400px'  => __( '400px' ),
                   '500px'  => __( '500px' ),
                   ),
           ) ) );
               
           // Adds Opacity for Background #1
               
           $wp_customize->add_setting( 'themesimages_backgroundtwoopacity' );
           
           $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themesimages_backgroundtwoopacity', array(
               'label'    => __( 'Background Opacity', 'themesimages' ),
               'section'  => 'themesimages_section',
               'settings' => 'themesimages_backgroundtwoopacity',
               'type'     => 'select',
               'description' => 'Choose the opacity of the background',
               'choices'     => array(
                   '0'   => __( '100%' ),
                   '0.1'  => __( '90%' ),
                   '0.2'  => __( '80%' ),
                   '0.3'  => __( '70%' ),
                   '0.4'  => __( '60%' ),
                   '0.5'  => __( '50%' ),
                   '0.6'  => __( '40%' ),
                   '0.7'  => __( '30%' ),
                   '0.8'  => __( '20%' ),
                   '0.9'  => __( '10%' ),
                   '1'  => __( '0%' ),
                   ),
           ) ) );
       
       // Adds Wallpaper Background
       
       $wp_customize->add_setting( 'themesimages_wallpaperbg' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_wallpaperbg', array(
           'label'    => __( 'Logged Out Background', 'themesimages' ),
           'section'  => 'themesimages_section',
           'settings' => 'themesimages_wallpaperbg',
       ) ) );
       
       // Adds Background Pattern
       
       $wp_customize->add_setting( 'themesimages_backgroundpattern' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_backgroundpattern', array(
           'label'    => __( 'Background Pattern', 'themesimages' ),
           'section'  => 'themesimages_section',
           'settings' => 'themesimages_backgroundpattern',
       ) ) );
       
   // Adds Theme Colors Section
   
   $wp_customize->add_section( 'themescolors_section' , array(
       'title'       => __( 'Theme Colors', 'themescolors' ),
       'priority'    => 30,
       'description' => 'Customize your website\'s colors.',
   ) );
   
       // Adds Primary Color
       
       $wp_customize->add_setting( 'themescolors_primary' );
           
       $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themescolors_primary', array(
           'label'    => __( 'Primary Color', 'themescolors' ),
           'section'  => 'themescolors_section',
           'settings' => 'themescolors_primary',
       ) ) );
       
           // Adds Primary Font Color
           
           $wp_customize->add_setting( 'themescolors_primaryfont' );
               
           $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themescolors_primaryfont', array(
               'label'    => __( 'Font Color', 'themescolors' ),
               'section'  => 'themescolors_section',
               'settings' => 'themescolors_primaryfont',
           ) ) );
   
       // Adds Secondary Color
       
       $wp_customize->add_setting( 'themescolors_secondary' );
           
       $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themescolors_secondary', array(
           'label'    => __( 'Secondary Color', 'themescolors' ),
           'section'  => 'themescolors_section',
           'settings' => 'themescolors_secondary',
       ) ) );
       
           // Adds Primary Font Color
           
           $wp_customize->add_setting( 'themescolors_secondaryfont' );
               
           $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themescolors_secondaryfont', array(
               'label'    => __( 'Font Color', 'themescolors' ),
               'section'  => 'themescolors_section',
               'settings' => 'themescolors_secondaryfont',
           ) ) );
       
       // Adds Tertiary Color
       
       $wp_customize->add_setting( 'themescolors_tertiary' );
           
       $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themescolors_tertiary', array(
           'label'    => __( 'Tertiary Color', 'themescolors' ),
           'section'  => 'themescolors_section',
           'settings' => 'themescolors_tertiary',
       ) ) );
       
           // Adds Primary Font Color
           
           $wp_customize->add_setting( 'themescolors_tertiaryfont' );
               
           $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themescolors_tertiaryfont', array(
               'label'    => __( 'Font Color', 'themescolors' ),
               'section'  => 'themescolors_section',
               'settings' => 'themescolors_tertiaryfont',
           ) ) );
   
   
}
add_action( 'customize_register', 'mytheme_customize_register' );