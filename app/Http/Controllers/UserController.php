<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jadwal;


class UserController extends Controller
{
	public function Index(){
		$maxdate = Carbon::parse(Jadwal::max('created_at'));
		$maxmonth = $maxdate -> format('n');
		
		for($month=1; $month <= $maxmonth; $month++){
			$chart[$month] = Jadwal::where('status', '1')
				->whereMonth('created_at', $month)
				->get()
				->count();	
		}
			

		return view('admin.utama', ['data' => $chart]);
	}

	public function Table(){
		return view('tables.tables');
	}
}
