

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>THE GOODLY | fashion store</title>
    <link rel="stylesheet"  href="style.css" />
    <link rel="stylesheet"  href="style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

    <script src="script.js"></script>
<!-------Logo and navigation bar------->
    <div class="navbar"> 
        <div class="logo">
            <img src="images/goodlylogo.png" width="125px">
        </div>
        <nav>
            <ul>
                <li><a href="#"> HOME</a></li>
                <li><a href="#"> ABOUT US</a></li>
                <li><a href="#"> PAGES</a></li>
                <li><a href="#"> SHOP</a></li>
                <li><a href="#"> CONTACT</a></li>
            </ul>
        </nav>
        <div class="icon"> 
            <span class="ic"><img src="images/outline_account_box_black_24dp.png"></span>
            <span class="ic"><img src="images/sharp_favorite_border_black_24dp.png"></span>
            <span class="ic"><img src="images/outline_shopping_bag_black_24dp.png"></span>
        </div>
    </div>

<!-------Drop down button and search bar------->    
    <div class="row">
        <div class="col_1">
            <div class="dropdown" style="float: left;">
                <button class="dropbtn"><i class="fa fa-bars"></i> &nbsp All Categories</button>
                <div class="dropdown-content">
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Accessories</a>
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Shoes</a>
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Men's Shirts</a>
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Men's T-Shirts</a>
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Women Clothes</a>
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Watches</a>
                    <a href="#"><i class="fa fa-caret-right"></i> &nbsp Other</a>
                </div>
            </div>
        </div>
        <div class="col_1">
            <div class="searchbar">
                <input type="text" placeholder="Search for...">
            </div>
        </div>
    </div>
<!-------Front page------->    
    <div class="row">
        <div class="col_2">
            <div class="imgtext">
                <h1 style="font-size: 60px;">Get up to 30% off <br>New Arrivals...</h1> 
                <h3>Our new arrivals bring the coast to you..</h3>
                <a href="" class="explorebtn">Explore Now &#8594;</a>           
            </div>
        </div>
        <div class="col_2">
            <div class="backimg1" width="300px">
                <img src="images/imgbin-smart-casual-male-shirt-clothing-vip-card-shading-vZTgggBkEhCT9YiQsNBPdbhUf.png" style="float: right;">
            </div>
        </div>
    </div>
  
<!-------Top collection product set------->    
    <div class="midtopics">
        <h4 style="color: rgb(167, 99, 99);">SPECIAL OFFER</h4>
        <h1 style="font-size: 40px" class="title">TOP COLLECTION 2021</h1>
    </div>
    <div class="category1">
        <div class="item1">
            <img src="images/feature_1.jpg" name="Men T-Shirt (White)" onclick="show_alert(name)">
            <span>Men T-Shirt (White)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.1200.00</p>
        </div>
        <div class="item1">
            <img src="images/feature_3.jpg" name="Men T-Shirt (Yellow)" onclick="show_alert(name)">
            <span>Men T-Shirt (Yellow)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.950.00</p>
        </div>
        <div class="item1">
            <img src="images/feature_2.jpg" name="Women T-Shirt" onclick="show_alert(name)">
            <span>Women T-Shirt</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.1150.00</p>
        </div>
        <div class="item1">
            <img src="images/feature_5.jpg" name="Smartphone Backcover" onclick="show_alert(name)">
            <span>Smartphone Backcover</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.800.00</p>
        </div>
        <div class="item1">
            <img src="images/feature_4.jpg" name="Square Cushion Cover (16 inch)" onclick="show_alert(name)">
            <span>Square Cushion Cover (16 inch)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.650.00</p>
        </div>
    </div>

<!-------First offers advertisement------->
    <div class="adrow">
        <div class="ad">
            <div class="ad-text">
                <strong>limited offer</strong>
                <span>30% off <br> Get up to <b>50%</b> off Today Only..</span>
                <a href="#" class="ad-btn">Shop now</a>
            </div>
        </div>
    </div>

<!-------Deal of the day products set------->
    <div class="midtopics">
        <h1 style="font-size: 40px" class="title">DEAL OF THE DAY</h1>
    </div>
    <div class="category1">
        <div class="item2">
            <img src="images/p-2.png" name="Men Shirt (Light Blue)" onclick="show_alert(name)">
            <span>Men Shirt (Light Blue)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.650.00</p>
        </div>
        <div class="item2">
            <img src="images/product-11.jpg" name="Light grey Shoes" onclick="show_alert(name)">
            <span>Light grey Shoes</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.10,950.00</p>
        </div>
        <div class="item2">
            <img src="images/p-1.png" name="Men T-Shirt (yellow)" onclick="show_alert(name)">
            <span>Men T-Shirt (yellow)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.5550.00</p>
        </div>
        <div class="item2">
            <img src="images/product-7.jpg" name="Black & White Socks" onclick="show_alert(name)">
            <span>Black & White Socks</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.450.00</p>
        </div>
    </div>

<!-------Offers set------->
    <section class="offerrow">
        <div class="offerbox">
            <img src="images/sale-2.jpg">
            <a href="#">
                <div class="offer-text">
                    <strong>Hellow Summer</strong>
                    <span>Sale off 25%</span>
                </div>
            </a>
        </div>
        <div class="offerbox">
            <img src="images/sale-1.jpg">
            <a href="#">
                <div class="offer-text">
                    <strong>Bag with rose pattern</strong>
                    <span>Sale off 25%</span>
                </div>
            </a>
        </div>
        <div class="offerbox">
            <img src="images/sale-3.jpg">
            <a href="#">
                <div class="offer-text">
                    <strong>Let's Party Hard Pillow</strong>
                    <span>Sale off 25%</span>
                </div>
            </a>
        </div>
    </section>

<!-------New arrivals products set row 1------->
    <div class="midtopics">
        <h1 style="font-size: 40px" class="title">NEW ARRIVALS</h1>
    </div>

    <div class="category2">
        <div class="item2">
            <img src="images/p-5.png" name="Full Blue Coat" onclick="show_alert(name)">
            <span>Full Blue Coat</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.12,450.00</p>
        </div>
        <div class="item2">
            <img src="images/p-7.png" name="Men Jersy (Red)" onclick="show_alert(name)">
            <span>Men Jersy (Red)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.10,450.00</p>
        </div>
        <div class="item2">
            <img src="images/p-6.png" name="Blue and White Men Coat" onclick="show_alert(name)">
            <span>Blue and White Men Coat</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.19,450.00</p>
        </div>
        <div class="item2">
            <img src="images/p-8.png" name="Women White Coat(Full)" onclick="show_alert(name)">
            <span>Women White Coat(Full)</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.20,450.00</p>
        </div>
    </div>

<!-------New arrivals products set row 2------->
    <div class="category1">
        <div class="item3">
            <img src="images/product-2.jpg" name="Jorden Black shoes" onclick="show_alert(name)">
            <span>Jorden Black shoes</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.22,000.00</p>
        </div>
        <div class="item3">
            <img src="images/product-10.jpg" name="Jorden Casual Shoes" onclick="show_alert(name)">
            <span>Jorden Casual Shoes</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.25,400.00</p>
        </div>
        <div class="item3">
            <img src="images/product-9.jpg" name="Roadstere Black Watch" onclick="show_alert(name)">
            <span>Roadstere Black Watch</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>Rs.10,050.00</p>
        </div>
        <div class="item3">
            <img src="images/product-8.jpg" name="Fossil Black Watch" onclick="show_alert(name)">
            <span>Fossil Black Watch</span>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.12,500.00</p>
        </div>
    </div>
    <form action="#" method="POST">
        <h1>Place a Order</h1>
        <div class="input-control">
            <label for="username">Username</label>
            <input name="username" type="text">
           
        </div>
        <div class="input-control">
            <label for="email">Email</label>
            <input name="email" type="text">
            
        </div>
        <div class="input-control">
            <label for="number">Phone Number</label>
            <input name="number" type="number">
            
        </div>
        <div class="input-control">
            <label for="order">Order</label>
            <input name="order" type="order">
           
        </div>
        <button type="submit" name="send" class="btn">SUBMIT</button>
          
    </form>


<!-------Second offers advertisement------->
    <div class="adrow1">
        <div class="ad">
            <div class="ad-text">
                <strong>limited offer</strong>
                <span>30% off <br> Get up to <b>50%</b> off Today Only..</span>
                <a href="#" class="ad-btn">Shop now</a>
            </div>
        </div>
    </div>

<!-------Footer------->
    <div class="footer">
        <div class="f-content">
            <div class="f-column">
                <div class="f-column-app">
                    <h3>Download our App</h3>
                    <p>Goodly App is now available for Andriod and ios devices</p>
                </div>
            </div>
            <div class="f-column">
                <div class="f-column-logo">
                    <img src="images/goodlylogo.png">
                    <p>The GOODLY | We brings what best for you</p>
                </div>
            </div>
            <div class="f-column">
                <div class="f-column-links">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Blog post</li>
                        <li>Coupons</li>
                        <li>Return policy</li>
                    </ul>
                </div>
            </div>
            <div class="f-column">
                <div class="f-column-follow">
                    <h3>Follow Us On</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="f-bottom">
            &copy; TheGoodlyfashion | Designed by Ramindu Shadihara Kahingala
        </div>
    </div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $order = $_POST["order"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "detabase";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO details(username, email, phonenumber, order) VALUES ('$username', '$email', '$phonenumber', '$order')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}




?>
</body>


</html>