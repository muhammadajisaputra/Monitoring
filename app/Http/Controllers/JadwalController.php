<?php

namespace App\Http\Controllers;


use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
   public function index()
   {
   		 $jadwal = Jadwal::all();
   		//$jadwal = ['test', 'test2'];

   		return view('tables.tables')->with('jadwal', $jadwal);
   }
}
