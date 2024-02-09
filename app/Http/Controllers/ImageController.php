<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'imagefilename'=>'required |max:5000',
        ]); 
        $crud = new Image;
        $image = $request -> imagefilename;
        $imageextension = $image -> getClientOriginalExtension();
        $imagenewname = time().".".$imageextension;
        $image->move(('image'),$imagenewname);
        $crud->image_filename = $imagenewname;
        $crud->name=$request->name;
        $crud->save();
        return redirect('/');
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
        $image=Image::find($id);
        return view('edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crud = Image::find($id);
        if($request->imagefilename){
            $request->validate([
                'imagefilename'=>'image|mimes:jpg,png,webp',
            ]);
            $image = $request->imagefilename;
            $imageextension=$image->getClientOriginalExtension();
            $imagenewname = time().".".$imageextension;
            $image->move(('image'),$imagenewname);
            $crud->image_filename=$imagenewname;
        }
        $crud->name=$request->name;
        $crud->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud=Image::find($id);
        $crud->delete();
        return redirect('/');
    }
}
