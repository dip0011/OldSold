<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search</title>
    </head>
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #116466;
}
form {
  
  border-radius: 25px;
  background: #D1E8E2;
  position: relative;
  margin: 0 auto;
  padding: 20px 20px 20px;
  width: 500px;
}
table { width: 640px; } /* Make table wider */  
td, th { border: 1px solid #CCC; } /* Add borders to cells */
</style>
    <body>
        <form method="get" action="SimulatedOutput.php">
        <?php
            session_start();
             $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=olx','root','');
             if(isset($_SESSION['city'])   &&  isset($_SESSION['type']))
             {
                                    

                    if($_SESSION['city'] === "ALL" && !($_SESSION['type']==="ALL"))
                    {
                        //echo " hi 1";
                        $type=$_SESSION['type'];
                        $sql= "SELECT * FROM product  where category ='$type'";
                        $query=$dbhandler->query($sql);  
                        while($r=$query->fetch())  
                            {  
                                $value=$r['pid'];
                                 echo '  
                                      <tr>  
                                           <td>  

                                              <a href="SimulatedOutput.php?value='.$r['pid'].'"><img src="data:image/jpeg;base64,'.base64_encode($r['image'] ).'" name=$value height="200" title="hi" width="250"  class="img-thumnail"  /> </a> 
                                                    
                                                    <script>
                                                    function imageTitle(title){
                                                     alert();
                                                     console.log(title);
                                                    }
                                                    </script>
                                           </td>  
                                      </tr>  
                                      </tr>
                                            <td>
                                                '.$r['price'].'
                                            </td>
                                      </tr>
                                 ';  
                            }  

                    }
                    else if($_SESSION['type'] === "ALL" &&!($_SESSION['city']==="ALL"))
                    {
                       //     echo "hi";
                        $city=$_SESSION['city'];

                        $sql= "SELECT * FROM product  where city ='$city'";
                        $query=$dbhandler->query($sql);  
                        while($r=$query->fetch())  
                            {  
                                $value=$r['pid'];
                                 echo '  
                                      <tr>  
                                           <td>  

                                             <a href="SimulatedOutput.php?value='.$r['pid'].'">    <img src="data:image/jpeg;base64,'.base64_encode($r['image'] ).'"  height="200" title="hi" width="250" value="1" class="img-thumnail"  /></a> 
                                                    <script>
                                                    function imageTitle(title){
                                                     alert(title);
                                                     console.log(title);
                                                    }
                                                    </script>
                                           </td>  
                                      </tr>  
                                      </tr>
                                            <td>
                                                '.$r['price'].'
                                            </td>
                                      </tr>
                                 ';  
                            }  
                    }
                    else if(!($_SESSION['city'] === "ALL" || $_SESSION['type'] === "ALL"))
                    {
                      //  echo " hi 2";
                        $type=$_SESSION['type'];
                        $city=$_SESSION['city'];
                        $sql= "SELECT * FROM product where city='$city' AND category='$type' ";
                        $query=$dbhandler->query($sql);  
                        while($r=$query->fetch())  
                            {  
                                $value=$r['pid'];
                                 echo '  
                                      <tr>  
                                           <td>  

                                            <a href="SimulatedOutput.php?value='.$r['pid'].'">     <img src="data:image/jpeg;base64,'.base64_encode($r['image'] ).'"  height="200" width="250" title="hi" value="1" class="img-thumnail"  /></a>
                                                    <script>
                                                    function imageTitle(title){
                                                     alert(title);
                                                     console.log(title);
                                                    }
                                                    </script>
                                           </td>  
                                      </tr>  
                                      </tr>
                                            <td>
                                                '.$r['price'].'
                                            </td>
                                      </tr>
                                 ';  
                            }  

                    }
                    else 
                    {
                        //echo "fgmdfdfg";
                          header( "Location:http://localhost/olx/home.php" );

                    }
             }
           
             
             

            

    ?>
        </form>
       
    </body>
</html>
