<?php
session_start();
echo'
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="/forum">We discuss</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forum">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

    </ul>
    <div class = "mx-2">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<form class="d-flex"method = "get" action ="search.php">
      
      
        <p class="text-dark my-0 mx-2">Welcome '.$_SESSION['useremail'].'</p>
        <a href = "partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
        </form>';
    
    }
    else{ 
      echo '<form class="d-flex">
          
          
          </form>
          <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">login</button>
          <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#signupModal">signup</button>';
        }
    
    
    
      echo '</div>
          </div>
          </nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You can now Login!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
}
?>