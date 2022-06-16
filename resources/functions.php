<?php 

// Helper Functions

 function redirect($location) {
     header("Location: $location");
 }

 function query($sql) {

    global $connection;

     return mysqli_query($connection, $sql);
 }

 function confirm($result) {
     global $connection;

     if(!$result) {
         die("QUERY FAILED "  . mysqli_error($connection));
     }
 }

 function escape_string($string) {
     global $connection;

     return mysqli_real_escape_string($connection, $string);
 }

 function fetch_array($result) {

    return mysqli_fetch_array($result);
 }

 // Get products


 function get_products() {

   $query = query(" SELECT * FROM products");
   confirm($query);

   while($row = fetch_array($query)) {
      
    $product = <<<DELIMETER
    <div class="products__box">
    <a href="item.php?id={$row['product_id']}">
    <img src="{$row['product_image']}" alt="{$row['product_title']}">
    <h2>{$row['product_title']}</h2>
    <p>&#163;{$row['product_price']}</p>
    </a>
    </div>

DELIMETER;

    echo $product;


   }

 }

 function get_categories() { 
    $query = query("SELECT * FROM categories");
    confirm($query ); 

    while($row = mysqli_fetch_array($query)) {
        echo "<div class='categories__block'>;";
        echo "<img class='categories__image' width='300' height='300' src='{$row['cat_img']}' alt='{$row['cat_title']}' >";
        echo "<a href='#'>{$row['cat_title']}</a>";
        echo "</div>";
    }
 }



?>