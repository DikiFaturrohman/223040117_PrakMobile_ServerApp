<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use Illuminate\Http\Request;


class TipController extends Controller {
    public function index() {
        return response()->json([
            'success' => true,
            'data' => Tip::all()
        ]);
    }
}