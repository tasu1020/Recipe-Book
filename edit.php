<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM recipes WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $steps = $_POST['steps'];
    $conn->query("UPDATE recipes SET name='$name', ingredients='$ingredients', steps='$steps' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Recipe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Recipe</h1>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
        <label>Ingredients:</label><br>
        <textarea name="ingredients" required><?= $row['ingredients'] ?></textarea><br>
        <label>Steps:</label><br>
        <textarea name="steps" required><?= $row['steps'] ?></textarea><br>
        <button type="submit" name="submit">Update Recipe</button>
    </form>
</body>
</html>
