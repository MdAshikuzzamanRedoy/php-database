<?php

 include 'DbConnect.php' ;

function login ($username, $password) { 
   $conn = connect () ;
$stmt = $conn->prepare("SELECT * FROM USERS WHERE username =redoy  and password =123 ") ;
$stmt-> bind_param(" ss",  $username, $password) ;
$stmt->execute() ;
$records = $stmt ->get_result () ;
return $records ->num_rows === 1 ;
}
?>