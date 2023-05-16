<!DOCTYPE html>
<html>
<head>
  <title>Aufgabenverwaltungssystem</title>
</head>
<body>
  <h1>Aufgabenverwaltungssystem</h1>

  <h2>Neue Aufgabe hinzufügen</h2>
  <form action="add_task.php" method="POST">
    <label for="title">Titel:</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Beschreibung:</label>
    <textarea id="description" name="description" required></textarea>

    <button type="submit">Aufgabe hinzufügen</button>
  </form>

  <h2>Aufgabenliste</h2>
  <ul>
    
<?php

include_once("task.php");
include_once("taskmanager.php");
      // Code zum Abrufen der Tasks und Anzeigen in der Liste




      




  