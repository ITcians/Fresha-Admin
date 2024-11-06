<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingService;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        $team = User::where('role' , 2)->latest()->get();
        $bookingservice = BookingService::with(['service', 'booking.user'])->get();
        return view('backend.dashboard',compact('team','bookingservice'));
    }

    public function getService(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::select('*');

            return DataTables::of($data)
                ->make(true);
        }

        return view('backend.dashboard');
    }

public function getTeam(Request $request)
{
    $data = User::where('role', 2)->get();

    if ($request->ajax()) {
        return DataTables::of($data)
            ->addColumn('this_month', function ($data) {
                return 'November'; 
            })
            ->addColumn('last_month', function ($data) {
                return 'September'; 
            })
            ->make(true);
    }

    return view('backend.dashboard'); 
}
}
