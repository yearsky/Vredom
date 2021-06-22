<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;
use File;

class PortofolioController extends Controller
{
    public function addnew(Request $request)
    {
    	request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

    	$request->file('image')->move('images/portofolio/',$request->file('image')->getClientOriginalName());


        $pr = new Portofolio();
        $pr->judul = $request->judul;
        $pr->deskripsi = $request->deskripsi;
        $pr->image = $request->file('image')->getClientOriginalName();
        $pr->save();

        return redirect('/portofolio/all');
    }

    public function edit($id, Request $request)
    {
    	$pr = Portofolio::findOrFail($id);
        $pr->judul = $request->judul;
        $pr->deskripsi = $request->deskripsi;
        $pr->update();    	

        if($request->file('image'))
        {
        	$path = public_path().'/images/portofolio/'.$pr->image;
        	      if (File::exists($path)) {
			        //File::delete($image_path);
			        unlink($path);
			    }
			$request->file('image')->move('images/portofolio/',$request->file('image')->getClientOriginalName());
            $pr->image = $request->file('image')->getClientOriginalName();
            $pr->save();
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
    	$pr = Portofolio::findOrFail($id);
    	$pr->delete();

    	$path = public_path().'/images/portofolio/'.$pr->image;
    	unlink($path);
    	return redirect()->back();
    }
}
