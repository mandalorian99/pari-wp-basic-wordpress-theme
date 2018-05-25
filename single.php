<?php 
/*including header */
get_header() ;
echo'<h1>Single post</h1>';
/*blog post  content goes here*/
	if( have_posts() ){
		/*loop through post*/
		while( have_posts() ){
			 the_post();
			 ?>
				<article class="post">
                    <div class="post-pic">
                        <h1><?php 
                          echo the_title();
                        ?></h1>
                    </div>
                    <div class="post-content">
                        <?php echo the_content(); ?>
                    </div>
				</article>
			 <?php
		}
	}else{
		echo'<p>no post found</p>' ;
	}

/*including footer*/
get_footer() ;
?>