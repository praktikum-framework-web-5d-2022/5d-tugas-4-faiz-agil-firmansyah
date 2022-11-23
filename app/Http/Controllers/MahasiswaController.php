<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Database\Seeders\DatabaseSeeder;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = DB::select('select * from mahasiswas');
        return view('main', ['mahasiswas' => $mahasiswas]);
    }
}
