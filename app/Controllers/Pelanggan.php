<?php

namespace App\Controllers;
use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
    protected $pelanggan;

    public function __construct()
    {
        $this->pelanggan = new PelangganModel();
    }

    public function index()
    {
        return view('pelanggan/index', [
            'pelanggan' => $this->pelanggan->findAll()
        ]);
    }

        public function new()
    {
        return view('pelanggan/create');
    }
    public function create()
    {
         $this->pelanggan->insert([
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);

        return redirect()->to('/pelanggan');

    }

    public function update($id)
    {
        $this->pelanggan->update($id, [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);

        return redirect()->to('/pelanggan');
    }

    public function edit($id)
    {
        return view('pelanggan/edit', [
            'pelanggan' => $this->pelanggan->find($id)
        ]);
    }

     public function delete($id)
    {
        $this->pelanggan->delete($id);
        return redirect()->to('/pelanggan');
    }

}
