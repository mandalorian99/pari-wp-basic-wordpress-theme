<?php 
/*
 * Template Name:Special Layout
 */
/*including header */
get_header() ;

/*blog post  content goes here*/
	if( have_posts() ){
		/*loop through post*/
		while( have_posts() ){
			 the_post();
			 ?>

				<article class="post">
					<h2 style="color:blue;"><?php echo the_title() ;?></h2>
					<div class="info-box">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus consequatur ratione accusamus delectus. Cupiditate animi repudiandae deserunt necessitatibus accusamus facilis neque, officia maxime, accusantium voluptas. Quos fugit, voluptates dolor est?
					</div>
					<p> <?php echo the_content() ; ?> </p>
				</article>
			 <?php
		}
	}else{
		echo'<p>no post found</p>' ;
	}

/*including footer*/
get_footer() ;
?>