<?php
$nom=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user.user (username, email, password)
    VALUES ('$nom', '$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-style.css">
    <title>Document</title>
</head>
<body>
    <h2>faut voir</h2>
<?php
var_dump($_POST);

?>
</body>
</html>
