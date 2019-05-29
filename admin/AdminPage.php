<?php session_start();
   if(!isset($_SESSION['password']))
	   header('Location: ../signin.php?log_in=0');
      if(isset($_POST['sb2']))
   {
  
    $_SESSION['ok']=0;
    $_SESSION['k']=0;
    
  }
  
include('conn.php');

  $_SESSION['k']=0;
  $_SESSION['ok']=0;
	   ?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php");?>
  <body>


<?php include('../includes/nav2.php');?>
  


   
      <div class="container-fluid">
      <div class="row">
      


        <div class="col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">

          <div class="row placeholders">
          </div>

          <h2 class="sub-header"><span class="glyphicon glyphicon-cog"></span>  Administrare</h2>
          <div class="container-fluid  topm mainI">
           <div class="table-responsive mainM">
            <a href="messages.php"> <button><span class="glyphicon glyphicon-envelope"></span>  Mesaje</button></a>
            <a href="newPr.php"> <button class="left"><span class="glyphicon glyphicon-edit left"></span>  Postare Noua</button></a>
             <a href="postAdmin.php"><button><span class="glyphicon glyphicon-trash"></span> Sterge  Postari</button></a>
             <a href="setari.php"><button class="left "><span class="glyphicon glyphicon-user "></span>  Setari cont</button></a>

           </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
 

   <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>
<style type="text/css">
.mainI{
  
}
  .mainM{
    margin: 0 auto;
    width:600px;
   

  }
  .mainM button:hover{
    opacity: .9;
    background: #800000;
    color: #fff;

  }

  .mainM button{
    width: 48%;
    float: left;
    margin-bottom: 23px;
    border:0;
     transition-duration: 0.5s;
    height: 100px;
  }
  .left{
    margin-left: 4%;
  }

  .table-responsive{
    border:0;
  }

</style>
  </body>
</html>



