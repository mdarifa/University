<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
           $this->middleware('auth');
           $this->middleware('admin');
     }

    public function index()
    {
        $images = Image::all();
        return view('back.admin.images.view', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universities =  University::all();
        return view('back.admin.images.add', compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->hasFile('image_name'))
      {
        $path = $request->file('image_name')->store('university_images');
        Image::create([
          'image_name' => $path,
          'university_id' => $request->university_id,
        ]);
        return back()->with('status','New Image Added Successfully!');
      }
    }

    public function deleteimage($id)
    {
      Image::find($id)->delete();
      return back()->with('status','Image Delation Successfully!');
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
