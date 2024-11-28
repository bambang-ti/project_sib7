<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use App\Http\Resources\ResponsResource;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $staff = Staff::all();

        return view('staff.index', compact('staff'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function apiStaff(){
        $staff = Staff::all();

    if($staff){
        return new ResponsResource(true, 'Data staff berhasil dilihat', $staff);
    } else {
        return new ResponsResource(false, 'Data staff tidak dapat ditemukan');
    }
        // return response()->json(
        //     [
        //         'success' => true, 
        //         'message' => 'Melihat data staff',
        //         'data' => $staff
        //     ], 200);
    }

    public function apiStaffDetail($id){
        $staff = Staff::find($id);
        if($staff){
            return new ResponsResource(true, 'Data staff berhasil dilihat', $staff);
            // return response()->json(
            // [
            //     'success' => true,
            //     'message' => 'Detail Staff per ID',
            //     'data' => $staff,
            // ], 200 
            // );
        } else {
            // return response()-> json([
            //     'success' => false,
            //     'message' => 'Staff tidak ada',
            // ], 404);
            return new ResponsResource(false, 'Data tidak dapat dilihat', $staff);
        }
    }
}
