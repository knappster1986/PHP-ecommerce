<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


<section class="hero">
        <img src="https://source.unsplash.com/random/2050x600/?shoes" alt="">
</section>

<section class="categories">
    <?php 
        get_categories();
    ?>
</section>

<section class="products">
    <?php get_products(); ?>

   
</section>





<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>