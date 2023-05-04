<?php get_header();?>
<?php 
$sidebarClass='no-sidebar';
if(is_active_sidebar('sidebar-widgets')){
    $sidebarClass='has-sidebar';
}
?>
<div id="content" class="container">
    <main class="main-content <?php echo $sidebarClass; ?>" >
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content(the_title('<h2>', '</h2>'));
            }
        }
        ?>
        <div class="post-meta">
            <span class="meta categories">
                 <span class="icon-category"><i class="fas fa-archive"></i></span>
                     <?php the_category(', '); ?>
                  </span>
             <time class="meta" datetime="<?php the_time('Y-m-d'); ?>" >
                 <span class="icon-calender"><i class="far fa-calender-alt"></i></span>
                  <?php the_time('d.m.y'); ?>
            </time>
        </div>
        <nav class="post-pagiantion">
            <?php 
                   $next= '<i class="fas fa-forward"></i>';
                   $preview='<i class="fas fa-backward"></i>';
                   the_post_navigation(array(
                   'prev_text'=> $preview.'Prev',
                   'next_text'=>'Next'.$next
                   ));
            ?>
        </nav>

     </main>
     <?php 
     if(is_active_sidebar('sidebar-widgets')):
     ?>
     <aside class="sidebar">
        <?php dynamic_sidebar('sidebar-widgets'); ?>
     </aside>
     <?php endif; ?>      
</div>      
<?php get_footer(); ?> 

