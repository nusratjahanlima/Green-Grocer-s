<?php include('include/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
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
      
.features .box-container{
  border: 0px solid;
  display:grid;
  grid-template-columns: repeat(auto-fit,minmax(30rem,1fr));
  gap:1.5rem;
  /*align-items: center;*/
}
.features .box-container .box{
border: 0px solid red;
padding: .3rem  2rem;
background: #fff;
outline: var(--outline);
outline-offset: -1rem;
text-align: center;
box-shadow: var(--box-shadow);
}
.features .box-container .box:hover{
box-shadow: 1px 1px 10px 4px var(--green);
/*outline: var(--outline-hover);
outline-offset: 0rem;*/
}
.features .box-container .box img{
margin: 1rem 0;
height: 17rem;

}

.features .box-container .box h3{
font-size: 2.5rem;
line-height: 1.8;
color: var(--black);
}

.features .box-container .box p
{
  font-size: 1.5rem;
  line-height: 1.8;
  color: var(--light-color);
  padding: .5rem 0;

  }
    </style>
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
          <img src="images/easy-payment.jpeg" alt="" style="width: 37rem" />
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