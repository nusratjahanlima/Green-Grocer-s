<?php include('include/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
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
    <style>
      :root {
  --orange: orange;
  --black: #130f40;
  --light-color: #666;
  --box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
  --border: 0.2rem solid rgba(0, 0, 0, 0.1);
  --outline: 0.1rem solid rgba(0, 0, 0, 0.1);
  /*--outline-hover: 0.2rem solid var(--black);*/
}

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: all 0.2s linear;
}
html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 7rem;
}
body {
  background: #eee;
}
section{
    padding: 2rem 9%;
}

.review .review-slider .wrapper
{
border: 0px solid;
display:grid;
grid-template-columns: repeat(auto-fit,minmax(26rem,1fr));
gap:1.5rem;
padding: 1rem;
}



.review .review-slider .box
{
border: 0px solid red;
background: #fff;
border-radius: .5rem;
text-align: center;
padding: 3rem 2rem;
outline-offset: -1rem;
outline: var(--outline);
box-shadow: var(--box-shadow);
transition: .2s linear;

}

.review .review-slider .box:hover
{
box-shadow: 1px 1px 10px 4px var(--green);
}

.review .review-slider .box img
{
height: 10rem;
width: 10rem;
border-radius: 50%;
}


.review .review-slider .box p
{
padding: 1rem 0;
line-height:1.8;
color: var(--light-color);
font-size: 1.5rem;
}

.review .review-slider .box h3
{
padding-bottom: .5rem;
color: var(--black);
font-size: 2.2rem;
}

.review .review-slider .box .stars
{
color: orange;
font-size: 1.7rem;
}


    </style>
</head>
<body>
<section class="review" id="review">
      <h1 class="heading">Customer's <span>Review</span></h1>
      <div class="review-slider">
        <div class="wrapper">
          <div class="box">
            <img src="images/person2.jpg" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Nulla a cupiditate recusandae quasi at similique deserunt 
              eveniet ab magni illo!</>
            <h3>Jhon deo</h3>
            <div class="price">$4.99-$10.00/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">
            <img src="images/person1.jpg" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Nulla a cupiditate recusandae quasi at similique deserunt 
              eveniet ab magni illo!</>
            <h3>Jhon deo</h3>
            <div class="price">$4.99-$10.00/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">
            <img src="images/person3.jpg" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Nulla a cupiditate recusandae quasi at similique deserunt 
              eveniet ab magni illo!</>
            <h3>Jhon deo</h3>
            <div class="price">$4.99-$10.00/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
          </div>


          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>