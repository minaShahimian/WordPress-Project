<?php /*Template Name: Seite mit Headerbutton */
get_header(); ?>
<main id="content">
    <section class="container">
    <?php the_title ('<h2>', '</h2>') ?>
        <?php 
            if(have_posts()){
                while(have_posts()){
                the_post();
                the_content();
                }
            }   
        ?>
    </section>
</main>
<?php get_footer(); ?>