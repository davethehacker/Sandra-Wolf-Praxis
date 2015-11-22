<?php error_reporting(E_ALL);?>
<?php get_header(); ?>


<div id="content" class="box-shadow">
    <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <header>
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                </header>
                <?php the_content();
                
                if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
            </article>
			<?php get_template_part('sidebar'); ?>
        <?php endwhile; endif; ?>
    </section>

</div>
</div> <!-- content -->
             
<?php get_footer(); ?>