<?php

session_start();


error_reporting(E_ERROR | E_PARSE);
include("nav.html");

if(isset($_SESSION['isLoggedIn'])){

} else {
  header('Location: index.php?isBlock');
}

session_destroy();
?>


<div class="container mt-5">
  <div class="row mx-auto">
    <div class="col-md-6 mx-auto bg-white rounded">
        <h1 class="text-center mt-5 mb-4">Blog</h1>
          <div class="row">
            <div class="col-xs-12 col-md-12 mb-3 mx-auto">
              <p class="text-center">You have been succesfully logged out</p>
            </div>
          </div>
    </div>
  </div>
</div>