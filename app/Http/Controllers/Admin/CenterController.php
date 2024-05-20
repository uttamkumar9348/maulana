<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Exception;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.center.index');
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
    public function store(Request $request)
    {
        try{
            $this->validate($request,[
                'name' => 'required'
            ]);
            Center::create($request->all());
            toastr()->success('Center Added Successfully');
            return redirect()->back();
        }catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function edit(Center $center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $center = Center::find($id);
        $center->update($request->all());
        toastr()->success('Center Updated successfully');
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $center = Center::find($id);
        $center->delete();
        toastr()->success('Center Deleted successfully');
        return redirect()->back();
    }
}
