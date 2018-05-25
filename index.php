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
					<em class="meta-box">
						<?php 
						 echo the_date('F j, Y')." | ".get_the_author_meta('display_name')  ;							
						?>
					</em>
					<div class="wrapper">
						<div class="post-thumbnail">
							<img style="width:320px ;height:300px;" src="http://localhost/wp/wp-content/uploads/2017/07/fbcover4.jpg" alt="">
						</div>
						<div class="post-excerpt">
							<?php 
							 /*
							  * fetching the excerpt of the post
							  */
							  echo the_excerpt() ;
							  read_more_btn();
							?>
						</div>
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