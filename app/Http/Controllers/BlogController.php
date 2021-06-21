<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use File;

class BlogController extends Controller
{
    public function addnew(Request $request)
    {
    	 request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $request->file('image')->move('images/blog/',$request->file('image')->getClientOriginalName());

        $blog = new Blog();
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->image =  $request->file('image')->getClientOriginalName();
        $blog->author = $request->author;
        $blog->save();
        
        // $notification = array(
        //     'message' => 'Sukses Menambahkan Data!', 
        //     'alert-type' => 'success'
        // );
        
        return redirect('/blog/all');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        $path = 'images/blog'.$blog->image;
        File::delete($path);
       return redirect()->back();
    }

    public function edit($id,Request $request)
    {
        $blog = Blog::find($id);
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->author = $request->author;
        $blog->update();


         if($request->hasFile('image')){
            $request->file('image')->move('images/blog/',$request->file('image')->getClientOriginalName());
            $blog->image = $request->file('image')->getClientOriginalName();
            $blog->save();
        }
        
        return redirect('/blog/all')->with('message','Data Berhasil Diubah!');
    }
}
