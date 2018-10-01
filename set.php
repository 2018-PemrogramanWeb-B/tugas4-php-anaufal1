<?php
session_start();
?>
<!DOCTYPE html>
<body>
<?php
$aidi = $paswrd ="";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $aidi = test_input($_POST["aidi"]);
        $paswrd = test_input($_POST["paswrd"]);

        if($aidi == "bentar" && $paswrd == "caridigoogle") {
            $_SESSION["aidi"] = $aidi;
            $_SESSION["paswrd"] = $paswrd;
            header("location:sekarang.php");
        }
        else {
            header("location:form_coba.php");
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
</body>
</html>