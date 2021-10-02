<?php
get_header();
?>
<h1 class="heading"><?php the_title(); ?></h1><!-- Page Title -->
	<article id="home-page" class="content px-3 py-5 p-md-5">
		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
					the_content();
				}
			}
		?>

		<?php get_sidebar(); ?>

	</article>

<?php
get_footer();
?>
