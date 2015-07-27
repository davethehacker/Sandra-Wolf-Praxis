<?php get_header(); ?>

<div id="content">
    <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <header>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<!--                        <p>Posted on <time datetime="<?php the_time()?>"><?php the_date() ?></time> by <a href="#"><?php the_author() ?></php></a></p>-->
                </header>
                <?php the_content();
                
                if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
            </article>
        <?php endwhile; endif; ?>
    </section>
</div>

</div> <!-- content -->
             
<?php get_footer(); ?>