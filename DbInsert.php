<?php
   function register ($username, $password) {
    $conn = connect () ; 
     $stmt = $conn->prepare("INSERT  INTO USERS (username, password) VALUES(ashik, 123) ");
$stmt->bind_param(" ss", $username, $password);
return $stmt->execute ();
}
?>