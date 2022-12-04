<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$_SESSION['user']="Gatogo";
echo $_SESSION['user'];

?>


    <h1>Iam <?php echo $_SESSION['user'] ; ?></h1>
    <a href="common/day_activity.php">ok</a>
</body>
</html>