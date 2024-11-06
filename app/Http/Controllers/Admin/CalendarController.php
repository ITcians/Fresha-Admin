<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;

class CalendarController extends Controller
{
    public function index()
    {
        $users = User::with('bookings')->where('role','!=','1')->get();
        $clients = Client::all();
        // $services = Service::with('category')->where('status','=','1')->get();
        // Controller
// $services = Service::with('category')->where('status', '=', '1')->get()->groupBy('category.name');
// return view('your-view', compact('services'));
$services = Service::where('status', 1)
    ->with('category')
    ->get()
    ->groupBy(function($service) {
        return $service->category->category; // Assuming `category` has a `name` attribute
    });


        return view('backend.calendar.index',compact('users','services','clients'));
        
    }

    public function fetchEvents()
    {
        $users = User::where('role','!=','1')->get();
        // dd($bookings);
        $events = $users->map(function ($user) {
            return [
                'title' => $user->fname,          // Display the user's name
                'start' => now()->startOfDay(),  // Start time (use dynamic data if applicable)
                'end' => now()->endOfDay(),      // End time (adjust as needed)
                'user_id' => $user->id,
            ];
        });

        return response()->json($events);
    }

    public function fetchResources()
    {
        $users = User::where('role','!=','1')->get(); // Fetch all users or specific team members

        $resources = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'title' => $user->name, // User's name as the resource title
            ];
        });

        return response()->json($resources);
    }


    
}
