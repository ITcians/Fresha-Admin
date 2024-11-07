<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingService;
use App\Models\Service;
use Database\Seeders\BookingSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        // dd($request->all());

        $currentDate = now()->toDateString(); // Get today's date, for example: '2024-11-06'

        // Combine the current date with the time inputs
        // $startDateTime = $currentDate . ' ' . $request->start_time;  // E.g. '2024-11-06 16:06'
        // $endDateTime = $currentDate . ' ' . $request->end_time;  
        $startDateTime = Carbon::parse($request->start_time);  // No need to add current date if only storing time
        $endDateTime = Carbon::parse($request->end_time);

        $serviceIds = explode(',', $request->services[0]);

        $serviceTitle = Service::where('id',$serviceIds)->get();


        $booking = Booking::create([
            'user_id'=>$request->booking_team_member,
            'client_id'=>$request->booking_client,
            'title'=>$serviceTitle[0]->service_name,
            'start' => $startDateTime,
            'end' =>$endDateTime,
        ]);

        

        foreach ($serviceIds as $serviceId) {
            BookingService::create([
                'booking_id' => $booking->id,
                'service_id' => $serviceId,
            ]);

        }

        toast('Booking added successfully','success');
        return redirect()->back();
    }


    public function showBookingDetails($id)
    {

        $booking = Booking::with('user', 'services')->findOrFail($id);
        return view('backend.booking.view',compact('booking'));
        
    }
}
