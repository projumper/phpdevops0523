<?php 

include "config.php";
include "task.php";

  if (isset($_POST['submit'])) {

    $title = $_POST['title'];

    $description = $_POST['description'];

    $created_at = $_POST['created_at'];

    $updated_at = $_POST['updated_at'];

    

    $sql = "INSERT INTO `tasks`(`title`, `description`, `created_at`, `updated_at`) VALUES ('$title','$description','$created_at','$updated_at')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Add Task</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Information:</legend>

    title:<br>

    <input type="text" name="title">

    <br>

    description:<br>

    <input type="text" name="description">

    <br>

    created_at:<br>

    <input type="text" name="created_at">

    <br>

    updated_at:<br>

    <input type="text" name="updated_at">

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>