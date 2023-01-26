<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="26" /><br />
<input type="submit" id="searchsubmit" value="Search" />
</form>
