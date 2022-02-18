<?php
include("./config/config.php");  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title></title>
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
           background-color: grey;
            position: fixed;
            height: 100%;
            font-family:playfair;
            overflow: auto;
        }
        .sidebar h2{
          
    font-size: 20px;
    font-family: popins;
    color: gold;
    letter-spacing: 4px;
    margin-top: -13px;

        }

        .sidebar a {
            display: block;
    color: #ffffff;
    padding: 16px;
    font-size: 18px;
    font-family: cursive;
    text-decoration: none
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
        }



        .slider {
            margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
        }
        .main-images{
            width: 100%;
        }
        @media screen and (max-width: 600px) {
            .main-slider {

                padding: 0px 0px;
                float: right;
                width: 100%;
            }

        }
        .footer {
            margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
        }
        @media screen and (max-width: 600px) {
            .footer {
            margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
        }
        }
        .logo {
            width: 72%;
            margin-left: 12px;
        }

        @media screen and (max-width: 600px) {
            .logo {
                width: 100%;
                position: relative;
                left: 0px;
            }
        }
 

        /* flip images */

        .main-card {
            display: flex;
            margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
        }

        @media screen and (max-width: 600px) {
            .main-card {
                margin-left: 0px;
                display: block;
                padding: 0px 0px;
                height: 100%;
            }
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        @media screen and (max-width: 600px) {
            .flip-card {
                background-color: transparent;
                width: 100%;
                height: 300px;
                left: 15px;
                position: relative;
                perspective: 1000px;
            }

        }


        .flip-card-inner {
            position: relative;
            width: 95%;
            height: 100%;
            border-radius: 20px;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
        }

        @media screen and (max-width: 600px) {
            .flip-card-inner {
                position: relative;
                width: 95%;
                height: 100%;
                border-radius: 20px;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            }

        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        @media screen and (max-width: 600px) {
            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #fff;
            border-radius: 20px;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            border-radius: 20px;
            transform: rotateY(180deg);
        }

        .flip {
            width: 240px;
            border-radius: 20px;
            margin-top: 30px;
            height: 250px;
        }

        @media screen and (max-width: 600px) {

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;

            }


            .flip-card-front {
                background-color: #fff;
                border-radius: 20px;
                color: black;
            }

            .flip-card-back {
                background-color: #2980b9;
                color: white;
                border-radius: 20px;
                transform: rotateY(180deg);
            }

            .flip {
                width: 100%;
                border-radius: 20px;
                margin-top: 9px;
                height: 225px;
            }
        }

        /* end flip images */

        @media screen and (max-width: 600px) {
            .sidebar {
                width: 100%;
                height: auto;
                    background-color: hotpink;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 600px) {
            .sidebar a {
                text-align: center;
                width: 10%;
                font-family:playfair;
                float: none;
            }
        }

        .sidebar .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .sidebar a:not(:first-child) {
                display: none;
            }

            .sidebar a.icon {
                float: right;
                position: relative;
                display: block;
                top: -70px;
            }
        }



        @media screen and (max-width: 600px) {
            .sidebar.responsive {
                position: relative;
                width: 100%;
            }

            .sidebar.responsive .icon {
                position: absolute;
                right: 0;
                width: 5%;
                top: 0;
            }

            .sidebar.responsive a {
                float: none;
                display: block;
                position: relative;
              font-size: 15px;
    width: 22%;
                text-align: left;
            }
        }

        section {
            position: relative;
            float: right;
            top: 30px;
        }

        /* footer */
        .footer {
            position: relative;

        }

        .row {
            display: flex;
            text-align: center;
        }

        .col {
            width: 60%;
            color: #fff;
            height: 250px;
            background: #000;
        }

        .column {
            width: 60%;
            color: #fff;
            height: 250px;
            background: #181818;
        }

        .footer-nav {
            text-align: center;
            background: #000;
        }

        .footer-a {
            padding: 0px 30px;
            text-decoration: none;
            color: #fff;
        }

        .footer-logo {
            width: 4%;
            margin-left: 55px;
        }

        .copyright {
            font-size: 10px;
        }

        .social-link {
            margin-left: 80%;
            margin-top: -40px;
        }

        .special-btn {
            width: 20%;

            border-radius: 10px;
            border: none;
            padding: 10px;
            background: #f140a0e3;
        }

        .footer-socialmedia {
            background: #000;
            color: #fff;
        }

        @media screen and (max-width: 600px) {
            .footer {
                display: initial;
                top: 15px;
            }

            .row {
                width: 100%;
            }

            .col {
                width: 55%;
    color: #fff;
    height: 250px;
    background: #000;
            }

            .column {
                width: 60%;
                color: #fff;
                height: 250px;
                background: #181818;
            }

            .footer-nav {
                display: grid;
    background: #000;
            }

            .footer-a {
                padding: 0px 30px;
                text-decoration: none;
                color: #fff;
            }

            .footer-logo {
                width: 4%;
                margin-left: 55px;
            }

            .copyright {
                font-size: 10px;
            }

            .social-link {
                margin-left: 70%;
    margin-top: -40px;
            }

            .special-btn {
                width: 60%;

                border-radius: 10px;
                border: none;
                padding: 10px;
                background: #f140a0e3;
            }

            .footer-socialmedia {
                background: #000;
                height: 50px;
                color: #fff;
            }
        }

        /* end footer */
        div.scrollmenu {
  background-color: #fff;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
    display: inline-block;
    color: #000;
    font-weight: 900;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}
/* 
div.scrollmenu a:hover {
  background-color: #777;
} */
div.main h1{
  text-align: center;
  font-size: 38px;
}
div.scrollmenu img{
  width: 46px;
  height: 46px;

  letter-spacing: 3px;
  align-items: center;
  color: darkviolet;
  margin: -16px 3px;
  overflow: hidden;
  margin-top: -6px;
}


.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}


/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
div.main label{
  display: inline-block;
  max-width: 100%;
  margin-bottom: 50px;

  font-weight: 700;
     margin-left: 5px;
 color: #808080;
 
  
  display: inline-block;
  position: relative;
  font-size: 20px;
 
  cursor: pointer;
}
  @media screen and (max-width: 600px) {
  
   div.main label{
  display: inline-block;
  max-width: 100%;
  margin-bottom: 50px;

  font-weight: 700;
 margin-left: 3px;
 color: #808080;
 
  
  display: inline-block;
  position: relative;
  font-size: 20px;
 
  cursor: pointer;
}   
      
  }
div.main label :hover{
  color: red;

}
.button{
  width: 136px;
    height: 41px;
    border: black;
    border-radius: 20px;
    color: #808080;
    background-color: gold;
    margin-top: 97px;
}
   
div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
div.gallery {float: left;
    margin: 0px -90px;
    width: 38%;
    position: relative;
    padding: 1px 0px;
    height: 0px;
    right: 80px;

}
@media screen and (max-width: 600px) {
    div.gallery {
        float: left;
    margin: 0px 0px;
    width: 100%;
    position: relative;
  padding: 19px 0px;
    height: 100%;
    right: 17px;
}
    
}
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}

    </style>
</head>

<body>
    <div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="images/facebook-circle.png" width="32" height="32">
            <p><a href="https://www.facebook.com/pages/category/Fast-Food-Restaurant/Golden-Quarter-104433255254015/" target="_blank">Like Us on<br>Facebook</a></p>
        </li>
        <li>
            <img src="images/insta-circle.jpg" width="32" height="32">
            <p><a href="https://instagram.com/golden_quarter?utm_medium=copy_link" target="_blank">Follow Us on<br>Instagram</a></p>
        </li>
        <li>
            <img src="images/gplus-circle.png" width="32" height="32">
            <p><a href="https://g.page/r/CfFDGxrJ848QEAE" target="_blank">Follow Us on<br>Google+</a></p>
        </li>
        <!-- <li>
            <img src="images/linkedin-circle.png" width="32" height="32">
            <p><a href="https://www.linkedin.com/company/codexworld" target="_blank">Follow Us on<br>LinkedIn</a></p>
        </li>
        <li>
            <img src="images/youtube-circle.png" width="32" height="32">
            <p><a href="http://www.youtube.com/codexworld" target="_blank">Subscribe on<br>YouYube</a></p>
        </li>
        <li>
            <img src="images/pin-circle.png" width="32" height="32">
            <p><a href="https://www.pinterest.com/codexworld" target="_blank">Follow Us on<br>Pinterest</a></p>
        </li> -->
    </ul>
</div>

    <div class="sidebar" id="mySidebar">
        <a href="index.php"><img class="logo" src="images/logo1.png" alt=""></a>
               <a href="product.php">Our Food</a>
        <a href="find.php">Find Us</a>
        <a href="about.php">About</a>
        <a href="whatsnew.php">Whats New</a>
        <a href="more.php">More +</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="content">
         <?php  include_once('includes/nav.php'); ?>
<!--    <div class="scrollmenu">-->
<!--  <a href="morningquarters.php">Morning Quarters</a>-->
<!--  <a href="quarters.php">Quarters</a>-->
<!--  <a href="empanadas.php">Empanadas</a>-->
<!--  <a href="sides&snacks.php">Sides & Snacks</a>-->
<!--  <a href="ontherocks.php">On The Rocks</a>-->
<!--  <a href="creamblendedfrappes.php">Cream Blended Frappes</a>-->
<!--  <a href="shakes.php">Shakes</a>  -->
<!--   <a href="pattiseries.php">Pattiseries</a>-->
<!--  <a href="brews.php">Brews</a>-->
  
<!--</div>-->
   <img class="main-images" src="images/banner.jpg" alt="">

   <div class="main">

<h1>Our Menu</h1>

<center>
  
<form name="FilterForm" id="FilterForm" action="" method="">
                <input type="checkbox" name="filterStatus" value="non_veg" />
                <label for="filter_1">Non veg</label>
                <input type="checkbox" name="filterStatus" value="veg" />
                <label for="filter_2">Veg</label>
                <input type="checkbox" name="filterStatus" value="egg" />
                <label for="filter_2">Egg</label>
            </form>
            <?php
                $sql = "SELECT * FROM `food` WHERE category='morning_quarters'";
                $sql_run = mysqli_query($con, $sql);
                if (mysqli_num_rows($sql_run) > 0) {
                    while ($row = mysqli_fetch_assoc($sql_run)) {
                   ?>  
<div class="gallery">
            <div class="main-card">
        <div class="flip-card">
            <div class="flip-card-inner" id="StatusTable">
                <div class="flip-card-front <?php echo $row['food_type']; ?>">
                <img class="flip" src="./images/food_image/<?php $data = json_decode($row['food_data'], true);
                                    echo $data['food_image'];  ?>" >
                                    
                        
                </div>     
                <div class="flip-card-back <?php echo $row['food_type']; ?>">
                <p><?php $data = json_decode($row['food_data'], true);
                                    echo $data['food_name'];  ?></p>
                                    <p><?php echo $row['food_type']; ?></p> 
                                              <p> <?php $data = json_decode($row['food_data'], true);
                                    echo $data['details'];  ?>
                   </p>  
                                 <p>PRICE: <?php $data = json_decode($row['food_data'], true);
                                    echo $data['price'];  ?>₹</p>  
                        
                   <button class="button"><a href="https://wa.me/918806258784">Order Now </a></button>
                </div>
            </div>
            
        <div> <h4 style="text-align: center;"><?php $data = json_decode($row['food_data'], true);
                                    echo $data['food_name'];  ?></h4></div>
        </div>
    </div>
    </div>
    <?php
                    }
                }
    ?>
</center>
</div>
    
    </div>
    
    <!-- .boxesContainer   -->
    <!-- <div class="footer">
        <div class="row">
            <div class="col">
                <h3>SPECIAL OFFERS</h3>
                <p>Don't miss out on exclusive offers.</p>
                <button class="special-btn">Special Offer</button>
            </div>
            <div class="column">
                <h3>FIND GOLDEN QUARTER</h3>
                <p>Find the nearest Taco Bell Restaurant <br> in your city</p>
                <button class="special-btn">Find Us</button>
            </div>
        </div>
        <div class="footer-nav">
            <a class="footer-a" href="">Our Food</a>
            <a class="footer-a" href="">Find Us</a>
            <a class="footer-a" href="">About</a>
            <a class="footer-a" href="">Whats New</a>
            <a class="footer-a" href="">More</a>
        </div>
        <div class="footer-socialmedia">
            <img class="footer-logo" src="images/logo1.png" alt="">
            <p class="copyright">©2021 Taco Bell IP Holder, LLC. All Rights Reserved.</p>
            <div class="social-link">
                <a href=""><i class="fa fa-instagram" aria-hidden="true" style="font-size: 35px;"></i></a>
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 35px;"></i></a>
                <a href=""><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 35px;"></i></a>
            </div>
        </div> -->
        <script>
            function myFunction() {
                var x = document.getElementById("mySidebar");
                if (x.className === "sidebar") {
                    x.className += " responsive";
                } else {
                    x.className = "sidebar";
                }
            }
        </script>

<script>
        $("input[name='filterStatus'], select.filter").change(function() {
            var classes = [];
            var stateClass = ""

            $("input[name='filterStatus']").each(function() {
                if ($(this).is(":checked")) {
                    classes.push('.' + $(this).val());
                }
            });


            if (classes == "" && stateClass == "") {
                // if no filters selected, show all items
                $("#StatusTable div  ").show();
            } else {
                // otherwise, hide everything...
                $("#StatusTable div ").hide();

                // then show only the matching items
                console.log(classes)
                rows = $("#StatusTable div" + stateClass).filter(classes.length ? classes.join(',') : '*');
                if (rows.size() > 0) {
                    rows.show();
                }
            }

        });
    </script>
</body>

</html>