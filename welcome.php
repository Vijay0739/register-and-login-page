<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>


<body style="background-color:lightblue;"

<?php 

echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";

?><br>
<a href="logout.php">Logout</a>
</body>
</html>




   
