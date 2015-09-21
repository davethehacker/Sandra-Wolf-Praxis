<?php get_header(); ?>

<div id="content" class="box-shadow">
    <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <header>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<!--                        <p>Posted on <time datetime="<?php the_time()?>"><?php the_date() ?></time> by <a href="#"><?php the_author() ?></php></a></p>-->
                </header>
                <date><?php the_field('start-date', $post->ID)</date>
                <date><?php the_field('end-date', $post->ID)</date>
                <time><?php the_field('start-time', $post->ID)</time>
                <time><?php the_field('end-time', $post->ID)</time>
                <?php the_content();
                
                if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
            </article>
        <?php endwhile; endif; ?>
    </section>
</div>

</div> <!-- content -->
             
<?php get_footer(); ?>