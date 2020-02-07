<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = Biodata::latest()->paginate(5);
        return view('admin.index',compact('biodatas'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function create()
    {
         return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
              'fname'=> 'required',
              'lname'=> 'required',
              'email'=> 'required|email|unique:users',
              'mobile'=> 'required|min:10|unique:users',
              'designation' =>'required'
        ]);

        Biodata::create($request->all());
        return redirect()->route('biodata.index')->with('success','Record Successfulyy Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('admin.detail',compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('admin.edit', compact('biodata'));
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
        $request->all([
              'fname'=> 'required',
              'lname'=> 'required',
              'email'=> 'required',
              'mobile'=> 'required',
              'designation' =>'required'
  ]);
        $biodata = Biodata::find($id);
        $biodata->fname=$request->get('fname');
        $biodata->lname=$request->get('lname');
        $biodata->email=$request->get('email');
        $biodata->mobile=$request->get('mobile');
        $biodata->text=$request->get('designation');
        $biodata->save();
        return redirect()->route('admin.index')->with('success','Your 
            data has successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('admin.index')->with('success','Your Data deleted successfully');
    }

   
}
