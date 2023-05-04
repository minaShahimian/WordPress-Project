<?php get_header(); ?>
<main id="content">
    <section class="container-blog">
        <h2>
            <?php 
                  if( is_category()){
                     single_cat_title();
                 }else{
                      the_archive_title();
                 }
            ?>
        </h2>
        <?php the_archive_description('<p>', '</p>'); ?>

        <nav class="category-nav">
            <ul>
                <?php
                wp_list_categories(array(
                    'title_li' => '',
                    'hierarchical' => false,
                    'show_option_all' => 'Alle'
                ));
                ?>
            </ul>
        </nav>

        <?php if(have_posts()): ?>
            <?php include (locate_template('template_parts/post-loob.php')); ?>

        <?php else : ?>
        <h2><?php echo ' Es wurde keine Beiträge gefunden' ; ?> </h2>
        <?php endif; ?>  
      
        <nav class="post-pagination">
            <?php
                echo paginate_links(array(
                  'prev_text' => '<i class="fas fa-backward"></i>',
                  'next_text' => '<i class="fas fa-forward"></i>',

            ));
            ?>
        </nav>

    </section>
</main>
<?php get_footer(); ?>