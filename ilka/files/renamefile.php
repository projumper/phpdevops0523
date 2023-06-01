<?php
$file  = fopen("text.txt", "r");

if ($_POST)
{
    rename ("text.txt", $_POST['neuername']);
}
?>
<form action="renamefile.php" method="post">
Neuer Name: <input type="text" name="neuername">
<input type="submit" value="abschicken">
</form>