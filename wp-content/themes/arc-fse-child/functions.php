<?php 
	 add_action( 'wp_enqueue_scripts', 'arc_fse_child_enqueue_styles' );
	 function arc_fse_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>