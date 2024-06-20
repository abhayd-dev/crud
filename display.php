<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br/><br/><br/><br/><br/>
    <div class = "container">
    <button class="btn"><a href="form.php">Add user</a>
</button><br/>
<table border="1" rules="all">
    <caption>Simple Table</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John</td>
            <td>25</td>
            <td>USA</td>
            <td>Engineer</td>
            <td>john@example.com</td>
        </tr>
        <?php
        $sql = "SELECT * from emps";
        $resultSet = mysqli_query($conn,$sql);
        $row_count = mysqli_num_rows($resultSet);
        ?>
              <?php if ($row_count > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($resultSet)) {?>
        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
        </tr>
        <?php  } ?>
        <?php  endif; ?>
    </tbody>
</table>
</div>
</body>
</html>