<?php

class userController extends Controller {



    public function getListUserByField ($request){

        $functionname = 'core_user_get_users_by_field';

        $params = implode(array_map(
            function ($v, $k) { return sprintf("&values[%s]=%s", $k, $v); },
            $request['values'],
            array_keys($request['values'])
        ));

        $this->response($functionname,'&field='.$request['field'].$params);
    }
}