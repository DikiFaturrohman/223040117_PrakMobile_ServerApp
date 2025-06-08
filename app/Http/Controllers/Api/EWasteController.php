<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EWaste;

class EWasteController extends Controller
{
    public function index()
    {
        $eWastes = EWaste::all();
        return response()->json([
            'success' => true,
            'message' => 'Data E-Waste berhasil diambil',
            'data' => $eWastes
        ]);
    }
}