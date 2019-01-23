<?php

class baseController extends curl{

    public function response($functionname,$params){
        header('Content-Type: application/json');
        $serverurl = $GLOBALS['domainname'] . '/webservice/rest/server.php'. '?wstoken=' . $GLOBALS['token'] . '&wsfunction='.$functionname;
        $restformat = ($GLOBALS['restformat'] == 'json')?'&moodlewsrestformat=' . $GLOBALS['restformat']:'';
        $resp = parent::post($serverurl . $restformat . $params);

        print_r($resp);
    }
}