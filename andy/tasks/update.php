<?php 

include "config.php";
include "task.php";

    if (isset($_POST['update'])) {

        $title = $_POST['title'];

        $id = $_POST['id'];

        $description = $_POST['description'];

        $created_at = $_POST['created_at'];

        $updated_at = $_POST['updated_at'];


        $sql = "UPDATE `tasks` SET `title`='$title',`description`='$description',`description`='$description',`created_at`='$created_at',`updated_at`='$updated_at' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `tasks` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $title = $row['title'];

            $description = $row['description'];

            $created_at = $row['created_at'];

            $updated_at  = $row['updated_at'];

            $id = $row['id'];

        } 

    ?>

        <h2>Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>information:</legend>

            title:<br>

            <input type="text" name="title" value="<?php echo $title; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            description:<br>

            <input type="text" name="description" value="<?php echo $description; ?>">

            <br>

            created_at:<br>

            <input type="text" name="created_at" value="<?php echo $created_at; ?>">

            <br>

            updated_at:<br>

            <input type="text" name="updated_at" value="<?php echo $updated_at; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 