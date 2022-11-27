<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;

class Pemahp extends BaseController
{
	function __construct()
    {
        $this->alternatif = new AlternatifModel();
        $this->kriteria = new KriteriaModel();
        
    }
	public function index()
	{
		
		
		$data['url1'] = 'pemahp';
		$data['url2'] = 'pemahp';
		$data['alternatif'] = $this->alternatif->findAll();
        $data['kriteria'] = $this->kriteria->findAll();
		echo view('layout/v_head',$data);
		echo view('v_pemahp',$data);
        echo view('layout/v_foot');
	}

	public function edit()
    {
        $c1c2 = $this->request->getPost('c1c2');
		$c1c3 = $this->request->getPost('c1c3');
		$c1c4 = $this->request->getPost('c1c4');
		$c1c5 = $this->request->getPost('c1c5');
		$c1c6 = $this->request->getPost('c1c6');

		$c2c3 = $this->request->getPost('c2c3');
		$c2c4 = $this->request->getPost('c2c4');
		$c2c5 = $this->request->getPost('c2c5');
		$c2c6 = $this->request->getPost('c2c6');

		$c3c4 = $this->request->getPost('c3c4');
		$c3c5 = $this->request->getPost('c3c5');
		$c3c6 = $this->request->getPost('c3c6');

		$c4c5 = $this->request->getPost('c4c5');
		$c4c6 = $this->request->getPost('c4c6');

		$c5c6 = $this->request->getPost('c5c6');
        
 

 
    $ubah = $this->kriteria->update_ahp($c1c2,$c1c3,$c1c4,$c1c5,$c1c6,$c2c3,$c2c4,$c2c5,$c2c6,$c3c4,$c3c5,$c3c6,$c4c5,$c4c6,$c5c6);
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 

	public function defc1()
    {
  

 
    $ubah = $this->kriteria->defc1();
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 

	public function defc2()
    {
  

 
    $ubah = $this->kriteria->defc2();
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 

	public function defc3()
    {
  

 
    $ubah = $this->kriteria->defc3();
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 

	public function defc4()
    {
  

 
    $ubah = $this->kriteria->defc4();
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 

	public function defc5()
    {
  

 
    $ubah = $this->kriteria->defc5();
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 
	
	public function defall()
    {
  

 
    $ubah = $this->kriteria->defall();
     

    if($ubah)
    {
        session()->setFlashdata('success', 'Data Kriteria Berhasil di Ubah');
        return redirect()->to(base_url('pemahp')); 
    }
    } 
}
