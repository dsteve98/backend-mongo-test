<?php

namespace App\repositories;

use App\Models\Motor;

class MotorRepository
{
    protected $motor;

    public function __construct(Motor $motor)
    {
        $this->motor = $motor;
    }

    public function save($data)
    {
        $motor = new $this->motor;

        $motor->tahun_keluaran = $data->get('tahun_keluaran');
        $motor->warna = $data->get('warna');
        $motor->harga = $data->get('harga');        
        $motor->terjual = $data->get('terjual');        
        $motor->stok = $data->get('stok');        
        $motor->jenis_kendaraan = $data->get('jenis_kendaraan');        
        $motor->mesin = $data->get('mesin');        
        $motor->tipe_suspensi = $data->get('tipe_suspensi');        
        $motor->tipe_transmisi = $data->get('tipe_transmisi');        
        $motor->save();

        return $motor->fresh();
    }

    public function getAllMotor()
    {
        return $this->motor->where('jenis_kendaraan', 'motor')->get();
    }

    public function update($data, $id)
    {
        $motor= $this->motor->find($id);
        $motor->tahun_keluaran = $data->get('tahun_keluaran');
        $motor->warna = $data->get('warna');
        $motor->harga = $data->get('harga');        
        $motor->terjual = $data->get('terjual');        
        $motor->stok = $data->get('stok');        
        $motor->jenis_kendaraan = $data->get('jenis_kendaraan');        
        $motor->mesin = $data->get('mesin');        
        $motor->tipe_suspensi = $data->get('tipe_suspensi');        
        $motor->tipe_transmisi = $data->get('tipe_transmisi');      
        $motor->update();

        return $motor;
    }

    public function getById($id)
    {
        return $this->motor->find($id);
    }

    public function deleteById($id)
    {
        $motor =  $this->motor->find($id);
        $motor->delete();

        return $motor;
    }

    public function getAllStok()
    {
        return $this->motor->where('jenis_kendaraan', 'motor')->get(["_id","stok"]);
    }

    public function getAllPenjualan()
    {
        return $this->motor->where('jenis_kendaraan', 'motor')->get(["_id","terjual"]);
    }
}