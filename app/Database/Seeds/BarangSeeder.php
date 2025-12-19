<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_barang' =>'Beras' , 'harga' => 15000, 'stok' => 20], 
            ['nama_barang' =>'Gula Pasir' , 'harga' => 12000, 'stok' => 109], 
            ['nama_barang' =>'Minyak Goreng' , 'harga' => 25000, 'stok' => 50], 
            ['nama_barang' =>'Telor Ayam' , 'harga' => 35000, 'stok' => 40], 
            ['nama_barang' =>'Kopi' , 'harga' => 1500, 'stok' => 200], 
        ];
        $this->db->table('barang')->insertBatch($data);
    }
}
