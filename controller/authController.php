<?php
/**
 * Created by PhpStorm.
 * User: thaka
 * Date: 1/23/19
 * Time: 11:40 AM
 */

class authController extends Controller
{

    public function getUserToken($request){
        $functionname= 'moodle_mobile_app';

        header('Content-Type: application/json');
        $serverurl = $GLOBALS['domainname'] . '/login/token.php'. '?username=' . $request['username'] . '&password='.$request['password'] . '&service='.$functionname;
        $resp = parent::post($serverurl);
        print_r($resp);
    }

}