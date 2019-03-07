<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $datas = Gallery::Orderby('id','desc')->get();
        return view('backend.pages.gallery.add',compact('datas'));
    }


    public function add(Request $request)
    {
        $datas = new Gallery;
        $datas->title = $request->title;


        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/gallery/',$filename);
            $datas->image = $filename;
        }
        $datas->save();
        return redirect()->back()->with('success',"Added Successfully");
    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Gallery::find($id);

        if($datas)
        {
            $datas->delete();
            return redirect()->back()->with('success',"Deleted Successfully!!");
        }
        else
        {
            return redirect()->back()->with('error',"Deleted Already!!");
        }
    }



}
