<?php get_header(); ?>

<div id="content" class="box-shadow">
<section>
	
	<title><?php $obj = get_post_type_object( get_post_type($post->I) );
echo $obj->labels->name; ?></title>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
	<header>
		<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<!--                        <p>Posted on <time datetime="<?php the_time()?>"><?php the_date() ?></time> by <a href="#"><?php the_author() ?></php></a></p>-->
		<span>
			<time><?php the_field('start-date', $post->ID) ?></time>
		<?php if(get_field('end-date', $post->ID)!=get_field('start-date', $post->ID)){
			echo " - " . '<time>' . get_field('end-date', $post->ID) . '</time>';
	} ?>
		</span><br>
		<span>
			<time><?php the_field('start-time', $post->ID) ?></time>
			 - 
			<time><?php the_field('end-time', $post->ID) ?></time>
		</span><br>
		<span>
			<?php the_field('location', $post->ID) ?>
		</span>
	</header>

<?php the_content();

if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
</article>
<?php endwhile; endif; ?>
</section>
</div>
<?php include 'logo-footer.php'; ?>
</div> <!-- content -->
             
<?php get_footer(); ?>