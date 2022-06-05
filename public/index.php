<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


<section class="hero">
        <img src="https://source.unsplash.com/random/2050x600/?shoes" alt="">
</section>

<section class="categories">
    <?php 
        $query = "SELECT * FROM categories";
        $send_query = mysqli_query($connection, $query);

        if (!$send_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($send_query)) {
            echo "<div class='categories__block'>;";
            echo "<img class='categories__image' width='300' height='300' src='{$row['cat_img']}' alt='{$row['cat_title']}' >";
            echo "<a href='#'>{$row['cat_title']}</a>";
            echo "</div>";
        }
    ?>
</section>





<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>