<?php

namespace App\Controllers;

use App\Models\UserModel;

class ProfileController extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->user->where('id', session()->get('id'))->first();
        $data['req'] = \Config\Services::request();
        
        return view('pages/profile/index', $data);
    }

    public function update()
    {
        $rules = [
            'nama' => 'required',
            'nip' => 'required',
            'pendidikan' => 'required',
            'jabatan' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Profile';
            $data['user'] = $this->user->where('id', session()->get('id'))->first();

            return view('pages/profile/index', $data);
        }

        $img = $this->request->getFile('picture');
        $newName = $img->getRandomName();
        if(!empty($_FILES['picture']['name']))
        {
            $img->move(FCPATH.'assets/dist/img/profile/', $newName);

            $data = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'jabatan' => $this->request->getPost('jabatan'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'picture' => $newName,
                'updated_at' => date('d F Y')
            ];
        }else{
            $data = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'jabatan' => $this->request->getPost('jabatan'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'updated_at' => date('d F Y')
            ];
        }

        $id = session()->get('id');
        $this->user->update($id, $data);

        return redirect()->back()->with('msg', 'Berhasil memperbarui profile!');
    }
}
