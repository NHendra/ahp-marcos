<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AlternatifModel extends Model
{
    protected $table = "alternatif";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6'];

    
    public function insert_alternatif($data){
        $query = $this->db->table('alternatif')->insert($data);
        return $query;
    }

    public function update_alternatif($data, $id)
    {
        $query = $this->db->table('alternatif')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_alternatif($id)
    {
        $query = $this->db->table('alternatif')->delete(array('id' => $id));
        return $query;
    } 
}
