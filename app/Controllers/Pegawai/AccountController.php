<?php

namespace App\Controllers\Pegawai;

use App\Models\UserModel;
use App\Controllers\BaseController;

class AccountController extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data['title'] = 'Manajemen Akun';
        $data['users'] = $this->user->orderBy('id','DESC')->findAll();
        $data['req'] = \Config\Services::request();

        return view('pages/pegawai/account/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Akun';
        $data['req'] = \Config\Services::request();

        return view('pages/pegawai/account/create', $data);
    }

    public function store()
    {
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'pendidikan' => 'required',
            'jabatan' => 'required',
            'is_pegawai' => 'required'
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Tambah Akun';
            $data['req'] = \Config\Services::request();

            return view('pages/pegawai/account/create', $data);
        }

        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'jabatan' => $this->request->getPost('jabatan'),
            'picture' => 'user.png',
            'password' => password_hash('user1234', PASSWORD_DEFAULT),
            'is_pegawai' => $this->request->getPost('is_pegawai'),
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d')
        ];

        $this->user->insert($data);
        $req = \Config\Services::request();
        return redirect($req->uri->getSegment(1).'/manajemen-akun')->with('msg','Berhasil menambah akun!');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Akun';
        $data['req'] = \Config\Services::request();
        $data['user'] = $this->user->where('id', $id)->first();

        return view('pages/pegawai/account/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'pendidikan' => 'required',
            'jabatan' => 'required',
            'is_pegawai' => 'required'
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Edit Akun';
            $data['req'] = \Config\Services::request();

            return view('pages/pegawai/account/edit', $data);
        }

        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'jabatan' => $this->request->getPost('jabatan'),
            'is_pegawai' => $this->request->getPost('is_pegawai'),
            'updated_at' => date('Y-m-d'),
        ];

        $this->user->update($id, $data);
        $req = \Config\Services::request();
        return redirect($req->uri->getSegment(1).'/manajemen-akun')->with('msg','Berhasil memperbarui akun!');
    }

    public function destroy($id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->back()->with('msg','Berhasil menghapus akun!');
    }

    public function change_password($id)
    {
        $data['title'] = 'Ganti Password Akun';
        $data['req'] = \Config\Services::request();
        $data['user'] = $this->user->where('id', $id)->first();

        return view('pages/pegawai/account/change_password', $data);
    }

    public function new_password($id)
    {
        $rules = [
            'new_password' => 'required|min_length[8]'
        ];

        if(!$this->validate($rules)){
            $data['title'] = 'Ganti Passwor Akun';
            $data['req'] = \Config\Services::request();
            $data['user'] = $this->user->where('id', $id)->first();
            
            return view('pages/pegawai/account/change_password', $data);
        }

        $new_password = $this->request->getPost('new_password');

        $data = [
            'password' => password_hash($new_password, PASSWORD_DEFAULT),
            'updated_at' => date('Y-m-d')
        ];

        $this->user->update($id, $data);
        $req = \Config\Services::request();
        return redirect($req->uri->getSegment(1).'/manajemen-akun')->with('msg','Berhasil memperbarui password akun!');
    }
}
