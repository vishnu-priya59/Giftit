<?php
$conn = mysqli_connect("localhost", "root", "", "db_gift");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIFT IT</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Gift Logo" class="img-responsive">
                </a>
            </div>


            <div class="item text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="gifts.html">Gifts</a>
                    </li>
                    <li>
                        <a href="contactform.html">Contact</a>
                    </li>
                    <li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>

                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- Gift sEARCH Section Starts Here -->
    <section class="gift-search text-center">
        <div class="container">

            <form action="gift-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for gift.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- gift sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Gifts</h2>

            <a href="category-gifts.html">
                <div class="box-3 float-container">
                    <img src="images/flowers.jpg" alt="flowers" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Flowers</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/cakes.jpg" alt="cakes" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Cakes</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="images/jewels.jpg" alt="jewels" class="img-responsive img-curve">

                    <h3 class="float-text text-white">Jewels</h3>
                </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- gift items Section Starts Here -->
    <section class="gift-items">
        <div class="container">
            <h2 class="text-center">Gift Items</h2>

            <div class="gift-item-box">
                <div class="gift-img">
                    <img src="images/item-flowers.jpg" alt="Fresh Flowers" class="img-responsive img-curve">
                </div>

                <div class="Gift-item-desc">
                    <h4>Flowers</h4>
                    <p class="gift-price">Rs.150</p>
                    <p class="gift-detail">
                        All the beauty of nature in one little flower
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="gift-item-box">
                <div class="gift-item-img">
                    <img src="images/item-cakes.jpg" alt="cakes" class="img-responsive img-curve">
                </div>

                <div class="gift-item-desc">
                    <h4>Cakes</h4>
                    <p class="gift-price">Rs.350</p>
                    <p class="gift-detail">
                        A party without cake is just a meeting.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="gift-item-box">
                <div class="gift-item-img">
                    <img src="images/item-jewels.jpg" alt="jewels" class="img-responsive img-curve">
                </div>

                <div class="gift-item-desc">
                    <h4>Jewels</h4>
                    <p class="gift-price">Rs.250</p>
                    <p class="gift-detail">
                        Life's too short to wear boring jewellery.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="gift-item-box">
                <div class="gift-item-img">
                    <img src="images/item-toys.jpg" alt="toys" class="img-responsive img-curve">
                </div>

                <div class="gift-item-desc">
                    <h4></h4>
                    <p class="gift-price">Rs.100</p>
                    <p class="gift-detail">
                        We toys can see everything.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="gift-item-box">
                <div class="gift-item-img">
                    <img src="images/item-shoes.jpg" alt="shoes" class="img-responsive img-curve">
                </div>

                <div class="gift-item-desc">
                    <h4>Shoes</h4>
                    <p class="gift-price">Rs.200</p>
                    <p class="gift-detail">
                        Lace it

                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="gift-item-box">
                <div class="gift-item-img">
                    <img src="images/item-bags.jpg" alt="bags" class="img-responsive img-curve">
                </div>

                <div class="gift-item-desc">
                    <h4>Bags</h4>
                    <p class="gift-price">Rs.200</p>
                    <p class="gift-detail">
                        A bag is a piece of art.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>



        </div>

        <p class="text-center">
            <a href="#">See All Gifts</a>
        </p>
    </section>
    <!-- gift item Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Vishnu Priya</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>

</html>