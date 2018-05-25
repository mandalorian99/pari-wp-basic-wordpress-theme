<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width ,intial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head() ; ?> 
	<style type="text/css">
	/*sub navigation*/
	.sub-nav ul li a{
		color:red ;
		font-size:15px ;
	}
	.sub-nav{
		margin:10px;
	}
	.outro_box{
		background-color:#BBB; 
		width:150px ;
		margin:10px;
		padding:10px 10px ;
		border-radius:5px 5px;
		margin:0 auto ;
		text-align:center;
		margin-top:200px;
	}

	/*post box css*/
	.wrapper{
		display:flex ;
	}
	.post-thumbnail{
		/*background-color:red ;*/
		width:40% ;
		padding:10px 10px;
	}
	.post-excerpt{
		width:70% ;
		height:300px ;
		padding:10px 10px ;
		/*border:1px solid ;*/
	}
	.post-thumbnail img{
		border-radius:5px;
	}
	.wrapper{
		/*border:1px solid ;*/
		z-index:1 ;
		box-shadow:1px 1px 1px 1px ;
		margin-top:5px;
	}

	</style>
</head>
<body <?php body_class() ?> >
<div class="container">
	<!----site header---->
	<header class="site-header">
		<h1> <a href="<?php echo home_url() ; ?>"><?php echo bloginfo('name') ?> </a></h1>
		<em><?php bloginfo('description') ;?>
         <?php
 			/*
			 * is_page() function work on pages...custom pages
 			 */
 			if( is_page('about') ){
 				echo '-Know more about us ' ;
 			}
         ?>
		 </em>

		<!---site-navigation---->
		<nav class="site-nav">
			
			 
			<?php 
			/* 
			 * we use wp build in funtion to display our menus
			 */
				$args=array(
					'theme_location'=>'primary'
				) ;
				
			   wp_nav_menu( $args ) ;
			?>

			 <!---sub nav for if any page have sub menu-->
			
		</nav><!----end site navigation---->

		 <div class="site-nav sub-nav">
			 	<ul>
				
						<?php 
							/*
							* child pages and sub menu
							*/
							$id=$post->ID ;//fetching page of current page
							$args=array(
								'child_of'=>get_top_ancestor_id() ,
								'title_li'=>''
							);
							wp_list_pages($args) ;
							
						?>
						
				 </ul>
			 </div>
			 <!----end of sub menu navigation ---->
	</header><br/><br/>
	
	
	<!----/site header---->
	
