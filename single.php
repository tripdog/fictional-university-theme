<?php 
get_header();

//begin while the loop
while (have_posts()){
the_post(); ?>
<h2><?php the_title(); ?></h2>
<hr />
<p><?php the_content(); ?></p>
<?php }

get_footer();
?>