<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

    <article>

        <?php
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

          <h4><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h4>
          <?php the_excerpt(); ?>
          <? the_time('d.m.Y') ?><br>
          <? the_tags( '', ', ', ''); ?><br>
          <? the_category(', ') ?>
          <hr>

        <?php endwhile; ?>

        <?php
        if ($paged > 1) { ?>
          <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
          </nav> <?php }
        else { ?>
          <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
          </nav> <?php } ?>

        <?php wp_reset_postdata(); ?>

    </article>

<?php get_footer(); ?>
