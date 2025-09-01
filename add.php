<?php
include 'db.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $steps = $_POST['steps'];
    $conn->query("INSERT INTO recipes(name, ingredients, steps) VALUES('$name','$ingredients','$steps')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Recipe</h1>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Ingredients:</label><br>
        <textarea name="ingredients" required></textarea><br>
        <label>Steps:</label><br>
        <textarea name="steps" required></textarea><br>
        <button type="submit" name="submit">Add Recipe</button>
    </form>
</body>
</html>
