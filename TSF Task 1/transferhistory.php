<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="th.css">
    <title>Document</title>
</head>
<body>
   <ul class="menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="user.php">TRANSFER MONEY</a></li>
    </ul>
    <h2>TRANSACTION HISTORY</h2>
    <table>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';
            $sql ="select * from transaction";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr>
                <td><?php echo $rows['Sr no']; ?></td>
                <td><?php echo $rows['Sender']; ?></td>
                <td><?php echo $rows['Receiver']; ?></td>
                <td>Rs <?php echo $rows['Balance']; ?> </td>
                <td><?php echo $rows['Date time']; ?> </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>