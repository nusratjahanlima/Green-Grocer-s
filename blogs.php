<?php include('include/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
      .blogs .box-container
{
border: 0px solid;
display:grid;
grid-template-columns: repeat(auto-fit,minmax(26rem,1fr));
gap:1.5rem;
}

.blogs .box-container .box
{
overflow: hidden;
border-radius: .5rem;
box-shadow: var(--box-shadow);
background: #fff;
}

.blogs .box-container .box img 
{
height: 25rem;
width: auto;
object-fit: cover;
}

.blogs .box-container .box .content
{

padding: 2rem;

}

.blogs .box-container .box .content .icons
{

display: flex;
align-items: center;
justify-content: space-between;
padding-bottom: 1.5rem;
margin-bottom: 1rem;
border-bottom: var(--border);

}

.blogs .box-container .box .content .icons a
{
color: var(--light-color);
font-size: 1.5rem;
}

.blogs .box-container .box .content .icons a:hover
{
   color: var(--black);
}


.blogs .box-container .box .content .icons a i
{
color: green;
padding-right: .5rem;
}

.blogs .box-container .box .content h3
{
line-height: 1.8;
color: var(--black);
font-size: 2.2rem;
padding:.5rem 0;
}

.blogs .box-container .box .content p
{
line-height: 1.8;
color: var(--light-color);
font-size: 1.5rem;
padding:.5rem 0;
}

    </style>
</head>
<body>
<section class="blogs" id="blogs">
      <h1 class="heading">Our <span>Blogs</span></h1>
        <div class="box-container">
          <div class="box">
            <img src="images/blogs1.jpg">
            <div class="content">
            <div class="icons">
            <a href="" class="user-logo"><i class="fas fa-user"></i> By user</a>
            <a href="" class="cal-logo"><i class="fas fa-calender"></i> 29 Nov,2023</a>
            </div>
            <h3>Fresh And Organic Vegetables And Fruits</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, nihil.</p>
            <a herf="#" class="btn">read more</a>
          </div>
        </div>

        <div class="box">
            <img src="images/bogsfinal1.jpg">
            <div class="content">
            <div class="icons">
            <a href="" class="user-logo"><i class="fas fa-user"></i> By user</a>
            <a href="" class="cal-logo"><i class="fas fa-calender"></i> 29 Nov,2023</a>
            </div>
            <h3>Fresh And Organic Vegetables And Fruits</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, nihil.</p>
            <a herf="#" class="btn">read more</a>
          </div>
        </div>

        <div class="box">
            <img src="images/blogs5.jpg">
            <div class="content">
            <div class="icons">
            <a href="" class="user-logo"><i class="fas fa-user"></i> By user</a>
            <a href="" class="cal-logo"><i class="fas fa-calender"></i> 29 Nov,2023</a>
            </div>
            <h3>Fresh And Organic Vegetables And Fruits</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, nihil.</p>
            <a herf="#" class="btn">read more</a>
          </div>
        </div>
    </div>

    
          
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>