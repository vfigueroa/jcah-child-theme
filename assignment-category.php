<?php get_header(); ?>


<div id="content" class="clearfix row-fluid">
            
	<?php get_sidebar(); // sidebar 1 ?>

	<div id="main" class="span8 clearfix" role="main">
		
		<?php $args = array( 'category_name' => 'accounting', 'post_type' => 'document' ); ?>
		<?php $myposts = get_posts( $args ); ?>
		
		<?php if (!empty($myposts)); ?>

			<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				
					<header>
						
						<div class="page-header"><h1><?php the_title(); ?></h1></div>
					
					</header> <!-- end article header -->
					<!-- <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -->

					<section class="post_content">
					<?php the_content(); ?>
			
					</section> <!-- end article section -->
					
					<footer>

						<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
						
					</footer> <!-- end article footer -->
				
				</article> <!-- end article -->
					
					
				<?php $t = wp_get_post_tags($post->ID); print_r($t); ?>
			<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>
		
		<?php else : ?>
		
		<article id="post-not-found">
		    <header>
		    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
		    </header>
		    <section class="post_content">
		    	<p><?php _e("Sorry, but no documents have been added yet.", "bonestheme"); ?></p>
		    </section>
		    <footer>
		    </footer>
		</article>
		
		<?php endif; ?>

	</div> <!-- end #main -->

</div> <!-- end #content -->





<p></p>
<?php $documents = get_documents(array( 'category__not_in' => array( 1 ) )); ?>

<?php print_r($documents); ?>

<p></p>

<?php $qObj = $wp_query(); print_r($qObj); ?>


<?php get_footer(); ?>