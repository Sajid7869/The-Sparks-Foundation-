<?php 
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>User Data and Amount</title>
    
</head>
<body>
<h1>USER DATA AND AMOUNT</h1>
    <hr>
    <table >
        <tr id="header">
            <th>id</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Balance</th>
            <th>Operation</th>
        </tr>
        <?php 
            while($rows=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['Name']?></td>
            <td><?php echo $rows['Email']?></td>
            <td><?php echo $rows['Balance']?></td>
            <td><a href="transfermoney.php?id= <?php echo $rows['id'] ;?>" class="btn">TRANSFER MONEY</a></td>   
        </tr>
        <?php
            }
        ?>
            
    </table>
    <ul class="menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="transferhistory.php">TRANSACTION HISTORY</a></li>
    </ul>
</body>
</html>