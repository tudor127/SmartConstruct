<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php");?>
<?php  if(!isset($_SESSION['password']))
       header('Location: ../signin.php?log_in=0');
       ?>
  <body>


<?php include('../includes/nav2.php')  ?>

     <div class="container topm">
	
        <div class="jumbotron central-block ">
		<div class="text-center">
          <h2 class=""><span class="glyphicon glyphicon-plus"></span>  Proiect Nou</h2>
		  </div>
		  <p style="margin-top:60px">Adauga imagini! </p>
            <form class="" method="Post"  enctype="multipart/form-data">
    Select image to upload:<br><br>
	
    <input type="file" class='btn-primary'  name="fileToUpload" id="fileToUpload[]" ><br>
     <input type="file" class='btn-primary'  name="fileToUpload" id="fileToUpload[]" ><br>

	<button type="submit" class="btn btn-success pull-right " name="submit">Next <span class="glyphicon glyphicon-ok-circle"></span></button>
		     
			  </form> 

   <?php if(isset($_POST['submit']))
         header("Location: newPr3.php");
	 ?>
	
	
		  
		  </div>
    </div>
   
 

   <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>

  </body>
</html>



