<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
     public function index()
     {
         $datas = Slider::Orderby('id','desc')->get();
         return view('backend.pages.slider.add',compact('datas'));
     }


    public function add(Request $request)
    {
        $this->validate($request,[

            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
        ]);

        $datas = new Slider;
        $datas->title_1 = $request->title_1;
        $datas->title_2 = $request->title_2;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/slider/',$filename);

            $datas->image = $filename;

        }

        $datas->save();
        return redirect()->back()->with('success',"Added Successfully!!");

    }


    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Slider::find($id);
        if($datas)
        {
            $datas->delete();
            return redirect()->back()->with('success',"Deleted Successfully!!!!");
        }
        else
            {
                return redirect()->back()->with('error',"Already Deleted!!!!");
            }

    }
}
