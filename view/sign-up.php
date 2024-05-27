<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
<?php 
include "../model/database.php";
session_start(); ?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="../view/css/sign-up.css">
  </head>
  <body> 
    <section class="container">
      
          <!-- alert -->
          <?php  if(isset( $_SESSION['message'])): ?>

<div class="col-12">
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo $_SESSION["message"]; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php unset($_SESSION["message"]) ?>
</div><?php  endif; ?>
<!-- alert -->
      <header>Registration Form</header>
      <form action="../controller/register_procces.php" method="post" enctype="multipart/form-data" class="form">
    <div class="column">
        <div class="input-box">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" placeholder="Enter first name"  />
        </div>
        <div class="input-box">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Enter last name"  />
        </div>
    </div> 
    <div class="input-box">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter username"  />
    </div>
    <div class="input-box">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email" placeholder="Enter email address"  />
    </div>
    <div class="column">
        <div class="input-box">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password"  />
        </div>
        <div class="input-box">
            <label for="repassword">RE-password</label>
            <input type="password" name="repassword" id="repassword" placeholder="Enter RE-Password"  />
        </div>
    </div>
    <div class="column">
        <div class="input-box">
            <label for="phone_number">Phone Number</label>
            <input type="number" name="phone_number" id="phone_number" placeholder="Enter phone number"  />
        </div>
        <div class="input-box">
            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" id="birth_date" placeholder="Enter birth date"  />
        </div>
    </div>
    
    <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
            <div class="gender">
                <input type="radio" id="check-male" name="gender" checked />
                <label for="check-male">Male</label>
            </div>
            <div class="gender">
                <input type="radio" id="check-female" name="gender" />
                <label for="check-female">Female</label>
            </div>
            <div class="gender">
                <input type="radio" id="check-other" name="gender" />
                <label for="check-other">Prefer not to say</label>
            </div>
        </div>
    </div>
    
      <label style="margin-left: 70%;" for="file" class="btn btn-secondary mt-2" id="myfile">upload your file</label>
      <input name="user_file" type="file" hidden id="file">
    <div class="input-box">
          <textarea name="bio" id="textarea" placeholder="write bio"></textarea>
        </div>
    
    <button type="submit">Submit</button>
</form>
    </section>
   
  </body>
</html>  

<!-- <div class="input-box address">
          
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" required />
            <input type="number" placeholder="Enter postal code" required />
          </div>
        </div> -->