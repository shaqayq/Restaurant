<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class DriverController extends Controller
{
    public function __construct(Database $database)
    {
        $database = app('firebase.database');
        $this->database = $database;
        $this->tablename = 'drivers';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $snapshot = $this->database->getReference($this->tablename)->getSnapshot();
        $drivers = $snapshot->getValue();
        return view('admin.driver.driverList', compact('drivers'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = $request->status  ? true : false;

        $data =[
            'name' => $request->fullname,
            'phone' => $request->phone,
            'status' => $status
        ];
        $postRef=  $this->database->getReference($this->tablename)->push($data);
        if($postRef){
         
            return redirect('/driver')->with('success', 'Driver added successfully');

        }else{

            return redirect('/driver')->with('error', 'Driver not added');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $driver = $this->database->getReference($this->tablename)->getChild($id)->getValue();
        return response()->json($driver);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = $request->status  ? true : false;

        $data =[
            'name' => $request->fullname,
            'phone' => $request->phone,
            'status' => $status
        ];
        $updateData = $this->database->getReference($this->tablename)->getChild($id)->update($data);
        if($updateData){
            return redirect('/driver')->with('success', 'Driver updated successfully');
        }else{
            return redirect('/driver')->with('error', 'Driver not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = $this->database->getReference($this->tablename)->getChild($id)->remove();
        if($deleteData){
            return redirect('/driver')->with('success', 'Driver deleted successfully');
        }else{
            return redirect('/driver')->with('error', 'Driver not deleted');
        }
    }
}
