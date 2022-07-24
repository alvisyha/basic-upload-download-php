<?php

namespace App\Controllers;
use App\Models\DokumenModel;

class Formupload extends BaseController
{
    public function index()
    {
        $dokumen = new DokumenModel();
		$data['dokumen'] = $dokumen->findAll();
        return view('formupload', $data);
    }

    public function save()
	{
		if (!$this->validate([
			'keterangan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'dokumen' => [
				'rules' => 'uploaded[dokumen]|mime_in[dokumen,image/jpg,image/jpeg,image/gif,image/png]|max_size[dokumen,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$dokumen = new DokumenModel();
		$dataDokumen = $this->request->getFile('dokumen');
		$fileName = $dataDokumen->getRandomName();
		$dokumen->insert([
			'dokumen' => $fileName,
			'keterangan' => $this->request->getPost('keterangan')
		]);
		$dataDokumen->move('uploads/dokumen/', $fileName);
		session()->setFlashdata('success', 'Dokumen Berhasil diupload');
		return redirect()->to(base_url('dokumen'));
	}
}