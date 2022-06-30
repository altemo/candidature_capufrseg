<?php namespace App\Models;

use CodeIgniter\Model;

class EtudiantModel extends Model {

    protected $table = 'etudiants';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['d_identifiant','d_type','d_nom','d_date','d_lieu','d_etablissement','d_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}