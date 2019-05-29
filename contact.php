<?php include('admin/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include("includes/head.php");?>
  <body>
   <?php include("includes/nav.php");?>

        
   <div class="row  topm">
    <div class="col-sm-8">

    <form method="post">
 <div class="col-sm-12">   <h2 class="col-sm-12 titleP"><span class="glyphicon glyphicon-earphone"> </span>  Contacteaza-ne </h2><br><br></div>
	<div class='col-sm-4 text-center inputP'><h4>Nume Prenume</h4><input type="text"  placeholder="" name="name"></div>
	<div class="col-sm-4 text-center inputP"> <h4>Email</h4><input type="text" placeholder="" name="email"> </div>
	<div class="col-sm-4 text-center inputP"><h4>Nr. Telefon</h4><input type='text' placeholder="" name="telefon"></div>
	<div class="col-sm-12 text-center "><textarea placeholder="Mesaj..." name="text" style="resize:vertical;border-radius: 2px;border-color: #ddd;width:90%;min-height:200px;margin-top: 40px;padding: 12px"></textarea></div>
	

	<div class="col-sm-6" style="margin-left: 6%;"><button class="btn btn-primary" name='submit' style="margin-top: 30px;margin-left: 30px">Trimite Mesajul</button> </div>
	<div class="col-sm-4 " style="margin-top: 30px;margin-left: 30px">
	<?php 
   if(isset($_POST['submit']))
   {
   	$name=ucfirst($_POST['name']);
    $name=htmlspecialchars($name);
   	$email=$_POST['email'];
    $email=htmlspecialchars($email);
   	$telefon=ucfirst($_POST['telefon']);
    $telefon=htmlspecialchars($telefon);
    $text=ucfirst($_POST['text']);
    $text=htmlspecialchars($text); 
    if(trim($name)!='' && trim($email)!='' && trim($telefon)!='' && trim($text)!='')
    {
    	$query="insert into messages (name,email,telefon,text,seen) values ('$name','$email','$telefon','$text','0')";
    	if($conn->query($query)===TRUE)
    		{echo "<p style='background:green;text-align:center;width:80%;padding:6px 0;border-radius:6px;color:#fff'>Mesaj trimis!</p>"; 


         }
    	else
    		echo "<p style='background:red;text-align:center;width:80%;padding:6px 0;border-radius:6px;color:#fff'>Eroare!</p>";
    }
    else 
    	echo "<p style='background:red;text-align:center;width:80%;padding:6px 0;border-radius:6px;color:#fff'>*Toate campurile sunt obligatorii</p>";

   }
?></div>
	</form>
	   </div>
<style type="text/css">.inputP input {border:1px solid #ddd;border-radius: 2px; padding: 5px;}
   .titleP{color:#800000;padding-left: 50px;margin-bottom: 30px;margin-top: -40px;}
</style>
<div class="col-sm-4 " style="padding-left: 60px">
<b style="color:#800000">
<h3> <span class="glyphicon glyphicon-map-marker"> </span> Adresa</h3></b><br>
<b>
<p><span class="glyphicon glyphicon-globe"></span>  Str. Petre Andrei Nr. 15</p>
<p> <span class="glyphicon glyphicon-phone"></span>  Telefon : 0752747893</p>
<p> <span class="glyphicon glyphicon-envelope"></span>  Email : smartconstruct@yahoo.com </p><br><br>
<p><i>Doriti sa aveti o casa de vis?<br><br>
Specialistii nostri va stau la dispozitie. Folositi cu incredere formularul de contact si in cel mai scurt timp veti primi o oferta personalizata, care se va mula perfect pe nevoile dumneavoastra.</p></b></i>
</div>
</b>


</div>

 <?php include("includes/footer.php");?>
 <?php include("includes/scripts.php");?>

  </body>
</html>
