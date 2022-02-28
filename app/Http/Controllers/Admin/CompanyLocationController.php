<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\CompanyLocation;
use Faker\Provider\ar_JO\Company;
use Illuminate\Http\Request;

class CompanyLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_location = CompanyLocation::all();
        return view('admin.location.index',compact('company_location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'country'=>'required',
            'state'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $pictureName = time().'.'.$request->picture->extension();  
     
        $request->picture->move(public_path('assets/image/location'), $pictureName);

        $company_location_model = new CompanyLocation();
        $company_location_model->country = $request->country;
        $company_location_model->state = $request->state;
        $company_location_model->email = $request->email;
        $company_location_model->address = $request->address;
        $company_location_model->phone = $request->phone;
        $company_location_model->picture = $pictureName;

        $company_location_model->save();
        
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','You have successfully created location.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company_location = CompanyLocation::where('id',$id)->first();

        return view('admin.location.edit',compact('company_location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      

        $request->validate([
            'country'=>'required',
            'state'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


         $company_location_model = CompanyLocation::Find($id);

        if ($request->has('picture')) {
            $pictureName = time().'.'.$request->picture->extension();  
     
            $request->picture->move(public_path('assets/image/location'), $pictureName);
            $company_location_model->country = $request->country;
            $company_location_model->state = $request->state;
            $company_location_model->email = $request->email;
            $company_location_model->address = $request->address;
            $company_location_model->phone = $request->phone;
            $company_location_model->picture = $pictureName;

        }else{

        
            $company_location_model->country = $request->country;
            $company_location_model->state = $request->state;
            $company_location_model->email = $request->email;
            $company_location_model->address = $request->address;
            $company_location_model->phone = $request->phone;
           
        }
      

        $company_location_model->save();
        return back()
        ->with('success','You have successfully updated location.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = CompanyLocation::Find($id);
        $location->delete();
        return back()
        ->with('success','You have successfully removed location.');

    }
}
