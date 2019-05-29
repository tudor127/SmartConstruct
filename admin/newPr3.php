<?php session_start();
if(!isset($_SESSION['password']))
{
  header("Location: ../signin.php?log_in=0");
}
include('conn.php'); 
$query0='select * from posts order by post_id desc';
$sql0=mysqli_query($conn,$query0);
if($row0=$sql0->fetch_assoc())
{
$pr_id=$row0['post_id'];
}



?>

 <?php  
           if(isset($_POST["submit11"]))
       {   

       
        
        $title=ucfirst($_POST['title']);
        $autor=ucwords($_POST['autor']);
        $text=ucfirst($_POST['text']);
        $category=ucfirst($_POST['category']); 
          date_default_timezone_set("Europe/Bucharest"); 
                $date=date("Y/m/d"); 
        $sql="insert into posts (post_title,post_text,post_date,post_img,post_autor,post_category) values ('$title','$text','$date','','$autor','$category')";
        $qy="select * from posts where post_title='$title'";
        $sq=mysqli_query($conn,$qy);
        $num=mysqli_num_rows($sq);
        if($num>=1)
        {
          $_SESSION['fine']=0; 
        }
        else
        {
        if($conn->query($sql)===TRUE)
        { 
                      $_SESSION['title']=$title;
                      mkdir('../img/'.$title.'/');
                      $_SESSION['fine']=1;
               
                  
        

        }}
        
       
      
    }
   ?>

<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php");?>
  <body>
<style type="text/css">
.hide1{
  display: none;
}
.new{
    background: #eee;
    color:;
    width:600px;
    margin: 0 auto;
  }

  .f2{
    background: #eee;
  }

#fileToUpload{
    opacity: 0;
   position: absolute;
   z-index: -1;
}

#label{
  cursor:pointer;

}

.wdt{
  margin-left: 32px;
}

  </style>

<?php include('../includes/nav2.php');?>

     <div class="container topm">

   <?php if($_SESSION['fine']==1)
   {   echo "  <div class='jumbotron central-block new'>
		<div class='text-center'>
          <h2 ><span class='glyphicon glyphicon-picture'></span> Proiect Nou </h2>
		  </div>
		  <p style='margin-top:60px'>Adauga imagini! </p>
<form  method='Post'  enctype='multipart/form-data'><br><br>
      
     <div style='background:;padding:20px;width:500px'><div class='row'>
<div class=''> 
<input type='file' class=''  name='fileToUpload' id='fileToUpload' accept='image/*' >
     <label for='fileToUpload' id='label' class='btn btn-primary pull-left wdt' onclick='show()''><span class='glyphicon glyphicon-folder-open'></span>  Browse...  <span  class='glyphicon glyphicon-plus' style='display: none'></span></label>
     
  <div style='display: none' id='img'>
   <div class='glyphicon glyphicon-arrow-right pull-left wdt' style='margin-top: 7px'></div>
     
  <button type='submit' class='btn btn-success  pull-left wdt ' name='submit'><span class='glyphicon glyphicon-plus'></span> Adauga </button> </div></div>
</form>
<script type='text/javascript'>
var x=0;
  function show()
  {
   if(x==0)
   document.getElementById('img').style.display='block'; 
  }
</script>

  <div class='hide1'><form action='adminPage.php' method='post'>  <button class='btn btn-warning pull-left wdt'  type='submit' name='sb2'><span class='glyphicon glyphicon-ok-circle'></span> Finalizare</button></form></div>";}
 
  else echo "<h2>Folderul <i>".$title."</i> exista deja! <br>
             Incearca <i>".$title." 1</i><br>
           <a href='newPr.php' class='btn btn-success'>Inapoi</a>
  </h2>";?>


  <?php 
     if($_SESSION['k']>=2)
    {
   echo "<style>
   .hide1{
      display:block;
   }
   </style>";}



?>  
  </div>
  </div></br>
         
      

        
 	 <?php  
if(isset($_POST['submit']))
{

$ok1=0;
$checkUpload=0;
$target_dir = "../img/".$_SESSION['title']."/";
$new2= basename($_FILES["fileToUpload"]["name"]);
$new1=str_replace(" ", "",$new2);
$target_file = $target_dir.$new1;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        
        $uploadOk = 0;
    
    }
}
$er1=$er2=0;

// Check if file already exists
if (file_exists($target_file)) {
    echo "<p class='' style='font-size:15px;color:red'> <span class='glyphicon glyphicon-warning-sign' ></span> Sorry, file already exists.</p>";
    $uploadOk = 0;
    $er1=1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 3000000 && $er1!=1) {
    echo "<p style='font-size:15px;color:red'><span class='glyphicon glyphicon-warning-sign'></span> Sorry, your file is too large.</p>";
    $uploadOk = 0;
    $er2=1;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p style='font-size:15px;color:red'><span class='glyphicon glyphicon-exclamation-sign'></span>Your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $_SESSION['k']++;
       $_SESSION['ok']++;
        $checkUpload=1;
    } else {
      
        $checkUpload=0;
    }
}
?>

<?php
if($checkUpload==1)
{
  $image=$new1;
  if($_SESSION['ok']==1)
{
 $sql01="update posts set post_img='$image' where post_id='$pr_id'";
 if($conn->query($sql01)===TRUE)
 {
  
 }
}




$query2="insert into images (post_id,image_name) values ('$pr_id','$image')";
if($conn->query($query2)===TRUE)
{

}



}
}



?>


<div class='row'>
<div class='' style="margin-left: 30px">
<h4><?php 
 if(isset($_POST['submit']))
if($_SESSION['k']!=0) echo '('.$_SESSION['k'].')imagini selectate';?></h4>

<?php

/*if($_SESSION['k']!=0)
{
   $query3="select * from images where post_id=$pr_id";
   $sql3=mysqli_query($conn,$query3);
   while($row3=$sql3->fetch_assoc())
   {
    echo "<img style='margin-left:10px' height='100px' width='100px' src='../img/".$_SESSION['title']."/".$row3['image_name']."'>";
   }}
 //  echo $_SESSION['k'];
 */?>
</div>
	</div>
  <div class='col-sm-4'>
  </div>
		  </div>
    </div>
   
 

   <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php");?>

  </body>
</html>



