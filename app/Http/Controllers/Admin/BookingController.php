<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingService;
use Database\Seeders\BookingSeeder;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        // dd($request->all());

        $currentDate = now()->toDateString(); // Get today's date, for example: '2024-11-06'

        // Combine the current date with the time inputs
        $startDateTime = $currentDate . ' ' . $request->start_time;  // E.g. '2024-11-06 16:06'
        $endDateTime = $currentDate . ' ' . $request->end_time;  

        $booking = Booking::create([
            'user_id'=>$request->booking_team_member,
            'client_id'=>$request->booking_client,
            'start' => $startDateTime,
            'end' =>$endDateTime,
            
        ]);

        $serviceIds = explode(',', $request->services[0]);

        foreach ($serviceIds as $serviceId) {
            BookingService::create([
                'booking_id' => $booking->id,
                'service_id' => $serviceId,
            ]);

        }

        toast('Booking added successfully','success');
        return redirect()->back();
    }
}
