<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Motor;

use App\services\MotorService;

class MotorController extends Controller
{

    protected $motorService;

    public function __construct(MotorService $motorService)
    {
        $this->motorService = $motorService;
    }

    public function create()
    {
        return view('motorcreate');
    }

    public function store(Request $request)
    {
        $result = ['status' => 200];
        try {
            $result['data'] = $this->motorService->saveMotorData($request);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }

    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->getAllMotorData();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        // $motor=Motor::where('jenis_kendaraan', 'motor')->get();
        return response()->json($result, $result['status']);
    }

    public function edit($id)
    {
        $motor = $this->motorService->getMotorDataById($id);
        return view('motoredit',compact('motor','id'));
    }

    public function update(Request $request, $id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->updateMotorData($request, $id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        // return redirect('motor')->with('success', 'Motor has been successfully update');
        return response()->json($result, $result['status']);
    }

    public function show($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->getMotorDataById($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }

    public function destroy($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->deleteMotorDataById($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }

    public function getStok()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->getAllMotorStok();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        return response()->json($result, $result['status']);
    }

    public function getPenjualan()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->getAllMotorPenjualan();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        return response()->json($result, $result['status']);
    }
}
