<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokumenModel;

class Dokumen extends BaseController
{
    public function index()
    {
		$dokumen = new DokumenModel();
		$data['dokumen'] = $dokumen->findAll();
        return view('dokumen', $data);
    }
	
	function download($id)
	{
		$dokumen = new DokumenModel();
		$data = $dokumen->find($id);
		return $this->response->download('uploads/dokumen/' . $data->dokumen, null);
	}

	public function delete($id = null)
    {
        $dokumenModel = new DokumenModel();
        $dokumen = $dokumenModel->delete($id);
 
        $session = session();
        $session->setFlashdata("success", "Dokumen berhasil di hapus");
 
        return redirect()->to(base_url('dokumen'));
    }

}
