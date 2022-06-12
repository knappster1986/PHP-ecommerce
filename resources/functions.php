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

    <img src="{$row['product_image']}" alt="{$row['product_title']}">
    <h2>{$row['product_title']}</h2>
    <p>{$row['product_price']}</p>

DELIMETER;

    echo $product;


   }

 }



?>