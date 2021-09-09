<?php
$name = $orgType = "";
$nameErr = $emailErr = "";
if ($_SERVER["REQUEST_METHOD" == "GET"]) {
    if (empty($_GET["name"]) {
        $nameErr = "Name/Organization Name is required."
    } else {
        $name = check_input($_GET["name"]);
    }
    
}

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


// add voting choice
