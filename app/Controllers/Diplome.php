<?php

namespace App\Controllers;

use App\Libraries\Crud;
use App\Models\DiplomeModel;

class Diplome extends BaseController
{
	protected $crud;

	function __construct()
	{
		$params = [
			'table' => 'diplome',
			'dev' => false,
			'fields' => $this->field_options(),
			'form_title_add' => 'Diplome',
			'form_title_update' => 'Information de recherche',
			'form_action' => 'verifier',
			'form_submit' => 'V&eacute;rifier',
			'table_title' => 'Diplome',
			'form_submit_update' => 'V&eacute;rifier',
			'base' => '',

		];

		$this->crud = new Crud($params, service('request'));
	}

    public function index_()
	{
		$page = 1;
		if (isset($_GET['page'])) {
			$page = (int) $_GET['page'];
			$page = max(1, $page);
		}

		$data['title'] = $this->crud->getTableTitle();

		$per_page = 5;
		//, 'p_start_date', 'p_end_date', 'p_status'
		$columns = ['d_identifiant','d_identifiant','d_type','d_nom',];
		$where = null;//['u_status =' => 'Active'];
		$order = [
			['d_id', 'ASC']
		];
		$data['table'] = $this->crud->view($page, $per_page, $columns, $where, $order);
		return view('oirp/diplome/table', $data);
	}

	public function index()
	{
		$data['form'] = $form = $this->crud->form();
		$data['title'] = 'Information de recherche'; //$this->crud->getAddTitle();

		if(is_array($form) && isset($form['redirect']))
			return redirect()->to($form['redirect']);

		return view('oirp/diplome/form', $data);
	}

    public function verifier(){
        $diplome =  new DiplomeModel();
        $post_data = $this->request->getPost();
        extract($post_data);

        $isverify = false;
        if(trim($d_identifiant) == '' || trim($d_type) == ''||trim($d_nom) == '') {
             $this->session->setFlashdata('danger', 'Veuillez saisir toutes les informations');
        } else{
            $isverify = true;
        }

        if(!$isverify)
            return redirect()->to(site_url(['certificat']));

       // var_dump($post_data);exit;
        $data = $diplome->diplome_select($post_data);
        //fichier cree a ce niveau
        //if($data)
        $this->session->setFlashdata('diplome', $data);
        //var_dump($data);exit;
        return redirect()->to(site_url(['certificat','authentification']));

    }

    public function authentification(){
        $data['resultat'] = ($this->session->get('diplome')?$this->session->get('diplome'):'L\'identifiant est incorrecte ou introuvable, veuillez contacter l\institu pour plus de certitude.');
        //var_dump($data);exit;
        return view('oirp/diplome/authentification', $data);
    }

	public function add(){
		
		$data['form'] = $form = $this->crud->form();
		$data['title'] = $this->crud->getAddTitle();

		if(is_array($form) && isset($form['redirect']))
			return redirect()->to($form['redirect']);

		return view('oirp/diplome/form', $data);
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
		
		return view('admin/diplome/form', $data);
	}


	protected function field_options()
	{
        // @TODO : OPTION ALL FIELDS OR NOT
        // d_identifiant 	d_type 	d_nom 	d_date 	d_lieu 	d_etablissement 	d_description 	deleted_at 
		$fields = [];
		$fields['d_id'] = ['type' => 'unset'];
		$fields['d_description'] = ['type' => 'unset'];
		$fields['d_date'] = ['type' => 'unset'];
		$fields['d_lieu'] = ['type' => 'unset'];
		$fields['d_etablissement'] = ['type' => 'unset'];
		$fields['deleted_at'] = ['type' => 'unset'];
		$fields['created_at'] = ['type' => 'unset'];
		$fields['update_at'] = ['type' => 'unset'];

		//$fields['p_end_date'] = ['label' => 'Fin du projet', 'required' => 'true', 'class' => 'col-12 col-sm-6'];
		$fields['d_type'] = ['label' => 'Type de Recherche', 'required' => 'true'];
		$fields['d_nom'] = ['label' => 'Nom & Pr&eacute;nom', 'required' => 'true'];
		$fields['d_identifiant'] = ['label' => 'Matricule', 'required' => 'true', 'class' => 'col-12 col-sm-6'];
		//$fields['p_price'] = ['label' => 'Prix', 'required' => 'true', 'class' => 'col-12 col-sm-6'];

		return $fields;
	}

	//--------------------------------------------------------------------

}
