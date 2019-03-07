<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $datas = Testimonial::Orderby('id','desc')->get();
        return view('backend.pages.testimonial.add',compact('datas'));
    }


    public function add(Request $request)
    {
        $this->validate($request,[

            'job' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'details' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);

        $datas = new Testimonial;
        $datas->name = $request->name;
        $datas->job = $request->job;
        $datas->address = $request->address;
        $datas->details = $request->details;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/testimonial/',$filename);

            $datas->image = $filename;

        }

        $datas->save();
        return redirect()->back()->with('success','Addedd Successfully!!!');

    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Testimonial::find($id);

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
        $datas = Testimonial::find($id);


        if($datas)
        {

            return view('backend.pages.testimonial.edit',compact('datas'));
        }

    }


    public function update(Request $request)
    {


        $id = (int)$request->id;
        $datas = Testimonial::find($id);

        $datas->name = $request->name;
        $datas->job = $request->job;
        $datas->address = $request->address;
        $datas->details = $request->details;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/testimonial/',$filename);

            $datas->image = $filename;

        }

        $datas->save();
        return redirect()->back()->with('success','Updated Successfully!!!');

    }


}
