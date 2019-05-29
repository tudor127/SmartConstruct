<?php include('admin/conn.php'); ?>
        <!DOCTYPE html>
       <html lang="en">

       <?php include("includes/head.php");?>
      
       <body>
       <?php include("includes/nav.php");?>
      
	   <div class="container-fluid  topm row">
     <div class="col-sm-1"></div>
	   <div class='central-block col-sm-8'> 

       	   
	   <?php 
          
           $query="select * from posts order by post_id desc limit 0,15";
           $queryPost='select * from posts order by post_id desc limit 0,4';
           $sqlPost=mysqli_query($conn,$queryPost);
	         $sql=mysqli_query($conn,$query);

			 while($row=$sql->fetch_assoc())
			 {
				     echo " 
             <div class='col-sm-12 tbm'><img src='img/".$row['post_title']."/".$row['post_img']."' class='img img-responsive'   style='max-height:300px'>
             <h2> ".$row['post_title']."</h2>
             <h5><i>Categorie :".$row['post_category']."</i></h5>
              <p><b>Postat de : </b>".$row['post_autor']." | ".$row['post_date']."</p>
              <p> ".substr($row['post_text'],0,220)." ...</p><br>
              <form action='project.php' method='get'>
              <button name='btn' class='btn btnn btn-primary' value=".$row['post_id']." type='submit'>Vezi mai mult</button></form>
                  </div> 
        

             ";
       }
	 ?>
       
       </div>
       <div class="col-sm-3  " style='position: fixed;right:0'>
         
         <h4 style="color:#800000"><center><span class="glyphicon glyphicon-calendar"></span>  Postari recente </center></h4>
         <?php
         while($row1=$sqlPost->fetch_assoc())
         {
          echo "<hr><center><a href='project.php?btn=".$row1['post_id']."'>".$row1['post_title']."</center></a><hr>";
         }
         ?>

       </div>
       </div>
   
         

 <?php include("includes/footer.php");?>
 <?php include("includes/scripts.php");?>
<style type="text/css">
  .btnn{
   background-color: rgba(200,10,10,0.8);
   border: 0px;
   box-shadow: inset 0 0 0 0 rgba(200,10,10,0.8);
   transition: all ease 0.5s;
   opacity: .77;
  }

  .btnn:hover{
 
    color: #eee;
    box-shadow: inset 0 100px 0 0 rgba(200,10,10,0.8) ;
    border: 0px;
    opacity: .999;
  }



</style>
  </body>
</html>
