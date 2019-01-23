<?php
//initial config variable
require_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";

//core files
require "curl.php";
require "baseController.php";

//route files

//app files
require $_SERVER['DOCUMENT_ROOT']."/controller/Controller.php";
require $_SERVER['DOCUMENT_ROOT']."/controller/authController.php";
require $_SERVER['DOCUMENT_ROOT']."/controller/userController.php";

