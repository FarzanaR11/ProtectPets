<?php 
session_start();

?>
<?php 
  	if(isset($_GET['logout'])) {
    	session_destroy();
      if ($_SESSION['user'] == 'user') {
        header("Location:loginuser.php");;
      }elseif($_SESSION['user'] == 'volunteer'){
        header("Location:login.php");;
      }
  	}
 ?>
<?php
if ( isset($_SESSION['username'])) {

}else{
     header("Location: index.php");
     exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">Project Pets</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    	<a href="?logout" class=" mr-1" type="button">Hello, <?php echo $_SESSION['username']; ?></a>
      	<a href="?logout" class="btn btn-outline-success" type="submit">logout</a>
    </form>
  </div>
</nav>
    <h2 class="text-center text-light bg-success p-3">Welcome<?php
      if ($_SESSION['user'] == 'user') {
        echo ' User!';
      }elseif($_SESSION['user'] == 'volunteer'){
        echo ' Volunteer!';
      }
      ?></h2>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
