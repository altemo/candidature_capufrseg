<?php

namespace App\Controllers;

use App\Models\DiplomeModel;
use App\Controllers\BaseController;

class Page extends BaseController
{

    public function index(){
        $data['title'] = 'O.I.R.P - Accueil';
        //$data['table'] = '';
        return view('oirp/pages/home', $data);
    }

    public function apropos() {
        $data['title'] = 'O.I.R.P - A propos';
        //$data['table'] = '';
        return view('oirp/pages/apropos', $data);
    }

    public function mediatheque($type) {
        $data['title'] = 'O.I.R.P - M&eacute;diath&egrave;ques';
        //var_dump($this->request);exit;
        $data['request'] = $this->request;
        return view('oirp/pages/mediatheque', $data);
    }

    public function event($type=null) {
        $data['title'] = 'O.I.R.P - &eacute;v&egrave;nements';
        //$data['table'] = '';
        return view('oirp/pages/event', $data);
    }

    public function contactus($type=null) {
        $data['title'] = 'O.I.R.P - Contacts';
        //$data['table'] = '';
        return view('oirp/pages/contactus', $data);
    }

    public function pwords($type=null) {
        $data['title'] = 'O.I.R.P - Mot du pr&eacute;sident';
        //$data['table'] = '';
        return view('oirp/pages/pwords', $data);
    }

    public function faq($type=null) {
        $data['title'] = 'O.I.R.P - F.A.Q';
        //$data['table'] = '';
        return view('oirp/pages/faq', $data);
    }

    public function team($type=null) {
        $data['title'] = 'O.I.R.P - Notre &eacute;quipe';
        //$data['table'] = '';
        return view('oirp/pages/team', $data);
    }

    public function cause($page = false){
        if(!$page)
            $page = 'index';
        $data['title'] = 'O.I.R.P - Causes';
        $data['page_content'] = view("oirp/pages/cause/$page", [],[], ['saveData' => true]);
        return view('oirp/pages/cause', $data);
    }

    public function certificat(){
        $post_data = $this->request->getVar();
        var_dump($post_data);exit;
        $diplome = new DiplomeModel();
    }

    public function ambassadeur(){
        $data['title'] = 'O.I.R.P - Ambassadeurs de la Paix';
        //$data['table'] = '';
        $data['page_content'] = view("oirp/pages/ambassadeur/ambassadeur", [],[], ['saveData' => true]);
        return view('oirp/pages/ambassadeur', $data);
    }

    public function donate(){
        $data['title'] = 'O.I.R.P - Don';
        //$data['table'] = '';
       // $data['page_content'] = view("oirp/pages/ambassadeur/ambassadeur", [],[], ['saveData' => true]);
        return view('oirp/pages/donate', $data);
    }

}
