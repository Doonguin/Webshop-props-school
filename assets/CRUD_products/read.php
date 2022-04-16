<?php

error_reporting(0);

include 'db.php';

$sql = "select * from `products`";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if($row['ID'] == $_GET['id']) {
        echo "<tr>";
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="Pname" value="'. $row['product_name'] .'"></td>';
        echo '<td><input type="number" class="form-control" name="Pprice" value="'. $row['product_price'] .'"></td>';
        echo '<td><input type="text" class="form-control" name="Pdesc" value="'. $row['product_desc'] .'"></td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="'. $row['ID'] .'">';
        echo '</form>';
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row['product_price'] . "</td>";
        echo "<td>" . $row['product_desc'] . "</td>";
        echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['ID'] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['ID'] . '" role="button">Delete</a></td>';
        echo "</tr>";   
    }
}

$conn->close();

?>