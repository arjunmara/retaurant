<?php

namespace App\Http\Controllers\backend;
use App\Model\Booking_status;
use App\Model\Hotel;
use Illuminate\Support\Facades\Input;
use App\Model\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){


        $logo = Logo::Orderby('id','desc')->first();
        $hotel = Hotel::Orderby('id','desc')->first();
        $status = Booking_status::Orderby('id','desc')->first();
        return view('backend.pages.site.add',compact('logo','hotel','status'));

    }

    public function add(Request $request){

        $this->validate($request,[

            'logo' => 'mimes:jpeg,jpg,png|max:2048',
        ]);


        $id = (int)$request->id;
        $datas = Logo::find($id);
        if(Input::hasFile('logo'))
        {

            $file = Input::File('logo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/logo/',$filename);

            $datas->logo = $filename;
            $datas->save();
        }
        return redirect()->back()->with('success','Logo Succesfully Updated!!!!');

    }

    public function hoteladd(Request $request)
    {
        $id = (int)$request->id;
        $datas = Hotel::find($id);

        if($datas)
        {

            $datas->hotel_name = $request->hotel_name;
            $datas->address = $request->address;
            $datas->telephone = $request->telephone;
            $datas->mobile = $request->mobile;
            $datas->email1 = $request->email1;
            $datas->email2 = $request->email2;
            $datas->opening_time = $request->opening_time;
            $datas->twitter_link = $request->twitter_link;
            $datas->facebook_link = $request->facebook_link;
            $datas->instagram_link = $request->instagram_link;
            $datas->googleplus_link = $request->googleplus_link;
            $datas->save();

            return redirect()->back()->with('success',"Hotel-Information Updated Successfully!!!!!");
        }
        else
        {
            return redirect()->back()->with('error',"Sorry!!!!");
        }

    }



}
