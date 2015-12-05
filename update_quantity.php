<?php
session_start();
 
// get the product id
$id = isset($_GET['item_to_adjust']) ? $_GET['item_to_adjust'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$updatedquantity = isset($_GET['updatedquantity']) ? $_GET['updatedquantity'] : "";
 
if(!empty($_SESSION["cart_items"])) {
    foreach($_SESSION["cart_items"] as $k => $v) {  
        if($id == $k) 	{
            $_SESSION["cart_items"][$k]["quantity"] = $updatedquantity;
        }
    }
}
header('Location: cart.php?action=quantity_updated&id' . $id . '&name=' . $name.'&quantity='.$updatedquantity);

?>
 
