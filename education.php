<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");

$employer=mysqli_real_escape_string($db,$_POST['employer']);
$job_title=mysqli_real_escape_string($db,$_POST['job_title']);
$job_city=mysqli_real_escape_string($db,$_POST['job_city']);
$job_state=mysqli_real_escape_string($db,$_POST['job_state']);
$start_date1=mysqli_real_escape_string($db,$_POST['start_date']);
$end_date=mysqli_real_escape_string($db,$_POST['end_date']);
$job_Description=mysqli_real_escape_string($db,$_POST['job_Description']);
$hiddenexp=mysqli_real_escape_string($db,$_POST['hiddenexp']);
$query="update mytable set `employer`='$employer' ,`job_title` = '$job_title' ,`job_city` = '$job_city' ,`job_state` = '$job_state' ,`start_date` = '$start_date1',`end_date` = '$end_date',`job_Description` = '$job_Description' where phone_number=$hiddenexp";
mysqli_query($db,$query) or die("Failed to execute the Query :( . Try Again !");









?>
<!DOCTYPE html>
<html>
  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="css/register.css?<?php echo time(); ?>">
  </head>
  <body>
    <form class="signup-form"  method="POST" action="Skill.php" >

      <!-- form header -->
      <div class="form-header">
        <h1>Education</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="form-group">
            <fieldset>
                <legend>SSLC Details</legend>
          <div class="form-group left">
              
          <input type="hidden" name="hiddenedu" value="<?php echo $hiddenexp;?> " />
          
         
            <label for="sslc_school_name" class="label-title">School Name <span id="red">*</span></label>
            <input type="text" id="sslc_school_name" class="form-input" name="sslc_school_name" placeholder="Enter your School name" required="required" />
          </div>
          <div class="form-group left">
            <label for="sslc_city" class="label-title">City <span id="red">*</span></label>
            <input type="text" id="sslc_city" class="form-input" name="sslc_city" placeholder="Enter your School city." required="required" />
          </div>
          <div class="form-group right">
            <label for="sslc_state" class="label-title">State <span id="red">*</span></label>
            <input type="text" id="sslc_state" class="form-input" name="sslc_state" placeholder="Enter your School state. " required/>
          </div>
          <div class="form-group right">
            <label for="sslc_grade" class="label-title">Grade in % <span id="red">*</span></label>
            <input type="number"
            min="0.00" max="100.00"       
            step=0.01 id="sslc_grade" class="form-input" name="sslc_grade" placeholder="Enter grade in %." required/>
          </div>
        </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <legend>PUC Details</legend>
          <div class="form-group left">
              
             
            <label for="puc_college_name" class="label-title">College Name <span id="red">*</span></label>
            <input type="text" id="puc_college_name" class="form-input" name="puc_college_name" placeholder="Enter your College name" required="required" />
          </div>
          <div class="form-group left">
            <label for="puc_city" class="label-title">City <span id="red">*</span></label>
            <input type="text" id="puc_city" class="form-input" name="puc_city" placeholder="Enter your College city" required="required" />
          </div>
          <div class="form-group right">
            <label for="puc_state" class="label-title">State <span id="red">*</span></label>
            <input type="text" id="puc_state" class="form-input" name="puc_state" placeholder="Enter your College state" required/>
          </div>
          <div class="form-group right">
            <label for="puc_grade" class="label-title">Grade in % <span id="red">*</span></label>
            <input type="number"
             min="0.00" max="100.00"       
            step=0.01 id="puc_grade" class="form-input" name="puc_grade" 
                   placeholder="Enter Grade in %" required/>
          </div>
        </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <legend>Engineering Details</legend>
          <div class="form-group left">
              
             
            <label for="engg_college_name" class="label-title">College Name <span id="red">*</span></label>
            <input type="text" id="engg_college_name" class="form-input" name="engg_college_name" placeholder="Enter your College"  value="NMAMIT" required="required" />
          </div>
          <div class="form-group left">
            <label for="engg_city" class="label-title">City <span id="red">*</span></label>
            <input type="text" id="engg_city" class="form-input" placeholder="Enter your College City" name="engg_city" value="Karkala" required="required" />
          </div>
          <div class="form-group right">
            <label for="engg_state" class="label-title">State <span id="red">*</span></label>
            <input type="text" id="engg_state" class="form-input" name="engg_state" placeholder="Enter your College State" value="Karnataka" required/>
          </div>
          <div class="form-group right">
            <label for="engg_grade" class="label-title">CGPA <span id="red">*</span></label>
            <input type="number" step=0.01
             min="0.00" max="10.00"
            id="engg_grade" class="form-input" name="engg_grade" placeholder="Enter your CGPA" required/>
          </div>
        </fieldset>
        </div>
        
      
      
   
      
      

       
        

        
           
          </div>
       
      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn" >Next</button>
        
      </div>

    </form>

   
    

  </body>
</html>