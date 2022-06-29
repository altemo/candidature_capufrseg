<?php

namespace App\Controllers;

use App\Libraries\Crud;

class Tags extends BaseController
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
            'table' => 'tags',
            'dev' => false, // for schema info
            'fields' => $this->field_options(),
            'form_title_add' => 'Ajouter tag',
            'form_title_update' => 'Editer tag' ,
            'form_submit' => 'Valider', 
            'table_title' => 'Tag',
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
        $columns = ['t_id', 't_name'];
        $where = null;
        $order = [
            ['t_name', 'ASC']
        ];
        $data['table'] = $this->crud->view($page, $per_page, $columns, $where, $order);

        return view('admin/tags/table', $data);
    }

    public function add(){
        $data['form'] = $form = $this->crud->form();
        $data['title'] = $this->crud->getAddTitle();

        if(is_array($form) && isset($form['redirect']))
            return redirect()->to($form['redirect']);

        return view('admin/tags/form', $data);

    }

     public function edit($id){

        if(!$this->crud->current_values($id))
            redirect()->to($this->crud->getBase() . '/' . $this->crud->getTable());
        
        $data['item_id'] = $id;
        $data['form'] = $form = $this->crud->form();
        $data['title'] = $this->crud->getEditTitle();

        if(is_array($form) && isset($form['redirect']))
            return redirect()->to($form['redirect']);

        return view('admin/tags/form', $data);

    }

    protected function field_options(){
        $fields = [];
        $fields['t_id'] = ['label' => 'ID'];
        $fields['t_name'] = ['label' => 'Nom', 'required' => true];
       
        return $fields;
    }



    // End -------
}
