<?php

namespace App\Controllers;

use App\Libraries\Crud;


class Galerie extends BaseController
{
	protected $crud;

	function __construct()
	{
		$params = [
			'table' => 'galerie',
			'dev' => false,
			'fields' => $this->field_options(),
			'form_title_add' => 'Ajouter galerie',
			'form_title_update' => 'Modifier galerie',
			'form_submit' => 'Valider',
			'table_title' => 'Galeries',
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
		$columns = ['g_id','g_libelle'];
		$where = null;//['u_status =' => 'Active'];
		$order = [
			['g_id', 'ASC']
		];
		$data['table'] = $this->crud->view($page, $per_page, $columns, $where, $order);
		return view('admin/galerie/table', $data);
	}

	public function add(){
		
		$data['form'] = $form = $this->crud->form();
		$data['title'] = $this->crud->getAddTitle();

		if(is_array($form) && isset($form['redirect']))
			return redirect()->to($form['redirect']);

		return view('admin/galerie/form', $data);
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
		
		return view('admin/galerie/form', $data);
	}


	protected function field_options()
	{
		$fields = [];
		$fields['g_id'] = ['label' => 'ID'];
		$fields['g_libelle'] = ['label' => 'Libelle'];
		$fields['g_image'] = [
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
		$fields['g_created_at'] = ['type' => 'unset'];
		$fields['g_updated_at'] = ['type' => 'unset'];
		return $fields;
	}

	//--------------------------------------------------------------------

}
