<?php

namespace App\Http\Controllers;

use App\Inform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class InformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informs =Inform::get();
        return view('admin.inform.index',compact('informs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inform.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inform = Inform::create($request->all());
        
        if($request->hasFile('img')){

            $filePath = Storage::disk('public')->put('/images/product',$request->file('img'));

            $inform->img = Storage::url($filePath);
            $inform->save();
        }

        return redirect('/admin/inform');
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
        $inform = Inform::find($id);
        return view('admin.inform.edit',compact('inform'));
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
        $requestData = Inform::find($id);

        $requestData->title = $request->title;
        $requestData->openingDate = $request->openingDate;
        $requestData->closingDate = $request->closingDate;
        $requestData->content = $request->content;
        
        if($request->hasFile('img')) {
            $filePath = Storage::disk('public')->put('/images/product',$request->file('img'));
            $requestData->img = Storage::url($filePath);
            $requestData->save();
        }
    
        return redirect('/admin/inform');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inform = Inform::find($id);
        $inform->delete();
        return redirect('/admin/inform');
    }
}
