<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
        <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Batik Store</title>
</head>

<body>
<header>
    <nav class="navbar">
        <div class="container nav-wrapper">
            <img src="img/Logo.svg">
            <div class="menu-wrapper">
                <ul class="menu">
                    <li class="menu-item"><a href="#" class="menu-link active">Home</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">About</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Support</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">How It Works?</a></li>
                </ul>
                <a href="{{route('login')}}" class="btn-member">Sign In</a>
                <a href="/login" class="btn-member2">Sign Up</a>
            </div>
        </div>
    </nav>

    <section class="home" id="home">
        <div class="container home-wrapper">
            <div class="content-left">
                 <p class="heading">WELCOME TO  BATIK STORE</p>
                 <h1 class="heading2"> <span>Elevate</span> Your Fashion With <span>Modern Batik Style</span></h1>
                 <p class="heading3">Batik is the work of the Indonesian people which is a combination of art and technology by the ancestors of the Indonesian nation</p>
             <div class="buttom">
                <a href="3" class="btn-member3">Get Started</a>
            </div>
        </div>
          <div class="content-right">
            <div class="img-content">
              <img src="img/Home Content.svg" alt="">
            </div>
          </div>
        </div>
    </section>

    <section class="about" id="about">
    
        <div class="row">
    
            <div class="video-container">
                <img src="img/baner2.png" loop autoplay muted></img>
            </div>
    
            <div class="content">
                <h3>Outfit of The Week</h3>
              <p>We care about your appearance every day, <br> especially using Indonesian handicrafts.</p>
                <a href="#" class="btn">Preview</a>
            </div>
    
        </div>
    
    </section>
    
    <!-- about section ends -->
    
    <!-- icons section starts  -->
   

    <section class="icons-container">
        <div class="icons">
            <img src="img/icon-1.png" alt="">
            <div class="info">
                <h3>Free Delivery</h3>
                <span>on all orders</span>
            </div>
        </div>
    
        <div class="icons">
            <img src="img/icon-2.png" alt="">
            <div class="info">
                <h3>10 Days Returns</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>
    
        <div class="icons">
            <img src="img/icon-3.png" alt="">
            <div class="info">
                <h3>Offer & Gifts</h3>
                <span>on all orders</span>
            </div>
        </div>
    
        <div class="icons">
            <img src="img/icon-4.png" alt="">
            <div class="info">
                <h3>Secure Payments</h3>
                <span>protected by paypal</span>
            </div>
        </div>
       
    </section>
    
    <!-- icons section ends -->

    <!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="headingg"> <span>Batik</span> Choices Today  </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="img/megamendung.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Order Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Batik Megamendung</h3>
                <div class="price"> Rp.200.000  </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/kawung.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Order Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Batik Kawung</h3>
                <div class="price"> Rp.150.000   </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/bali.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Order Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Batik Bali</h3>
                <div class="price"> Rp.200.000   </div>
            </div>
        </div>

       

        <div class="box">
            <div class="image">
                <img src="img/lasem.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Order Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Batik Lasem</h3>
                <div class="price"> Rp.180.000   </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/kraton.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Order Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Batik Kraton</h3>
                <div class="price"> Rp.250.000  </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/tujuhrupa.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Order Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Batik Tujuhrupa</h3>
                <div class="price"> Rp.100.000  </div>
            </div>
        </div>

    </div>

</section>

<section class="testi">
    <h1 class="headingg"> <span>Testimoni</span>  </h1>
	
	
	<div class="row">
	<div class="col3">
		<img src="img/angga.png">
		<div>
			<p><b>Fast delivery, the item is perfect and very good Thankyou...</b></p>
			<h3>Angga</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
		</div>
		</div>
		<div class="col3">
		<img src="img/beatrice.png">
		<div>
			<p><b>The pattern is good, the stitching is neat, the material is really good, thankyou somuch</b></p>
			<h3>Beatrice</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
		</div>
    
		</div>
        <div class="col3">
            <img src="img/fanny_photo.png">
            <div>
                <p><b>Friendly seller, good service, cool items, safe transactions and responsive customer service</b></p>
                <h3>Fanny</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
	</div>
</section>
<!-- footer section starts  -->

<section class="footer">
    <div class="credit"> created by <span> Eveline Kurnia </span> | @2022 all rights reserved </div>

</section>

</header>
</body>

</html>