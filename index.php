<?php get_header(); ?>

		<div class="row page-content">
			<section class="large-8 columns">

			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post">
					<header class="row">
						<div class="large-10 small-9 columns">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</div>
						<div class="large-2 small-3 columns">
							<p class="post-date">
								<span class="mon"><?php the_time('M j') ?></span>
								<span class="year"><?php the_time('Y') ?></span>
							</p>
						</div>						
					</header>

					<div class="entry">
						<?php the_excerpt(); ?>
					</div>

					<footer>
						<p class="post_meta">Posted in <?php the_category(', '); ?></p>
					</footer>

				</article>

			<!-- Stop The Loop (but note the "else:" - see next line). -->					
			<?php endwhile; ?>				

			<?php endif; ?>

			</section>


			<aside class="large-4 columns page-sidebar">

				<?php get_sidebar(); ?>

			</aside>
		</div>

<?php get_footer(); ?>