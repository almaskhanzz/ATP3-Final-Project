<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photoGallery.addPhotoGallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req->validate([
			'title' => 'required|string|max:500',
			'des' => 'required|string|max:10000',
			'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);

		$file = $req->file('picture');
		$name =$file->getClientOriginalName();
		$destinationPath = 'uploads/photos';
		$file->move($destinationPath,$name);
		$path = $destinationPath .'/'.$name;
        
        $photo = new Photo();
        $photo->title = $req->title;
        $photo->description = $req->des;
        $photo->pic = $path;
    
        if($photo->save()){
            return redirect()->route('admin.index');
        }
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
        $Photo = Photo::find($id);
        $path = public_path() .'/' . $Photo->pic;
        if (file_exists($path)) {
            unlink($path);
            if($Photo->delete())
            {
                return redirect()->route('admin.photoGalleryList');
            }
        }
    }

    public function photoGalleryList()
    {
        $photos = Photo::all();
        return view('photoGallery.photoGalleryList')->with('photos', $photos);
    }
}
