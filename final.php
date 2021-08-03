<?php
$db=mysqli_connect('localhost','root','','mydatabase') or die("could not connect to database");
$summary=mysqli_real_escape_string($db,$_POST['summary']);
 $project=mysqli_real_escape_string($db,$_POST['projects']);

$hiddensum=mysqli_real_escape_string($db,$_POST['hiddskill']);

 

$query="UPDATE mytable  SET `summary` = '$summary' ,`projects` = '$project'  WHERE phone_number =  $hiddensum;" or die("Failed to execute the Query :( . Try Again !");  

mysqli_query($db,$query);


$sql='select * from mytable';
$result = $db->query($sql);


$sql = "select * from mytable where phone_number =  $hiddensum";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $firstname1= $row["firstname"];
    $lastname1=$row["lastname"];
    $dob1=$row["dob"];
    $city1=$row["city"];
    $pincode1=$row["pincode"];
    $country1=$row["country"];
    $phone_number1=$row["phone_number"];
    $email1=$row["email"];
    $github1=$row["github"];
    $linkedin1=$row["linkedin"];
    $employer1=$row["employer"];
    $job_title1=$row["job_title"];
    $job_city1=$row["job_city"];
    $job_state1=$row["job_state"];
    $start_date1=$row["start_date"];
    $end_date1=$row["end_date"];
    $job_Description1=$row["job_Description"];
    $sslc_school_name1=$row["sslc_school_name"];
    $sslc_city1=$row["sslc_city"];
    $sslc_state1=$row["sslc_state"];
    $sslc_grade1=$row["sslc_grade"];
    $puc_college_name1=$row["puc_college_name"];
    $puc_city1=$row["puc_city"];
    $puc_state1=$row["puc_state"];
    $puc_grade1=$row["puc_grade"];
    $engg_college_name1=$row["engg_college_name"];
    $engg_city1=$row["engg_city"];
    $engg_state1=$row["engg_state"];
    $engg_grade1=$row["engg_grade"];
    $skill[0]=$row["skill1"];
    $skill[1]=$row["skill2"];  
    $skill[2]=$row["skill3"];  
    $skill[3]=$row["skill4"];  
    $skill[4]=$row["skill5"];  
    $hobby1=$row["hobby"];
    $projects=$row["projects"];  
    $summary1=$row["summary"];
      
    $filtered_array = array_filter($skill);
    $skill_string= implode(',',$filtered_array);
      
      
      
    
  }
} else {
  echo "0 results";
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
    /CV Design</title>
	<link rel="stylesheet" href="css/styles.css?<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="script/color.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js" ></script>
  <script src="pdf.js"></script>
    
    

    
    
</head>
<body>
    <div class="dropdown">
  <button class="dropbtn">Choose Color</button>
  <div class="dropdown-content">
    <a style="background-color:#0bb5f4 " onclick='color(this)'></a>
    <a  style="background-color:#e8b015 " onclick='color(this)'></a>
    <a  style="background-color:#56963c" onclick='color(this)' ></a>
      <a style="background-color:#2b9976" onclick='color(this)'></a>
      <a style="background-color:#4a2b99" onclick='color(this)'></a>
      <a style="background-color:#a61c71" onclick='color(this)'></a>
      <a style="background-color:#a61c31" onclick='color(this)'></a>
        
  </div>
</div>

<div class="resume" id="resume1">
    
    
   <div id="resume_left" class="resume_left">
     
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold1"><?php echo $firstname1 ?><br><?php echo $lastname1 ?></p>
           
         </div>
         <ul>
           <li>
             
             <div class="data">
             <?php echo $dob1 ?><br><?php echo $city1 ?>,<?php echo $pincode1 ?>,<?php echo $country1 ?>
             </div>
           </li>
           <li>
             
              
             
             <div class="data">
               <?php echo $phone_number1 ?>
             </div>
           </li>
           <li>
             
             <div class="data">
             <?php echo $email1 ?>
             </div>
           </li>
           
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p  class="bold">skills</p>
         </div>
         <ul>
             <div id="skill_details">
             

                <script>
                
                       var skills = '<?php echo $skill_string ?>';
                        var skill_array = skills.split(',');
                    
                        for(var i=0;i<skill_array.length;i++){
                       var code = '<li><div class="skill"><p>'+skill_array[i]+'</p></div></li>';
                          
                          document.getElementById("skill_details").insertAdjacentHTML('beforeEnd',code);
                            
                            
                        }
                          
                      
                      
                      
                  
                  
                 
                 </script>

             
             
             </div>
             
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="data">
               <p class="semi-bold">Github</p>
               <p><?php echo $github1 ?></p>
             </div>
           </li>
           
        <li>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p><?php echo $linkedin1 ?></p>
             </div>
           </li>
         </ul>
       </div>
    
        <div class="resume_hobby">
      <div class="title">
           <p class="bold"><br>Hobby</p>
         </div>
       <ul>
           <div id="insert_hobby" style="
  color:white;
">
           <script>
            

            
            var hobby_string = '<?php echo $hobby1 ?>';
               
            var hobby_array = hobby_string.split(',',4);  
                
                
            var array_length = hobby_array.length;
               
               
            for(var i = 0; i<array_length;i++){
                
               var code = '<li><div class="hobby"><p>'+hobby_array[i]+'</p></div></li>';
               
               document.getElementById("insert_hobby").insertAdjacentHTML('beforeEnd',code);
                
            } 
                
           
           </script>
           
           
           </div>
           
           

      </ul>
    </div> 
         
         
         
         
     </div>
  </div>
  <div class="resume_right">
    <div id="r1" class="resume_item resume_about">
        <div class="title">
           <p id="b1" class="bold">Objective</p>
         </div>
        <p><?php echo $summary1 ?></p>
    </div>
    <div id="r2" class="resume_item resume_work">
        <div class="title">
           <p id="b2"  class="bold">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class="date"><?php echo $start_date1 ?> to <?php echo $end_date1 ?></div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $employer1 ?>, <?php echo $job_title1 ?></p> 
                     <p class="semi-bold"><?php echo $city1 ?>,<?php echo $job_state1 ?></p>
                  <p><?php echo $job_Description1 ?></p>
                </div>
            </li>
           
        </ul>
    </div>
    <div id="r3" class="resume_item resume_education">
      <div class="title">
           <p id="b3" class="bold">Education</p>
         </div>
      <ul>
            <li>
                <div class="date">ENGINEERING</div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $engg_college_name1 ?></p> 
                     <p class="semi-bold"><?php echo $engg_city1 ?></p> 
                     <p class="semi-bold"><?php echo $engg_state1 ?></p> 
                     <p class="semi-bold"><?php echo $engg_grade1 ?></p> 
                  
                </div>
            </li>
            <li>
              <div class="date">PUC</div>
              <div class="info">
                     <p class="semi-bold"><p class="semi-bold"><?php echo $puc_college_name1 ?></p> 
                     <p class="semi-bold"><p class="semi-bold"><?php echo $puc_city1 ?></p> 
                     <p class="semi-bold"><p class="semi-bold"><?php echo $puc_state1 ?></p> 
                     <p class="semi-bold"><p class="semi-bold"><?php echo $puc_grade1 ?></p> 
                   
                 
                </div>
      
            </li>
            <li>
              <div class="date">SSLC</div>
              <div class="info">
                     <p class="semi-bold"><p class="semi-bold"><?php echo $sslc_school_name1 ?></p> 
                     <p class="semi-bold"><p class="semi-bold"><?php echo $sslc_city1 ?></p> 
                     <p class="semi-bold"><p class="semi-bold"><?php echo $sslc_state1 ?></p> 
                     <p class="semi-bold"><p class="semi-bold"><?php echo $sslc_grade1 ?></p> 
                   
                 
                </div>
            </li>
        </ul>
    </div>
     <div id="r4" class="resume_item resume_projects">
      <div class="title">
           <p id="b4" class="bold">Projects</p>
         </div>
       <ul>
           <div id="insert_projects">
           
                <script>
               
                    var projects = '<?php echo $projects; ?>';
                    
                    
                    
                    var projects_array = projects.split(',',4);
                    
                    var projects_length = projects_array.length;
                    
                    for(var i=0;i<projects_length;i++){
                        
                    var code='<li><div class="project"><p>'+projects_array[i]+'</p></div></li>'
                    
                    
                    document.getElementById("insert_projects").insertAdjacentHTML('beforeEnd',code);
                    }
               
               </script>
           
           </div> 
         
      </ul>
    </div> 
  </div>
</div>
<div class="resume_content" style="text-align:center;padding-bottom:20px;">

<button class="download_btn" id="download">Generate PDF</button>
</div>
</body>
</html>