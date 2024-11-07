<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Service;
use App\Models\BookingService;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $team = User::where('role' , 2)->latest()->get();
         $bookingservice = BookingService::with(['service', 'booking.user'])->get();
        $recentBookings = Booking::with('user', 'services')->latest()->take(5)->get();

          $UserrecentBookings = User::with('bookings.services')->where('role',2)->latest()->take(5)->get();

          $topServices = Service::with('bookings')->latest()->take(5)->get();

        //    dd($topServices);
           
        $sevenDaysAgo = Carbon::now()->subDays(7);

        // Get all service IDs associated with bookings from the last 7 days
        $rserviceIds = BookingService::whereHas('booking', function($query) use ($sevenDaysAgo) {
            $query->where('start', '>=', $sevenDaysAgo);
        })->pluck('service_id');
        
        // Fetch the total sum of prices for those services in the last 7 days
        $totalPrice = Service::whereIn('id', $rserviceIds)->sum('price');
        
        //   dd('hello');
        
        return view('backend.dashboard',compact('team','recentBookings','bookingservice','totalPrice','UserrecentBookings','topServices'));
    }

    // public function getService(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Service::select('*');

    //         return DataTables::of($data)
    //             ->make(true);
    //     }

    //     return view('backend.dashboard');
    // }

    // public function getTeam(Request $request)
    // {
    //     $data = User::with('booking')->where('role', 2)->get();

    //     if ($request->ajax()) {
    //         return DataTables::of($data)
    //             ->addColumn('this_month', function ($data) {
    //                 return $data->booking->count; 
    //             })
    //             ->addColumn('last_month', function ($data) {
    //                 return 'September'; 
    //             })
    //             ->make(true);
    //     }

    //     return view('backend.dashboard'); 
    // }
}
