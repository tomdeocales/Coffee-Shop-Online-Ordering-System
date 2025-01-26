
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Cafe Hermie Brewed Coffee Shop</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>

        <!-- Custom CSS File Link -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/convo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico"><!-- Favicon / Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header class="header">
            <a href="#" class="logo">
                <img src="assets/images/logo.png" class="img-logo" alt="KapeTann Logo">
            </a>

            <!-- MAIN MENU FOR SMALLER DEVICES -->
            <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#home" class="text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="text-decoration-none">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#menu" class="text-decoration-none">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blogs" class="text-decoration-none">Promos and Updates</a>
                        </li>
                        <li class="nav-item">
                            <a href="#gallery"class="text-decoration-none">Gallery</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="users/login.php" class="text-decoration-none">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="icons">
                <div class="fas fa-shopping-cart" id="cart-btn" onclick="redirectCart()"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <!-- SEARCH TEXT BOX -->
            <div class="search-form">
                <input type="search" id="search-box" class="form-control" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

            <!-- CART SECTION -->
            <div class="cart">
                <h2 class="cart-title">Your Cart:</h2>
                <div class="cart-content">
                    
                </div>
                <div class="total">
                    <div class="total-title">Total: </div>
                    <div class="total-price">₱0</div>
                </div>
                <!-- BUY BUTTON -->
                <button type="button" class="btn-buy">Checkout Now</button>
            </div>
        </header>

        
        <!-- HERO SECTION -->
        <section class="home" id="home">
            <div class="content">
                <h3>Welcome to  cafe harmie Shop, mga ka hamie !</h3>
                <p>
                    <strong>We are open 4:00 PM to 9:00 PM.</strong>
                </p>
                <a href="#menu" class="btn btn-dark text-decoration-none">Order Now!</a>
            </div>
        </section>

        <!-- ABOUT US SECTION -->
        <section class="about" id="about">
            <h1 class="heading"> <span>About</span> Us</h1>
            <div class="row g-0">
                <div class="image">
                    <img src="assets/images/hermie.jpg" alt="" class="img-fluid">
                </div>
                <div class="content">
                    <h3>Welcome to Cafe Hermie!</h3>
                    <p>
                        At Cafe Hermie Coffee Shop, we are passionate about coffee and believe
                        that every cup tells a story. We are a cozy coffee shop located
                        in the heart of the city, dedicated to providing an exceptional
                        coffee experience to our customers. Our love for coffee has led
                        us on a voyage of exploration and discovery, as we travel the
                        world in search of the finest coffee beans, carefully roasted
                        and brewed to perfection.
                    </p>
                    <p>
                        But coffee is not just a drink, it's an experience. Our warm and
                        inviting atmosphere at Cafe Hermie is designed to be a haven
                        for coffee lovers, where they can relax, connect, and embark
                        on their own coffee voyages.
                    </p>
                    <a href="#blogs" class="btn btn-dark text-decoration-none">Learn More</a>
                </div>
            </div>
        </section>

        <!-- MENU SECTION -->
        <section class="menu" id="menu">
            <h1 class="heading">Our <span>Menu</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-1.png" alt="" class="product-img">
                                <h3 class="product-title">Americano - Hot Espresso (12 OZ)</h3>
                                <div class="price">₱45.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-2.png" alt="" class="product-img">
                                <h3 class="product-title">Colombian Supremo Cup (12 OZ)</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-3.png" alt="" class="product-img">
                                <h3 class="product-title">Nitro Cold Brew w/ Straw (12 OZ)</h3>
                                <div class="price">₱50.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-4.png" alt="" class="product-img">
                                <h3 class="product-title">Seasonal Single-Origin (12 OZ)</h3>
                                <div class="price">₱30.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-5.png" alt="" class="product-img">
                                <h3 class="product-title">Indonesian Sumatra Mandheling (12 OZ)</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-6.png" alt="" class="product-img">
                                <h3 class="product-title">Mint Mojito Iced Coffee (12 OZ)</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-7.png" alt="" class="product-img">
                                <h3 class="product-title">Iced Americano (12 OZ)</h3>
                                <div class="price">₱35.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-8.png" alt="" class="product-img">
                                <h3 class="product-title">Specialty Brews (12 OZ)</h3>
                                <div class="price">₱85.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-9.png" alt="" class="product-img">
                                <h3 class="product-title">Seasonal Origin (12 OZ)</h3>
                                <div class="price">₱80.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-10.png" alt="" class="product-img">
                                <h3 class="product-title">Ethiopian Yirgacheffe Cup (12 OZ)</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-11.png" alt="" class="product-img">
                                <h3 class="product-title">Cold Brew Tonic In a Cup (12 OZ)</h3>
                                <div class="price">₱35.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/cart-item-12.png" alt="" class="product-img">
                                <h3 class="product-title">Caramel Cold Foam Cold Brew (12 OZ)</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <center>
                        <button id="showHideBtn" class="btn btn-dark">SHOW MORE</button>
                    </center> 
                </div>
            </div>
        </section>

        <!-- BLOGS SECTION -->
        <section class="blogs" id="blogs">
            <h1 class="heading">Our Promos<span> and Updates</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/palit.jpg" alt="">
                                </div>
                                <div class="content">
                                <h1 style="color: white">Weekend Promo</h1>
                                    <span>Buy 3 Grande On Any Coffe Get 1 Free Matcha Grande!</span>
                                    <p>Indulge in our special offer at Cafe Hermie! Purchase any three Grande coffees of your choice and receive a complimentary Matcha Grande absolutely free. Whether you're a coffee aficionado or a matcha enthusiast, this deal is perfect for anyone looking to savor our delightful beverages. Visit Cafe Hermie today and treat yourself to a free Matcha Grande with every purchase of three Grande coffees. It's the perfect way to enjoy your favorite drinks while discovering new flavors!</p>
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/studentpromos.jpg" alt="">
                                </div>
                                <div class="content">
                                <h1 style="color: white">Student Discounts</h1>
                                    <span>Try it Now</span>
                                    <p>Welcome to Cafe Hermie, where students can enjoy a 30% discount on all orders! Our cafe offers a cozy and inviting atmosphere, perfect for studying or catching up with friends. From freshly brewed coffee to delicious pastries and hearty sandwiches, we have something for everyone. Come and experience our warm hospitality and delectable menu at Cafe Hermie, where students can savor great food at an unbeatable price.</p>
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/yearednpromo.jpg" alt="">
                                </div>
                                <div class="content">
                                <h1 style="color: white">Yearend Promo</h1>
                                    <span>Visit Us</span>
                                    <p>Celebrate the end of the year with Cafe Hermie's exclusive promotion! Enjoy a 10% discount on all coffee and non-coffee drinks as our way of saying thank you for your continued support. Whether you prefer a rich espresso, a creamy latte, or a refreshing iced coffee, now is the perfect time to savor your favorite brews at a special price. Join us at Cafe Hermie and raise a cup to the year's end with our delightful coffee drinks, now available with an irresistible discount. Cheers to a wonderful year ahead!</p>
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/facebookupdates.jpg" alt="">
                                </div>
                                <div class="content">
                                <h1 style="color: white">Christmas Season</h1>
                                    <span>Accepting Orders</span>
                                    <p>Celebrate the festive season with Cafe Hermie! We are now accepting orders for the Christmas season. Treat yourself and your loved ones to our special holiday menu, featuring delightful treats and seasonal drinks that will add joy to your celebrations. Place your orders now and make this Christmas a truly magical and delicious one with Cafe Hermie!</p>
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/americano.jpg" alt="">
                                </div>
                                <div class="content">
                                <h1 style="color: white">New Flavour Americano</h1>
                                    <span>Gotta Try</span>
                                    <p>Introducing our new flavor, the Americano! Experience the perfect balance of rich espresso and hot water, creating a bold and satisfying coffee that's sure to delight your taste buds. Try it today at Cafe Hermie and elevate your coffee experience to new heights!</p>
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/booking updates.jpg" alt="">
                                </div>
                                <div class="content">
                                <h1 style="color: white">Open for Bookings</h1>
                                    <span>Inquire Now</span>
                                    <p>Celebrate your special occasions with Cafe Hermie! We are now open for bookings for parties, weddings, gatherings, birthdays, and corporate events. Let us be a part of your memorable moments with our delightful drinks and cozy ambiance. Contact us to reserve your date and make your event an unforgettable one!</p>
                                    <center>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div> 
            </div>
        </section>

        
        <!-- GALLERY SECTION -->
        <section class="gallery" id="gallery">
            <h1 class="heading">The <span>Gallery</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/G1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/G2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 2</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/G3.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 3</h3>
                                </div>
                            </div>
                        </div>
                    </div><br />
                    <div class="row pic-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/G4.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 4</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/G5.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 5</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="assets/images/G6.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 6</h3>
                                </div>
                            </div>
                        </div>
                    </div><br />
                    <center>
                        <button id="showBtn" class="btn btn-dark">SHOW MORE</button>
                    </center> 
                </div> 
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="review" id="review">
            <h1 class="heading"><span>Rev</span>iews</h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                    Ganda ng lugar, sarap humigop ng mainit na kape.
                                </p>
                                <img src="assets/images/OIP.jpg" alt="" class="user">
                                <h3>Senior Agila</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                    Sarap ng kape para sa akin 10/10.
                                </p>
                                <img src="assets/images/R.jpg" alt="" class="user">
                                <h3>Daniel Padilla</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                    Uubusin ko na pera ko para lang sa kape, anlapit sa bahay namin eh.
                                </p>
                                <img src="assets/images/thur.jpg" alt="" class="user">
                                <h3>Arthur Triste</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
        <br>
        <br>
        <br>


        <!-- FOOTER SECTION -->
        <section class="footer" style="text-align: center;">
        <h2 style="color: grey">Contact Us</h2>
        <br></br>
        
    <div class="footer-container" style="display: flex; justify-content: center;">
    
        <div class="logo" style="margin: 0 10px;">
            <i class="fas fa-envelope"></i>
            <p style="color: grey; margin: 0;">cafehermie@gmail.com</p>
        </div>
        <div class="logo" style="margin: 0 10px;">
            <i class="fas fa-phone"></i>
            <p style="color: grey; margin: 0;">+63 917-492-3035</p>
        </div>
        <div class="logo" style="margin: 0 10px;">
            <a href="https://www.facebook.com/CafeHermie" style="text-decoration: none; color: grey;">
                <i class="fab fa-facebook"></i>
                <p style="color: grey; margin: 0;">CafeHermie</p>
            </a>
        </div>
        <div class="logo" style="margin: 0 10px;">
        <a href="https://www.instagram.com/cafehermie/"><i class="fab fa-instagram"></i>
            <p style="color: grey; margin: 0;">@CafeHermie</p></a>
        </div>
        
    </div>
    <div class="credit" style="text-align: center;">
        <hr />
        <h2>Cafe Hermie © 2023 | All Rights Reserved.</h2>
        <h2>Designed by <span>Group 8</span> | WMAD</h2>
    </div>
</section>



        <!-- JS File Link -->
        <script src="assets/js/responses.js"></script>
        <script src="assets/js/convo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            // CODE FOR THE FORMSPREE
            window.onbeforeunload = () => {
                for(const form of document.getElementsByTagName('form')) {
                    form.reset();
                }
            }

            // CODE FOR THE GOOGLE MAPS API
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 14.99367271992383, lng: 120.17629231186626},
                    zoom: 9
                });

                var marker = new google.maps.Marker({
                    position: {lat: 14.99367271992383, lng: 120.17629231186626},
                    map: map,
                    title: 'Your Location'
                });
            }

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN MENU
            $(document).ready(function() {
                $(".row-to-hide").hide();
                $("#showHideBtn").text("SHOW MORE");
                $("#showHideBtn").click(function() {
                    $(".row-to-hide").toggle();
                    if ($(".row-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN GALLERY
            $(document).ready(function() {
                $(".pic-to-hide").hide();
                $("#showBtn").text("SHOW MORE");
                $("#showBtn").click(function() {
                    $(".pic-to-hide").toggle();
                    if ($(".pic-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });

            // CODE FOR THE REDIRECT CART
            function redirectCart() {
                // Check if the user is logged in
                if(!"<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : '' ?>") {
                    // Redirect the user to the login page
                    alert("You are not logged in. Please log into your account and try again.");
                    window.location.href = "users/login.php";
                }
            }
        </script> 
    </body>
</html>
