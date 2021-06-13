<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <?php session_start()?>
    <title>SPOOT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial;
                padding: 10px;
                background: #D1E8E2;
            }

            /* Header/Blog Title */
            .header {
                padding: 30px;
                text-align: center;
                background: #116466;
                color:#D1E8E2;
            }

            .header h1 {
                font-size: 50px;
            }


            /* Create two unequal columns that floats next to each other */
            /* Left column */
            .leftcolumn {
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: left;
                width: 25%;
                background-color: #D1E8E2;
                padding-left: 20px;
            }

            /* Fake image */
            .fakeimg {
                background-color: #D9B08C;
                width: 100%;
                padding: 20px;
            }

            /* Add a card effect for articles */
            .card {
                background-color: #116466;
                padding: 20px;
                margin-top: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: #D9B08C;
                margin-top: 20px;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
                .leftcolumn, .rightcolumn {
                    width: 100%;
                    padding: 0;
                }
            }

            /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
            @media screen and (max-width: 400px) {
                .topnav a {
                    float: none;
                    width: 100%;
                }
            }
            ul{
                padding: 0;
                list-style: none;
                background: #D9B08C;
            }
            ul li{
                display: inline-block;
                position: relative;
                line-height: 21px;
                text-align: center;
            }
            ul li a{
                display: block;
                padding: 8px 25px;
                color: grey;
                text-decoration: none;
            }
            ul li a:hover{
                color: black;
                background: #FFCB9A;
            }
            ul li ul.dropdown{
                min-width: 100%; /* Set width of the dropdown */
                background: #D9B08C;
                display: none;
                position: absolute;
                z-index: 999;
                left: 0;
            }
            ul li:hover ul.dropdown{
                display: block; /* Display the dropdown */
            }
            ul li ul.dropdown li{
                display: block;
            }
            .dropbtn {
                background-color: #D9B08C;
                color: grey;
                padding: 10px 27px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
                background-color: #FFCB9A;
                color: black;
            }

            #myInput {
                box-sizing: border-box;
                background-image: url('searchicon.png');
                background-position: 14px 12px;
                background-repeat: no-repeat;
                font-size: 16px;
                padding: 14px 20px 12px 45px;
                border: none;
                border-bottom: 1px solid #ddd;
            }

            #myInput:focus {outline: 3px solid #ddd;}

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #D9B08C;
                min-width: 230px;
                overflow: auto;
                border: 3px solid #D1E8E2;
                z-index: 1;
            }

            .dropdown-content a {
                color: gray;
                padding: 10px 10px;
                text-decoration: none;
                display: block;
            }

            .dropdown a:hover {
                background-color: #FFCB9A;
                color: black;
            }

            .show {display: block;}
            .btn {
                background-color: #D9B08C;
                border: none;
                color: grey;
                padding: 12px 16px;
                font-size: 16px;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #FFCB9A;
                color:black;
            }
        </style>
    
</head>
    <body>
      <?php
           //session_start();
            $_SESSION['city']="ALL";
            $_SESSION['type']="ALL";
        ?> 
     <from method="get">
        <div class="header">
        <h1>OLD-SOLD</h1>
        <p>Deal With Full On Heal</p>
        </div>

        <ul>
            <li><button class="btn"><i class="fa fa-home"></i><a href="#">HOME</a></li>
            
            
            <li>
                <a href="#">Products &#9662;</a>
                <ul class="dropdown">
                    <li><a href="http://localhost/olx/setseesion.php?type=1">Laptops</a></li>
                    <li><a href="http://localhost/olx/setseesion.php?type=2">Monitors</a></li>
                    <li><a href="http://localhost/olx/setseesion.php?type=3">Printers</a></li>
                    <li><a href="http://localhost/olx/setseesion.php?type=4">cars</a></li>
                    <li><a href="http://localhost/olx/setseesion.php?type=5">book</a></li>
                    <li><a href="http://localhost/olx/setseesion.php?type=0">Any</a></li>
                </ul>
            </li>
            <li>
                <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">City</button>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <a href="http://localhost/olx/setseesion.php?city=1">Bhavnagar</a>
                    <a href="http://localhost/olx/setseesion.php?city=2">Surat</a>
                    <a href="http://localhost/olx/setseesion.php?city=3">Rajkot</a>
                    <a href="http://localhost/olx/setseesion.php?city=4">Junagadh</a>
                    <a href="http://localhost/olx/setseesion.php?city=5">Anand</a>
                    <a href="http://localhost/olx/setseesion.php?city=6">Ahemdabad</a>
                    <a href="http://localhost/olx/setseesion.php?city=7">Nadiad</a>
                    <a href="http://localhost/olx/setseesion.php?city=0">Any</a>
                    </div>
                </div>
            </li>
            <?php 
                try
                {
                
                 //   session_start();
                    if(isset($_SESSION['id']))
                        echo "<li><a href='http://localhost/olx/logout.php'>LOGOUT</a></li>";
                    if(!(isset($_SESSION['id'])))
                    {
                        echo "<li><a href='http://localhost/olx/register.php'>Register</a></li>";
                        echo "<li><a href='http://localhost/olx/login.php'>LOGIN</a></li>";
                    }
                }
                catch(Exception $e)
                {
                    
                    
                }
            ?>
            <li><a href='http://localhost/olx/addproduct.php'>Sell</a></li>
        </ul>
        <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                }
                else {
                    a[i].style.display = "none";
                }
            }
        }
        </script>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <h2>TITLE HEADING</h2>
                      <h5>Title description, Dec 7, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia  </p>
                </div>
                <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia </p>
                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h2>SELLING PRODUCTS</h2>
                    <div class="fakeimg" style="height:100px;">Image</div>
                    <p>.........</p>
                </div>
                <div class="card">
                <h3>MOST REACHED</h3>
                <div class="fakeimg"><p>Image</p></div>
                <div class="fakeimg"><p>Image</p></div>
                <div class="fakeimg"><p>Image</p></div>
                </div>
                <div class="card">
                <h3>Follow Us</h3>
                <p>OLD-SOLD/INSTA</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </div>
     </from>
</body>
</html>

    
