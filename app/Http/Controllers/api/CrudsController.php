<?php

namespace App\Http\Controllers\api;

use App\models\Cruds;
use App\Http\Resources;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Resources\CrudsResource;
use Illuminate\Support\Facades\Validator;



class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cruds = Cruds::all();

        return new CrudsResource(true, 'Data!', $cruds);
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'idnumber'=> 'required|unique:cruds,idnumber',
            'fullname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|unique:cruds,phone',
            'emailaddress' => 'required|email|unique:cruds,emailaddress'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }else {
            $cruds = Cruds::create([
                'idnumber' => $request->idnumber,
                'fullname' => $request->fullname,
                'gender' => $request->gender,
                'address' => $request->address,
                'emailaddress' => $request->emailaddress,
                'phone' => $request->phone,
            ]);

            return new CrudsResource(true, 'Data berhasil tersimpan!', $cruds);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cruds = Cruds::find($id);

        if($cruds){
            return new CrudsResource(true, 'Data di temukan!', $cruds);
        }else {
            return response()->json([
                'message' => 'Data not found!'
            ], 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|unique:cruds,phone',
            'address' => 'required',
            'emailaddress' => 'required|email|unique:cruds,emailaddress'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }else {
            $cruds = Cruds::find($id);

            if($cruds){
                $cruds->fullname = $request->fullname;
                $cruds->gender = $request->gender;
                $cruds->phone = $request->phone;
                $cruds->address = $request->fullname;
                $cruds->emailaddress = $request->emailaddress;
                $cruds->save();

                return new CrudsResource(true, 'Data berhasil di update!', $cruds);

            }else {
                return response()->json([
                    'message' => 'Data not found!'
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cruds = Cruds::find($id);

        if($cruds){
            $cruds->delete();

            return new CrudsResource(true, 'Data berhasil di hapus!', '');

        }else {
            return response()->json([
                'message' => 'Data not found!'
            ]);
        }
    }
}
