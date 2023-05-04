<div class="flex-container">
            <?php while(have_posts()) :?>
            <?php the_post(); ?>
            <article class="blog-card">
                <a href="<?php the_permalink(); ?>" >
                    <?php
                     if(has_post_thumbnail()){
                    the_post_thumbnail('post-image');
                     }
                    ?>
                </a>
                <div calss="blog-discription">
                    <time class="meta" datetime="<?php the_time('y-m-d') ; ?>">
                         <span class="icon-calender"> <i class="far fa-calender-alt"></i></span>
                         <?php the_time('d,m,y'); ?>
                    </time>
                    <span class="meta categories" > 
                        <span class="icon-category"><i class ="fas fa-archive"></i></span>  
                        <?php the_category(', '); ?>
                    </span>  
                    <h2 class="blog-title">
                        <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                    </h2>
                    <div>
                         <?php 
                         trim_content(the_content());
                         echo"...";
                          ?>
                   </div>
            
                     <?php
                    the_content();
                    echo " ... ";
                     ?>
                
                </div>
            </article>
            <?php endwhile; ?>
        </div>