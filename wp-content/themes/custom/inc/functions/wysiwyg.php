<?php
/**
 * Callback function to insert 'styleselect' into the $buttons array
 */
function Custom_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter('mce_buttons_2', 'Custom_mce_buttons_2');

/**
 * Callback function to filter the MCE settings
 */
function Custom_mce_formats( $init_array ) {  
  $style_formats = array(  
    array(  
      'title' => 'CTA Button',  
      'block' => 'a',  
      'classes' => 'btn btn-sm btn-primary btn-call-to-action'
    ),
    array(  
      'title' => 'Disclaimer Paragraph',
      'block' => 'p',
      'classes' => 'disclaimer'
    ),  
    array(  
      'title' => 'Lede Paragraph',
      'block' => 'p',
      'classes' => 'lead'
    ), 
  );
  $init_array['style_formats'] = json_encode( $style_formats );  
  
  return $init_array;  
  
} 
add_filter( 'tiny_mce_before_init', 'Custom_mce_formats' );