<nav class="navbar navbar-inverse navbar-fixed-top nvb" style="
">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php" style='color:#f90;'><span class="glyphicon glyphicon-home"></span>     Smartconstruct</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
            

             <li class="post"><a href="AdminPage.php" ><div style="" class=" "><span class="glyphicon glyphicon-file text-success"></span> AdminPage</div></a></li>

               <li class="mesage"><a href="messages.php"><div style="" class=""><span class="glyphicon glyphicon-envelope text-warning"></span>  Messages 
                 <?php 
                  include('conn.php');
                 $query="select seen from messages where seen='0'";
                 if($row=mysqli_query($conn,$query))
                 {
                   $count=mysqli_num_rows($row);
                 }
                 echo "(".$count.")";
                 ?>


               </div></a></li>
<li><a href="#" style="color:#34b3ab"><span class="glyphicon glyphicon-user"></span> <?php  echo $_SESSION["name"]; ?></a></li>
            <li><a class=""><form method="post" > <button class="btn btn-xs btn-primary" type="submit" name="logOut">Log Out</button> </form></a></li>
              
            
          </ul>
         
        </div>
      </div>
    
          	
	<?php
	if(isset($_POST['logOut']))
	{
		session_unset();
		session_destroy();
		header('Location: ../signin.php');
		
		
	}

	?>
   
    </nav>
<style type="text/css">
  .nvb{
    background: url(bg.jpg);

  }

  .fff:hover{
    color:#eee;
  }

  .fff{
    color:blue;
  }

</style>