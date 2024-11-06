<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientAddress;
use App\Models\ClientEmergencyContact;
use App\Models\ClientEmergencyContactSecondary;
use App\Models\Country;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;


class ClientController extends Controller
{
    public function index(Request $request)
    {
        
        $title = 'Delete Client!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        if ($request->ajax()) {
            $data = Client::all();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return  $row->created_at->format('d-m-Y');
                })
                ->addColumn('image', function($row){
                    $imagePath = asset($row->image);
                    return  '<img src="'.$imagePath.'"  class="category-image" />';
                })
                ->addColumn('action', function($row){
                    $editUrl = route('admin.client.edit', $row->id);
                    $deleteUrl = route('admin.client.destroy', $row->id);
    
                    return '
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton'.$row->id.'" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton'.$row->id.'">
                                <li><a class="dropdown-item" href="'.$editUrl.'"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="'.$deleteUrl.'" data-confirm-delete="true"><i class="bi bi-trash3"></i> Delete</a></li>
                                
                            </ul>
                        </div>';
                })
                ->rawColumns(['image','action'])
                ->make(true);
        }
    
        return view('backend.client.index');
    }

    public function create()
    {
        $countries = Country::select('id', 'country')->get();
        $phoneCodes = Country::select('id', 'phone_code')->get();
        return view('backend.client.create',compact('countries','phoneCodes'));
    }

    public function store(Request $request)
    {
        // dd($request->input('redirect_to'));
        // dd($request->all(), $request->input('redirect_to'), $request->query());

        $request->validate([
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=>'required|email|unique:clients,email'
        ]);

        $image = null;

        if($request->has('image')){
            $file =  $request->file('image');
            $fileName = time().'.'. $file->getClientOriginalExtension();
            $file->move('assets/backend/uploads/client',$fileName);
            $image = 'assets/backend/uploads/client/'.$fileName;
        }
           $client =  Client::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'image'=>$image,
                'email'=>$request->email,
                'country_code'=>$request->country_code,
                'phone'=>$request->phone,
                'dob'=>$request->dob,
                'gender'=>$request->gender,
                'pronouns'=>$request->pronouns,
                'language'=>$request->preferred_language,
                'client_source'=>$request->client_source,
                'occupation'=>$request->occupation,
                'country'=>$request->country,
                'additional_email'=>$request->additional_email,
                'additional_country_code'=>$request->additional_country_code,
                'additional_phone'=>$request->additional_phone,
            
            ]);

        if($request->has('address') && !empty($request->address)){

                ClientAddress::create([
                    'client_id'=>$client->id,
                    'type'=>$request->address_type  ?? null,
                    'address'=>$request->address,
                    'apt_suite'=>$request->apt_suite,
                    'district'=>$request->district,
                    'district'=>$request->district,
                    'city'=>$request->city,
                    'region'=>$request->region,
                    'postcode'=>$request->postcode,
                    'country'=>$request->country,
                ]);
        }

        if ($request->has(['emergency_fname', 'relationship', 'emergency_email', 'emergency_country_code', 'emergency_phone']) &&
            !empty($request->emergency_fname)) {
            
            ClientEmergencyContact::create([
                'client_id' =>$client->id,
                'fullname' =>$request->emergency_fname,
                'relationship' =>$request->relationship,
                'email' =>$request->emergency_email,
                'country_code' =>$request->emergency_country_code,
                'phone' =>$request->emergency_phone,
            ]);
        }


        if ($request->has(['secondary_emergency_fname', 'secondary_emergency_relationship', 'secondary_emergency_email', 'secondary_emergency_country_code', 'secondary_emergency_phone']) &&
            !empty($request->secondary_emergency_fname)) {
            
            ClientEmergencyContactSecondary::create([
                'client_id' =>$client->id,
                'fullname' =>$request->secondary_emergency_fname,
                'relationship' =>$request->secondary_emergency_relationship,
                'email' =>$request->secondary_emergency_email,
                'country_code' =>$request->secondary_emergency_country_code,
                'phone' =>$request->secondary_emergency_phone,
            ]);
        }
        toast('Client added successfully', 'success');
        if ($request->input('redirect_to')) {
            // If the `redirect_to` parameter is present, redirect to that URL
            return redirect()->to($request->input('redirect_to'))->with('client_added', true);
        } else {
            // If the `redirect_to` parameter is not present, default to the client index page
            return redirect()->route('admin.client.index');
        }
        

        

        // You can show a success toast here if you like
        
    
        // Redirect back to the correct page (either calendar or client index)
        // return redirect()->to($redirectUrl)->with('client_added', true);
        // return redirect()->route('admin.client.index');
    }

    public function edit($id)
    {
        $client =  Client::find($id);
        if(!$client){
            toast('No client found','error');
            return redirect()->back();
        }

        return view('backend.client.edit',compact('client'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=> 'required',
            'image'=> 'nullable',
            'description'=>'required'
        ]);
        $category = Client::find($id);
        if(!$category){
            toast('No category found','error');
            return redirect()->back();
        }
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $uploadPath = 'assets/backend/uploads/category';
            $file->move($uploadPath,$fileName);
        

        if($category->image && file_exists($uploadPath.'/'.$category->image)){
            unlink($uploadPath.'/'.$category->image);
        }

        $category->image = $fileName;
        }

        $slug = Str::slug($request->name);

        $category->update([
            'name'=>$request->name,
            'slug'=>$slug,
            'description'=>$request->description,

        ]);
        toast('Category updated successfully','success');

        return redirect()->route('admin.category.index');
    }


    public function destroy($id)
    {
        $client = Client::find($id);
        if(!$client){
            toast('No client found','error');
            return redirect()->back();
        }


        if($client->image && file_exists($client->image)){
            unlink($client.'/'.$client->image);
        }

        $client->delete();
        toast('Client deleted successfully','success');

        return redirect()->route('admin.client.index');
    }
}
