<?php
include 'BDD/fonctionsBDD.php';

$SQL = "SELECT * from account_info";

$reponse = interro($SQL);
while ($ligne = $reponse->fetch(PDO::FETCH_OBJ))
{
?>
<p>
			Connexion réussie : </strong><?php echo $ligne; ?>	
</p>

<?php 
}

$reponse->closeCursor();
?>