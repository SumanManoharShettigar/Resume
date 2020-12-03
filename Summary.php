<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");

$summary=mysqli_real_escape_string($db,$_POST['summary']);
$hiddensum=mysqli_real_escape_string($db,$_POST['hiddensum']);
$query="UPDATE mytable  SET `summary` = '$summary'  WHERE phonenumber =  $hiddensum;";  
mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset="utf-8">
    <title>Android Webinar Registration</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <form class="signup-form" action="final.php" method="POST">

      <!-- form header -->
      <div class="form-header">
        <h1>check</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left">
          
          
            <label for="summary" class="label-title">check</label>
            <input type="text" id="summary" class="form-input" name="summary"  required="required" />
           
             </div>
          </div>
       
      <!-- form-footer -->
      <div class="form-footer">
     
        <button type="submit" class="btn" >Next</button>
        
      </div>

    </form>

   
    

  </body>
</html>
