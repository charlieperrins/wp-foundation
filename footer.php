	</div>

	<footer class="page-footer">
		<div class="page-footer-bg">
			<div class="row">
				<div class="large-8 columns">
					<div class="footer-bio">
						<p>This is my little corner of the internet. It's never really been finished. I play around here at the weekends and experiment with things that aren't ready for me to use out in the real world.</p>
					</div>
				</div>
				<div class="large-4 columns">
					<ul class="side-nav">
					<?php wp_list_pages('title_li='); ?>
					</ul>
					<p>&copy; Charlie Perrins <?php echo date('Y'); ?></p>
				</div>
			</div>
		</div>
	</footer>


	<script>
	document.write('<script src=' +
	('__proto__' in {} ? '<?php bloginfo('template_url'); ?>/js/vendor/zepto' : '<?php bloginfo('template_url'); ?>/js/vendor/jquery') +
	'.js><\/script>')
	</script>

	<script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>  

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3717211-1']);
	  _gaq.push(['_trackPageview']);
	  _gaq.push(['_trackPageLoadTime']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</body>
</html>