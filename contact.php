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
            margin-left: 0px;
    /* padding: 0px 0px; */
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
            width: 50%;
        }

        @media screen and (max-width: 600px) {
            .logo {
                    width: 60px;
                position: relative;
                margin-left:16px;
                left: 0px;
            }
        }

        @media screen and (max-width: 600px) {
            .sidebar {
                width: 100%;
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
          background-color: hotpink;
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
        .main-img{
        width: 100%;
        margin-bottom: -58px;
   
       }
       @media screen and (max-width: 600px) {
           .main-img{

           }
           
       }
       .row1{
           column-count: 2;
       }
       .main-body{
        text-align: center;
    position: relative;
    top: -350px;
       }
       @media screen and (max-width: 600px){
           .main-body{
            text-align: center;
    position: relative;
            top: -100px;
           }
       }
        .btn{
            width: 55%;
    padding: 15px;
    border-radius: 10px;
    border: none;
    background: deeppink;
        }
        @media screen and (max-width: 600px){
            .btn{

            }
        }
 a{
    text-decoration: none;
    font-size: 20px;
    font-family: fantasy;
    color: #fff;
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
    color: #000;
    font-size: 16px;
    font-weight: 700;
    height: 250px;
    background: #fff;
        }

        .footer-nav {
            text-align: center;
            height: 74px;
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
           font-size: 12px;
    font-weight: bold;
    margin-left: 8px;
        }

        .social-link {
            margin-left: 80%;
            margin-top: -40px;
            height: 54px;
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
    background: #000;
            }

            .column {
                width: 113px;
    color: #000;
    height: 250px;
    margin-left: -29px;
    margin-right: 64px;
    background: #fff;
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
div.cnt{
    border:black solid;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    border-radius: 16px;
    margin-bottom: 16px;
    resize: vertical;
}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #fff;
    padding: 10px;
    margin-top: 70px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.sub{
    width: 132px;
    padding: 10px;
    border-radius: 16px;
    color: #fff;
    background-color: gold;
}
.column label{
    margin-left:10px;
}
@media screen and (max-width: 600px) {
    .main-images{
        display:none;
    }
}
@media screen and (max-width: 600px) {
    .column h4{
        
        display:none;
    }
}
@media screen and (max-width: 600px) {
    input[type=text], select, textarea {
   
        width: 223px;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    border-radius: 16px;
    margin-bottom: 16px;
    resize: vertical;
}
}
@media screen and (max-width: 600px) {

.sub{
    width: 132px;
    padding: 10px;
    border-radius: 16px;
    color: #fff;
    background-color: gold; 
}
}

        /* end footer */
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
        <!--<h2>Golden Qurter</h2>-->
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
    <div class="main">
        <img class="main-img" src="images/2.jpg" alt="">
       
        <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <!-- <p>Swing by for a cup of coffee, or leave us a message:</p> -->
  </div>
  <div class="row">
    <div class="column">
    <h4>Contact WIth US</h4>
    <img class="main-images" src="images/1.jpg" alt="" width="100%">
      
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
       
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <button class ="sub" type="submit" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<!-- 
    <div class="footer">
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
</body>

</html>