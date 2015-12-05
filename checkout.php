<?php

session_start();

$totalp = isset($_GET['totalp']) ? $_GET['totalp'] :0;
if(!empty($_SESSION["order"])) {
  $_SESSION["order"]["totalprice"]=$totalp;
}else {
 
  $_SESSION["order"] = array("totalprice" =>$totalp);
}
header('Location: payment.php');


?>