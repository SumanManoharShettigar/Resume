<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");

$skill1=mysqli_real_escape_string($db,$_POST['skill1']);

$skill2=NULL;
$skill3=NULL;
$skill4=NULL;
$skill5=NULL;

if( isset($_POST['skill2'])){
    
    $skill2=mysqli_real_escape_string($db,$_POST['skill2']);
}
if( isset($_POST['skill3'])){
    
    $skill3=mysqli_real_escape_string($db,$_POST['skill3']);
}
if( isset($_POST['skill4'])){
    
    $skill4=mysqli_real_escape_string($db,$_POST['skill4']);
}
if( isset($_POST['skill5'])){
    
    $skill5=mysqli_real_escape_string($db,$_POST['skill5']);
}

$hobby=mysqli_real_escape_string($db,$_POST['hobby']);

$hiddenskill=mysqli_real_escape_string($db,$_POST['hidd']);

 

$query="UPDATE mytable  SET `skill1` = '$skill1',`skill2` = '$skill2',`skill3` = '$skill3',`skill4` = '$skill4',`skill5` = '$skill5',`hobby` = '$hobby'   WHERE phone_number =  $hiddenskill;"or die("Failed to execute the Query :( . Try Again !");  

mysqli_query($db,$query);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset="utf-8">
    <title>Objective And Project</title>
    <link rel="stylesheet" href="css/register.css?<?php echo time(); ?>">
  </head>
  <body>
    <form class="signup-form" action="final.php" method="POST">

      <!-- form header -->
      <div class="form-header">
        <h1>Objective And Project</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left">
          
          <input type="hidden" id="skill1" class="form-input" name="hiddskill"  value='<?php echo $hiddenskill;?> '  />
          <label for="project" class="label-title">Project</label>
          <br>
          <span id="red" >NOTE: Please Enter Top 4 Projects & Seperate Your Projects Using COMMA ' , '.</span>

            <input type="text" id="project" class="form-input" name="projects" placeholder="Ex: online shopping website ,android app" required="required" /><br><br>
            <label for="summary" class="label-title">Objective</label>
              
            <textarea type="text" id="summary" class="form-input" name="summary" placeholder="Write something about Yourself" required="required" ></textarea>
           
            
             </div>
          </div>
          
       
      <!-- form-footer -->
      <div class="form-footer">
     
        <button type="submit" class="btn" >Next</button>
        
      </div>
        
        </div>
        

    </form>

   
    

  </body>
</html>