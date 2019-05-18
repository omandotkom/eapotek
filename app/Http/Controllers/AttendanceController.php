<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Worker;
use App\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class AttendanceController extends Controller {

    public function showAttendanceView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $worker = Worker::where('branch_id', $cabang->id)->get();
        return view('absensi.absensi', ['cabang' => $cabang, 'worker' => $worker]);
    }

    public function store(Request $request) {
        $attendances = DB::table('attendances')
                ->whereDate('tanggal', $request->tanggal)
                ->get();
        foreach ($attendances as $att) {
            if ($att->nik == $request->nik) {
                return Response::json([
                            'action' => "Sudah dimasukkan"
                                ], 409); // Status code here
            }
        }
        
        $a = new Attendance;
        $a->nik = $request->nik;
        $a->tanggal = $request->tanggal;
        $a->keterangan = $request->keterangan;
        $a->save();
        return Response::json([
                    'action' => "save_attendance"
                        ], 201); // Status code here
    }

}
