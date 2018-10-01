<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form_coba</title>
</head>
<body>
<?php
if(!empty($_SESSION["aidi"]) && !empty($_SESSION["paswrd"])) {
    header("location:sekarang.php");
}
echo "aidinya bentar<br>";
    echo "passwordnya caridigoogle<br>";
?>
    <h1>Form</h1>
    <form action="set.php" method="POST">
    <input type="text" name="aidi">
    <input type="text" name="paswrd">
    <input type="submit" value="submit">
    </form>
</body>
</html>