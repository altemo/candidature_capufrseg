<?php

namespace App\Controllers;

//use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'Tableau de bord';
        $data['table'] = '';
        return view('admin/dashboard', $data);
    }
}
