<?php namespace App\Controllers;

class Login extends BaseController {

    // Main entry point
    public function index(){

        // Verifier qu une session utilisteur existe
        if($this->session->has('sess_student')){
            return redirect(site_url(['student']));
        }

        // Redirect to login connection
        $data['form'] = view("student/login/login_form", [],[], ['saveData' => true]);
		return view('student/login/login_index', $data);
        exit;
    }

    // New Account
    public function account(){

        // Verifier qu une session utilisteur existe
        if($this->session->has('sess_student')){
            return redirect(site_url(['etudiant']));
        }

        // Redirect to login connection
        $data['form'] = view("student/login/register_form", [],[], ['saveData' => true]);
		return view('student/login/login_index', $data);
        exit;
    }

    // Add Account
    public function add_account(){

    }

    // New Ajax connection 
    public function new_connection(){

    }

}