<?php get_header(); ?>

		<div class="row page-content">
			<section class="large-8 columns">

			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post">
					<header class="row">
						<div class="large-12 small-12 columns">
							<h2><?php the_title(); ?></h2>
						</div>
					</header>

					<div class="entry">
						<?php the_content(); ?>
					</div>

				</article>

			<?php endwhile; ?>				
			<?php endif; ?>

			</section>

			<aside class="large-4 columns page-sidebar">

				<?php get_sidebar(); ?>

			</aside>
		</div>

<?php get_footer(); ?>