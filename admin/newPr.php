<?php session_start();
   if(!isset($_SESSION['password']))
	   header('Location: ../signin.php?log_in=0');

 ?>
 <?php include('conn.php'); ?>

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
          <h2 class=""><span class="glyphicon glyphicon-edit"></span> New Post</h2>
		  </div>
		
          <form method="post" action="newPr3.php" >
         <br><br><br>
		    <input class="form-control f2"  name="title" type="text" pattern=".{6,}" title='Minim 6 caractere' placeholder=" Titlu postare (Exemplu : Apartament Iasi) " required><br><br>
			 <input class="form-control f2"  name="category" type="text" placeholder="  Categorie (Exemplu : Apartamente)" required><br><br>
			  <input class="form-control f2"  name="autor" type="text" placeholder=" Nume autor (Exemplu : Popescu Mihai)" required><br><br>

			   <textarea class="form-control f2" name="text" type="text" placeholder=" Descriere ..." cols="80" rows="10" required></textarea><br><br>
			<button type="submit"  class="btn btn-success pull-right  no"  name="submit11" >Next <span class="glyphicon glyphicon-ok-circle"></span></button><br>
		  </form>
	
		  
		  </div>
    </div>
   
 
  
   <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>

  </body>
</html>



