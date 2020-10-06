<?php
// the code that starts the session
session_start();

error_reporting(E_ERROR | E_PARSE);
include("nav.html");

if(isset($_SESSION['isLoggedIn'])){

// if the user is logged in you don't want to show the form

$loggedInForm = <<<LOGGEDINFORM
 
<div class="container mt-5">
  <div class="row mx-auto">
    <div class="col-md-6 mx-auto bg-white rounded">
        <h1 class="text-center mt-5 mb-4">Logged in!!!</h1>
          <div class="row">
            <div class="col-xs-12 col-md-6 mb-3 mx-auto">
              <p class="text-center">You are logged in!!!</p>
            </div>
          </div>
    </div>
  </div>
</div>
LOGGEDINFORM;

echo $loggedInForm;
} else {

  //use Heredoc to display the form
$loginForm = <<<LOGINFORM
 
<div class="container mt-5">
<div class="row mx-auto">
   <div class="col-md-6 mx-auto bg-white rounded">
      <h1 class="text-center mt-5 mb-4">test layout</h1>
      <form method="post" action="response.php">
        <div class="row">
          <div class="col-xs-12 col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="User Name" id="userName" name="username">
          </div>
          <div class="col-xs-12 col-md-6">
            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary mx-auto mt-4 mb-5">Login</button>
        </div>
        <p id="message" class="text-center"></p>
      </form>
   </div>
</div>
</div>
LOGINFORM;

echo $loginForm;
}
// code for the page block and the invalid credentials
$isBlock = $_GET["isBlock"];
$invalidCredentials = $_GET["invalidCredentials"];

if (isset($isBlock)){
echo "<script>document.querySelector('#message').innerHTML = 'You have to login to access this content'</script>";
} else if ($invalidCredentials){
  echo "<script>document.querySelector('#message').innerHTML = 'The username and password you put in are incorrect'</script>";
}
?>