
<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");

$firstname=mysqli_real_escape_string($db,$_POST['firstname']);
$lastname=mysqli_real_escape_string($db,$_POST['lastname']);
$address1=mysqli_real_escape_string($db,$_POST['address1']);
$city=mysqli_real_escape_string($db,$_POST['city']);
$pincode=mysqli_real_escape_string($db,$_POST['pincode']);
$country=mysqli_real_escape_string($db,$_POST['country']);
$phone_number=mysqli_real_escape_string($db,$_POST['phone_number']);
$email=mysqli_real_escape_string($db,$_POST['email']);



$query="INSERT into mytable (firstname,lastname,address1,city,pincode,country,phonenumber,email) VALUES('$firstname','$lastname','$address1','$city','$pincode','$country','$phone_number','$email')";
mysqli_query($db,$query);
?>


<!DOCTYPE html>
<html>

  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Experience</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <form class="signup-form" action="education.php" method="post" >

      <!-- form header -->
      <div class="form-header">
        <h1>Experience</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left">
          <input type="hidden" id="custId" name="hiddenexp" value='<?php echo $phone_number;?>'><br>
  
           <label for="employer" class="label-title">Employer</label>
            <input type="text" id="employer" class="form-input" name="employer"  required="required" />
          </div>
          <div class="form-group left">
            <label for="job_title" class="label-title">Job Title</label>
            <input type="text" id="job_title" class="form-input" name="job_title" placeholder="enter your last name" required="required" />
          </div>
          <div class="form-group right">
            <label for="job_city" class="label-title">City</label>
            <input type="text" id="job_city" class="form-input" name="job_city" placeholder="Address" required/>
          </div>
        </div>
        <div class="form-group right">
          <label for="job_state" class="label-title">State</label>
          <input type="text" id="job_state" class="form-input" name="job_state" placeholder="City" required/>
        </div>
      
      <div class="form-group right">
        <label for="start_date" class="label-title">Start date</label>
        <input type="month" id="start_date" class="form-input" name="start_date"  required/>
      </div>
      <div class="form-group right">
        <label for="end_date" class="label-title">End date</label>
        <input type="month" id="end_date" class="form-input" name="end_date"  required/>
      </div>
      <div class="form-group right">
        <label for="job_Description" class="label-title">Job Description</label>
        <textarea rows="40" cols="50" id="job_Description" class="form-input" name="job_Description" placeholder="Comment" ></textarea>
      </div>
   
      
      

       
        

        
           
          </div>
       
      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn" >Next</button>
        
      </div>

    </form>

   
    

  </body>
</html>
