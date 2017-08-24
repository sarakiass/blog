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
    $reponse=$bdd->query('SELECT id,titre,contenu,DATE_FORMAT(date,'%d%m%Y %Hh%imin%ss') AS date_création FROM billets ORDER BY date_création DESC LIMIT 0,1'); 
    while ($donnees=$reponse->fetch())
    {
    	?>

    <h4>
    	<?php echo htmlspecialchars($donnees['titre']);?>
    	<strong>le <?php echo $donnees['date_création'];?></strong>
    </h4>
<p>
 <?php echo $donnes['contenu'];?></br>
 <a href="commentaires.php"> commentaires</a>

</p>
<?php 
}
$req->closeCursor();
?>








 </body>
 </html>