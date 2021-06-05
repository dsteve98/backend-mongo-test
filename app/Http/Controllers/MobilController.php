<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mobil;

use App\services\MobilService;

class MobilController extends Controller
{

    protected $mobilService;

    public function __construct(MobilService $mobilService)
    {
        $this->mobilService = $mobilService;
    }

    public function create()
    {
        return view('mobilcreate');
    }

    public function store(Request $request)
    {
        $result = ['status' => 200];
        try {
            $result['data'] = $this->mobilService->saveMobilData($request);
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
            $result['data'] = $this->mobilService->getAllMobilData();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        // $mobil=Mobil::where('jenis_kendaraan', 'mobil')->get();
        return response()->json($result, $result['status']);
    }

    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('mobiledit',compact('mobil','id'));
    }

    public function update(Request $request, $id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->mobilService->updateMobilData($request, $id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        // return redirect('mobil')->with('success', 'Mobil has been successfully update');
        return response()->json($result, $result['status']);
    }

    public function show($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->mobilService->getMobilDataById($id);
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
            $result['data'] = $this->mobilService->deleteMobilDataById($id);
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
            $result['data'] = $this->mobilService->getAllMobilStok();
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
            $result['data'] = $this->mobilService->getAllMobilPenjualan();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        return response()->json($result, $result['status']);
    }

}
