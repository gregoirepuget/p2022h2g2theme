<?php get_header(); ?>

<div id="content">
    <h1>Contenu Principal</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <?php
            if(is_front_page())
            {
              the_post_thumbnail('blog_thumbnail');
            }
            else {
              the_post_thumbnail('single_thumbnail');
            }
            ?>  ?>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php
            if(is_front_page())
            {
              the_excerpt();
            }
            else {
              the_content();
            }
            ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</div> <!-- /content -->

<?php get_footer(); ?>
