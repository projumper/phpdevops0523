<?php
require_once("inhalt.php");
require_once("header.php");
?>
<p><br></p>
<?php
echo $content;
echo"<br><br>";
?>
<form action="" method="post">
    E-Mail: <input type="text" name="mail"><br> 
    <input type="submit" value="Senden">
</form>
<p><br></p>
<?php
require_once("footer.php");