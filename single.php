<?php get_header(); ?>

		<div class="row page-content">
			<section class="large-8 columns">

			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post">
					<header class="row">
						<div class="large-10 small-10 columns">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="large-2 small-2 columns">
							<p class="post-date">
								<span class="mon"><?php the_time('M j') ?></span>
								<span class="year"><?php the_time('Y') ?></span>
							</p>
						</div>						
					</header>

					<div class="entry">
						<?php the_content(); ?>
					</div>

					<footer>
						<p class="post_meta">Posted in <?php the_category(', '); ?></p>
					</footer>

				</article>

			<?php endwhile; ?>				
			<?php endif; ?>

			</section>

			<aside class="large-4 columns page-sidebar">

				<?php get_sidebar(); ?>

			</aside>
		</div>

<?php get_footer(); ?>