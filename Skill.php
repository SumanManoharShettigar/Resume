<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");

$sslc_school_name=mysqli_real_escape_string($db,$_POST['sslc_school_name']);
$sslc_city=mysqli_real_escape_string($db,$_POST['sslc_city']);
$sslc_state=mysqli_real_escape_string($db,$_POST['sslc_state']);
$sslc_grade=mysqli_real_escape_string($db,$_POST['sslc_grade']);
$puc_college_name=mysqli_real_escape_string($db,$_POST['puc_college_name']);
$puc_city=mysqli_real_escape_string($db,$_POST['puc_city']);
$puc_state=mysqli_real_escape_string($db,$_POST['puc_state']);
$puc_grade=mysqli_real_escape_string($db,$_POST['puc_grade']);
$engg_college_name=mysqli_real_escape_string($db,$_POST['engg_college_name']);
$engg_city=mysqli_real_escape_string($db,$_POST['engg_city']);
$engg_state=mysqli_real_escape_string($db,$_POST['engg_state']);
$engg_grade=mysqli_real_escape_string($db,$_POST['engg_grade']);
$hiddenedu=mysqli_real_escape_string($db,$_POST['hiddenedu']);

$query="UPDATE mytable  SET 
`sslc_school_name` = '$sslc_school_name' , `sslc_city` = '$sslc_city' , `sslc_state`='$sslc_state' , `sslc_grade`='$sslc_grade' ,`puc_college_name` = '$puc_college_name' , `puc_city` = '$puc_city' , `puc_state`='$puc_state' , `puc_grade`='$puc_grade' , `engg_college_name` = '$engg_college_name' , `engg_city` = '$engg_city' , `engg_state`='$engg_state' , `engg_grade`='$engg_grade' WHERE phone_number =  $hiddenedu;";

  
mysqli_query($db,$query);


?>
<!DOCTYPE html>
<html>
  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Skill And Hobby</title>
    <link rel="stylesheet" href="css/register.css?<?php echo time(); ?>">
      
      
      
  </head>
  <body>
    <form class="signup-form" action="summary.php"  method="POST">

      <!-- form header -->
      <div class="form-header">
        <h1>Skill And Hobby</h1>
        
        
      </div>

      <!-- form body -->
      <div class="form-body">
        
        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left" id="demo">
          
          <input type="hidden"  class="form-input" name="hidd" value='<?php echo $hiddenedu;?> '  />
              <label for="hobby" class="label-title">Hobby</label>
              <br>
              <span id="red">NOTE: Please Enter Any Four Hobbies & Seperate Your Hobbies Using COMMA ' , '.</span>
              <br>
            <input type="text" id="hobby" class="form-input" name="hobby" placeholder="Ex:reading books,playing cricket " required="required" />
              
              <br><br>
              
            <label for="skill1" class="label-title">Skill 1</label>
            <input type="text" id="skill1" class="form-input" name="skill1"  placeholder="Enter your skill" required="required" />
            
           
              <br><br>
              

          </div>
            
            <button type="button" class="dynamic" id="delete">Delete a Skill</button>
            
            <button type="button" class="dynamic" id="add">Add a Skill</button>
          
         
   
      
      

       
        

        
           
          </div>
          </div>
       
      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn" >Next</button>
        
      
        </div>

    </form>
      
      <script>
          
          
       
          var num = 2;
           
           document.getElementById('add').onclick = 
          function(){
               
               
               
               if(num>5){
                   alert("You have reached maximum skill limit.")
               }
               
            
            
              else{
              var code = '<div class="form-group left" id="demo"><label for="skill'+num+'" class="label-title">Skill '+num+'</label><input type="text" id="skill'+num+ '" class="form-input" name="skill'+num+'" placeholder="Enter your skill"  required/></div>';
              
              document.getElementById('demo').insertAdjacentHTML('beforeend',code);
               num++;
           }
               
           
           
           document.getElementById('delete').onclick = function(){
               
               
               if(num<=2){
               alert("You have reached minimum skill limit.")
           }
               
              else{
               var delete_skill = document.getElementById('demo').lastChild;
               num--;
            delete_skill.parentNode.removeChild(delete_skill);
                  
              }
               
           
               
           }
           
           
         
          }
           
          
                       
      </script>

   
    

  </body>
</html>