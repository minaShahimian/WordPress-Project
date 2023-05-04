<?php 
get_header(); ?>
<main id="content">
    <section class="container">
    <h1>Sorry, die gewünschte Seite gibt es nicht</h1>
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