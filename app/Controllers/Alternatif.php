<?php
 
namespace App\Controllers;
 
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
 
class Alternatif extends BaseController
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
        $data['url2'] = 'alternatif';
        $data['alternatif'] = $this->alternatif->findAll();
        $data['kriteria'] = $this->kriteria->findAll();

        echo view('layout/v_head',$data);
		echo view('v_data',$data);
        echo view('layout/v_foot');

    }
    public function simpan()
    {

        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');
        $c1 = $this->request->getPost('c1');
        $c2 = $this->request->getPost('c2');
        $c3 = $this->request->getPost('c3');
        $c4 = $this->request->getPost('c4');
        $c5 = $this->request->getPost('c5');
        $c6 = $this->request->getPost('c6');
    

        $data = [
            'kode' => $kode,
            'nama' => $nama,
            'c1' => $c1,
            'c2' => $c2,
            'c3' => $c3,
            'c4' => $c4,
            'c5' => $c5,
            'c6' => $c6
        ];
    
        $simpan = $this->alternatif->insert_alternatif($data);
 

        if($simpan)
        {

            session()->setFlashdata('success', 'Data Alternatif Berhasil di Simpan');

            return redirect()->to(base_url('alternatif')); 
        }
    }

    public function edit($id)
    {
        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');
        $c1 = $this->request->getPost('c1');
        $c2 = $this->request->getPost('c2');
        $c3 = $this->request->getPost('c3');
        $c4 = $this->request->getPost('c4');
        $c5 = $this->request->getPost('c5');
        $c6 = $this->request->getPost('c6');
 
    $data = [
            'kode' => $kode,
            'nama' => $nama,
            'c1' => $c1,
            'c2' => $c2,
            'c3' => $c3,
            'c4' => $c4,
            'c5' => $c5,
            'c6' => $c6
    ];
 
    $ubah = $this->alternatif->update_alternatif($data, $id);
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Alternatif Berhasil di Ubah');
        return redirect()->to(base_url('alternatif')); 
    }
    } 
    
    public function delete($id)
    {
  
    $hapus = $this->alternatif->delete_alternatif($id);
 

    if($hapus)
    {

        session()->setFlashdata('hapus', 'Data Alternatif Berhasil di Hapus');

        return redirect()->to(base_url('alternatif'));
    }
    } 

    
}