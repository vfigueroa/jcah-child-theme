<?php get_header(); ?>


<div id="content" class="clearfix row-fluid">

	<div id="main" class="span8 clearfix" role="main">
		
		<?php $args = array( 'category_name' => 'accounting', 'post_type' => 'document' ); ?>
		<?php $docs = get_documents($args) ?>
		
		<?php if (!empty($docs)): ?>

			<?php foreach ( $docs as $doc ) : ?>
				<p></p>
				<?php print_r($doc);?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				
					<header>
						
						<div class="page-header"><h1><a href="<?php the_permalink(); ?>"><?php echo $doc->post_title ?></a></h1></div>
					
					</header> <!-- end article header -->
					<!-- <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -->

					<section class="post_content">
						<?php echo $doc->post_excerpt; ?>
					</section> <!-- end article section -->
					
					<footer>
						<!-- <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p> -->
						<?php //$docTags = wp_get_post_tags($doc->ID); print_r($t); ?>

					</footer> <!-- end article footer -->
				
				</article> <!-- end article -->
					
			<?php endforeach; ?>

			<?php //wp_reset_postdata(); ?>
		
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

	<?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->





<p></p>
<?php //$documents = get_documents(array( 'category__not_in' => array( 1 ) )); ?>
<?php //print_r($documents); ?>
<p></p>


<?php get_footer(); ?>