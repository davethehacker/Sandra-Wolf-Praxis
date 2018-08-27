<?php get_header(); ?>

<div id="content" class="box-shadow">
<section>
	
	<title><?php $obj = get_post_type_object( get_post_type($post->I) );
echo $obj->labels->name; ?></title>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
	<header>
		
		<div><?php the_field('html_import')?></div>
		
		<?php
			//echo var_dump();
			if (get_field('download', $post->ID)){
				echo '<a href="';
				the_field('download');
				echo '" download>Auschreibung herunterladen</a>';
			}
			 ?>
	</header>

</article>
<?php endwhile; endif; ?>
</section>
<?php include 'logo-footer.php'; ?>
</div><!-- content -->
             
<?php get_footer(); ?>