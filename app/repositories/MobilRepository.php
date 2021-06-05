<?php

namespace App\repositories;

use App\Models\Mobil;

class MobilRepository
{
    protected $mobil;

    public function __construct(Mobil $mobil)
    {
        $this->mobil = $mobil;
    }

    public function save($data)
    {
        $mobil = new $this->mobil;

        $mobil->tahun_keluaran = $data->get('tahun_keluaran');
        $mobil->warna = $data->get('warna');
        $mobil->harga = $data->get('harga');        
        $mobil->terjual = $data->get('terjual');        
        $mobil->stok = $data->get('stok');        
        $mobil->jenis_kendaraan = $data->get('jenis_kendaraan');        
        $mobil->mesin = $data->get('mesin');        
        $mobil->kapasitas_penumpang = $data->get('kapasitas_penumpang');        
        $mobil->tipe = $data->get('tipe');        
        $mobil->save();

        return $mobil->fresh();
    }

    public function getAllMobil()
    {
        return $this->mobil->where('jenis_kendaraan', 'mobil')->get();
    }

    public function update($data, $id)
    {
        $mobil= $this->mobil->find($id);
        $mobil->tahun_keluaran = $data->get('tahun_keluaran');
        $mobil->warna = $data->get('warna');
        $mobil->harga = $data->get('harga');        
        $mobil->terjual = $data->get('terjual');        
        $mobil->stok = $data->get('stok');        
        $mobil->jenis_kendaraan = $data->get('jenis_kendaraan');        
        $mobil->mesin = $data->get('mesin');        
        $mobil->kapasitas_penumpang = $data->get('kapasitas_penumpang');        
        $mobil->tipe = $data->get('tipe');      
        $mobil->update();

        return $mobil;
    }

    public function getById($id)
    {
        return $this->mobil->find($id);
    }

    public function deleteById($id)
    {
        $mobil =  $this->mobil->find($id);
        $mobil->delete();

        return $mobil;
    }

    public function getAllStok()
    {
        return $this->mobil->where('jenis_kendaraan', 'mobil')->get(["_id","stok"]);
    }

    public function getAllPenjualan()
    {
        return $this->mobil->where('jenis_kendaraan', 'mobil')->get(["_id","terjual"]);
    }
}