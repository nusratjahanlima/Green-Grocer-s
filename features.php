<?php include('include/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<section class="features" id="features">
      <h1 class="heading">our <span>features</span></h1>
      <div class="box-container">
        <div class="box">
          <img src="images/fresh organic final.jpg" alt="" style="width: 33rem" />
          <h3>fresh and organic</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          </p>
          <a href="#" class="btn">read more</a>
        </div>


        <div class="box">
          <img src="images/free delivery final.png" alt="" style="width: 29rem" />
          <h3>free delivery</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          </p>
          <a href="#" class="btn">read more</a>
        </div>


        <div class="box">
          <img src="images/easy payment final.png" alt="" style="width: 37rem" />
          <h3>easy payments</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
        
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>