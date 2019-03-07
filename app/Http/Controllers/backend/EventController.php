<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $datas = Event::Orderby('id','desc')->get();
        return view('backend.pages.event.add',compact('datas'));
    }

    public function add(Request $request)
    {
        $this->validate($request,[

              'title' => 'required',
              'image' => 'required|mimes:jpeg,jpg,png|max:2048',
              'details' => 'required',
              'date' => 'required',
              'time' => 'required',
        ]);

           $datas = new Event;
           $datas->title = $request->title;
           $datas->date = $request->date;
           $datas->time = $request->time;
           $datas->details = $request->details;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/event/',$filename);

            $datas->image = $filename;

        }

        $datas->save();
        return redirect()->back()->with('success','Addedd Successfully!!!');

    }


    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Event::find($id);

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


    public function edit(Request $request)
    {
        $id = (int)$request->id;
        $datas = Event::find($id);


        if($datas)
        {

            return view('backend.pages.event.edit',compact('datas'));
        }
        else
        {
            return redirect()->Back()->with('error',"Something Went Wrong!!");
        }
    }


    public function update(Request $request)
    {


        $id = (int)$request->id;
        $datas = Event::find($id);

        $datas->title = $request->title;
        $datas->date = $request->date;
        $datas->time = $request->time;
        $datas->details = $request->details;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/event/',$filename);

            $datas->image = $filename;

        }

        $datas->save();
        return redirect()->back()->with('success','Updated Successfully!!!');

    }



}
