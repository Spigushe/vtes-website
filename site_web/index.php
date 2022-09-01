<?php
// ROUTE
$route = ($_SERVER['REQUEST_URI'] == "/") ? "/index" : $_SERVER['REQUEST_URI'];
$route = preg_split("/\?/",$route)[0];
$page  = "./template" . $route . ".php";

// CONTROLER
include("./template/_elements.php");
include("./template/_header.php");
if (!is_file($page)) {
    require("./template/404.php");
} else {
    require($page);
}
include("./template/_footer.php");

?>
