<?php

namespace App\Controllers;

class Adminer extends BaseController
{
    public function index($page = false, $param = [])
    {
        if($page){
            call_user_func(array($this,$page));
        } else {
        // return view('welcome_message');
            $data['title'] = 'Tableau de bord';
            $data['table'] = '';
            return view('admin/dashboard', $data);            
        }

    }


}
