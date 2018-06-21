<?php //Template Name:Page With Left Sidebar
get_header();
<div class="row enigma_blog_wrapper">
	<div class="container">
	<?php get_sidebar(); ?>
	<div class="col-md-8">
	<?php get_template_part('post','page'); ?>
	</div>
	</div>
</div>
<?php get_footer(); ?>
