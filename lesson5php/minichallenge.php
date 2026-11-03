<!DOCTYPE html>
<table border="1">
    <tr>
        <th>Shoes</th>
        <th>In Stock</th>
        <th>Sold</th>
    </tr>

<style>
    table {
        border-collapse: collapse;
        width: 30%;
        font-family: Arial;
        background-color: #ffffff;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #cccccc;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    td {
        color: #333333;
    }

    tr:hover {
        background-color: #d1e7f5;
    }
    
</style>

<?php
$shoes = array(
    array("Nike", 10, 5),
    array("Adidas", 8, 3),
    array("Puma", 12, 7),
    array("Reebok", 6, 2),
);

for ($row = 0; $row < 4; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td>" . $shoes[$row][$col] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>