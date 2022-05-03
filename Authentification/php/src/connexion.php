<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentification</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
     <p>Authentification</p>
    </div>

    
<br><br><p style="color: green;">
<?php


$conn=mysqli_connect('db','MYSQL_USER','MYSQL_PASSWORD') or die("Database Error");
mysqli_select_db($conn,'MYSQL_DATABASE');

//INSERT INTO `user` (`id`, `login`, `password`) VALUES (NULL, 'Karima_Isi_SSII', 'loyhtJ35Aq87Bm9jBxi');

$requete = mysqli_query($conn, "select login, password from  `user`");

$data=mysqli_fetch_array($requete);



$login = $data['login'];
$password = $data['password'];


$login_user = $_POST['login'];
$password_user = $_POST['password'];


if( (isset($login_user) && $login_user ==$login ) && ( isset($password_user ) && $password_user ==$password) )
{
	echo " Merci vous etes connecté!";
}else{
	echo "Login / Mot de passe invalid!";
}


?>
   
<div id="formFooter">
      <a class="underlineHover" href="#"></a>
    </div>

  </div>
</div>


</body>
</html>
