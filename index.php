<?php get_header(); ?>

<div id="middle">

<?php get_sidebar(); ?>

<div id="middle_column" class="two_column">

		  <div class="date_break">News:</div>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

          <div class="post" id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <div class="post_body"><p><?php the_content('Read the rest of this entry &raquo;'); ?></p></div>
          <div class="postedby">Posted by <?php the_author() ?> in <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?> | <?php comments_popup_link('No comments', '1 comment', '% comments'); ?></div><div class="timestamp"><?php the_time('F jS, Y') ?></div>
          </div>

		<?php endwhile; ?>

		<div>
			<div><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
        </div>

</div>

<?php get_footer(); ?>
