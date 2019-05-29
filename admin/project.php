      <?php $conn=mysqli_connect("127.0.0.1","root","","smartconstruct");
       if($conn->connect_error)
	   {
		   die("No conection!");
	   }

        ?>
        
        <!DOCTYPE html>
       <html lang="en">
       <?php include("../includes/head.php");?>
       <body>
       <?php include("../includes/nav.php");?>
      
	   <div class="container-fluid  topm ">
	   <div class='row central-block '>
	   
	   <?php
      $id=$_GET['p_id'];
      $query='select * from projects where project_id='.$id;
	    $sql=mysqli_query($conn,$query);
			 if($row=$sql->fetch_assoc())
       {
        $image=$row['image_primary'];
        $text=$row['description'];
        $title=$row['title'];
       }
			  
			 ?>
          <div class="container-fluid  topm ">
     <div class='row central-block '>
     
       </div>

       </div>

 <?php include("../includes/footer.php");?>
 <?php include("../includes/scripts.php");?>
  </body>
</html>
