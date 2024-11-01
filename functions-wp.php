<?php

function SPCL_scripts() {
global $post;

      //=========
    if( has_shortcode( $post->post_content, 'smart-pregnancy-calculator') ) {


//------------ PLAYER-----


wp_enqueue_script( 'SPC_script_p3', plugins_url('/lib/js/formatters.js', __FILE__) ); 
wp_enqueue_script( 'SPC_script_p5', plugins_url('/lib/js/script.js', __FILE__), array('jquery'),'2.1',1 ); 


wp_enqueue_style( 'SPC_style_p1', plugins_url('/lib/css/skin.css', __FILE__) );


//--------------------        


    }

      //=========
 }


 

 function SPCL_initiate($atts, $content = null){

    extract(shortcode_atts(array(
      "id" => '1',    
   ), $atts));
   

//============= PLAYER CONTENT ==========
ob_start();
include 'lib/index.php';
$output = ob_get_clean();
return $output;
//====================================== 


   
}

?>