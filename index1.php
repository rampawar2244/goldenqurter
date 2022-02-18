<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            overflow: auto;
        }
        .sidebar h2{
          
    font-size: 20px;
    font-family:Playfair;
    color: gold;
    letter-spacing: 4px;
    margin-top: -13px;

        }

        .sidebar a {
            display: block;
    color: #ffffff;
    padding: 16px;
    font-size: 18px;
    font-family:Playfair ;
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

    /*.main-slider {*/
    /*        margin-left: 200px;*/
    /*        padding: 0px 0px;*/
    /*        height: 100%;*/
    /*    }*/

    /*    @media screen and (max-width: 600px) {*/
    /*        .main-slider {*/

    /*            padding: 0px 0px;*/
    /*            float: right;*/
    /*            width: 100%;*/
    /*        }*/

    /*    }*/
        .main-slider {
            margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
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
            padding: 1px 0px;
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

        /* slider */
        @keyframes slidy {
            0% {
                left: 0%;
            }

            20% {
                left: 0%;
            }

            25% {
                left: -100%;
            }

            45% {
                left: -100%;
            }

            50% {
                left: -200%;
            }

            70% {
                left: -200%;
            }

            75% {
                left: -300%;
            }

            95% {
                left: -300%;
            }

            100% {
                left: -400%;
            }
        }

        body {
            margin: 0;
        }

        div#slider {
            overflow: hidden;
        }

        div#slider figure img {
            width: 20%;
            float: left;
        }

        div#slider figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 30s slidy infinite;
        }

        /* end slider */

        /* flip images */

        .main-card {
            display: flex;
               margin-left: 200px;
            padding: 0px 0px;
            height: 100%;
        }

        @media screen and (max-width: 600px) {
            .main-card {
            margin-left: -2px;
            margin-right: 33px;
                display: block;
                padding: 0px 0px;
                height: 100%;
            }
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            margin-left: 62px;
            perspective: 1000px;
        }

        @media screen and (max-width: 600px) {
            .flip-card {
                background-color: transparent;
                width: 100%;
                height: 300px;
                    right: 50px;
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
                    width: 313px;
    border-radius: 20px;
    margin-top: 50px;
    padding: 15px;
    height: 264px;
    text-decoration:none;
   
    
   -webkit-transition: all .6s ease-in-out;
    -moz-transition: all .6s ease-in-out;
    -o-transition: all .6s ease-in-out;
    transition: all .6s ease-in-out;
    
}
.flip:hover {
    
      -moz-box-shadow: 0 0 10px #ccc;
         -webkit-box-shadow: 0 0 36px #ccc;
    box-shadow: 0 0 50px #ccc;
    }

 a{
     text-align: center;
     text-decoration:none;
       font-size: 22px;
    color: darkslategrey;
    margin-top: -7px;
    font-weight: 900;
    font-family:Lobster;
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
                padding: 15px;
                height: 225px;
            }
        }

        /* end flip images */

        @media screen and (max-width: 600px) {
            .sidebar {
                width: 100%;
                background-color: hotpink;
                height: auto;
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
                width: 25%;
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
            background-color:#000;

        }

        .row {
            display: flex;
            text-align: center;
        }

        .col {
            width: 60%;
            color: #fff;
            height: 250px;
            background: #121212;
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
            width: 5%;
            margin-left: 63px;
        }

        .copyright {
    font-size: 15px;
    font-weight: bold;
    text-align: center;
    margin-left: 0px;
    margin-top: 20px;
        }

        .social-link {
            margin-left: 80%;
            margin-top: -40px;
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
    background: #121212;
            }

            .column {
                width: 60%;
                color: #fff;
                height: 250px;
                background: #181818;
            }

            .footer-nav {
                display: grid;
                    margin-top: -95px;
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
        
div.head{
        font-size: 19px;
    font-family: initial;
    font-weight: bold;
    margin-left: 130px;
}
@media screen and (max-width: 600px) {

    div.head{
        font-size: 22px;
    font-family: serif;
    margin-left: 22px;
    margin-right: 19px;
    border: black solid;
    border-top: none;
    border-left: none;
    border-right: none;
    font-weight: bold;
    text-align: center;
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


        /* end footer */
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
        <!--<h2>Golden Qurter</h2>-->
        <a href="product.php">Our Food</a>
        <a href="find.php">Contact Us</a>
        <a href="about.php">About</a>
        <a href="whatsnew.php">Whats New</a>
        <a href="more.php">More +</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="content">
        <div id="slider">
            <figure>
                <img src="images/ban1.jpg" alt>
                <img src="images/ban6.jpg" alt>
                <img src="images/ban1.jpg" alt>
                <img src="images/ban1.jpg" alt>
            </figure>
        </div>
    </div>
        <div class ="head">
     <h2 style="text-align: center;">Our Menu</h2>   
            
        </div>
    <!--<h2 style="text-align: center;">Our Menu</h2>-->
    <div class="main-card">
    
                    <a href="product.php"> <img class="flip" src="mainimages/All Day Quarters/Waffle+ Veg Q.jpg" alt="Avatar">Morning Quarter</a>
                    

    

       
                     <a href="product.php"><img class="flip" src="mainimages/Sides & Snacks + Empanadas/Spinach Mozarella Empanada.jpg" alt="Avatar">Empanadas</a>
                 
       
 
                    <a href="product.php"><img class="flip" src="mainimages/Sides & Snacks + Empanadas/French Fries (2).jpg" alt="Avatar">Sides & Snacks</a>
               
    
    </div>
      <div class="main-card">
    
                    <a href="product.php"> <img class="flip" src="mainimages/Coffee Combos/IMG_5030 copy.jpg" alt="Avatar">Pattiseries</a>
                 
           
    

       
                     <a href="product.php"><img class="flip" src="mainimages/Beverages/Latte (5).jpg" alt="Avatar">Beverages</a>
                 
       
 
                    <a href="product.php"><img class="flip" src="img/img3.jpg" alt="Avatar"></a>
               
    
    </div>
    <!--  <div class="main-card">-->
    
    <!--                <a href="product.php"> <img class="flip" src="img/img1.jpg" alt="Avatar"></a>-->
                 
           
    

       
    <!--                 <a href="product.php"></a><img class="flip" src="img/img2.jpg" alt="Avatar"></a>-->
                 
       
 
    <!--                <a href="product.php"><img class="flip" src="img/img3.jpg" alt="Avatar"></a>-->
               
    
    <!--</div>-->
  
    <!-- .boxesContainer   -->


    <div id="slider" class="main-slider">
        <section>
            <figure>
                <img src="images/1.jpg" alt>
                <img src="images/2.jpg" alt>
                <img src="images/1.jpg" alt>

            </figure>
        </section>
    </div>


    <div class="footer">
        <div class="row">
            <div class="col">
                <h3>SPECIAL OFFERS</h3>
                <p>Don't miss out on exclusive offers of GQ.</p>
                <button class="special-btn">Special Offer</button>
            </div>
            <div class="column">
                <h3>FIND GOLDEN QUARTER</h3>
                <p>Find the nearest GQ<br> in your city</p>
                <button class="special-btn">Find Us</button>
            </div>
        </div><br><br><br><br><br>
        <div class="footer-nav">
            <a class="footer-a" href="">Our Food</a>
            <a class="footer-a" href="">Find Us</a>
            <a class="footer-a" href="">About</a>
            <a class="footer-a" href="">Whats New</a>
            <a class="footer-a" href="">More</a>
        </div>
        <div class="footer-socialmedia">
            <img class="footer-logo" src="images/lo.png" alt="">
            <p class="copyright">©2021 Golden qurter, All Rights Reserved.</p>
            <!--<div class="social-link">-->
            <!--    <a href="https://instagram.com/golden_quarter?utm_medium=copy_link"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 35px;"></i></a>-->
            <!--    <a href="https://www.facebook.com/pages/category/Fast-Food-Restaurant/Golden-Quarter-104433255254015/"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 35px;"></i></a>-->
            <!--    <a href=""><i class="fa fa-google" aria-hidden="true" style="font-size: 35px;"></i></a>-->
            <!--</div>-->
        </div>
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
</body>

</html>