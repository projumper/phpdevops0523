<?php
function isValidPDF($mime) {
    return strpos($mime, 'pdf') !== false;
}

if(isset($_POST["submit"])) {
    $contentType = $_FILES['datei']['type'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["datei"]["name"]);

    if ($_FILES["datei"]["size"] < 5000000 && isValidPDF($contentType))
    {
        move_uploaded_file($_FILES["datei"]["tmp_name"], $target_file);
        echo "<p>Bild hochgeladen</p><br>";
    }
    else
        echo "<p>falsche Größe oder falsches Format</p><br>";
}
?>
<form action="hochladen.php" method="post" enctype="multipart/form-data">
    Datei: <input type="file" name="datei"> 
    <input type="submit" name="submit" value="Speichern">
</form>