<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProsedurModel;
use CodeIgniter\I18n\Time;

class Prosedur extends BaseController
{
    private $promod;
    public function __construct()
    {
        $this->promod = new ProsedurModel();
    }
    public function index($id=0)
    {
        $promod =  new ProsedurModel();
        $kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $promod->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan ".$query->affectedRows()." Data";
        } else {
            $query = $promod;
            $jumlah = " ";
        }

        $page = $this->request->getGet('p');
        $page = isset($page)?$page:1; 
        $offset = ($page-1) * 5;
        
        $data = [
            'title' => 'Data Prosedur',
            'promod' => $promod->paginate(5),
            'pager' => $promod->pager,
            'jumlah' => $jumlah,
            'pedit' => ($id > 0) ? $this->promod->getProsedur($id):[],
            'validation' => \Config\Services::validation()
        ];
        return view('view_prosedur', $data);
    }
    

    public function save()
    {
        if (!$this->validate([
            'name_sop' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong.'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong.'
                ]
            ],
            /*'file_sop' => [
                'rules' => 'uploaded[file_sop]|ext_in[file_sop,pdf]|max_size[file_sop,4096]',
                'errors' => [
                    'uploaded' => 'Harus ada file yang di upload.',
                    'ext_in' => 'File extension harus berupa pdf.',
                    'max_size' => 'Ukuran File Maksimal 4 MB'
                ]
            ],*/
            'file_url' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $id = $this->request->getVar('id');
        if($id > 0 ){
			$where = array(
				'id' => $id
			);
			$data = array(
				'name_sop' => $this->request->getVar('name_sop'),
				'description' => $this->request->getVar('description'),
                'file_url' => $this->request->getVar('file_url'),
				'updated_at' => Time::now('Asia/Jakarta')->toDateTimeString('Y-m-d H:i:s'),
                'updated_by' => session()->get('firstname')
			);
			$this->promod->update($id,$data);
			session()->setFlashdata('pesan', 'File berhasil diupdate.!!');
            
        }else{
            $this->promod->insert([
            'name_sop' => $this->request->getVar('name_sop'),
            'description' => $this->request->getVar('description'),
            'file_url' => $this->request->getVar('file_url'),
			'created_at' => Time::now('Asia/Jakarta')->toDateTimeString('Y-m-d H:i:s'),
            'updated_at' => Time::now('Asia/Jakarta')->toDateTimeString('Y-m-d H:i:s'),
			'created_by' => session()->get('firstname'),

            ]);
           $id = $this->promod->getInsertID();
           #$id = $this->promod->insert_id();
			session()->setFlashdata('pesan', 'File berhasil ditambahkan.!!');
        }
        #die($id);
        /*if($id > 0){
            $file = $this->request->getFile('file');
            if($file->getError() <= 0) {
                if (! $file->hasMoved()) {
                $ext = $file->guessExtension();
                $newName = $id.'.'.$ext;
                $file->move(ROOTPATH . 'public/uploads/file', $newName);
                }
            }
        }*/
        return redirect()->to('/prosedur');
    }

    public function delete($id)
    {
        $this->promod->delete($id);

    return redirect('prosedur')->with('success', 'Data Deleted Successfully');
    }
}
