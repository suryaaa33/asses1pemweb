<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesment 1 PHP</title>
    <style>
       
    </style>
</head>
<?php
include "header.php";
include "footer.php";
if (isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "<h2> Data anda sebagai berikut </h2>";
    echo "Username :  $username <br>" ;
    echo "Password : $password <br>";

    echo '<script>
            window.location = "transaksi.php";
         </script>';
}else{


?>
<body>
<h2>LOGIN</h2>
        <form action = " " method="post">
            Username: <input type = "text" name = "username"><br>
            Password: <input type = "password" name = "password"><br>
            <br>
            <input type = "submit" name = "submit" value="Save"> 
            <input type = "reset" name = "reset" value="Cancel">
        </form>
</body>
</html>
<?php
}
?>