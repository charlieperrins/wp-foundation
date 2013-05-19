				<?php if (is_home()) : ?>
				<h3>Twitter <small><a href="http://twitter.com/#!/charlieperrins">@charlieperrins</a></small></h3>
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/charlieperrins" data-widget-id="336109485217169409" data-chrome="noheader nofooter">Tweets by @charlieperrins</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<?php endif; ?>
		
				<?php if (is_single() || is_page()) : ?>
				<h3>Recent Posts</h3>

				<ul class="side-nav">
				<?php
				$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 4,
					'exclude' => get_the_id(),
				));
				foreach( $recent_posts as $recent ) : ?>
					<li><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></li>
				<?php endforeach; ?>
				</ul>
				<?php endif; ?>

				<h3>Categories</h3>
				<ul class="side-nav">
				<?php wp_list_categories(array(
					'title_li' => '',
					'show_count' => 1,
				)); ?>
				</ul>

				<h3>Archives</h3>
				<ul class="side-nav">
				<?php wp_get_archives(array(
					'type' => 'yearly',
				)); ?>
				</ul>
