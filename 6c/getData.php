<?php 
include 'conn.php';
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Cashier</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Acttion</th>

        </tr>
    </thead>
    <tbody>
    <?php 
    $sql = "SELECT * from product, category , cashier where category.id_category = product.id_category and cashier.id_cashier = product.id_cashier";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        ?>
            <tr>
        
                <th scope="row"><?php echo $row["id"] ?></th>
                <td><?php echo $row["name_cashier"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["name_category"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><a onclick="getUserDetails(<?php echo $row["id"] ?>)" > <font color=lightgreen>Edit</font></a>
                |
                <a onclick="deleteUser(<?php echo $row["id"] ?>)" ><font color=red>Delete</font></td>
            </tr>
        <?php }
        } ?>
    </tbody>
</table>