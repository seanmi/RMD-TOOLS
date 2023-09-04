<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Documentcounter;

use Auth;

use Session;

class DocumentcounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'document_type' => 'required',
            'subcode' => 'required|integer',
            'transaction_number' => 'required|integer'
        ]);

        if($request->document_type != "nd" and $request->document_type != "td"){
            toastr()->warning('Error processing request!');
            return redirect()->back();
        }

        $get_active_document_counter = Documentcounter::where('active','=',1)
                                        ->where('document_type','=', $request->document_type)
                                        ->first();
        
        //deactivate current active document counter 
        if($get_active_document_counter){
            $get_active_document_counter->active = 0;
            $get_active_document_counter->save();
        }

        $document_counter = new Documentcounter();
        $document_counter->document_type = $request->input('document_type');
        $document_counter->subcode = $request->input('subcode');
        $document_counter->starting_point = $request->input('transaction_number');
        $document_counter->current_point = $request->input('transaction_number');
        $document_counter->active = 1;
        $document_counter->created_by_user_id = Auth::id();
        $document_counter->save();

        toastr()->success('Successfully set!');
        return redirect()->back();
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
