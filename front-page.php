<?php 

get_header();

 ?>

	<div class="container content">
		<?php if(is_active_sidebar( 'showcase' )) : ?>
			<?php dynamic_sidebar( 'showcase' ); ?>
		<?php endif; ?>
		<div class="main block">
			<?php if (have_posts()) : ?>
				<?php while ( have_posts()) : the_post();?>
					<article class="page">
						<!-- <?php wp_list_pages(); ?> -->
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
					</article>
				<?php endwhile; ?>
				<?php else : ?>
				<?php echo apautop('Sorry, no post were found'); ?>
			<?php endif; ?> 
		</div><br>
		<?php if(is_active_sidebar( 'box1' )) : ?>
			<?php dynamic_sidebar( 'box1' ); ?>
		<?php endif; ?>
		<?php if(is_active_sidebar( 'box2' )) : ?>
			<?php dynamic_sidebar( 'box2' ); ?>
		<?php endif; ?>
		<?php if(is_active_sidebar( 'box3' )) : ?>
			<?php dynamic_sidebar( 'box3' ); ?>
		<?php endif; ?>
	</div>

	<?php get_footer(); ?>

