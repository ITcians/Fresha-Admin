<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\TeamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ServiceType;
use App\Models\Category;
use App\Models\DurationHour;
use App\Models\ServiceVariant;
use App\Models\User;
use App\Models\AdvancedOption;
use App\Models\ServiceCommission;
use App\Models\ServiceResource;
use App\Models\ServiceSetting;

class ServiceController extends Controller
{

    public function createService()
    {
        $serviceTypes = ServiceType::with('subServiceTypes')->get();
        $categories = Category::all();
        $durationHours = DurationHour::all();
        // $teamMembers = User::with('location')->where('role','!=','1')->get();

        $teamMembers = User::with(['teamLocations.branch'])->where('role', '!=', '1')->get();

        // dd($teamMembers);

        $service = Service::create();

        $serviceId = $service->id;

        return view('backend.catalog.create-service',compact('serviceTypes','categories','durationHours','teamMembers','serviceId'));
    }

    public function ServiceStore(Request $request)
    {
        $request->validate([
           'servicename' =>'required',
            'service_type' =>'required',
            'menucategory'=>'required',
            'description'=>'required',
            'duration_hr'=>'required',
            'price_type'=> 'required',
            'price'=>'required',
            
        ]);

        $service = Service::find($request->service_id);

       $service->update([
            'service_name' =>$request->servicename,
            'service_type_id'  =>$request->service_type,
            'category_id' =>$request->menucategory,
            'description' =>$request->description,
            'duration' =>$request->duration_hr,
            'price_type' =>$request->price_type,
            'price' =>$request->price,
            'extra_time_type' =>$request->extra_time_type ?? null,
            'extra_time_duration' =>$request->extra_time_duration ?? null,
            'status' => '1',
        ]);

        if($request->has('member_ids')){
            foreach($request->member_ids as $ids)
            {
                TeamService::create([
                    'service_id'=>$request->service_id,
                    'user_id' => $ids
                ]);
            }
            
        }

        ServiceSetting::create([
            'service_id' => $request->service_id,
            'patch_test' => $request->patch_test ? 'yes' : 'no',
            'after_care_description'=>$request->after_care_description,
            'notification_reminder_days'=>$request->notification_reminder_days,
            'notification_reminder_after'=>$request->notification_reminder_after,
            'sales_tax'=>$request->sales_tax,
            'service_cost'=>$request->service_cost,
            'service_cost_type'=>$request->service_cost_type,
            'service_sku'=>$request->service_sku,
        ]);

        

        toast('Service added successfully','success');
        return redirect()->route('admin.catelog.index');
    }

    public function storeVariant(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
             'serviceId' => 'required|integer',
            'variantName' => 'required|string|max:255',
            'duration' => 'required|string',
            'priceType' => 'required|string',
            'price' => 'nullable|string',
            'sku' => 'nullable|string|max:255',
        ]);

        // Save the variant to the database
        $variant = new ServiceVariant(); 
        $variant->service_id = $validatedData['serviceId'];
        $variant->name = $validatedData['variantName'];
        $variant->duration = $validatedData['duration'];
        $variant->price_type = $validatedData['priceType'];
        $variant->price = $validatedData['price'];
        $variant->sku = $validatedData['sku'];
        $variant->save();

        return response()->json(['success' => true]);
    }

    public function storeAdvanceOptions(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        foreach ($data as $item) {
            AdvancedOption::create([
                'service_id' => $item['service_id'],
                'location_id' => $item['location_id'],
                'user_id' => $item['user_id'],
                'duration' => $item['duration'],
                'price_type' => $item['price_type'],
                'price' => $item['price']
            ]);
        }

        return response()->json(['success' => true]);
    }


    public function storeResource(Request $request)
    {
        $request->validate([
            'serviceId' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create the resource
        $resource = ServiceResource::create([
            'service_id' => $request->serviceId,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Fetch the newly created resource from the database
        return response()->json([
            'success' => true,
            'resource' => $resource,
        ]);
    }


    public function getResources($serviceId)
    {
        $resources = ServiceResource::where('service_id', $serviceId)->get();
        return response()->json($resources);
    }


    // public function storeCommission(Request $request)
    // {
    //     dd($request->all());
    //     $validatedData = $request->validate([
    //         'service_id' => 'required|integer',
    //         'user_id' => 'required|integer',
    //         'commission_type' => 'required|string',
    //         'commission_value' => 'nullable|numeric',
    //     ]);

    //     // Store the commission data in the database
    //     // Assuming you have a Commission model
    //     ServiceCommission::create([
    //         'service_id' => $validatedData['service_id'],
    //         'user_id' => $validatedData['user_id'],
    //         'commission_type' => $validatedData['commission_type'],
    //         'commission_value' => $validatedData['commission_value'],
    //     ]);

    //     return response()->json(['success' => true, 'message' => 'Commission stored successfully.']);
    // }

    public function storeCommission(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            '*.user_id' => 'required|exists:users,id',
            '*.service_id' => 'required|exists:services,id',
            '*.commission_rate' => 'nullable|string',
            '*.commission_value' => 'nullable|numeric', // Only validate if present
            '*.commission_type' => 'nullable|string', // Validate commission type
        ]);


        // Loop through the data and store it
        foreach ($data as $commission) {
            ServiceCommission::updateOrCreate(
                [
                    'user_id' => $commission['user_id'],
                    'service_id' => $commission['service_id']
                ],
                [
                    'commission_rate' => $commission['commission_rate'],
                    'commission_value' => $commission['commission_value'],
                    'commission_type' => $commission['commission_type'] // Save commission type
                ]
            );
        }

        return response()->json(['success' => true]);
    }




    public function destroy($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $service->delete();
        return response()->json(['message' => 'Service deleted successfully']);
    }



}
