<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorLaravel extends Controller
{
    public function bacakelembaban() 
    {
        // membaca nilai kelembaban dari table tb_sensor
        $sensor = MSensor::select('*')->get();
        // kirim tampilan vie baca kelembababn
        return view('bacakelembaban', ['nilaisensor' => $sensor]);

    }

    public function simpansensor()
    {
        MSensor::where('id', '1')->update(['kelembaban' => request()->nilaikelembaban]);
    }
}
