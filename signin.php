<?php 
    session_start();

 include('admin/conn.php'); 
   
    if(isset($_POST["submit"]))
	{
		
	$email=stripslashes($_POST["email"]);	
	$email=mysqli_real_escape_string($conn,$_POST["email"]);	
	$password=stripslashes($_POST["password"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);
         
   $sql="select * from users  where email_adress='$email' AND password='$password'";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_num_rows($query);
   $row1=$query->fetch_assoc();
   
   if($row==1 )
   {
	         $_SESSION['username']=$email;
	         $_SESSION['password']=$password;
	         $_SESSION["name"]=$row1["name"];
           $_SESSION['id']=$row1['id_user'];
             header('Location: admin/AdminPage.php');
		   
   }
       
	}
?>

<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php");?>
  <body class="body">
  <?php include("includes/nav.php");?>
  <?php include("css/signin.php");?>
  
    <div class="container">

      <form class="form-signin" method="POST" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>
 <?php include("includes/footer.php");?>
   <?php include("includes/scripts.php");?>
  </body>
</html>
