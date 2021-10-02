<?php
get_header();
?>
<h1 class="heading">Blog</h1><!-- Page Title -->
<article id="post-page" class="content px-3 py-5 p-md-5">
	<?php
	if(have_posts()){
		while(have_posts()){
			the_post();

			get_template_part('template-parts/content','archive');
		}
	}
	?>

    <?php
        the_posts_pagination();
    ?>
</article>

<?php
get_footer();
?>
