<?php

	$setting='mysql:host=localhost;dbname=chat';
	$user='root';
	$mdp='';
	$database=new PDO($setting,$user,$mdp);
	$result=$database->prepare("INSERT INTO userchat(pseudo,message) VAlUES(?,?);");
	  
	  if(isset($_POST['nom']) && isset($_POST['message']))
	  {
	      $pseudo=htmlspecialchars($_POST['nom']);
	      $message=htmlspecialchars($_POST['message']);
	      if (!empty($pseudo) && !empty($message))
	        {
	             $reponse= $result->execute(array($pseudo,$message));
	              header('location: minichat.php'); 

	        }

	  }






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
		   
  
               



		    <footer >
		    	<?php  include('footer.php');?>	 
		    </footer>


	

</body>
</html>