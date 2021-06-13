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
        
        <?php
            session_start();
            echo '<form method="post">'; 
            if(isset($_SESSION['id']))
            {
                $id=$_SESSION['id'];
                $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=olx','root','');
                $sql= "SELECT pid FROM cart WHERE id='$id'";
                $query=$dbhandler->query($sql);  
                while($r=$query->fetch())  
                {
                    $pid=$r['pid'];
                     $sql1= "SELECT * FROM product  where pid ='$pid'";
                      $query1=$dbhandler->query($sql1);  
                       while($r1=$query1->fetch())  
                        {  
                                echo'
                                   
                                    <table border="1">
                                    
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><img src="data:image/jpeg;base64,'.base64_encode($r1['image'] ).'" name=$value height="200" title="hi" width="250"  class="img-thumnail"  /></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Owner_name</td>
                                            <td>'.$r1["owner_name"].'</td>
                                        </tr>
                                        <tr>
                                            <td>description</td>
                                            <td>'.$r1["description"].'</td>
                                        </tr>
                                        <tr>
                                            <td>price</td>
                                            <td>'.$r1["price"].'</td>
                                        </tr>
                                        <tr>
                                            <td>category</td>
                                            <td>'.$r1["category"].'</td>
                                        </tr>
                                        <tr>
                                            <td>address</td>
                                            <td>'.$r1["address"].'</td>
                                        </tr>
                                        <tr>
                                            <td>city</td>
                                            <td>'.$r1["city"].'</td>
                                        </tr>
                                         <tr>
                                            
                                            <td colspan="2"><input type="submit" name='.$pid.' value="remove" id='.$pid.'></td>
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>';
                                
                               
                            
                        }
                    
                }
                
            }
            
            
        ?>
    </body>
</html>
