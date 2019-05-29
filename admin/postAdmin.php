<?php session_start();
   if(!isset($_SESSION['password']))
     header('Location: ../signin.php?log_in=0');
      
  
include('conn.php');?>
        <!DOCTYPE html>
       <html lang="en">
       <?php include("../includes/head.php");?>
       <body>
       <?php include("../includes/nav2.php");?>
      
	   <div class="container-fluid  topm row">
     <div class="col-sm-1"></div>
	   <div class='central-block col-sm-8'> 

       	   
	   <?php 
          
           $query="select * from posts order by post_id desc limit 0,15";
	         $sql=mysqli_query($conn,$query);
			 while($row=$sql->fetch_assoc())
			 {
				 echo " 
             <div class='col-sm-12 tbm'>";
             if($row['post_img']!='')
              echo 
             "<img src='../img/".$row['post_title']."/".$row['post_img']."' class='img img-responsive'   style='max-height:300px'>
             ";
             else
              echo "<img src='../img/defaultImg.png' class='img img-responsive'   style='width:350px;height:300px'>";
             
             echo 
             "
             <h2> ".$row['post_title']."</h2>
             <h5><i>".$row['post_category']."</i></h5>
              <p><b>Postat de : </b>".$row['post_autor']." | ".$row['post_date']."</p>
              <p> ".substr($row['post_text'],0,220)." ...</p><br>
              <form method='post'>
              <button name='btnR' class='btn btnn btn-primary' value=".$row['post_id']." type='submit'><span  class='glyphicon glyphicon-trash'></span> Sterge!</button></form>
                  </div> 
        

             ";
       }  

			 ?>

       <?php 
       if(isset($_POST['btnR']))
       {
        $idR=$_POST['btnR'];
        $queryR='delete from posts where post_id='.$idR;
        if($conn->query($queryR)===TRUE)
        {
          
        }
       }
       ?>
       
       </div>
       <div class="col-sm-3 ">

       </div>
       </div>
   
         

 <?php include("../includes/footer.php");?>
 <?php include("../includes/scripts.php");?>
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
`