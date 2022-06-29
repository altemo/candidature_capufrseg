<?php namespace App\Models;

use CodeIgniter\Model;

class DiplomeModel extends Model
{

    protected $table = 'diplome';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['d_identifiant','d_type','d_nom','d_date','d_lieu','d_etablissement','d_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    //Specifique select 

    public function diplome_select($fdata = []){
        try {
            
            if(empty($fdata))
                return false;
            \extract($fdata);
            $cond = ['d_identifiant' => $d_identifiant,'d_type' => $d_type];
            $query = $this->getWhere($cond);
            $data = $query->getResult();
            if(count($data) < 0 ){
                return false;
            }

            return $data;
        } catch (\Throwable $th) {
           die();
        }
    }
    // Permet de donner tous les diplomes
    public function get_diplome($id =false, $order='ASC'){

        try {
          
            if($id){
                $cond = ['deleted_at' => NULL, 'id' => $id];
            } else {
                $cond = ['deleted_at' => NULL];
            }

            $this->orderBy("d_id", $order);
            $query = $this->getWhere($cond);
            $data = $query->getResult();
            if(count($data) < 0 ){
                return false;
            }

            return $data;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function delete_ps(){
        $query = $this->db->query("CALL ps_delete_all();");
        $r = $query->getResult();
        return true;
    }

    // Permet d'ajouter un nouveau diplome
    public function diplome_insert($data){
        \extract($data);
        try {

            if(isset($id)){
                return $this->update($id,$data);
            }
            return $this->insert($data, true);
        } catch (\Throwable $th) {
            die('Fatal erreur ' . $th->getMessage());
        }
    }

    // Permet de suprimer un diplome
    public function diplome_delete($id){
        return $this->delete($id);
    }


}
