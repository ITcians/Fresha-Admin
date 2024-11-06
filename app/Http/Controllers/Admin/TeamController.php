<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchAddress;
use App\Models\Country;
use App\Models\EmploymentDetail;
use App\Models\Service;
use App\Models\TeamAddress;
use App\Models\TeamLocation;
use App\Models\TeamService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role','!=','1')->get();
       
        return view('backend.team.index',compact('users'));
    }

    public function create()
    {
        $countries = Country::select('id', 'country')->get();
        $phoneCodes = Country::select('id', 'phone_code')->get();
        $servicesses = Service::where('status','=','1')->get();
        $branchAddresses = BranchAddress::all();
        return view('backend.team.create', compact('countries', 'phoneCodes','servicesses','branchAddresses'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users,email',
        ]);

        $image = 'null';

        if($request->has('image')){
            $file = $request->file('image');
           $fileName = time().'.'. $file->getClientOriginalExtension();
           $file->move('assets/backend/uploads/team/',$fileName);
           $image = 'assets/backend/uploads/team/'.$fileName;
        }

        $user = User::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=> Hash::make('12345678'),
            'role'=>'2',
            'image'=>$image,
            'code'=>$request->phone_code,
            'phone'=>$request->phone,
            'dob'=>$request->dob,
            'job_title'=>$request->job_title,
            'country'=>$request->country

        ]);

        EmploymentDetail::create([
            'user_id' => $user->id,
            'start_date' =>$request->start_date,
            'end_date'=>$request->end_date,
            'employment_type'=>$request->employment_type,
            'team_member_id'=>$request->team_member_id,
            'note'=>$request->note,
        ]);

        TeamAddress::create([
            'user_id'=>$user->id,
            'address'=>$request->address,
            'apt_suit'=>$request->apt_suit,
            'district'=>$request->district,
            'city'=>$request->city,
            'region'=>$request->region,
            'postcode'=>$request->postcode,
            'country'=>$request->country,
            'address_type'=>$request->address_type,
        ]);

        // TeamService::create([
        //     'user_id'=>$user->id,
        //     'service_id'=>$request->service_id
        // ]);

        if($request->has('service_ids') && is_array($request->service_ids)){
        foreach ($request->service_ids as $serviceId) {
            TeamService::create([
                'user_id' => $user->id,
                'service_id' => $serviceId,
            ]);
        }
    }

    if($request->has('branch_location_id')){
        TeamLocation::create([
            'user_id'=>$user->id,
            'location_id'=>$request->branch_location_id
        ]);
    }

        toast('Team member added successfully','success');
        return redirect()->route('admin.team.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if($user->image && file_exists($user->image)){
            @unlink($user->image);
        }
        if ($user) {
            $user->delete();
            return response()->json(['success' => 'User deleted successfully']);
        }

        return response()->json(['error' => 'User not found'], 404);
    }


}
