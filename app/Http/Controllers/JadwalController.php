<?php

namespace App\Http\Controllers;


use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
   public function index()
   {
   		 $jadwal = Jadwal::all();

   		return view('tables.tables')->with('jadwal', $jadwal);
   }

   public function Update($Status)
   {
   	$update = new Jadwal;
   	$update->status = $Status;
   	$update->save();
   }
}
