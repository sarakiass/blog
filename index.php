<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
       <title>Mon blog!</title>
 </head>
<body>
 <h3>Dernies billets du blog:</h3>
 <?php
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=blog;charset=UTF-8,'root'');
}
 catch (Exception $e)
 {
    die ('Erreur:' .$e->getMessage());
 }
?>










 </body>
 </html>