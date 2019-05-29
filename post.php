<?php include('admin/conn.php'); ?>
        <!DOCTYPE html>
       <html lang="en">
       <?php include("includes/head.php");?>
       <body>
       <?php include("includes/nav.php");?>
      
     <div class="container-fluid  topm row">
     <div class="col-sm-1"></div>
     <div class='central-block col-sm-8'>
     
     <?php $query="select * from posts ";
           $sql=mysqli_query($conn,$query);
       while($row=$sql->fetch_assoc())
       {
         echo " 
             <div class='col-sm-12 tbm'>";
             if($row['post_img']!='')
              echo 
             "<img src='img/".$row['post_title']."/".$row['post_img']."' class='img img-responsive'   style='max-height:300px'>
             ";
             else
              echo "<img src='img/defaultImg.png' class='img img-responsive'   style='width:350px;height:300px'>";
             
             echo 
             "
             <h2> ".$row['post_title']."</h2>
             <h5><i>".$row['post_category']."</i></h5>
              <p><b>Postat de : </b>".$row['post_autor']." | ".$row['post_date']."</p>
              <p> ".substr($row['post_text'],0,220)." ...</p><br>
              <form action='project.php' method='get'>
              <button name='btn' class='btn btn-primary' value=".$row['post_id']." type='submit'>Vezi mai mult</button>
                  </div> 
        

             ";
       }
          

       ?>
       </div>
      
       </div>

 <?php include("includes/footer.php");?>
 <?php include("includes/scripts.php");?>

  </body>
</html>
