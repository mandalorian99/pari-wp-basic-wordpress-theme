<?php 
/*including header */
get_header() ;

/*blog post  content goes here*/
	if( have_posts() ){
		/*loop through post*/
		while( have_posts() ){
			 the_post();
			 ?>
<style type="text/css">
			 	
			 	/*about us custom modification*/
div .title-column{
    width:30%;
    float:left;
    
    height: 500px ;
    text-align: center;
}

div  .text-column{
    width:70%;
    float:right;
    
    height: 500px; 
    text-align: left ;
    padding: 5x  5px;
}
/*clearfix*/
.clearfix:befor , .clearfix:after{content:""; display: table ;}
.clearfix:after{clear:both;}
/*about image*/
.title-column img{
	width:200px;
	height:200px;
	border-radius:10px 10px ;
}
</style>
				<article class="post">
					<div class="column-container clearfix">
						<!----title column end---->
						<div class="title-column">
							<h2> <?php echo the_title() ; ?> </h2>
							<img src="http://localhost/wp/wp-content/uploads/2018/05/g.jpeg" alt="mahendra choudhary" /> 
						</div><!----end title column---->

						<!-----text column---->
						<div class="text-column">
							<p><?php echo the_content() ; ?></p>
						</div><!---title column-->
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