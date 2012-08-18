<?php
/*
* @package WordPress
* @subpackage Divine
*/


// divine modules include
require 'divine.config.php';
require 'divine.editablecontent.php';
include 'divine.addpages.php';
if(file_exists('wp-content/themes/'.$wp_object_cache->cache['options']['alloptions']['template'].'/divine.install.php')){
	include 'divine.install.php';
    include 'divine.cleaner.php';
}


function valid_search_form($form){
	return str_replace('role="search" ', '', $form);
}

add_filter('get_search_form', 'valid_search_form');

if (function_exists('register_sidebar'))
	register_sidebar(
		array(
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		)
	);


if ( !function_exists('el_get_comment_date') ) {
 function el_get_comment_date($date) {
  $result = date( "D j", strtotime($date) );
  return $result;
 }
 add_filter('get_comment_date', 'el_get_comment_date');
}

if ( !function_exists('el_get_avatar') ) {
 function el_get_avatar($markup, $size = '96', $default = '', $alt = false) {
  $avatarSize = 50;
  $pattern[0] = "/(height=[^d.])[0-9]+([^d.])/i";
  $pattern[1] = "/(width=[^d.])[0-9]+([^d.])/i";
  $replacement[0] = "\${1}".$avatarSize."\${2}";
  $replacement[1] = "\${1}".$avatarSize."\${2}";
  $markup = preg_replace($pattern, $replacement, $markup);

  return '<div class="avatar-clear-both"></div><div class="avatar-n1">'.$markup.'</div>';
 }
 add_filter( 'get_avatar', 'el_get_avatar' );
}

function IsTextHasReadMore( $post, $postPages ){
	return preg_match('/<!--more(.*?)?-->/', $postPages[0], $matches);
}

function the_elemente_categories( $categoriesConfig = array() ){
    $defaultConfig = array(
          'before'    => __( 'Categories: ' )
        , 'after'   => '.'
        , 'separator' => ', '
        , 'hierarchy_separator' => '\\'
        , 'limit' => 1
        , 'hierarchy_limit' => 1
        , 'beforeCat' => ''
        , 'afterCat' => '' );
    $categoriesConfig = array_merge( $defaultConfig, $categoriesConfig );

    $result = $categoriesConfig[ 'before' ];
    $categories = get_the_category();
    $isFirstCat = true;
    foreach ( $categories as $category ){
        if ( !$isFirstCat ){
            $result .= $categoriesConfig[ 'separator' ];
        }
		$isFirstCat = false;
        $result .= $beforeCat;
        if ( 1 == $categoriesConfig[ 'hierarchy_limit' ] ){
            $result .= '<a href="'.get_category_link( $category->term_id ).'">';
            $result .= $category->name;
            $result .= '</a>';
        }
        else{
            $result .= get_category_parents( $category, true, $categoriesConfig[ 'hierarchy_separator' ] );
        }
        $result .= $afterCat;

        if ( $categoriesConfig[ 'limit' ] == 1 ){
            break;
        }
    }

    $result .= $categoriesConfig[ 'after' ];

    return $result;
}

function the_elemente_link_pages( $pagesConfig = array() ){
    $defaultConfig = array(
          'before' => ''
        , 'after' => ''
        , 'link_type' => 'mixed' /* mixed, next, number*/
        , 'page_link_format' => '%'
        , 'previous_link' => ''
        , 'next_link' => ''
        , 'before_link' => ''
        , 'after_link' => ''
    );
    $pagesConfig = array_merge( $defaultConfig, $pagesConfig );

    $result = $categoriesConfig[ 'before' ];
    if ( 'number' == $pagesConfig['link_type'] ){
        $result .= wp_link_pages( array(
                                    'before' => ''
                                    , 'after' => ''
                                    , 'next_or_number' => 'number'
                                    , 'pagelink' => $pagesConfig['page_link_format']
                                    , 'link_before' => $pagesConfig['before_link']
                                    , 'link_after' => $pagesConfig['after_link']
                                    , 'echo' => 0) );
    }
    else if ( 'next' == $pagesConfig['link_type'] ){
        $result .= wp_link_pages( array(
                                    'before' => ''
                                    , 'after' => ''
                                    , 'next_or_number' => 'next'
                                    , 'link_before' => $pagesConfig['before_link']
                                    , 'link_after' => $pagesConfig['after_link']
                                    , 'nextpagelink' => $pagesConfig['next_link']
                                    , 'previouspagelink' => $pagesConfig['previous_link']
                                    , 'echo' => 0) );
    }
    else if ( 'mixed' == $pagesConfig['link_type'] ){
        $result .= wp_link_pages( array(
                                    'before' => '<p>'
                                    , 'after' => ''
                                    , 'next_or_number' => 'next'
                                    , 'link_before' => $pagesConfig['before_link']
                                    , 'link_after' => $pagesConfig['after_link']
                                    , 'nextpagelink' => ''
                                    , 'previouspagelink' => $pagesConfig['previous_link']
                                    , 'echo' => 0) );
        $result .= wp_link_pages( array(
                                    'before' => ''
                                    , 'after' => ''
                                    , 'next_or_number' => 'number'
                                    , 'pagelink' => $pagesConfig['page_link_format']
                                    , 'link_before' => $pagesConfig['before_link']
                                    , 'link_after' => $pagesConfig['after_link']
                                    , 'echo' => 0) );
        $result .= wp_link_pages( array(
                                    'before' => ''
                                    , 'after' => '</p>'
                                    , 'next_or_number' => 'next'
                                    , 'link_before' => $pagesConfig['before_link']
                                    , 'link_after' => $pagesConfig['after_link']
                                    , 'nextpagelink' => $pagesConfig['next_link']
                                    , 'previouspagelink' => ''
                                    , 'echo' => 0) );
    }

    $result .= $categoriesConfig[ 'after' ];

    return $result;
}

function the_elemente_tags( $tagsConfig = array() ){
	$defaultConfig = array(
		'before' => _('Tags: ')
		, 'after' => '.'
		, 'before_tag' => ''
		, 'after_tag' => ''
		, 'separator' => ', '
		);
	$tagsConfig = array_merge( $defaultConfig, $tagsConfig );

	return the_tags( $tagsConfig['before'].$tagsConfig['before_tag'], $tagsConfig['after_tag'].$tagsConfig['separator'].$tagsConfig['before_tag'], $tagsConfig['after_tag'].$tagsConfig['after'] );
}

if ( !isset( $content_width ) ) $content_width = 978;

add_action( 'after_setup_theme', 'divine_setup' );
if ( !function_exists('divine_setup') ){
 function divine_setup(){
  add_theme_support( 'automatic-feed-links' );
 }
}

?>
