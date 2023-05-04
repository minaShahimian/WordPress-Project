<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav id="navbar" class="container">
        <div id="brand">
            
            <?php
                if(function_exists('the_custom_logo')){ the_custom_logo();}
            
            ?>

        </div>
        <input type="checkbox" id="nav-trigger">
        <label for="nav-trigger" id="burger-button">
            <em class="burger-icon" aria-hidden="true"></em>
            <span class="screen-reader-text" >Navigation öffnen</span>
        </label>
        <div id="main-nav">
            <!-- Registrierung der Navigation -->
            <?php
            wp_nav_menu(array(
                'theme_location'=>'primary',
                'container'=> false,
                'menu_class'=>'nav-menu',
                'depth'=>2,
                'fallback_cb'=> false
            ));
            ?>
        </div>
    </nav>
    <?php
          $btn_text = get_field('button_text');  
          $btn_link = get_field('btn_link');  
          $seite_title = get_field('seite_title');
    ?>
     <?php
          $btn_text = get_field('btn_text');  
          $btn_link = get_field('link');  
          if( is_home()){
            $seite_title= 'Blog';
          }elseif( is_archive()){
            $seite_title = single_cat_title('', false);
          }else {
            $seite_title= get_field('seite_title');
          }

    ?>
    <?php  if(is_page_template('divheader.php')) : ?>
    <header id="page-header" style="background-image: url(<?php header_image(); ?>);">
        <div class="heading-content animate fade-in">
            <h1 class="page-title"><?php echo $seite_title; ?></h1>
        </div>
        <?php if(($btn_text)&&(!empty($btn_link['url']))) :  ?>
        <a class="btn-header" href="<?php echo $btn_link['url']; ?>">
            <?php echo $btn_text; ?>
        </a>
   <?php endif; ?>
       <!--  <a class="btn-header" href="<?php the_permalink(); ?> /angebot" > zum Angebot</a> -->
        <div class="down">
            <i class="fas fa-chevron-down"></i>
        </div> 
    </header>
    <?php elseif(is_404()) : ?>
    <header id="page-header" style="background-image: url(<?php header_image(); ?>);">
        <div class="heading-content animate fade-in">
            <h1 class="page-title"></h1>
        </div>
        <?php //if(($btn_text)&&(!empty($btn_link['url']))) :  ?>
       <!-- <a class="404" href="<?php //echo $btn_link['url']; ?>">
            <?php //echo $btn_text; ?>
        </a>
   <?php //endif; ?> -->
        <a class="btn-header" href="<?php echo get_home_url(); ?>" >Haupt Seite </a>
        <div class="down">
            <i class="fas fa-chevron-down"></i>
        </div> 
    </header>
    <?php else : ?>
    <header id="page-header" style="background-image: url(<?php header_image(); ?>);">
        <div class="heading-content animate fade-in">
            <h1 class="page-title"><?php echo $seite_title; ?></h1>
        </div>
        <div class="down">
            <i class="fas fa-chevron-down"></i>
        </div> 
    </header>
    <?php endif; ?>
    
   

    
    