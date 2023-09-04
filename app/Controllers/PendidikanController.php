<?php

namespace App\Controllers;

use App\Models\PendidikanModel;

class PendidikanController extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->pendidikan = new PendidikanModel();
    }

    public function index()
    {
        $data['title'] = 'Pendidikan';
        $data['educations'] = $this->pendidikan->where([
                                        'user_id' => session()->get('id')
                                    ])->findAll();
        $data['req'] = \Config\Services::request();

        return view('pages/pendidikan/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Pendidikan';
        $data['req'] = \Config\Services::request();

        return view('pages/pendidikan/create', $data);
    }

    public function store()
    {
        $rules = [
            'tingkat' => 'required',
            'universitas' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Tambah Pendidikan';
            $data['req'] = \Config\Services::request();

            return view('pages/pendidikan/create', $data);
        }

        $data = [
            'id' => rand(0,10000000),
            'user_id' => session()->get('id'),
            'tingkat' => $this->request->getPost('tingkat'),
            'universitas' => $this->request->getPost('universitas'),
            'jurusan' => $this->request->getPost('jurusan'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ];

        $this->pendidikan->insert($data);
        $req = \Config\Services::request();
        return redirect($req->uri->getSegment(1).'/pendidikan')->with('msg','Berhasil menambah data pendidikan!');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Pendidikan';
        $data['req'] = \Config\Services::request();
        $data['pendidikan'] = $this->pendidikan->where([
            'id' => $id,
            'user_id' => session()->get('id')
        ])->first();

        return view('pages/pendidikan/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'tingkat' => 'required',
            'universitas' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Edit Pendidikan';
            $data['req'] = \Config\Services::request();

            return view('pages/pendidikan/edit', $data);
        }

        $data = [
            'tingkat' => $this->request->getPost('tingkat'),
            'universitas' => $this->request->getPost('universitas'),
            'jurusan' => $this->request->getPost('jurusan'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'updated_at' => date('Y-m-d'),
        ];

        $this->pendidikan->update($id, $data);
        
        $req = \Config\Services::request();
        
        return redirect($req->uri->getSegment(1).'/pendidikan')->with('msg','Berhasil memperbarui data pendidikan!');
    }

    public function destroy($id)
    {
        $this->pendidikan->where('id', $id)->delete();
        return redirect()->back()->with('msg','Berhasil menghapus data pendidikan');
    }
}
