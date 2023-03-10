<div id="left_column">

  <div id="navigation">
    <ul><?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?></ul>
  </div>

<div id="more_information"><ul>

<?php /* Widgetized sidebar, if you have the plugin installed. */
  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

  <br />

  <?php include (TEMPLATEPATH . '/searchform.php'); ?>


    <div class="box"><?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?></div>

    <div class="box"><li><h2>Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li></div>

    <div class="box"><?php wp_list_bookmarks(); ?></div>

    <div class="box"><li><h2>Meta</h2>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
        <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
        <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
        <?php wp_meta(); ?>
      </ul>
    </li></div>


  </ul>


<ul>


			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<div class="box"><li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li></div>
			-->

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?><div class="box"><li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
				
			</li></div> <?php }?>


		</ul>

<?php endif; ?>
</div>

</div>