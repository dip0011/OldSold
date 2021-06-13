<html>
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
     $pid= $_GET['value'];
     $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=olx','root','');
      $sql= "SELECT * FROM product  where pid ='$pid'";
                        $query=$dbhandler->query($sql);  
                        while($r=$query->fetch())  
                        {  
                                echo'
                                   <form method="post"> 
                                    <table border="1">
                                    
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><img src="data:image/jpeg;base64,'.base64_encode($r['image'] ).'" name=$value height="200" title="hi" width="250"  class="img-thumnail"  /></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Owner_name</td>
                                            <td>'.$r["owner_name"].'</td>
                                        </tr>
                                        <tr>
                                            <td>description</td>
                                            <td>'.$r["description"].'</td>
                                        </tr>
                                        <tr>
                                            <td>price</td>
                                            <td>'.$r["price"].'</td>
                                        </tr>
                                        <tr>
                                            <td>category</td>
                                            <td>'.$r["category"].'</td>
                                        </tr>
                                        <tr>
                                            <td>address</td>
                                            <td>'.$r["address"].'</td>
                                        </tr>
                                        <tr>
                                            <td>city</td>
                                            <td>'.$r["city"].'</td>
                                        </tr>
                                        <tr>
                                           <td colspan="2"><input type="submit" name="addtocart" value="addtocart" id="addtocart"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </form>';
                            
                        }
                        if(isset($_POST['addtocart']))
                        {
                            $pid=$_GET['value'];
                         
                            if(isset($_SESSION['id']))
                            {
                                $id=$_SESSION['id'];
                               // echo $id;
                                 $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=olx','root','');
                                 $sql= "INSERT INTO cart(pid, id) VALUES ('$pid','$id')";
                                 $query=$dbhandler->query($sql);  
                                 
                                  echo '<script>
                                  {
                                      alert("product place success fully");
                                  }
                                  </script>';
                            }
                            else
                            {
                                echo '<script>
                                {
                                    alert("you need to login");
                                }
                                </script>';
                                
                            }
                        }

    
?>
</body>
</html>
