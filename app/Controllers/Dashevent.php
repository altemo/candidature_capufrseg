<?php

namespace App\Controllers;

use App\Libraries\Crud;


class Dashevent extends BaseController
{
	protected $crud;

	function __construct()
	{
		$params = [
			'table' => 'dashevent',
			'dev' => false,
			'fields' => $this->field_options(),
			'form_title_add' => 'Ajouter Evenement',
			'form_title_update' => 'Modifier Evenement',
			'form_submit' => 'Valider',
			'table_title' => 'Evenements',
			'form_submit_update' => 'Valider',
			'base' => '',

		];

		$this->crud = new Crud($params, service('request'));
	}

	public function index()
	{
		$page = 1;
		if (isset($_GET['page'])) {
			$page = (int) $_GET['page'];
			$page = max(1, $page);
		}

		$data['title'] = $this->crud->getTableTitle();

		$per_page = 5;
		//, 'p_start_date', 'p_end_date', 'p_status'
		$columns = ['e_id', 'e_title', 'e_location',];
		$where = null;//['u_status =' => 'Active'];
		$order = [
			['e_id', 'ASC']
		];
		$data['table'] = $this->crud->view($page, $per_page, $columns, $where, $order);
		return view('admin/dashevent/table', $data);
	}

	public function add(){
		
		$data['form'] = $form = $this->crud->form();
		$data['title'] = $this->crud->getAddTitle();

		if(is_array($form) && isset($form['redirect']))
			return redirect()->to($form['redirect']);

		return view('admin/dashevent/form', $data);
	}

	public function edit($id)
	{
		if(!$this->crud->current_values($id))
			return redirect()->to($this->crud->getBase() . '/' . $this->crud->getTable());

			$data['item_id'] = $id;
		$data['form'] = $form = $this->crud->form();
		$data['title'] = $this->crud->getEditTitle();

		if (is_array($form) && isset($form['redirect']))
			return redirect()->to($form['redirect']);
		
		return view('admin/dashevent/form', $data);
	}


	protected function field_options()
	{
		$fields = [];
		$fields['e_id'] = ['label' => 'ID'];
		$fields['e_location'] = ['label' => 'Localit&eacute;'];
        
		$fields['e_image'] = [
            'label' => 'Importer image',
            'type' => 'file',
			'path' => './uploads/images',
			'is_image' => true,
			'max_size' => '1024',
			'ext_in' => 'png,jpg,gif',
			'wrapper_start' => '<div><div class="col-12 col-sm-3 mb-3 mt-3" >',
			'wrapper_end' => '</div></div>',
			'show_file_names' => true,
			'placeholder' => '/admin/assets/img/pdf-icon.png'
        ];

		$fields['e_description'] = ['label' => 'Description', 'type' => 'editor'];
		$fields['e_start_date'] = ['label' => 'D&eacute;but de l\'&eacute;v&egrave;nement', 'required' => 'true', 'class' => 'col-12 col-sm-6'];
		//$fields['e_end_date'] = ['label' => 'Fin du projet', 'required' => 'true', 'class' => 'col-12 col-sm-6'];
		$fields['e_title'] = ['label' => 'Titre', 'required' => 'true'];
		//$fields['p_status'] = ['label' => 'Etat', 'required' => 'true', 'class' => 'col-12 col-sm-6'];
		//$fields['p_price'] = ['label' => 'Prix', 'required' => 'true', 'class' => 'col-12 col-sm-6'];
		$fields['e_created_at'] = ['type' => 'unset'];
		$fields['e_updated_at'] = ['type' => 'unset'];
		return $fields;
	}

	//--------------------------------------------------------------------

}
