<?php

namespace App\Controllers;

use App\Models\PelatihanModel;

class PelatihanController extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->pelatihan = new PelatihanModel();
    }

    public function index()
    {
        $data['title'] = 'Pelatihan';
        $data['req'] = \Config\Services::request();
        $data['practices'] = $this->pelatihan->where('user_id', session()->get('id'))->findAll();

        return view('pages/pelatihan/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Pelatihan';
        $data['req'] = \Config\Services::request();

        return view('pages/pelatihan/create', $data);
    }

    public function store()
    {
        $rules = [
            'pelatihan' => 'required',
            'tempat' => 'required',
            'tahun' => 'required',
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Tambah Pelatihan';
            $data['req'] = \Config\Services::request();

            return view('pages/pelatihan/create', $data);
        }

        $data = [
            'id' => rand(0,10000000),
            'user_id' => session()->get('id'),
            'pelatihan' => $this->request->getPost('pelatihan'),
            'tempat' => $this->request->getPost('tempat'),
            'tahun' => $this->request->getPost('tahun'),
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
        ];

        $this->pelatihan->insert($data);
        $req = \Config\Services::request();
        return redirect($req->uri->getSegment(1).'/pelatihan')->with('msg','Berhasil menambah data pelatihan!');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Pelatihan';
        $data['req'] = \Config\Services::request();
        $data['pelatihan'] = $this->pelatihan->where([
            'id' => $id,
            'user_id' => session()->get('id')
        ])->first();

        return view('pages/pelatihan/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'pelatihan' => 'required',
            'tempat' => 'required',
            'tahun' => 'required',
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Tambah Pelatihan';
            $data['req'] = \Config\Services::request();

            return view('pages/pelatihan/edit', $data);
        }

        $data = [
            'pelatihan' => $this->request->getPost('pelatihan'),
            'tempat' => $this->request->getPost('tempat'),
            'tahun' => $this->request->getPost('tahun'),
            'updated_at' => date('Y-m-d'),
        ];

        $this->pelatihan->update($id, $data);
        $req = \Config\Services::request();
        return redirect($req->uri->getSegment(1).'/pelatihan')->with('msg','Berhasil memperbarui data pelatihan!');
    }

    public function destroy($id)
    {
        $this->pelatihan->where('id', $id)->delete();
        return redirect()->back()->with('msg','Berhasil menghapus data pelatihan');
    }
}
