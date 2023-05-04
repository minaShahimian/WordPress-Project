<html>
    <body>
         <footer id="page-footer" class="container">
        <div class="columns">
            <div class="col-3">
                <ul class="social-links flex">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" rel="nofollow">
                            <span class="icon-facebook2"><i class="fab fa-facebook-square"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                            <span class="icon-instagram"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/" target="_blank" rel="nofollow">
                            <span class="icon-youtube"><i class="fab fa-youtube"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <span class="copyright">&copy; |edvgraz|</span>
            </div>
            <div class="col-3">
                <?php 
                $fb= get_field(' facebook_link', 'option');
                $insta=get_field('insta_link', 'option');
                $youtube=get_field('youtube_link', 'opstion');
                ?>
                <ul class="social-links">
            </div>
            <?php if( !empty ($fb)): ?>
                <li>
                    <a href="<?php echo $fb; ?>" target="_blank" rel="nofollow">
                        <span class="icon-facebook2"><i class="fab fa-facebook-square"></i></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if( !empty ($insta)): ?>
                <li>
                    <a href="<?php echo $insta; ?>" target="_blank" rel="nofollow">
                        <span class="icon-instagram"><i class="fab fa-instagram-square"></i></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if( !empty ($youtube)): ?>
                <li>
                    <a href="<?php echo $youtube; ?>" target="_blank" rel="nofollow">
                        <span class="icon-youtube"><i class="fab fa-youtube-square"></i></span>
                    </a>
                </li>
            <?php endif; ?>
            <div class="col-3">
                <nav id="footer-nav">
                    <!-- reserviert für die Footer Navigation -->
                    <?php
                         wp_nav_menu(array(
                        'theme_location'=>'footer',
                        'container'=> false,
                        'menu_class'=>'nav-menu',
                        'depth'=> 1,
                        'fallback_cb'=> false
                         ));
                    ?>

                </nav>
            </div>
        </div>
         </footer>
        <div id="to-top">
        <a href="#page-header">
            <span class="icon-circle-up"><i class="fas fa-chevron-up"></i></span>
         </a>
         </div>
         <?php wp_footer(); ?>
     </body>
</html>