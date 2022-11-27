<?php
 
namespace App\Controllers;
 
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
 
class Kriteria extends BaseController
{
    protected $alternatif;
    protected $kriteria;
 
    function __construct()
    {
        $this->alternatif = new AlternatifModel();
        $this->kriteria = new KriteriaModel();
        
    }
 
    public function index()
    {
        if(! session()->get('logged_in')){ return redirect()->to('login');}
        $data['url1'] = 'admin';
        $data['url2'] = 'kriteria';
        $data['alternatif'] = $this->alternatif->findAll();
        $data['kriteria'] = $this->kriteria->findAll();

        echo view('layout/v_head',$data);
		echo view('v_kriteria',$data);
        echo view('layout/v_foot');

    }
   

    //-----------------------atas??
    public function edit()
    {
        $c1 = $this->request->getPost('c1');
        $c2 = $this->request->getPost('c2');
        $c3 = $this->request->getPost('c3');
        $c4 = $this->request->getPost('c4');
        $c5 = $this->request->getPost('c5');
        $c6 = $this->request->getPost('c6');
        $cc1 = $this->request->getPost('cc1');
        $cc2 = $this->request->getPost('cc2');
        $cc3 = $this->request->getPost('cc3');
        $cc4 = $this->request->getPost('cc4');
        $cc5 = $this->request->getPost('cc5');
        $cc6 = $this->request->getPost('cc6');
 

 
    $ubah = $this->kriteria->update_kriteria($c1,$c2,$c3,$c4,$c5,$c6,$cc1,$cc2,$cc3,$cc4,$cc5,$cc6);
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('kriteria')); 
    }
    } 

    

    
}