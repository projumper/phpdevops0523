<?php
require_once("inhalt.php");
require_once("header.php");

if ($_POST){
    echo "Ihre E-Mail-Adresse wurde eingetragen.";
}
?>
<p><br></p>
<?php 
echo $content;
echo"<br><br>";
?>
<form action="index.php" method="post">
    E-Mail: <input type="text" name="mail"> 
    <input type="submit" value="Abonnieren">
</form>
<p><br></p>
<?php
require_once("footer.php");