<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePdfRequest;
use App\Models\UserPdf;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //we are fetching pdf data if the user logged in
        $team_id = empty(Auth::user()->id) ? null : Auth::user()->id;
        $pdfs = [];
        if (!empty($team_id)) {
            $pdfs = UserPdf::where('team_id',$team_id)->get();
        }
        
        return response()->json(['pdfs'=> $pdfs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePdfRequest $request)
    {
        $team_id = empty(Auth::user()->id) ? null : Auth::user()->id;

        $path = $request->file('pdf')->store('pdfs');
        $filename = $request->input('filename');
        $pdf = new UserPdf;
        $pdf->team_id = $team_id;
        $pdf->filepath = $path;
        $pdf->filename = !empty($filename) ? $filename : "Document";
        $pdf->save();
        return response()->json(['result'=> 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
