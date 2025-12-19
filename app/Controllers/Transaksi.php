<?php
namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\PelangganModel;
use App\Models\BarangModel;

class Transaksi extends BaseController
{
    protected $transaksi, $pelanggan, $barang;

    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->pelanggan = new PelangganModel();
        $this->barang = new BarangModel();
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksi
            ->select('transaksi.*, pelanggan.nama, barang.nama_barang')
            ->join('pelanggan', 'pelanggan.id = transaksi.pelanggan_id')
            ->join('barang', 'barang.id = transaksi.barang_id')
            ->findAll();

        return view('transaksi/index', $data);
    }

    public function new()
    {
        return view('transaksi/create', [
            'pelanggan' => $this->pelanggan->findAll(),
            'barang' => $this->barang->findAll(),
        ]);
    }

    public function create()
    {
        $barang = $this->barang->find(
            $this->request->getPost('barang_id')
        );

        $qty = $this->request->getPost('qty');
        $total = $barang['harga'] * $qty;

        $this->transaksi->insert([
            'pelanggan_id' => $this->request->getPost('pelanggan_id'),
            'barang_id' => $this->request->getPost('barang_id'),
            'qty' => $qty,
            'total' => $total,
        ]);

        return redirect()->to('/transaksi');
    }

    public function detail($id)
    {
        $data['transaksi'] = $this->transaksi
            ->select('
            transaksi.id_transaksi,
            transaksi.qty,
            transaksi.total,
            transaksi.created_at,
            pelanggan.id AS id_pelanggan,
            pelanggan.nama AS nama_pelanggan,
            barang.id AS id_barang,
            barang.nama_barang
        ')
            ->join('pelanggan', 'pelanggan.id = transaksi.pelanggan_id')
            ->join('barang', 'barang.id = transaksi.barang_id')
            ->where('transaksi.id_transaksi', $id)
            ->first();

        return view('transaksi/detail', $data);
    }


    public function delete($id)
    {
        $this->transaksi->delete($id);
        return redirect()->to('/transaksi');
    }
}
