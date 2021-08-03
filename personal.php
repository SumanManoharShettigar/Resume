<!DOCTYPE html>
<html>
  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Personal</title>
    <link rel="stylesheet" href="css/register.css?<?php echo time(); ?>">
  </head>
  <body>
    <form class="signup-form" action="experience.php" method="POST" >

      <!-- form header -->
      <div class="form-header">
        <h1>Personal Information</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First Name <span id="red">*</span></label>
            <input type="text" id="firstname" class="form-input" name="firstname" placeholder="Enter your first name." required="required" />
          </div>
          <div class="form-group left">
            <label for="lastname" class="label-title">Last Name <span id="red">*</span></label>
            <input type="text" id="lastname" class="form-input" name="lastname" placeholder="Enter your last name." required="required" />
          </div>
          <div class="form-group right">
            <label for="DOB" class="label-title">Date of Birth <span id="red">*</span></label>
            <input type="date" id="DOB" class="form-input" name="dob" placeholder="Enter your date of birth" required/>
          </div>
        </div>
        <div class="form-group right">
          <label for="city" class="label-title">City <span id="red">*</span></label>
          <input type="text" id="city" class="form-input" name="city" placeholder="Enter your City." required/>
        </div>
      
      <div class="form-group right">
        <label for="pincode" class="label-title">Pincode <span id="red">*</span></label>
        <input type="text" id="pincode" class="form-input" name="pincode" placeholder="Enter your Pincode." required/>
      </div>
      <div class="form-group right">
        <label for="country" class="label-title">Country <span id="red">*</span></label>
        <input type="text" id="country" class="form-input" name="country" placeholder="Enter your Country." required/>
      </div>
      <div class="form-group right">
        <label for="phonenumber" class="label-title">Phone number <span id="red">*</span></label>
        <input type="text" id="phonenumber" class="form-input" name="phone_number" placeholder="Enter your Phone number." required/>
      </div>
   

        <!-- Email -->
        <div class="form-group right">
          <label for="email" class="label-title">Email <span id="red">*</span></label>
          <input type="email" id="email" class="form-input" name="email" placeholder="Enter your Email." required="required">
        </div>

        <div class="form-group right">
          <label for="github" class="label-title">Github Profile Link <span id="red">*</span></label>
          <input type="text" id="github" class="form-input" name="github" placeholder="Enter your Github profile link." required="required">
        </div>

        <div class="form-group right">
          <label for="linkedin" class="label-title">LinkedIn <span id="red">*</span></label>
          <input type="text" id="linkedin" class="form-input" name="linkedin" placeholder="Enter your Linkedin profile link." required="required">
        </div>
        
      </div>

       
      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn" >Next</button>
        
      </div>

    </form>

    <!-- Script for range input label -->
    

  </body>
</html>