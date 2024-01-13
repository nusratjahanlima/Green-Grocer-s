<?php
include('./include/connect.php');


function getproducs(){
    global $con;
  
      
    $select_query="Select * from `products5` order by rand() LIMIT 0,9";
     $result_query=mysqli_query($con,$select_query);
     while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $cat_id=$row['cat_id'];
      $brand_id=$row['brand_id'];

      echo "<div class='col-md-4 mb-3'>
      <div class='card'>
       <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href='#' class='btn btn-primary bg-info'>Add to cart</a>
      <a href='#' class='btn btn-primary bg-secondary'>View more</a>
    </div>
  </div>
  </div>";

     }
}

function get_all_products(){



global $con;
  
      
    $select_query="Select * from `products5` order by rand()";
     $result_query=mysqli_query($con,$select_query);
     while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $cat_id=$row['cat_id'];
      $brand_id=$row['brand_id'];

      echo "<div class='col-md-4 mb-3'>
      <div class='card'>
       <img src='./Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href='#' class='btn btn-primary bg-info'>Add to cart</a>
      <a href='#' class='btn btn-primary bg-secondary'>View more</a>
    </div>
  </div>
  </div>";

     }
    }



function getbrand(){
    global $con;
    $select_brand = "Select * from `brand`" ;
      $result_brand= mysqli_query($con,$select_brand);
      //$row_data=mysqli_fetch_assoc( $result_brand);
      //echo $row_data['brand_title'];
      while( $row_data=mysqli_fetch_assoc( $result_brand)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='anv-item '>
        <a href='index.php?brand=$brand_id' class='nav-link text-light text-center'>$brand_title</a>
      </li>";
      }
}

function getcategory(){
    global $con;
    $select_Categories = "Select * from `categorys`" ;
    $result_Categories= mysqli_query($con,$select_Categories);
    //$row_data=mysqli_fetch_assoc( $result_brand);
    //echo $row_data['brand_title'];
    while( $row_data=mysqli_fetch_assoc( $result_Categories)){
      $Categories_title=$row_data['cat_title'];
      $Categories_id=$row_data['cat_id'];
      echo "<li class='anv-item '>
      <a href='index.php?cat=$Categories_id' class='nav-link text-light text-center'>$Categories_title</a>
    </li>";
    }
}
 
 

?>