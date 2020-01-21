<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<main id="main" class="main main-single-progetto" role="main">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php echo get_the_title(); ?></h2>
			<?php if (get_field('periodo')): ?>
				<p class="periodo"><?php the_field('periodo'); ?></p>
				<br>
				<br>
			<?php endif; ?>
			<span>
				<?php
					$category = get_the_category( $post->ID );
					echo $category[0]->cat_name;
				?>
			</span>
			<div class="img-dettaglio">
				<img src="<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="checkAnim from-bottom the-content">
				<?php the_content(); ?>
			</div>
				<?php
				// Start the loop.


					the_post_navigation( array(
						'prev_text' => '<span class="post-title">%title</span>'.'<span class="bottone-prev"></span>'.'<a class="bottone t-a-p" href="http://www.popcomm.it/culturarepublic/progetti-di-formazione"" title="progetti di formazione">torna ai progetti di formazione</a>',
						'next_text' => '<span class="post-title">%title</span>'.'<span class="bottone-next"></span>',

					) );

				// End the loop.
				endwhile;
				?>

			</div>

			<div class="row bg-red donazioni">
			  <div class="container">
			    <div class="col checkAnim from-bottom">
			      <h2 class="h2-white">Donazioni</h2>
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua PayPall.</p>
			      <a class="bottone btn-line-black" href="#">fai una donazione</a>
			    </div>
			  </div>
			</div>


		</main><!-- .site-main -->

<?php get_footer(); ?>
