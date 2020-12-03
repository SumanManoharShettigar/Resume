
<!DOCTYPE html>
<html>
  <head>
   

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
    <meta charset="utf-8">
    <title>Personal</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <form class="signup-form" action="experience.php" >

      <!-- form header -->
      <div class="form-header">
        <h1>Personal Information</h1>
        

      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="form-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First Name *</label>
            <input type="text" id="firstname" class="form-input" name="firstname" placeholder="enter your first name" required="required" />
          </div>
          <div class="form-group left">
            <label for="lastname" class="label-title">Last Name *</label>
            <input type="text" id="lastname" class="form-input" name="lastname" placeholder="enter your last name" required="required" />
          </div>
          <div class="form-group right">
            <label for="address" class="label-title">Address*</label>
            <input type="text" id="address" class="form-input" name="address" placeholder="Address" required/>
          </div>
        </div>
        <div class="form-group right">
          <label for="city" class="label-title">City*</label>
          <input type="text" id="city" class="form-input" name="city" placeholder="City" required/>
        </div>
      
      <div class="form-group right">
        <label for="pincode" class="label-title">Pincode*</label>
        <input type="text" id="pincode" class="form-input" name="pincode" placeholder="Pincode" required/>
      </div>
      <div class="form-group right">
        <label for="country" class="label-title">Country*</label>
        <input type="text" id="country" class="form-input" name="country" placeholder="enter your usn" required/>
      </div>
      <div class="form-group right">
        <label for="phonenumber" class="label-title">Phone number*</label>
        <input type="text" id="phonenumber" class="form-input" name="phone_number" placeholder="phone number" required/>
      </div>
   

        <!-- Email -->
        <div class="form-group right">
          <label for="email" class="label-title">Email*</label>
          <input type="email" id="email" class="form-input" name="email" placeholder="enter your email" required="required">
        </div>

        <div class="form-group right">
          <label for="github" class="label-title">github profile</label>
          <input type="text" id="github" class="form-input" name="github" placeholder="enter your email" required="required">
        </div>

        <div class="form-group right">
          <label for="linkedin" class="label-title">linkedIn</label>
          <input type="text" id="linkedin" class="form-input" name="linkedin" placeholder="enter your email" required="required">
        </div>
      </div>

       
        

        
           
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
