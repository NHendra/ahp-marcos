<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KriteriaModel extends Model
{
    protected $table = "kriteria";
    protected $primaryKey = "crit_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['crit_id', 'nama', 'cosben', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6'];

    
    public function insert_kriteria($data){
        $query = $this->db->table('kriteria')->insert($data);
        return $query;
    }

    public function update_kriteria($c1,$c2,$c3,$c4,$c5,$c6,$cc1,$cc2,$cc3,$cc4,$cc5,$cc6)
    {
        $query = $this->db->table('kriteria')->update(['nama' => $c1], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['cosben' => $cc1], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['nama' => $c2], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['cosben' => $cc2], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['nama' => $c3], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['cosben' => $cc3], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['nama' => $c4], array('crit_id' => 'c4'));
        $query = $this->db->table('kriteria')->update(['cosben' => $cc4], array('crit_id' => 'c4'));
        $query = $this->db->table('kriteria')->update(['nama' => $c5], array('crit_id' => 'c5'));
        $query = $this->db->table('kriteria')->update(['cosben' => $cc5], array('crit_id' => 'c5'));
        $query = $this->db->table('kriteria')->update(['nama' => $c6], array('crit_id' => 'c6'));
        $query = $this->db->table('kriteria')->update(['cosben' => $cc6], array('crit_id' => 'c6'));
        return $query;
    }

    public function delete_kriteria($id)
    {
        $query = $this->db->table('kriteria')->delete(array('crit_id' => $id));
        return $query;
    } 

    public function update_ahp($c1c2,$c1c3,$c1c4,$c1c5,$c1c6,$c2c3,$c2c4,$c2c5,$c2c6,$c3c4,$c3c5,$c3c6,$c4c5,$c4c6,$c5c6)
    {
        //-----------YUBI----YUBI----YUBI----C1
        //-----------YUBI----YUBI----YUBI----C1-C2
        if($c1c2==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));

        }elseif($c1c2==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));

        }elseif($c1c2==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }elseif($c1c2==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }elseif($c1c2==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }elseif($c1c2==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }elseif($c1c2==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }elseif($c1c2==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }elseif($c1c2==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p2' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c2'));
            
        }

        //-----------YUBI----YUBI----YUBI----C1-C3

        if($c1c3==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));

        }elseif($c1c3==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));

        }elseif($c1c3==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c1c3==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c1c3==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c1c3==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c1c3==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c1c3==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c1c3==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c3'));
            
        }

        
        //-----------YUBI----YUBI----YUBI----C1-C4

        if($c1c4==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));

        }elseif($c1c4==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));

        }elseif($c1c4==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c1c4==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c1c4==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c1c4==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c1c4==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c1c4==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c1c4==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c4'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C1-C5

        if($c1c5==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));

        }elseif($c1c5==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));

        }elseif($c1c5==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c1c5==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c1c5==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c1c5==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c1c5==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c1c5==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c1c5==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c5'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C1-C6

        if($c1c6==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));

        }elseif($c1c6==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));

        }elseif($c1c6==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c1c6==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c1c6==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c1c6==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c1c6==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c1c6==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c1c6==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c1'));
            $query = $this->db->table('kriteria')->update(['p1' => $c2], array('crit_id' => 'c6'));
            
        }

        //-----------YUBI----YUBI----YUBI----C2
        //-----------YUBI----YUBI----YUBI----C2-C3

        if($c2c3==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));

        }elseif($c2c3==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));

        }elseif($c2c3==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c2c3==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c2c3==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c2c3==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c2c3==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c2c3==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }elseif($c2c3==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p3' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c3'));
            
        }

        
        //-----------YUBI----YUBI----YUBI----C2-C4

        if($c2c4==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));

        }elseif($c2c4==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));

        }elseif($c2c4==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c2c4==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c2c4==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c2c4==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c2c4==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c2c4==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c2c4==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c4'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C2-C5

        if($c2c5==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));

        }elseif($c2c5==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));

        }elseif($c2c5==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c2c5==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c2c5==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c2c5==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c2c5==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c2c5==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c2c5==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c5'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C2-C6

        if($c2c6==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));

        }elseif($c2c6==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));

        }elseif($c2c6==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c2c6==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c2c6==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c2c6==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c2c6==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c2c6==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c2c6==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c2'));
            $query = $this->db->table('kriteria')->update(['p2' => $c2], array('crit_id' => 'c6'));
            
        }

        //-----------YUBI----YUBI----YUBI----C3
        //-----------YUBI----YUBI----YUBI----C3-C4

        if($c3c4==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));

        }elseif($c3c4==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));

        }elseif($c3c4==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c3c4==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c3c4==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c3c4==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c3c4==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c3c4==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }elseif($c3c4==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p4' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c4'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C3-C5

        if($c3c5==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));

        }elseif($c3c5==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));

        }elseif($c3c5==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c3c5==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c3c5==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c3c5==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c3c5==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c3c5==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c3c5==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c5'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C3-C6

        if($c3c6==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));

        }elseif($c3c6==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));

        }elseif($c3c6==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c3c6==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c3c6==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c3c6==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c3c6==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c3c6==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c3c6==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c3'));
            $query = $this->db->table('kriteria')->update(['p3' => $c2], array('crit_id' => 'c6'));
            
        }

        //-----------YUBI----YUBI----YUBI----C4
        //-----------YUBI----YUBI----YUBI----C4-C5

        if($c4c5==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));

        }elseif($c4c5==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));

        }elseif($c4c5==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c4c5==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c4c5==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c4c5==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c4c5==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c4c5==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }elseif($c4c5==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p5' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c5'));
            
        }

         
        //-----------YUBI----YUBI----YUBI----C4-C6

        if($c4c6==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));

        }elseif($c4c6==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));

        }elseif($c4c6==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c4c6==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c4c6==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c4c6==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c4c6==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c4c6==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c4c6==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c4'));
            $query = $this->db->table('kriteria')->update(['p4' => $c2], array('crit_id' => 'c6'));
            
        }


        //-----------YUBI----YUBI----YUBI----C5
        //-----------YUBI----YUBI----YUBI----C5-C6

        if($c5c6==1){
            $c1=9;
            $c2=1/9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));

        }elseif($c5c6==2){
            $c1=7;
            $c2=1/7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));

        }elseif($c5c6==3){
            $c1=5;
            $c2=1/5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c5c6==4){
            $c1=3;
            $c2=1/3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c5c6==5){
            $c1=1;
            $c2=1;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c5c6==6){
            $c1=1/3;
            $c2=3;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c5c6==7){
            $c1=1/5;
            $c2=5;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c5c6==8){
            $c1=1/7;
            $c2=7;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }elseif($c5c6==9){
            $c1=1/9;
            $c2=9;
            $query = $this->db->table('kriteria')->update(['p6' => $c1], array('crit_id' => 'c5'));
            $query = $this->db->table('kriteria')->update(['p5' => $c2], array('crit_id' => 'c6'));
            
        }


        return $query;
    }

    public function defc1()
    {
        $one=1;
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c2'));

        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c3'));

        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c4'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c6'));
        return $query;
    } 
    public function defc2()
    {
        $one=1;
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c3'));

        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c4'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c6'));
        return $query;
    } 
    public function defc3()
    {
        $one=1;
  
        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c4'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c6'));
        return $query;
    } 
    public function defc4()
    {
        $one=1;

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c4'));
        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c4'));
        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c6'));
        return $query;
    } 
    public function defc5()
    {
        $one=1;

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c5'));
        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c6'));
        return $query;
    } 




    public function defall()
    {
        $one=1;
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c2'));

        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c3'));

        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c4'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c1'));
        $query = $this->db->table('kriteria')->update(['p1' => $one], array('crit_id' => 'c6'));

        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c3'));

        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c4'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c2'));
        $query = $this->db->table('kriteria')->update(['p2' => $one], array('crit_id' => 'c6'));

        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c4'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c3'));
        $query = $this->db->table('kriteria')->update(['p3' => $one], array('crit_id' => 'c6'));

        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c4'));
        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c5'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c4'));
        $query = $this->db->table('kriteria')->update(['p4' => $one], array('crit_id' => 'c6'));

        $query = $this->db->table('kriteria')->update(['p6' => $one], array('crit_id' => 'c5'));
        $query = $this->db->table('kriteria')->update(['p5' => $one], array('crit_id' => 'c6'));
        
        return $query;
    } 
}
