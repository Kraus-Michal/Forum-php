<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if (isset($_GET["id"])) {
    
    $sql = " DELETE FROM articles WHERE id_art = ".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    if($result){
    header("Location: index.php");
    exit;
}else{
        
        echo '<script>       window.location.href = "logowanie.php";       alert("Nastąpił problem z usuwaniem")       </script>';
       
}
  }



?>