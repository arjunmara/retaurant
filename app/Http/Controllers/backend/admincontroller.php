<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\Booking_status;
use App\Model\Contact;
use App\Model\Hotel;
use App\Model\Logo;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Input;
use Hash;
class admincontroller extends Controller
{

    use AuthenticatesUsers;




    public function register(){

        return view('backend.register');

    }


    public function registeraction(Request $request){

        $this->validate($request,[

            'name' => 'required|string|max:20',

            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        $request['password'] = bcrypt($request->password);


        User::create($request->all());

        return redirect('/dashboard/profile')->with('success','Succesfully Registerd');

    }




    public function login(){


        return view('backend.login');

    }




    public function loginaction(Request $request){

        $this->validate($request,[
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){


            return redirect('/dashboard');
        }

        return redirect('/@dashboard@')->with('alert','Login Credentials doesnt Match');

    }



    public function index(){

        $logo = Logo::Orderby('id','desc')->first();
        $hotel = Hotel::Orderby('id','desc')->first();
        $status = Booking_status::Orderby('id','desc')->first();
        return view('backend.pages.site.add',compact('logo','hotel','status'));
    }



    protected function guard()
    {
        return Auth::guard();
    }







    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/@dashboard@');
    }







    public function profile(Request $request){

        $id = (int)$request->id;
        $datas = User::find($id);

        if($datas['utype'] == 'user'){

            return view('backend.pages.profile.admin');
        }
        else{

            $nis = User::where('utype','user')->get();

            return view('backend.pages.profile.add',compact('nis'));
        }


    }



    public function profileaction(Request $request){

        $this->validate($request,[
            'name' => 'string',
            'email' => 'string',


        ]);

        $id = (int)Auth::user()->id;
        $datas = User::find($id);
        $datas->name = $request->name;

        $datas->email = $request->email;


        if(Input::hasFile('image')){

            $file=Input::file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/backend/userimg',$filename);
            $datas->image = $filename;
        }
        $datas->Save();

        return redirect()->back()->with('Succesfully Updated');

    }


    public function adminprofiledelete(Request $request){
        $id = (int)$request->id;
        $datas = User::find($id);
        $datas->delete();
        return redirect()->back()->with('success','Succesfully Deleted!!!!');
    }



    public function passwordAction(Request $request)
    {
        $id = (int)$request->id;
        $this->validate($request, [
            'oldpassword'     => 'required',
            'password' => 'required|min:4|confirmed',
        ]);


        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::find($id);



        if(!Hash::check($data['oldpassword'], $user->password)){

            return redirect()->back()->with('error','oopss!!! old password didnt match!!!');
        }
        else{
                $user->password = $data['password'];
                $user->save();
            return redirect()->back()->with('success','Succesfully Updated!!!');
        }

    }





    public function contactMessages()
    {
        $data = new Contact;
        $notifications = Contact::Orderby('id','desc')->where('seen', 0)->limit(4)->get();
        $count = Contact::where('seen', '=', '0')->count();
        $output = '';

        if ($count == 0) $output .= "<li><a><span><span>No New Notifications</span></span>";

        foreach ($notifications as $key => $notification) {
            $output .= "<li><a href='" . route('contact-message') . "'><span><span>{$notification->fname}</span></span><br>";
            $output .= "<span class='message'> {$notification->email}</span> </a> </li>";
        }

        $response = [
            'status' => true,
            'code' => 200,
            'nischal' => $output,
            'count' => $count
        ];
        return response()->json($response);
    }


    public function viewContactMessages(){
        $datas = Contact::Orderby('id','desc')->get();
        return view('backend.pages.contact.contact', compact('datas'));
    }





    public function messageview(Request $request){
        $id = (int)$request->id;
        $datas = Contact::find($id);
        $datas->seen =1;
        $datas->save();
        return view('backend.pages.contact.singlemessage', compact('datas','das'));
    }

    public function confirm(Request $request){
        $id = (int)$request->id;
        $datas = Contact::find($id);

        return view('backend.pages.contact.delete',compact('datas'));
    }


    public function msgdelete(Request $request){
        $id = (int)$request->id;
        $datas = Contact::find($id);
        $datas->delete();
        return redirect('dashboard/contact-message');
    }






}
