<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Documentcounter;
use App\Models\Transaction;

class QRCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active_document_counter_td = Documentcounter::where('active','=', 1)
                                    ->where('document_type','=','td')
                                    ->latest()->first();   
        
        $active_document_counter_nd = Documentcounter::where('active','=', 1)
                                    ->where('document_type','=','nd')
                                    ->latest()->first();   
        
        return view('qr_dashboard')
            ->with('active_document_counter_td', $active_document_counter_td)
            ->with('active_document_counter_nd', $active_document_counter_nd);
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
}
