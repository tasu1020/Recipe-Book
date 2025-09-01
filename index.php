<?php
include 'db.php';
$result = $conn->query("SELECT * FROM recipes");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recipe Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Recipe Book</h1>
    <a href="add.php">Add New Recipe</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Ingredients</th>
            <th>Steps</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['ingredients'] ?></td>
            <td><?= $row['steps'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
