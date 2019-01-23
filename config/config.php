<?php
if (!getallheaders()['Authorization']&& \strpos($_SERVER['REQUEST_URI'], 'getToken?') === false){
    http_response_code(404);
    echo 'unauthorized';
    die();
}
/// SETUP - NEED TO BE CHANGED
$GLOBALS['token'] = getallheaders()['Authorization'];
$GLOBALS['domainname'] = 'http://localhost/moodle';
$functionname = 'core_user_create_users';

// REST RETURNED VALUES FORMAT
$GLOBALS['restformat'] = 'json'; //Also possible in Moodle 2.2 and later: 'json'