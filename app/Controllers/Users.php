<?php

namespace App\Controllers;

use App\Libraries\Crud;

class Users extends BaseController
{
    protected $crud;
/* 
        $schema, // table schema
        $base = null, //prefix uri or parrent controller.
        $action = 'add',  //determine create or update // default is create (add)
        $table, //string
        $table_title, //string
        $form_title_add, //string
        $form_title_update, //string
        $form_submit, //string
        $form_submit_update, //string
        $fields = [], //array of field options: (type, required, label),
        $id,  //primary key value
        $id_field,  //primary key field
        $current_values, //will get current form values before updating
        $db, //db connection instance
        $model, //db connection instance
        $request; */
    function __construct() {
        $params = [
            'table' => 'users',
            'dev' => false, // for schema info
            'fields' => $this->field_options(),
            'form_title_add' => 'Ajouter utilisateur',
            'form_title_update' => 'Editer utilisateur' ,
            'form_submit' => 'Valider', 
            'table_title' => 'Utilisateurs',
            'form_submit_update' => 'Valider', 
            'base' => '',
        ];

        $this->crud = new crud($params, service('request'));
    }

    public function index(){
        $page = 1;
        if (isset($_GET['page'])) {
            $page = (int) $_GET['page'];
            $page = max(1, $page);
        }

        $data['title'] = $this->crud->getTableTitle();
        //$page_number = 20;
        $per_page = 5;
        $columns = ['u_firstname', 'u_lastname', 'u_email', 'u_status'];
        $where = ['u_status'=>'active'];
        $order = [
            ['u_id', 'ASC']
        ];
        $data['table'] = $this->crud->view($page, $per_page, $columns, $where, $order);

        return view('admin/users/table', $data);
    }

    public function add(){
        $data['form'] = $form = $this->crud->form();
        $data['title'] = $this->crud->getAddTitle();

        if(is_array($form) && isset($form['redirect']))
            return redirect()->to($form['redirect']);

        return view('admin/users/form', $data);

    }

     public function edit($id){

        if(!$this->crud->current_values($id))
            redirect()->to($this->crud->getBase() . '/' . $this->crud->getTable());
        
        $data['item_id'] = $id;
        $data['form'] = $form = $this->crud->form();
        $data['title'] = $this->crud->getEditTitle();

        if(is_array($form) && isset($form['redirect']))
            return redirect()->to($form['redirect']);

        return view('admin/users/form', $data);

    }

    protected function field_options(){
        $fields = [];
        $fields['u_id'] = ['label' => 'ID'];
        $fields['u_firstname'] = ['label' => 'Nom', 'helper' => 'veuillez saisir votre nom', 'class' => 'col-12 col-sm-6'];
        $fields['u_lastname'] = ['label' => 'Pr&eacute;nom', 'helper' => 'veuillez saisir votre pr&eacute;nom', 'class' => 'col-12 col-sm-6'];
        $fields['u_email'] = ['label' => 'Email'];
        $fields['u_status'] = ['label' => 'Status'];
        $fields['u_created_at'] = ['label' => 'Date de cr&eacute;ation', 'only_edit' => true];
        $fields['u_password'] = ['label' => 'Mot de passe', 'only_add' => true, 'type' => 'password', 'confirm' => true];

        return $fields;
    }



    // End -------
}
