<?php
namespace App\Libraries;

class Admin {

    public function title($params){
        if($params['title'])
            return view('oirp/cmps/nav_title', $params);
    }

    public function admtitle($params){
        if($params['title'])
            return view('admin/cmps/title', $params);
    }

}