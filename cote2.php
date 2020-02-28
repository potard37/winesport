<html>
<center>
<h1 class="">Liste des matchs</h1>
<form class="cotes" action="" method="post">

<div style="margin-top:30px">
  <input type="radio" id="Vitality" name="cote_vitality" value="1.5">
  <label for="Vitality">Team Vitality</label>
  <input type="radio" id="Cloud" name="cote_cloud" value="3">
  <label for="Cloud">Cloud 9</label><br>
</div>

<div style="margin-top:30px;">
  <input type="radio" id="WeForge" name="cote_WeForge" value="1.5">
  <label for="WeForge">WeForge</label>
  <input type="radio" id="ZephyrEsport" name="cote_ZephyrEsport" value="3">
  <label for="ZephyrEsport">ZephyrEsport</label><br>
</div>

<div>
 	<h3>Votre mise</h3>
 	<input type="number" name ="mise"> euros</input>
</div>
<div>
	<input style="margin-top:30px;padding:10px;" type="submit" name="valider" value="Valider">
</div>

<?php
  if(isset($_POST['valider'])){
  	// Si la mise n'est pas mentionnez alors j'affiche un message d'erreur
  	if (empty($_POST['mise']))
  		echo "Mentionnez la mise que vous voulez jouer";

  	if(isset($_POST['cote_vitality']) AND isset($_POST['cote_cloud']))
  		echo "Vous ne pouvez pas parrier pour deux équipes qui jouent contre";

  	if(isset($_POST['cote_WeForge']) AND isset($_POST['cote_ZephyrEsport']))
  		echo "Vous ne pouvez pas parrier pour deux équipes qui jouent contre";

  	// Si Vitality est selectionné mais le second pari n'est pas coché, alors je gere juste la cote de Vitality et je fais une multiplication avec la mise
    if(isset($_POST['cote_vitality']) AND !isset($_POST['cote_WeForge'])  AND !isset($_POST['cote_ZephyrEsport']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_vitality']*$_POST['mise']." euros";

	// Si Cloud9 est selectionné mais le second pari n'est pas coché, alors je gere juste la cote de Cloud9 et je fais une multiplication avec la mise
    elseif(isset($_POST['cote_cloud']) AND !isset($_POST['cote_WeForge'])  AND !isset($_POST['cote_ZephyrEsport']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_cloud']*$_POST['mise']." euros";

    // Si NRG est selectionné mais le second pari n'est pas coché, alors je gere juste la cote de NRG et je fais une multiplication avec la mise
    elseif(isset($_POST['cote_WeForge']) AND !isset($_POST['cote_cloud'])  AND !isset($_POST['cote_vitality']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_WeForge']*$_POST['mise']." euros";

    // Si TSM est selectionné mais le second pari n'est pas coché, alors je gere juste la cote de TSM et je fais une multiplication avec la mise
    elseif(isset($_POST['cote_TSM']) AND !isset($_POST['cote_vitality'])  AND !isset($_POST['cote_cloud']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_ZephyrEsport']*$_POST['mise']." euros";

    // Si NRG et Vitality sont cochées, alors je fais le calcul et j'affiche
	elseif(isset($_POST['cote_WeForge']) AND isset($_POST['cote_vitality']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_WeForge']*$_POST['cote_vitality']*$_POST['mise']." euros";

	// Si NRG et Cloud9 sont cochées, alors je fais le calcul et j'affiche
	elseif(isset($_POST['cote_WeForge']) AND isset($_POST['cote_cloud']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_WeForge']*$_POST['cote_cloud']*$_POST['mise']." euros";

	// Si TSM et Vitality sont cochées, alors je fais le calcul et j'affiche
	elseif(isset($_POST['cote_ZephyrEsport']) AND isset($_POST['cote_vitality']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_ZephyrEsport']*$_POST['cote_vitality']*$_POST['mise']." euros";

	// Si TSM et Cloud9 sont cochées, alors je fais le calcul et j'affiche
	elseif(isset($_POST['cote_ZephyrEsport']) AND isset($_POST['cote_cloud']) AND !empty($_POST['mise']))
        echo "Votre gain potentiel est de ".$_POST['cote_ZephyrEsport']*$_POST['cote_cloud']*$_POST['mise']." euros";
	}
 ?>
</form>
</center>
</html>
