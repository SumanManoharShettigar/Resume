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
`sslcschoolname` = '$sslc_school_name' , `sslccity` = '$sslc_city' , `sslcstate`='$sslc_state' , `sslcgrade`='$sslc_grade' ,`pucschoolname` = '$puc_college_name' , `puccity` = '$puc_city' , `pucstate`='$puc_state' , `pucgrade`='$puc_grade' , `enggschoolname` = '$engg_college_name' , `enggcity` = '$engg_city' , `enggstate`='$engg_state' , `engggrade`='$engg_grade' WHERE phonenumber =  $hiddenedu;";

  
mysqli_query($db,$query);


?>
<!DOCTYPE html>
<html>
  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Android Webinar Registration</title>
    <link rel="stylesheet" href="register.css">
      
      
      
  </head>
  <body>
    <form class="signup-form" action="summary.php"  method="POST">

      <!-- form header -->
      <div class="form-header">
        <h1>Skill</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">
        
        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left" id="demo">
            <label for="skill1" class="label-title">Skill 1</label>
            <input type="text" id="skill1" class="form-input" name="skill1"  required="required" />
              <br><br>
              

          </div>
            
            <button type="button" id="delete">-</button>
            
            <button type="button" id="add">+</button>
          
         
   
      
      

       
        

        
           
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
                   alert("You have reached maximum limit.")
               }
               
            
            
              else{
              var code = '<div class="form-group left" id="demo"><label for="skill'+num+'" class="label-title">Skill '+num+'</label><input type="text" id="skill'+num+ '" class="form-input" name="skill'+num+'"  required/></div>';
              
              document.getElementById('demo').insertAdjacentHTML('beforeend',code);
               num++;
           }
               
           
           
           document.getElementById('delete').onclick = function(){
               
               
               if(num<=2){
               alert("You have reached minimum limit.")
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