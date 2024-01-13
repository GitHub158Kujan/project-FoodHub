<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cheese burger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <script>
        function increaseCount(a, b) {
  var input = b.previousElementSibling;
  var value = parseInt(input.value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  input.value = value;
}

function decreaseCount(a, b) {
  var input = b.nextElementSibling;
  var value = parseInt(input.value, 10);
  if (value > 1) {
    value = isNaN(value) ? 0 : value;
    value--;
    input.value = value;
  }
}


function cart(){
   alert("Your food has been added in cart. Keep purchasing!!")

}
function buy(){
   alert("Thank you for ordering with us!!")

}
    </script>
    <nav class="navbar">
        <div class="logo">
             <img src="feastlogo2.png"> 
             <p id="nav-p">FeastHub</p>
          </div>
              <ul>
                   <li class="list"><a href="home page of website.html">Home</a></li>
                <li class="list"><a href="Menu2.html">Menu</a></li>
                <li class="list"><a href="About.html">About</a></li>
                <li class="list"><a href="contact us.php">Contact</a></li>
                <li class="list"><a href="sign up page.php">SignUp</a></li>
                
              </ul>
     </nav>
<div class="cheese_burger">
    <img src="cheese burger.jpg" class="image">
    <img src="pure veg.jpg" class="veg">
    <p class="pure_veg">Pure Veg</p>
    <h1 class="heading">Cheese Bliss Burger</h1>
    <img src="star.png" class="rating1">
    <img src="star.png" class="rating2">
    <img src="star.png" class="rating3">
    <img src="star.png" class="rating4">
    <img src="rating.png"class="rating5">
    <p class="rate">20 Reviews</p>
    <p class="description">Treat your taste buds to a cheeseburger like no other. 
        Oozing with creamy American cheese and topped with fresh, crisp lettuce,
        juicy tomatoes, and tangy pickles, every bite is a burst of satisfaction.</p>
    <div class="price">
        <h2>Price</h2>
        <p><i class="fa-solid fa-indian-rupee-sign"></i></p>  
    </div>
    <p class="rupee">80</p>
    <div class="quantity">
        <h2>Quantity</h2>
    </div>
    <div class="counter">
        <span class="down" onClick='decreaseCount(event, this)'>-</span>
        <input type="text" value="1">
        <span class="up" onClick='increaseCount(event, this)'>+</span>
      </div>  
   <div class="addon">
    <p>Add on</p>
   </div>
   <div class="opt1">
    <img src="coke.png" class="coke">
    <p>Coke</p>
    <input type="checkbox" name="add" value="Coke">
   </div>
   <div class="opt2">
    <img src="french fries.jpg" class="coke">
    <p>French Fries</p>
    <input type="checkbox" name="add" value="fries">
   </div>
   <div class="opt3">
    <img src="ice cream.jpg" class="coke">
    <p>Ice Cream</p>
    <input type="checkbox" name="add" value="ice cream">
   </div>
   <div class="opt4">
    <img src="pastery.jpg" class="coke">
    <p>Pastery</p>
    <input type="checkbox" name="add" value="pastery">
   </div>
   <div class="button">
    <button class="cart" name="cart" onclick="cart()">Add to cart
    <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button>
    <button class="buy" name="buy" onclick="window.location.href='sign up page.php';">Buy now  <i class="fa-solid fa-bag-shopping" style="color: #000000;"></i></button></a>
   </div>
   </div>
   <section>
   <div class="related">
    <p>Related Products</p>
   </div>
   <div class="products">
   <div class="pr1">
    <div class="shape1">
   <a href="chicken burger.html"> <img src="chicken burger.webp" class="chicken_burger"></a>
    </div>
    <a href="chicken burger.html"><h1>Chicken Fantastic Burger</h1></a>
    <p>Savor the savory perfection of our chicken burger.</p>   
    <div class="price1"><i class="fa-solid fa-indian-rupee-sign"></i>
    <p>80</p>
    </div>
    <button class="cart1">Add to cart
    <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button>
   </div>
   <div class="pr2">
    <div class="shape2">
    <a href="veg burger.html"><img src="veg_burger.jpg" class="veg_burger"></a>
    </div>
    <a href="veg burger.html"><h1>Epic Veg Burger</h1></a>
    <p>Delight in the taste of our veg burger, a veggie lover's dream.</p>
    <div class="price2"><i class="fa-solid fa-indian-rupee-sign"></i>
    <p>50</p>
    </div>
    <button class="cart2" name="cart">Add to cart
    <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button>
   </div>
   <div class="pr3">
    <div class="shape3">
    <a href="noodle burger.html"><img src="noodle burger.png" class="noodle_burger"></a>
    </div>
    <a href="noodle burger.html"><h1>Noodle Fusion Burger</h1></a>
    <p>Satisfy your cravings with the unique fusion of noodles and burger in every bite.</p>
    <div class="price3"><i class="fa-solid fa-indian-rupee-sign"></i>
    <p>50</p>
    </div>
    <button class="cart3">Add to cart
    <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button>
   </div>
   <div class="pr4">
    <div class="shape4">
    <a href="pizza burger.html"><img src="pizza_burger.jpg" class="pizza_burger"></a>
    </div>
    <a href="pizza burger.html"><h1>Pizza Patty Paradise Burger</h1></a>
    <p>Experience the delicious fusion of pizza and burger in every bite of Pizza Burger.</p>
    <div class="price4"><i class="fa-solid fa-indian-rupee-sign"></i>
    <p>50</p>
    </div>
    <button class="cart4">Add to cart
    <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button>
   </div>
   </div>
   </section>
   <div class="review">
    <h1>Reviews</h1>
    <div class="1review">
    <p class="head">1 Review for Cheese Bliss Burger</p>
    <img src="review.jpg">  
    <p class="name">Ashton Porter</p> 
    <p class="date">- May 26, 2023</p>
    <div class="star">
        <i class="fa-solid fa-star" style="color: #f2d422;"></i>
        <i class="fa-solid fa-star" style="color: #f2d422;"></i>
        <i class="fa-solid fa-star" style="color: #f2d422;"></i>
        <i class="fa-solid fa-star" style="color: #f2d422;"></i>
        <i class="fa-regular fa-star" style="color: #f2d422;"></i>
        </div>
    <p class="view">The cheeseburger was delicious, with the melted cheese and juicy patty creating a flavorful experience.
     It was a satisfying and memorable meal.</p> 
     
     <p class="heading">Add a review</p>
    </div>
    <form method="POST">
    <label for="uname">Name*</label><br><br>
    <input type="text" id="uname" name="uname" required><br><br>
    <label for="email">Email*</label><br><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="uname">Your Rating*</label><br><br>
    <div class="rating">
    <input type="radio" name="star" id="star1" value="5"><label for="star1"></label>
    <input type="radio" name="star" id="star2" value="4"><label for="star2"></label>
    <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
    <input type="radio" name="star" id="star4" value="2"><label for="star4"></label>
    <input type="radio" name="star" id="star5" value="1"><label for="star5"></label>
    </div>
    <br>
    <label for="review">Your Review*</label><br><br>
    <textarea name="review" id="review" rows="5" cols="55" required></textarea>
    <button type="submit" name="submit">Submit</button>
    </form>
    <section class="bottom">
        <div class="bot4">
            <h1>FeastHub</h1>
            <h2>Working Hours</h2>
            <ul>
                <li>Mon-Fri: 9 AM - 6 PM</li>
                <li>Saturday: 9 AM - 4 AM</li>
                <li>Sunday: Closed</li>
            </ul>
        </div>
        <div class="bot2">
            <h2>Contact Information</h2>
            <ul>
                <li>Email: contact@feasthub@gmail.com</li>
                <li>Phone: +91 9456-7890</li>
                <li>Address: Phagwara, Punjab, India</li>
            </ul>
        </div>
        <div class="bot1">
            <div class="bot12">
            <h2>Links</h2>
            <ul>
                <li><a href="home page of website.html">Home</a></li>
                <li><a href="Menu2.html">Menu</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="contact us.php">Contact us</a></li>
            </ul>
        </div> 
        </div>
        <div class="bot3">
            <h2>Connect with us</h2>
            <div class="icon">
            <a href="https://www.facebook.com/profile.php?id=61553934504709"><img src="facebook.png"></a>
            <a href="https://www.instagram.com/feast_hub12/"><img src="insta.png"></a>
            <a href="https://twitter.com/Feast_Hub"><img src="twit.png"></a>
        </div>
        </div>
        <div class="up">
            <a href="#" class="to-top">
            <i class="fa-solid fa-arrow-up" id="up"></i>
        </a>
        </div>
    </section>
   </div>
</body>
</html>
<?php include 'review connection.php'?>
<?php
if(isset($_POST['submit']))
 {
$name=$_POST['uname'];
$email=$_POST['email'];
$rating=$_POST['star'];
$review=$_POST['review'];
$query="insert into review_table(Name,Email,rating,feedback) values('$name','$email','$rating','$review')";
	 $data=mysqli_query($con,$query);
	 if($data)
	 {
		   if(empty($email)){
   echo"email is required<br>";
   }
   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   echo"Invalid email format<br>";
   }
	?>
	<script type="text/javascript">
	alert("Thank you for your glowing review! We're thrilled to hear you had a positive experience with us. Your feedback means the world to us!");
	window.location.href="#";
	</script>
	 <?php
	 }
	 else
	 {
	?>	 
	<script type="text/javascript">
	alert("Please try again");
	window.location.href="#";
	</script>
	<?php
	 }
 }
?>