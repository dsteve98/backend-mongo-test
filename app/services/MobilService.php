<?php

namespace App\Services;

use App\Repositories\MobilRepository;
use Exception;
use Illuminate\Support\Facade\DB;
use Illuminate\Support\Facade\Log;
use Illuminate\Support\Facade\Validator;
use InvalidArgumentException;
use App\Models\Mobil;

class MobilService
{
    protected $mobilRepository;

    public function __construct(MobilRepository $MobilRepository)
    {
        $this->mobilRepository = $MobilRepository;
    }

    public function saveMobilData($data)
    {
        $result = $this->mobilRepository->save($data);
        return $result;
    }

    public function getAllMobilData()
    {
        $result = $this->mobilRepository->getAllMobil();
        return $result;
    }

    public function updateMobilData($data, $id)
    {
        $result = $this->mobilRepository->update($data, $id);
        return $result;
    }

    public function getMobilDataById($id)
    {
        $result = $this->mobilRepository->getById($id);
        return $result;
    }

    public function deleteMobilDataById($id)
    {
        $result = $this->mobilRepository->deleteById($id);
        return $result;
    }

    public function getAllMobilStok()
    {
        $result = $this->mobilRepository->getAllStok();
        return $result;
    }

    public function getAllMobilPenjualan()
    {
        $result = $this->mobilRepository->getAllPenjualan();
        return $result;
    }
}