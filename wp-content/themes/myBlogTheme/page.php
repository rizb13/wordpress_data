
<?php get_header(); ?>
<h1 class="heading"><?php the_title(); ?></h1> <!-- Page Title -->
<article id="page" class="content px-3 py-5 p-md-5">
		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();

					get_template_part('template-parts/content','page');
				}
			}
		?>

<?php get_footer();?>

