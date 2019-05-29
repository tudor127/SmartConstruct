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
      


        <div class="col-sm-10  col-sm-offset-1 col-sm-offset-1  main">
        
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

          <h2 class="titleM"><span class="glyphicon glyphicon-envelope"></span>  Mesaje</h2>
          <div class="table-responsive">
            <table class="table ">
            

              <?php
              $query='select * from messages order by message_id desc';
              $sql=mysqli_query($conn,$query);
              $k=1;
              while($row=$sql->fetch_assoc())
              {
                 echo "<tr>
                 
                    <td><p class='h4'><span class='glyphicon glyphicon-envelope'></span> ".$row['name']."</p></td>
                    <td><p class='h4'>  ".substr($row['text'],0,80)."..."." </p></td>
                    ";
                if($row['seen']==1)
                  echo "<td style='color:#09f'><i><span class='glyphicon glyphicon-check' ></span>  Vazut</i></td>";
                else
                  echo "<td style='color:#9f0'><i><b><span  class='glyphicon glyphicon-flash'></span>  Nou</b></i></td>";
                  echo   "
                  <td><form method='get' action='message.php'><button type='submit' name='sb' value='".$row['message_id']."' class='btn btn-primary btn-sm'>Read  <span class='glyphicon glyphicon-log-in'></span></button></form>
                 </tr>";
                 $k++;
              }

               ?>
              
              </table>
              </div>
              </div>
            </div>
            </div>
         <style type="text/css">
           .titleM{
            color: #800000;
            margin-bottom: 60px;
           }

         </style>

   <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>

  </body>
</html>



