<!---- adding footer notes---->

<footer class="site-footer">
    <p> All rights are reserved by<?php echo bloginfo('name')?> &copy <?php date('year')?></p>
    <!---site-navigation---->
		<nav class="site-nav footNav">
			<?php 
			 /* 
		      * we use wp build in funtion to display our menus
              */
              
              $args=array(
                  'theme_location'=>'footer'
              );
				
			   wp_nav_menu($args) ;
			?>
		</nav><!----end site navigation---->
    <?php wp_footer() ?>
</footer>
</div><!----end of container---->

</body>
</html>