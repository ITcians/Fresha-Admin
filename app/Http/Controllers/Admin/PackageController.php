<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\PackageService;
use App\Models\Service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $services = Service::where('status','=','1')->get();
        $package = Package::create();
        $packageId = $package->id;


        return view('backend.package.create',compact('categories','services','packageId'));
    }

    public function StoreServicePackage(Request $request)
    {
        // dd($request->service_id);
        
        PackageService::create([
            'service_id' => $request->service_id,
            'package_id' => $request->package_id,
        ]);
        

        return response()->json(['success' => true, 'message' => 'Service saved successfully']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_name'=>'required',
            'menu_category'=> 'required'
        ]);

         $package = Package::find($request->package_id);

        // $checkServiceExistsWithPackage =  PackageService::where('package_id',$package->id)->get();

        // if($checkServiceExistsWithPackage){
        //     toast('Select serice','error');
        //     return redirect()->back()->withInput();
        // }

        $package->update([
            'category_id' =>$request->menu_category,
            'name' =>$request->package_name,
            'description' =>$request->description,
            'schedule_type' =>$request->schedule_type,
            'price_type' =>$request->schedule_type,
            'price' =>$request->price_type,
            'online_booking' =>$request->online_booking ? '1' : '0',
            'gender' =>$request->available_gender,
            'status' => '1',
        ]);

        toast('Package created successfully','success');
        return redirect()->back();
    }

}
