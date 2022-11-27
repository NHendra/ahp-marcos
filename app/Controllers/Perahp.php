<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;

class Perahp extends BaseController
{
	function __construct()
    {
        $this->alternatif = new AlternatifModel();
        $this->kriteria = new KriteriaModel();
        
    }
	public function index()
	{
		
		
		$data['url1'] = 'perahp';
		$data['url2'] = 'perahp';
		$data['alternatif'] = $this->alternatif->findAll();
        $data['kriteria'] = $this->kriteria->findAll();
		echo view('layout/v_head',$data);
		echo view('v_perahp',$data);
        echo view('layout/v_foot');
	}

	
}
