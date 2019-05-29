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
           $id=$_GET['btn'];
           $query="select * from posts where post_id=".$id;
           $sql=mysqli_query($conn,$query);
       while($row=$sql->fetch_assoc())
       {
         echo " 
             <div class='col-sm-12 '>
             <h2> ".$row['post_title']."</h2>
             <h5><i>Categorie :  ".$row['post_category']."</i></h5>
              <p><b>Postat de : </b>".$row['post_autor']." | ".$row['post_date']."</p>
              <p> ".$row['post_text']."</p><br>
                  </div> 
        

             ";
       }
          

       ?>
       <br><br>
       <div class="col-sm-12">
       <h2>Imagini</h2><br><br>
       <?php 
        $q="select * from images where post_id=".$id;
        $t="select post_title from posts where post_id=".$id;
        $st=mysqli_query($conn,$t);
        if($row1=$st->fetch_assoc()){$tS=$row1['post_title'];}
        $s=mysqli_query($conn,$q);
        while ($row=$s->fetch_assoc()) {
       echo "<div class='col-sm-4 imgB'><a href='img/".$tS."/".$row['image_name']."' target='_blank'><img class='img col-sm-12 ' src='img/".$tS."/".$row['image_name']."'></a></div>"; 
        }
       ?>
       </div>
       </div>
       
       </div>
   
         

 <?php include("includes/footer.php");?>
 <?php include("includes/scripts.php");?>
<style type="text/css">
   .imgB{
    height: 200px;

   }

  .btnS{
    margin-top: 30px;
    background-color: #fff;
    border:1px solid #ddd;
    transition-duration: 1.2s;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .btnS:hover{
    background-color: rgba(200,10,10,0.8);
    color: #eee;
  }

   @media (max-width: 770px)
   {
    

    .imgB img{
      width: 300px;

    }

    .imgB{
      text-align: center;
    }
   }

</style>
  </body>
</html>
