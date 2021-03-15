<?php

$_srv= $_SERVER['PHP_SELF'];

if(!isset($_POST['submit']))
{
	$_output= "<h1>Aanmeldings formulier</h1>
	
	<form method=POST action=$_srv>
	<label>Voornaam &amp; Naam </label></br>
	<input type=text name=vNaam placeholder='voornaam'>
    &nbsp;&nbsp;
    <input type=text name=aNaam placeholder='achternaam'>
    <br><br>
	
	<label>adres</label></br>
    <input type=text name=straat size=45 placeholder='straat + nr'>
    <br>
    <input type=text name=postcode placeholder='postcode'>
    &nbsp;&nbsp;&nbsp;
    <input type=text name=gemeente placeholder='Gemeente'>
    <br><br>

  <label>Geboortedatum</label></br>
    <input type=date name=gebDatum>
    <br><br> 

  <label>vrouw &nbsp;/&nbsp;&nbsp;man</label>
    <br>&nbsp&nbsp
    <input type=radio name=sex value='vrouw' checked>
    &nbsp;&nbsp;/&nbsp;&nbsp;
    <input type=radio name=sex value='man'>
    <br><br>

	<label>email</label><br>
    <input type=email name=mail size=45>
    <br><br><label>telefoon</label><br>
    <input type=tel name=tel size=45>
    <br><br>

	<label>Info</label><br>
     <textarea name=info cols=44>
     </textarea>
     <br><br>

	<input type=submit name =submit value=Verzenden >
  </form>";
}
else
{
	
	$_vNaam= $_POST['vNaam'];
	$_aNaam= $_POST['aNaam'];
	$_straat= $_POST['straat'];
	$_postcode= $_POST['postcode'];
	$_gemeente= $_POST['gemeente'];
	$_geslacht= $_POST['sex'];
	$_email= $_POST['mail'];
	$_telefoon= $_POST['tel'];
	$_info= $_POST['info'];
	$_gebDatum=$_POST["gebDatum"]!=""?$_POST["gebDatum"]:"00-00-00";

	list($_jaar, $_maand, $_dag) = explode("-",$_gebDatum,3);

	
	$_output =
		"<h1>Verificatie</h1>
    <coördinaten:<br>
    $_vNaam &nbsp;&nbsp; $_aNaam
    <br><br>
    $_straat
    <br>
    $_postcode&nbsp;&nbsp;$_gemeente
    <br><br>
    geslacht: $_geslacht
    <br><br>
    geboortedatum: $_dag / $_maand / $_jaar
    <br><br>
    email:$_email
    <br>
    telefoon:$_telefoon
    <br><hr>
    $_info
    <hr><br>";
}


echo($_output);
?>