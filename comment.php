<?php


   
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    echo "<h1> write this code in the nameinput </h1>" . htmlspecialchars(" →  <h1 class='g'>mohamed</h1> <style> .g{ color: aquamarine; } </style> ← ")  . "<br>";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"]??"";
    $code = NULL;
     echo "→ the unsafe result : "."<br>";
    echo "<hr>". " $name" . "<hr>"."<br>";
    echo  " → the safe result :"."<br>";
    echo "<hr>". htmlspecialchars("$name") . "<hr>" ."<br>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
  align-content: center;
  text-align: center;
}
</style>
<body>

<form action="" method="post">
<input type="text" name="name" placeholder="name">
<input type="submit">

</form>
</body>
</html>