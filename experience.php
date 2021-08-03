<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");

$firstname=mysqli_real_escape_string($db,$_POST['firstname']);
$lastname=mysqli_real_escape_string($db,$_POST['lastname']);
$dob1=mysqli_real_escape_string($db,$_POST['dob']);
$city=mysqli_real_escape_string($db,$_POST['city']);
$pincode=mysqli_real_escape_string($db,$_POST['pincode']);
$country=mysqli_real_escape_string($db,$_POST['country']);
$phone_number=mysqli_real_escape_string($db,$_POST['phone_number']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$github=mysqli_real_escape_string($db,$_POST['github']);
$linkedin=mysqli_real_escape_string($db,$_POST['linkedin']);



$query="insert into mytable (firstname,lastname,dob,city,pincode,country,phone_number,email,github,linkedin) VALUES('$firstname','$lastname','$dob1','$city','$pincode','$country','$phone_number','$email','$github','$linkedin')";
mysqli_query($db,$query) or die("Failed to execute the Query :( . Try Again !");
$db->close();

//
//
?>


<!DOCTYPE html>
<html>

  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Experience</title>
    <link rel="stylesheet" href="css/register.css?<?php echo time(); ?>">
      
      

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
  
           <label for="employer" class="label-title">Employer <span id="red">*</span></label>
            <input type="text" id="employer" class="form-input" name="employer" placeholder="Enter your company name." required="required" />
          </div>
          <div class="form-group left">
            <label for="job_title" class="label-title">Job Title <span id="red">*</span></label>
            <input type="text" id="job_title" class="form-input" name="job_title" placeholder="Enter your job title." required="required" />
          </div>
          <div class="form-group right">
            <label for="job_city" class="label-title">City <span id="red">*</span></label>
            <input type="text" id="job_city" class="form-input" name="job_city" placeholder="Enter your Job city." required/>
          </div>
        </div>
        <div class="form-group right">
          <label for="job_state" class="label-title">State <span id="red">*</span></label>
          <input type="text" id="job_state" class="form-input" name="job_state" placeholder="Enter your Job state." required/>
        </div>
      
      <div class="form-group right">
        <label for="start_date" class="label-title">Start date <span id="red">*</span></label>
        <input type="month" id="start_date" class="form-input" name="start_date" placeholder="Enter start date" required/>
      </div>
      <div class="form-group right">
        <label for="end_date" class="label-title">End date <span id="red">*</span></label>
        <input type="month" id="end_date" class="form-input" name="end_date" placeholder="Enter End date" required/>
      </div>
      <div class="form-group right">
        <label for="job_Description" class="label-title">Job Description <span id="red">*</span></label>
        <textarea style="height:400px" id="job_Description" class="form-input" name="job_Description" placeholder="Write something about your job experience." ></textarea>
      </div>
   
      
      

       
        

        
           
          </div>
       
      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn" >Next</button>
        
      </div>

    </form>

   
    

  </body>
</html>