<?php session_start();
   if(!isset($_SESSION['password']))
	   header('Location: ../signin.php?log_in=0');  
 	   ?>
     <?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php");?>
  <body>


<?php include('../includes/nav2.php');?>
  


   
      <div class="container-fluid">
      <div class="row">
      


        <div class="col-sm-11  col-sm-offset-1  main">
        
          <div class="row placeholders">
             <?php 
             /* $query='select distinct projects.title,images.image_name from projects inner join images on projects.project_id=images.project_id limit 0,4';
              $sql=mysqli_query($conn,$query);
              while($row=$sql->fetch_assoc())
              {
                echo "<div class='col-sm-3'><img width='200px' height='200px' class='img-responsive' src='../img/".
               $row['title']."/".$row['image_name']."'><h4>".$row['title']."</h4></div>";
              }*/
             ?>


          </div>

          
         

              <?php
              $id=$_GET['sb'];
              $query="select * from messages where message_id='$id'";
              $sql=mysqli_query($conn,$query);
          
              while($row=$sql->fetch_assoc())
              {
                 echo "<h2 class='sub-header' style='color:#09f'><span class='glyphicon glyphicon-envelope' </span> ".$row['name']."</h2>
          <div class='table-responsive'>
            <table class='table ''>
                  <div class='col-sm-6 ' >
    
                  <br><br><br><p class='h4'> <i>".$row['text']."</i></p>
                  <br><br><br><p class='h4'> <span class='glyphicon glyphicon-envelope'></span> Email : ".$row['email']."</p>
                  <p class='h4'><span class='glyphicon glyphicon-phone'></span>  Telefon : ".$row['telefon']."</p>
                 ";
            
              }

              if(isset($_GET['sb']))
              {
                $query="update messages set seen='1' where message_id='$id'";
                if($conn->query($query)===TRUE)
                {
                  echo "";
                }
              }

               ?>
              
              </table>
              </div>
              </div>
            </div>
            </div>


   <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>

  </body>
</html>



