<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #116466;
}

* {
  box-sizing: border-box;
  
}
form {
  
  border-radius: 25px;
  background: #D1E8E2;
  position: relative;
  margin: 0 auto;
  padding: 20px 20px 20px;
  width: 500px;
}
/* Add padding to containers */
.container {
  border-radius: 10px;
  padding: 16px;
}

/* Full-width input fields */


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  box-sizing: border-box;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #2C3531;
  margin-bottom: 25px;
}

/* Set a style for the submit button */

button {
  background-color: #D9B08C;
  color: grey;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
    background-color: #FFCB9A;
    color:black;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.login {
  background-color: #f1f1f1;
  text-align: center;
}
.text-line {
    background-color: transparent;
    color: black;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #D9B08C 2px;
    padding: 3px 10px;
}
</style>
</head>
<body>
    <form method="POST">
        <?php
                session_start()
            ?>
    <div class="container">
    <h2 align="center" ><font color="#116466"> OLD-SOLD</h2>
    <p align="center">Please Fill in this Form to create an account.</p>
    <hr>

    <label for="ownername"><b>Owner Name</b></label>
    <input type="text" class="text-line" placeholder="Enter Your Name" name="owner_name" required>

    <label for="Description"><b>Description</b></label>
    <textarea class="text-line" placeholder="Enter About Your Product" name="description" rows="4" cols="20"></textarea><br><br>

    <label for="price"><b>Price</b></label>
    <input type="text" class="text-line" placeholder="Enter Ampunt" name="price" required>
    
    <label for="address"><b>Address</b></label>
    <input type="text" class="text-line" placeholder="Enter Your Address" name="address" required>
    
    <label for="city"><b>City</b></label>
    <input type="text" class="text-line" placeholder="Enter Your City" name="city" required>
    
    <label for="category"><b>Category</b></label>
    <input type="text" class="text-line" placeholder="Enter Your Product's Category" name="category" required><br>
    
    <label for="image"><b>Upload Image</b></label>
    <input type="file" name="image"  value="image" required><br>

    <?php
            if(isset($_POST['submit']))
            {
                if(isset($_SESSION['id']))
                {
                     try{
                        $owner_name=$_POST['owner_name'];
                        $description=$_POST['description'];
                        $prize=$_POST['price'];
                        $category=$_POST['category'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $cid=$_SESSION['id'];

                        $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 

                         $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=OLx','root','');
                       //  echo "Connection is established...<br/>";
                         $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                         $sql="INSERT INTO `product`( owner_name, description, price, category, address, city, image,cid) VALUES ('$owner_name','$description','$prize','$category','$address','$city','$image','$cid')";
                         $query=$dbhandler->query($sql);

                         echo "data inserted";
                     }
                     catch(PDOException $e)
                     {
                             echo $e->getMessage();
                             die();
                     }
                }
                else
                {
                     echo '<script>
                                  {
                                      alert("you need to login first");
                                  }
                                  </script>';
                }
                        
            
            }
        ?>
    <button type="submit" class="registerbtn" name="submit" value="submit">Sell</button>
    <h4 align="center"><a href="home.php"><font color="dodgerblue">Home</font></a>&nbsp;
        <a href="login.php"><font color="#D9B08C">Login</font></a></h4>
</form>

</body>
</html>

        
    </body>
</html>

