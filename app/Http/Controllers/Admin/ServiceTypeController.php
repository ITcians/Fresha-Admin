<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\SubServiceType;
use Illuminate\Filesystem\ServeFile;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;



class ServiceTypeController extends Controller
{
    // public function index(Request $request)
    // {
        
    //     $title = 'Delete Service!';
    //     $text = "Are you sure you want to delete?";
    //     confirmDelete($title, $text);
    //     if ($request->ajax()) {
    //         $data = ServiceType::all();
    
    //         return DataTables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('created_at', function($row){
    //                 return  $row->created_at->format('d-m-Y');
    //             })
    //             // ->addColumn('image', function($row){
    //             //     $imagePath = asset($row->image);
    //             //     return  '<img src="'.$imagePath.'"  class="category-image" />';
    //             // })
    //             ->addColumn('action', function($row){
    //                 $editUrl = route('admin.client.edit', $row->id);
    //                 $deleteUrl = route('admin.client.destroy', $row->id);
    
    //                 return '
    //                     <div class="dropdown">
    //                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton'.$row->id.'" data-bs-toggle="dropdown" aria-expanded="false">
    //                             <i class="bi bi-three-dots"></i>
    //                         </button>
    //                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton'.$row->id.'">
    //                             <li><a class="dropdown-item" href="'.$editUrl.'"><i class="bi bi-pencil-square"></i> Edit</a></li>
    //                             <li><a class="dropdown-item" href="'.$deleteUrl.'" data-confirm-delete="true"><i class="bi bi-trash3"></i> Delete</a></li>
                                
    //                         </ul>
    //                     </div>';
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    
    //     return view('backend.setting.service-type.index');
    // }

    public function index(Request $request)
    {
        $ServiceTypes = ServiceType::with('subServiceTypes')->get();


        return view('backend.setting.service-type.index',compact('ServiceTypes'));
    }

    public function create()
    {
        $ServiceTypes = ServiceType::all();

        return view('backend.setting.service-type.create',compact('ServiceTypes'));

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'service_type'=>'required',
        ]);

        ServiceType::create([
            'service_type'=>$request->service_type,
            'slug' => Str::slug($request->service_type),

        ]);

        

        toast('Service type added successfully','success');
        return redirect()->back();
    }


    public function SubServiceStore(Request $request)
    {
        $request->validate([
            'service_type'=>'required',
            'sub_service'=>'required',
        ]);

        SubServiceType::create([
            'service_type_id'=>$request->service_type,
            'sub_service'=>$request->sub_service,
        ]);

        

        toast('Sub Service type added successfully','success');
        return redirect()->back();
    }
}
