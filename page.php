<?php 
/*including header */
get_header() ;

/*blog post  content goes here*/
	if( have_posts() ){
		/*loop through post*/
		while( have_posts() ){
			 the_post();
			 ?>
				<article class="post">
					<p><a href="<?php the_permalink() ?>"><h2><?php echo the_title() ?></h2></a></p>
					<p><?php echo the_content() ?></p>
				</article>
			 <?php
		}
	}else{
		echo'<p>no post found</p>' ;
	}

/*including footer*/
get_footer() ;
?>