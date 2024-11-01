<?php

function SPCL_home(){include 'Pages/activation.php';}
function SPCL_settings() {include 'Pages/settings.php';}


function SPCL_CSSJS() {
    wp_enqueue_style( 'SPC_style1', plugins_url('CSS/style.css?v=2.1', __FILE__) );
    wp_enqueue_style( 'SPC_style2', plugins_url('JS/tipx/jqu.css', __FILE__) );
    wp_enqueue_style( 'SPC_style3', plugins_url('JS/tipx/style.css', __FILE__) );
    wp_enqueue_script( 'jquery-ui-tooltip' );

     wp_enqueue_script('SPC_script1',plugins_url('wpbox-admin.js', __FILE__),1 ,1,1 );
    wp_enqueue_script('SPC_script2',plugins_url('JS/feedback.js', __FILE__),1 ,2,1 );

  

}




function SPCL_menu() {
  

  add_menu_page ( 'Menu', 'Smart Pregnancy Calculator Lite', 'manage_options', 'MAINMENUSPCL', 'SPCL_home', 'dashicons-calendar' );
  // add_submenu_page ( 'MAINMENUSPCL', 'SPCL_settings', 'Settings', 'manage_options','SPCL_settings' ,'SPCL_settings', '');

  

}?>