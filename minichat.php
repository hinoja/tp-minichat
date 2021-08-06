<?php
session_start();

/*try
{

}
catch(Exception $e)
{
 die('Erreur :.$e->getMessage())';
  
}*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="bootstrap/CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
     <script  src="bootstrap/jquery-3.4.1.min.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
    
	<title></title>
</head>
<body>
			<header> 	 
			 <?php  include('header.php');?>	 
			</header>
			<div class="container-fluid" style="background-color: red; "> </div>
			<div class="container-fluid corps">
				
				<br><br>
				<div class="">
					<img src="images/ken.jpg" class="img-circle">
				</div>
		                <div class="container ">
		                	<br>
			                	<div class="col-xs-4"></div>
			                	<div class="col-xs-4">
				                	<form class="form-group"method="POST" action="minichat_post.php">

				                		<label for="nom">Pseudo</label>
				                      	<input type="text" name="nom" class="form-control" autocomplete="off">

				                        <label for="message">Message</label>
				                      	<input type="text" name="message" class="form-control" autocomplete="off">
				                      	<br>
				                      	<input type="submit" value="send" class="btn btn-danger">

				                	</form>
			                   </div>
		                </div>
		     </div>
             <div class="container-fluid  " style=background-color:yellow;height: 20px;></div>

		     <div class="container-fluid orange">
		     	<br>
		     	<br>
		     	  <div class="container jeux">
			     	<?php 

			     		$setting='mysql:host=localhost;dbname=chat';
						$user='root';
						$mdp='';
                        $database=new PDO($setting,$user,$mdp);
				/*
					$result=$database->Query("SELECT * FROM userchat ORDER BY  ID  LIMIT 0 10 ;");
 
                        while ($donnees = $result->fetch())
                         {
                           echo $donnees['message']."<br>";
                         }

                  */       


                        $result2=$database->QUERY("SELECT pseudo,message FROM userchat GROUP by id DESC LIMIT 0,10  ");
	                     
                        while ($donnees = $result2->fetch())
                         {
                           echo "<strong>".htmlspecialchars($donnees['pseudo'])."</strong> : ".htmlspecialchars($donnees['message'])."<br>";
                         }

			     	 ?>
                  </div>
                  <<br>
                  <br>

		     </div>


		    <footer>
		    	<?php  include('footer.php');?>	 
		    </footer>


	

</body>
</html>