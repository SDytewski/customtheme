<?php get_header();?>

<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

<div id="hero">
    <div class="container d-flex align-items-center justify-content-center h-100">
    
    <h1>Look Beautiful Today</h1>
</div>

</div>


<div class= "content">

    <div class="container text-center">

        <div class= "row ">
        <div class="col-lg-12">
        <div>
             <!-- <h2 class="text-center">Shop Now</h2> -->
             <a href="<?php site_url(); ?>/wordpress/shop/" type="button" class="btn btn-dark btn-lg">Shop Now</a>   
              
             <div id="shipping">
             <h4>FREE SHIPPING ON ALL ORDERS 100+</h4> 
            </div>    

             <div id= "aroundImage">

                    <img id='flipImage' src="" >

            </div>

            <h1 id="headline">M.A. TAYLOR</h1>
        
        </div>
        </div>
        </div>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>

        <?php endwhile; else: endif;?>

    </div>

</div>
<?php get_footer();?>