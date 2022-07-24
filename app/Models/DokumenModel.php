<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'tb_dokumen';
	protected $primaryKey           = 'id_dokumen';
	protected $returnType           = 'object';
	protected $useTimestamps = true;
	protected $allowedFields        = ['id_berkas', 'dokumen', 'keterangan'];
}