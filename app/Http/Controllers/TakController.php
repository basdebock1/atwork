<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tak;

class TakController extends Controller
{
    public function index()
    {
        return view('takken', [
            'takken' => Tak::all(),
        ]);
    }
}
