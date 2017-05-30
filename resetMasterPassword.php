<?php
$masterID = $_GET['mst'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="90"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Passwire Service</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loginStyle.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>    
  </head>

  <body>
      <div class="logo">
                <h1><u>PASSWIRE</u></h1>
                <p>more effectiveness more simply</p>
      </div>
      
      <div class="container-fluid">      
        
        <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">
              <div class="account-wall">
                <div class="text-center Title">Reset Masster Password</div>
                    <div class="text-center description"> <b>Please Enter New TEXT Password.</b></div>     
                      <form class="form-signin" method="post" action="insertNewMasterPassword.php?mst=<?=$masterID?>">
                      <!-- <fieldset> -->
                          <input type="password" name="password_1" placeholder="Password" class="form-control" id="password" required>
                          <input type="password" name="password_2" placeholder="Confirm Password" class="form-control" id="confirm_password" required>
                          <input type="password" name="passHid" id="passwordHid" value="" hidden="hid_pass">
<!--                           <?php
                            echo ($masterID);
                          ?> -->
                          <button type="submit" class="btn btn-lg btn-primary btn-block">Confirm</button>
                      <!-- </fieldset> -->
                      </form>

                    <!-- <form class="form-signin" method="post" action="#">
                        <input type="password" name="new_password" class="form-control" required autofocus placeholder="New password"><br>
                        <input type="password" name="comfirm_new_password" class="form-control" required autofocus  placeholder ="Comfirm New Password"><br>                      
                        <button class="btn btn-lg btn-primary btn-block">SUBMIT</button>              
                    </form> -->
                    
                </div>
              </div>
          </div>
        </div>
                    
<!--</p>-->
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<script>
    $( document ).ready(function() {
        
        $(".modalAccept").on('click',function(){        
        
    });
});
   
</script>

<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

  var passwordHid = document.getElementById("passwordHid");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
    passwordHid.value = changePass(password.value);
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function changePass(pass){
  var password = pass;
  password = "HASH("+password+")";
  return password;
}

// function changeCon_Pass(con_password){
//   var confirm_password = con_password;
//   confirm_password = "HASH("+confirm_password+")";
//   return confirm_password;
// }
</script>
      
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <h4>"You can recover your information."</h4>
            </div>
            <div class="item">
              <h4>"You can view your information."</h4>
            </div>
            <div class="item">
              <h4>"You can wipe your information."</h4>
            </div>
            <div class="item">
              <h4>"You can disable your account."</h4>
            </div>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>