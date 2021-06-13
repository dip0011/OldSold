<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "dnkjsnfjnds";
                echo $_GET['city'];
            session_start();
        
            if(isset($_GET['city']))
            {
                if($_GET['city']==="0")
                {
                    $_SESSION['city']="ALL";
                }
                else if($_GET['city']==="1")
                {
                    $_SESSION['city']="Bhavnagar";
                }
                else if($_GET['city']==="2")
                {
                    $_SESSION['city']="Surat";
                }
                else if($_GET['city']==="3")
                {
                    $_SESSION['city']="Rajkot";
                }
                else if($_GET['city']==="4")
                {
                    $_SESSION['city']="Junagadh";
                }
                else if($_GET['city']==="5")
                {
                    $_SESSION['city']="Anand";
                }
                else if($_GET['city']==="6")
                {
                    $_SESSION['city']="Ahemdabad";
                }
                else if($_GET['city']==="7")
                {
                    $_SESSION['city']="Nadiad";
                }
                
            }
            if(isset($_GET['type']))
            {
                if($_GET['type']==="0")
                {
                    
                    $_SESSION['type']="ALL";
                }
                else if($_GET['type']==="1")
                {
                    
                    $_SESSION['type']="Laptops";
                }
                else if($_GET['type']==="2")
                {
                    
                    $_SESSION['type']="Monitors";
                }
                else if($_GET['type']==="3")
                {
                    
                    $_SESSION['type']="Printers";
                }
                else if($_GET['type']==="4")
                {
                    
                    $_SESSION['type']="cars";
                }
                else if($_GET['type']==="5")
                {
                    
                    $_SESSION['type']="book";
                }
                else if($_GET['type']==="6")
                {
                    
                    $_SESSION['type']="clothes";
                }
                
            }
          echo $_SESSION['city'];
            header( "Location: http://localhost/olx/serch.php" );

        ?>
    </body>
</html>
