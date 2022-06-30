<?php namespace App\Controllers;

class Student extends BaseController {

    public function index(){
        if(!$this->session->has('sess_student')){
            return redirect(site_url(['login']));
        }
    }
}