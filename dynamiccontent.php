

1. Show Page Content

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


	
<?php endwhile; else: ?>
			<p>No contents found. Add contents please</p>
			<?php endif; ?>
			

2. Responsive Featured Image

<?php //if ( has_post_thumbnail()) {	the_post_thumbnail('my-custom-size');} 
				if(has_post_thumbnail()) {                    
						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
						echo '<img src="' . $image_src[0]  . '" width="100%"  />';	 
						} 
			?>
			

			
3. Custom Post Type

<?php 
									$args = array( 'post_type' => 'testimonialrow1', 'posts_per_page' => 3,'orderby' => 'ID', 'order' => 'ASC' );
									$oop = new WP_Query( $args );
							if ($oop->have_posts()):
							?>
							<?php while ( $oop->have_posts() ) : $oop->the_post();?>
							
							
							
							
				
				
<?php endwhile; ?>
								<?php else:?>
									<h2> Nothing Found!</h2>
									<p> <a href="<?php echo get_option('home');?>">Return to Home</a></p>
							<?php endif;?>
							
							
4. Custom Field Show

<?php echo get_field('fieldname'); ?>

5.Content show code

<?php the_title(); ?>
<?php the_content(); ?>
<?php the_excerpt(); ?>


5. admin bar hides the content solution:: 


		<?php 
		  // Fix menu overlap
		  if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
		?>
					
					
6. a href garda content hide vayo vane;:

:target {
    display: block;    
    position: relative;     
    padding-top: 100px;
	
	

	
7.
<?
add_action( 'init', 'cptui_register_my_cpts_alreadyadiver' );
function cptui_register_my_cpts_alreadyadiver() {
	$labels = array(
		"name" => __( 'Already A Diver', '' ),
		"singular_name" => __( 'already a diver', '' ),
		);

	$args = array(
		"label" => __( 'Already A Diver', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "alreadyadiver", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "editor", "thumbnail" ),				
	);
	register_post_type( "alreadyadiver", $args );

// End of cptui_register_my_cpts_alreadyadiver()
}
	
?>


8. Menu

  <!-- Navbar Starts -->
          <nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">

              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                </button>
               <a class="navbar-brand">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="Cabosportfish">
                </a>
              </div>
              <!-- Brand and toggle menu for mobile ends -->

              <!-- Navbar Starts -->
              <div class="collapse navbar-collapse" id="navbar">
            
				
				 <?php
						$menu = array(
							
								'theme-location' => 'primary',
								'container' => 'div',
								'container-class' => 'collapse navbar-collapse',
								'menu_class' => 'nav navbar-nav animated-nav navbar-right', //mostly ul class
								'echo' => 'true',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth' => 0,
								'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
								'walker' => new wp_bootstrap_navwalker()						
						);
						wp_nav_menu($menu);
			  ?>
                

                
              </div>
            </div>

           <!-- Below code for mobile phones responsive-->
			 <?php
						$menu = array(
							
								'theme-location' => 'primary',
								'container' => 'div',
								'container-class' => 'navbar navbar-default navbar-plain',
								'menu_class' => 'wpb-mobile-menu', //mostly ul class
								'echo' => 'true',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth' => 0,
								'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
								'walker' => new wp_bootstrap_navwalker()						
						);
						wp_nav_menu($menu);
			  ?>

          </nav>
          <!-- Navbar Ends -->


9. Post Name permalink fix

in .htaccess file update this:

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

11.. Bootstrap nav dropdown on hover:

ul.nav li.dropdown:hover ul.dropdown-menu {
display: block;    
}
	
