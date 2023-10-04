<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hostel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Hostel::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Hostel $hostel)
    {
        return $hostel;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hostel $hostel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hostel $hostel)
    {
        return $hostel->delete();
    }
}
