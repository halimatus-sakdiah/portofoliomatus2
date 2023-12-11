<?php

namespace App\Http\Controllers\apii;

use App\Http\Controllers\Controller;

use App\Http\Controllers\apii\CrudController;
use App\Http\Resources\CrudResource;
use App\Models\Crud;
use App\Http\Controllers\apii\Validator;
use Illuminate\Support\Facades;



use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::all();

        return new CrudResource(true, 'Data !', $crud);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'idnumber' => 'required|unique:crud,idnumber',
            'fullname' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|unique:crud,phone',
            'address' => 'required',
            'emailaddress' => 'required|email|unique:crud,emailaddress'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }else {
            $crud = Crud::create([
                'idnumber' => $request->idnumber,
                'fullname' => $request->fullname,
                'gender' => $request->gender,
                'address' => $request->address,
                'emailaddress' => $request->emailaddress,
                'phone' => $request->phone,
            ]);

            return new CrudResource(true, 'Data Saved Successfully!', $crud);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud = Crud::find($id);

        if($crud){
            return new CrudResource(true, 'Data Found!', $crud);
        }else {
            return response()->json([
                'message' => 'Data Not Found!'
            ], 422);
        }
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|unique:crud,phone',
            'address' => 'required',
            'emailaddress' => 'required|email|unique:crud,emailaddress'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }else {
            $crud = Crud::find($id);

            if($crud){
                $crud->fullname = $request->fullname;
                $crud->gender = $request->gender;
                $crud->phone = $request->phone;
                $crud->address = $request->address;
                $crud->emailaddress = $request->emailaddress;
                $crud->save();

                return new CrudResource(true, 'Data Changed Successfully!', $crud);

            }else {
                return response()->json([
                    'message' => 'Data Not Found!'
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::find($id);

            if($crud){
               $crud->delete();

                return new CrudResource(true, 'Data Deleted Successfully!', '');

            }else {
                return response()->json([
                    'message' => 'Data Not Found!'
                ]);
            }
    }
}
