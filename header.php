<!DOCTYPE html>
<html>

<head>

<?php wp_head();?>


</head>

<body <?php body_class('test');?>>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<header>

<div class="container">
    <div class="row">
        
        <div class="col  d-flex align-items-center justify-content-between">
      
            <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_directory');?>/images/logo5.png" class="img-fluid logo">
                
            </a>
            <?php
            wp_nav_menu(

            // adds the menu items and styles them
                array (
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-menu',

                        )

              );?>

              
    
   
         </div>
    </div>
</div>

</header>