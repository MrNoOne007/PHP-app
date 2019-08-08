<?php include('configDB.PHP'); ?>

<?php
session_start();

// if (!isset($_SESSION['username'])) {
//     $_SESSION['msg'] = "You must log in first";
//     header('location: login.php');
// }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="header">
        <h2>Home Page</h2>
    </div>
    <?php $results = mysqli_query($db, "SELECT * FROM users");?>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
   
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['']; ?></td>
                <td><?php echo $row['']; ?></td>
                <td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>