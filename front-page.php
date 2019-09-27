<?php get_header();?>

<div id="hero">
    <div class="container d-flex align-items-center justify-content-center h-100">
    
    <h1>Look Beautiful Today</h1>
</div>

</div>


<div class= "content">

    <div class="container">

        <div class= "row">
        <div class="col-lg-12">
        <div>
             <h2>Gallery</h2>

             <img id='flipImage' src="" >

        </div>
        </div>
        </div>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>

        <?php endwhile; else: endif;?>

    </div>

</div>
<?php get_footer();?>