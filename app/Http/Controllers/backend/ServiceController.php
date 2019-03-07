<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $datas = Service::Orderby('id','desc')->get();
        return view('backend.pages.services.add',compact('datas'));
    }


    public function add(Request $request)
    {
        $this->validate($request,[

            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'details' => 'required',

        ]);

        $count = Service::count();
        if($count <= 2)
        {
            $datas = new Service;
            $datas->title = $request->title;
            $datas->details = $request->details;

            if(Input::hasFile('image'))
            {
                $file = Input::File('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/frontend/image/services/',$filename);

                $datas->image = $filename;

            }

            $datas->save();
            return redirect()->back()->with('success','Addedd Successfully!!!');
        }
        else
            {
                return redirect()->back()->with('error','Sorry you can only add 3 data!!!');
            }



    }


    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Service::find($id);

        if($datas)
        {
            $datas->delete();
            return redirect()->back()->with('success','Deleted Succeessfully!!!!');
        }
        else
        {
            return redirect()->back()->with('error','Deleted Already!!!');
        }
    }



}
