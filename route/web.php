<?php

if (\strpos($_SERVER['REQUEST_URI'], 'seachUser?') !== false){
    $controller = new userController();
    $controller->getListUserByField($_GET);
    return;
}
if (\strpos($_SERVER['REQUEST_URI'], 'getToken?') !== false){
    $controller = new authController();
    $controller->getUserToken($_GET);
    return;
}
echo 'page not found';