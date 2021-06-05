<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect()->back()->with('success','Mobil has been  deleted');
    }
}
