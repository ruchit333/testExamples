<?php
session_start();
include_once("config.php");

//add item in shopping cart
if (isset($_POST["type"]) && $_POST["type"]=='add') {
    $product_code = filter_var($_POST["product_code"], FILTER_SANITIZE_STRING); //product code
    $return_url = base64_decode($_POST["return_url"]); //return url

    //MySqli query - get details of item from db using product code
    $query = "SELECT product_name,price FROM products "
           . "WHERE product_code='$product_code' LIMIT 1 ";
    $results = $mysqli->query($query);
    $obj = $results->fetch_object();

    if ($results) { 
    //we have the product info 
    //prepare array for the session variable

        $new_product = array(
            array(
                'name'=>$obj->product_name,
                'code'=>$product_code,
                'qty'=>1,
                'price'=>$obj->price
            )
        );

        //if we have the session 
        if (isset($_SESSION["products"]))  {
            $found = false; //set found item to false

            //loop through session array
            foreach ($_SESSION["products"] as $cart_itm) {

                //the item exist in array
                if ($cart_itm["code"] == $product_code) { 

                    //increase the quantity
                    $qty = $cart_itm["qty"]+1; 
                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$qty, 'price'=>$cart_itm["price"]);
                    $found = true;
                } else {

                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
                }
            }

                if($found == false) //we didn't find item in array
                {
                    //add new user item in array
                    $_SESSION["products"] = array_merge($product, $new_product);
                } else {

                    //found user item in array list, and increased the quantity
                    $_SESSION["products"] = $product;
                }

        } else {
            //create a new session var if does not exist
            $_SESSION["products"] = $new_product;
        }		
    }

    //redirect back to original page
    header('Location:'.$return_url);
}

//remove item from shopping cart
if (isset($_GET["removep"])
    && isset($_GET["return_url"])
    && isset($_SESSION["products"])
) {
    $product_code = $_GET["removep"]; //get the product code to remove
    $return_url = base64_decode($_GET["return_url"]); //get return url
	
    //loop through session array var
    foreach ($_SESSION["products"] as $cart_itm) {
        
    //item exist in the list
        if ($cart_itm["code"]==$product_code){ 

                //continue only if quantity is more than 1
                //removing item that has 0 qty
            if ($cart_itm["qty"]>1) {
                $qty = $cart_itm["qty"]-1; //just decrese the quantity
                
                //prepare array for the products session
                $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$qty, 'price'=>$cart_itm["price"]);
            }

        } else {
            $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
        }

        //set session with new array values
        $_SESSION["products"] = $product;
    }
	
    //redirect back to original page
    header('Location:'.$return_url);
}
?>