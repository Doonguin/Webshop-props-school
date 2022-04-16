<?php

error_reporting(0);

include 'db.php';

$sql = "select * from `users`";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if($row['ID'] == $_GET['id']) {
        echo "<tr>";
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="user_name" value="'. $row['user_name'] .'"></td>';
        echo '<td><input type="email" class="form-control" name="email" value="'. $row['email'] .'"></td>';
        echo "<td>" . $row['registered_on'] . "</td>";
        echo '<td><input type="text" class="form-control" name="role" value="'. $row['role'] .'"></td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="'. $row['ID'] .'">';
        echo '</form>';
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['registered_on'] . "</td>";
        echo "<td>" . $row['role'] . "</td>";
        echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['ID'] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['ID'] . '" role="button">Delete</a></td>';
        echo "</tr>";   
    }
}

$conn->close();

?>