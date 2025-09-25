<?php

namespace App\Models;

use CodeIgniter\Model;

class ProsedurModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'prosedur';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name_sop', 'description', 'file_url', 'updated_by', 'created_by', 'updated_at', 'created_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProsedur($id = false,$offset = 0)
    {
        if ($id == false)
        {
            return $this->findAll(5,$offset);
        }
        return $this->find(['id'=>$id]);
    }

    public function pencarian($kunci)
    {
        return $this->table('prosedur')->like('name_sop', $kunci);
    }
}
