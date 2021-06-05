<?php

namespace App\Services;

use App\Repositories\MotorRepository;
use Exception;
use Illuminate\Support\Facade\DB;
use Illuminate\Support\Facade\Log;
use Illuminate\Support\Facade\Validator;
use InvalidArgumentException;
use App\Models\Motor;

class MotorService
{
    protected $motorRepository;

    public function __construct(MotorRepository $MotorRepository)
    {
        $this->motorRepository = $MotorRepository;
    }

    public function saveMotorData($data)
    {
        $result = $this->motorRepository->save($data);
        return $result;
    }

    public function getAllMotorData()
    {
        $result = $this->motorRepository->getAllMotor();
        return $result;
    }

    public function updateMotorData($data, $id)
    {
        $result = $this->motorRepository->update($data, $id);
        return $result;
    }

    public function getMotorDataById($id)
    {
        $result = $this->motorRepository->getById($id);
        return $result;
    }

    public function deleteMotorDataById($id)
    {
        $result = $this->motorRepository->deleteById($id);
        return $result;
    }

    public function getAllMotorStok()
    {
        $result = $this->motorRepository->getAllStok();
        return $result;
    }

    public function getAllMotorPenjualan()
    {
        $result = $this->motorRepository->getAllPenjualan();
        return $result;
    }
}