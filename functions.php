<?php 
/* 
 * function for dynammically including css file 
 */
function get_wp_resources(){
    /* wordpress default function to get stylesheet URI */
    wp_enqueue_style( 'style' , get_stylesheet_uri()  ) ;
}

/* this built in function calls the above function and include the css file */
add_action( 'wp_enqueue_scripts' , 'get_wp_resources' ) ;

/*
 * -----navigation menu-----
 */

 register_nav_menus( array(
     'primary'=> __('Primary Menu' ),
     'footer'=>  __( 'Footer MENU' )
 ) );

/*
 * get function ancestor id 
 * if it is a parent page ,this page return its id
 * IF it is a child page then , this function return its ancesstor id's
 */
function get_top_ancestor_id(){
    global $post ;
    /*
     *if it is not parent page ,return child's page ancesstor id's 
     */
    if( $post->post_parent ){
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) )  ;
        return $ancestors[0] ;
    } 

    return $post->ID ;
}

/** custom read more button/link */
function custom_excerpt( $lenght ){
    return(350);
}
add_filter('excerpt_lenth' , 'custom_excerpt') ;

function read_more_btn(){
?>
    <div class="read_more_btn"><a href="<?php echo get_the_permalink($postr->ID) ;?>">Read More</a></div>
<?php
}
?>