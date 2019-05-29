<?php session_start();
   if(!isset($_SESSION['password']))
	   header('Location: ../signin.php?log_in=0');


 ?>
 <?php include('conn.php'); 
 ?>

<!DOCTYPE html>
<html lang="en">

<?php include("../includes/head.php");?>


  <body>
<style type="text/css">
.new{
		background:#eee;
		
	}

	.f2{
		
	}

	</style>
<?php include("../includes/nav2.php");?>


     <div class="container topm " style="width:600px">
	 
        <div class="jumbotron central-block new">
		<div class="text-center">
          <h2 class=""><span class="glyphicon glyphicon-user"></span> Setari cont</h2>
		  </div>
		
          <form method="post" action="AdminPage.php">
         <br><br><br>
		    Nume Prenume<input class="form-control f2 try"  name="name" type="text" pattern=".{10,}" title='Minim 6 caractere' placeholder=<?php echo $_SESSION['name']; ?> required><br><br>
			 Adresa de email<input class="form-control f2"  pattern=".{12,}" name="email" type="text" placeholder=<?php echo $_SESSION['username']; ?> required><br><br>
			  Parola<input class="form-control f2"  name="password" pattern=".{8,}" type="password" placeholder=<?php echo $_SESSION['password']; ?> required><br><br>

			<button type="submit"  class="btn btn-success pull-right  no"  name="update" > Modifica <span class="glyphicon glyphicon-ok-circle"></span></button><br>
		  </form>
	     <?php 
          if(isset($_POST['update']))
          {
          	$id=$_SESSION['id'];
          	$query="update users set name='".trim($_POST['name'])."',email_adress='".trim($_POST['email'])."',password='".trim($_POST['password'])."' where id_user=".$id;
          	if($conn->query($query)===TRUE)
          	{
  
          	}
          }
	     ?>
		  
		  </div>
    </div>
   
 
  
   <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>
  </body>
</html>



