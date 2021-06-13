<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MyProduct</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
table { width: 500px; } /* Make table wider */  
td, th { border: 1px solid #CCC; } /* Add borders to cells */

</style>
    <body>
        <form method="post">
            <?php
                session_start();
                if(isset($_SESSION['id']))
                {
                    $cid=$_SESSION['id'];
                    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=olx','root','');
                    $sql= "SELECT * FROM product  where cid ='$cid'";
                    $query=$dbhandler->query($sql);
                    while($r=$query->fetch())  
                    {
                        echo '  
                             <table>
                                      <tr>  
                                           <td>  

                                             <img src="data:image/jpeg;base64,'.base64_encode($r['image'] ).'" name=$value height="200" title="hi" width="250"  class="img-thumnail"  /> 
                                                    
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
                                       </tr>
                                            <td>
                                                '.$r['category'].'
                                            </td>
                                      </tr>
                                      <td><input type="submit" name='.$pid.' value="remove" id='.$pid.'></td>
                                </table>
                                 ';  
                        
                    }
                }
                else
                {
                    echo '<script>
                                  {
                                      alert("you need to login");
                                  }
                                  </script>';
                }
            ?>
            
            </form>
    </body>
</html>

<?php



