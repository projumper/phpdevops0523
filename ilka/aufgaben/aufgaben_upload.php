<?php
require_once("db.php");
require_once("top.php");
function isValidPDF($mime) {
    return strpos($mime, 'json') !== false;
}

if(isset($_POST["submit"])) {
    $contentType = $_FILES['datei']['type'];
    $contentName = $_FILES["datei"]['name'];
    $file  = fopen($_FILES["datei"]['name'], "r");

    $target_file = basename($_FILES["datei"]["name"]);

    if ($_FILES["datei"]["size"] < 5000000 && isValidPDF($contentType))
    {
        move_uploaded_file($_FILES["datei"]["tmp_name"], $target_file);

        $data = file_get_contents($contentName);
        $lines = json_decode($data, true);
    
        while(($line = fgets($file)) !== false)
        {
            $lines[] = $line;
        
            $sql = "INSERT INTO aufgaben (titel, beschreibung, faelligkeitsdatum)" .
            " VALUES ('" . $lines['titel'] . "', '" . $lines['beschreibung'] . "','" . $lines['faelligkeitsdatum'] . "')";
    
            if ($conn->query($sql) === TRUE) {
                echo "Datei hochgeladen.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    else
        echo "<p>falsche Größe oder falsches Format</p><br>";
}
?>
<form action="aufgaben_upload.php" method="post" enctype="multipart/form-data">
    Datei: <input type="file" name="datei"> 
    <input type="submit" name="submit" value="Speichern">
</form>
<?php
require_once("bottom.php");