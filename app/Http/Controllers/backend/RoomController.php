<?php

namespace App\Http\Controllers\backend;
use App\Model\Booking_status;
use Illuminate\Support\Facades\Input;
use App\Model\Room;
use App\Model\Room_img;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::Orderby('id','desc')->get();
        return view('backend.pages.room.add',compact('room'));
    }


    public function add(Request $request)
    {
        $this->validate($request,[

            'info' => 'required',
            'details' => 'required',
        ]);

        $datas = new Room;
        $datas->info = $request->info;
        $datas->room_id = $request->room_id;
        $datas->details = $request->details;
        $datas->save();

        if ($request->hasFile('image')) {

            foreach ($request->image as $file) {

                $filename = time().'.'.$file->getClientOriginalName();
                /*$file -> storeAs('public/frontend/image/doimage/',$filename);*/
                $file -> move(public_path().'/frontend/image/room/',$filename);
                $datas = new Room_img;
                $datas->image = $filename;
                $datas->room_id = $request->room_id;
                $datas->save();

            }
        }


        return redirect()->back()->with('success','Addedd Successfully!!!');
    }


    public function imageadd(Request $request)
    {
         $id = $request->room_id;
         if($id)
         {
             if ($request->hasFile('image')) {

                 foreach ($request->image as $file) {

                     $filename = time().'.'.$file->getClientOriginalName();
                     /*$file -> storeAs('public/frontend/image/doimage/',$filename);*/
                     $file -> move(public_path().'/frontend/image/room/',$filename);
                     $datas = new Room_img;
                     $datas->image = $filename;
                     $datas->room_id = $request->room_id;
                     $datas->save();

                 }
             }


             return redirect()->back()->with('success','Addedd Successfully!!!');
         }
         else
         {
             return redirect()->back()->with('error','something went wrong!!!');
         }

    }



    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Room::find($id);

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



    public function imagedelete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Room_img::find($id);

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
        $datas = Room::find($id);
        $r_id = $datas->room_id;
        $r_img = Room_img::where('room_id', 'LIKE', $r_id)->get();


        if($datas)
        {

            return view('backend.pages.room.edit',compact('datas','r_img'));
        }

    }


    public function update(Request $request)
    {


        $id = (int)$request->id;
        $datas = Room::find($id);

        $datas->info = $request->info;
        $datas->room_id = $request->room_id;
        $datas->details = $request->details;



        $datas->save();
        return redirect()->back()->with('success','Updated Successfully!!!');

    }


    public function booking_status(Request $request)
    {


        $id = (int)$request->id;
        $datas = Booking_status::find($id);

        $datas->status = $request->status;

        $datas->save();
        return redirect()->back()->with('success','Updated Successfully!!!');

    }

}
