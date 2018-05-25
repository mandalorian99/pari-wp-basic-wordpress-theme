<?php
/*
 *Template Name:Custom about layout
 * 
 */

 /* including header */
 get_header() ;
/*
 * looping through post
 */

 if( have_posts() ):
    while( have_posts() ):
        the_post();
        ?>

        <article class="post">
					<h2 style="color:blue;"><?php echo the_title() ;?></h2>
					<div class="outro_box">lorem ipsum dollar sit</div>
					<p> <?php echo the_content() ; ?> </p>
				</article>
        
        <?php
    endwhile;
 endif;


 /* including  footer */
 get_footer();
?>