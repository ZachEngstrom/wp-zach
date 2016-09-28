<?php
/**
 * Add Breadcrumbs to the pages other than home
 * Call with <?php breadcrumbs(); ?>
 */
function breadcrumbs() {
  global $post;
  $ancestors = $post->ancestors;
  $parent = $post->parent;
  echo '<ul class="breadcrumb list-unstyled">';
  if (!is_front_page()) {
    //Check if page has ancestors - if only one parent exists, this will be an empty array
    if($ancestors){
      //Reverse the array so out put starts at the top of the hierarchy
      $parents = array_reverse($ancestors);
      foreach($parents as $parent){
        echo '<li><a href="'.get_page_link($parent).'">'.get_the_title($parent).'</a></li>';
      }
    }
    else if($post->parent){
      //Deal with single parent situation
      echo '<li><a href="'.get_page_link($parent).'">'.get_the_title($parent).'</a></li>';
    }
    //Present current title as simple text, no link
    echo '<li>' . get_the_title() . '</li>';
  }
  echo '</ul>';
}