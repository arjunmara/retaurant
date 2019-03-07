<?php

namespace App\Http\Controllers\frontend;
use App\Model\Booking_status;
use App\Model\Contact;
use App\Model\Count;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\Hotel;
use App\Model\Logo;
use App\Model\Menu;
use App\Model\Opening;
use App\Model\Order;
use App\Model\Ourstory;
use App\Model\Room;
use App\Model\Room_img;
use App\Model\Service;
use App\Model\Slider;
use App\Model\Submenu;
use App\Model\Team;
use App\Model\Testimonial;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $slider = Slider::Orderby('id','desc')->get();
        $teams = Team::Orderby('id','desc')->get();
        $menus = Menu::Orderby('id','desc')->get();
        $status = Booking_status::Orderby('id','desc')->first();
        $openings = Opening::Orderby('id','desc')->first();
        $story  = Ourstory::Orderby('id','desc')->first();
        $gallerys  = Gallery::Orderby('id','desc')->get();
        $events  = Event::Orderby('id','desc')->take(2)->get();
        return view('frontend.includes.master',compact('site','lo','slider','teams','openings','story','events','gallerys','menus','status'));
    }

    public function about()
    {
        $story  = Ourstory::Orderby('id','desc')->first();
        $site = Hotel::Orderby('id','desc')->first();
        $count = Count::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $teams = Team::Orderby('id','desc')->get();
        $menus = Menu::Orderby('id','desc')->get();
        $test = Testimonial::Orderby('id','desc')->get();
        return view('frontend.pages.about',compact('site','lo','story','teams','test','menus','count'));
    }


    public function contact()
    {
        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();

        return view('frontend.pages.contact',compact('site','lo','menus'));
    }

    public function contactaction(Request $request)
    {

            $datas = new Contact;
            $datas->fname = $request->fname;
            $datas->phone = $request->phone;
            $datas->room = $request->room;
            $datas->time = $request->time;
            $datas->no = $request->no;
            $datas->date = $request->date;
            $datas->phone = $request->phone;
            $datas->email = $request->email;
            $datas->lname = $request->lname;
            $datas->website = $request->website;
            $datas->message = $request->message;
            $datas->save();

            return redirect()->back()->with('success',"Thank you..we will contact you soon!!!!");
        }



    public function contactactions(Request $request){

      $check = $request->checking;
      if($check == "opening")
      {
          $data=array(
              'date'=>$request->date,
              'phone'=>$request->phone,
              'no'=>$request->no,
              'time'=>$request->time,
              'email'=>$request->email
          );

          /*Mail::send('frontend.pages.mail',$data,function($message) use ($data){
              $message->from($data['email']);
              $message->to('evergreengulmi@gmail.com');
              $message->subject('Booking');
          });*/
          Contact::create($data);
          return redirect()->back()->with('success',"Thank you..we will contact you soon!!!!");
      }

        elseif($check == "contact")
        {
            $data=array(
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'email'=>$request->email,
                'website'=>$request->website,
                /*'bodymessage'=>$request->message*/
                'message'=>$request->message
            );

            Contact::create($data);

            /*Mail::send('frontend.pages.mail1',$data,function($message) use ($data){
                $message->from($data['email']);
                $message->to('evergreengulmi@gmail.com');
                $message->subject($data['fname']);
            });*/
            return redirect()->back()->with('success',"Thank you..we will contact you soon!!!!");
        }

      elseif($check == "checkout")
      {
          $data=array(
              'fname'=>$request->fname,
              'lname'=>$request->lname,
              'email'=>$request->email,
              'phone'=>$request->phone,
              'address'=>$request->address,
          );

          $this->validate($request,[

              'phone' => 'required|min:10',
              'address' => 'required',

          ]);

          $datas = Contact::create($data);
          $nis_id = $datas->id;

          foreach(Cart::content() as $item){

              $order = new Order;
              $order->contact_id  = $nis_id;
              $order->food_name  = $item->name;
              $order->qty  = $item->qty;
              $order->food_id  = $item->id;
              $order->price  = $item->price;
              $order->total  = Cart::subtotal();
              $order->save();

          }

          Cart::destroy();

          /*Mail::send('frontend.pages.mail1',$data,function($message) use ($data){
              $message->from($data['email']);
              $message->to('evergreengulmi@gmail.com');
              $message->subject($data['fname']);
          });*/
          return redirect()->back()->with('success',"Thank you..we will contact you soon!!!!");
      }

      else
      {
          $data=array(
              'fname'=>$request->fname,
              'lname'=>$request->lname,
              'date'=>$request->date,
              'no'=>$request->no,
              'email'=>$request->email,
              'phone'=>$request->phone,
              'message'=>$request->message,
              /*'bodymessage'=>$request->message,*/
              'room'=>$request->room,
          );

          /*Mail::send('frontend.pages.mail2',$data,function($message) use ($data){
              $message->from($data['email']);
              $message->to('evergreengulmi@gmail.com');
              $message->subject($data['fname']);
          });*/

          Contact::create($data);
          return redirect()->back()->with('success',"Thank you..we will contact you soon!!!!");
      }



    }


    public function event()
    {
        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $events = Event::Orderby('id','desc')->get();

        return view('frontend.pages.event',compact('site','lo','menus','events'));
    }

    public function eventdetails(Request $request)
    {
        $id = $request->slug;
        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $eve = Event::find($id);
        $events = Event::Orderby('id','desc')->get()->except($id);

        return view('frontend.pages.eventdetails',compact('site','lo','menus','events','eve'));
    }


    public function menu()
    {

        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $events = Event::Orderby('id','desc')->get();
        $alls = Submenu::Orderby('id','desc')->get();

        return view('frontend.pages.menu',compact('site','lo','menus','events','alls'));
    }


    public function service()
    {

        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $services = Service::Orderby('id','desc')->get();

        return view('frontend.pages.services',compact('site','lo','menus','services'));
    }

    public function shop()
    {

        $_datas['menus'] = Menu::Orderby('id','desc')->get();
        $_datas['submenus'] = Submenu::Orderby('id','desc')->paginate(12);
        $_datas['lo'] = Logo::Orderby('id','desc')->first();
        $_datas['services'] = Service::Orderby('id','desc')->get();
        $_datas['site'] = Hotel::Orderby('id','desc')->first();

        return view('frontend.pages.shop',$_datas);
    }

    public function cartshow()
    {

        $_datas['menus'] = Menu::Orderby('id','desc')->get();
        $_datas['submenus'] = Submenu::Orderby('id','desc')->paginate(12);
        $_datas['lo'] = Logo::Orderby('id','desc')->first();
        $_datas['services'] = Service::Orderby('id','desc')->get();
        $_datas['site'] = Hotel::Orderby('id','desc')->first();

        return view('frontend.pages.cart',$_datas);
    }

    public function room(Request $request)
    {

        $r_id = $request->slug;
        $room = Room::where('room_id', 'LIKE', $r_id)->first();

        if($room)
        {
        $roomimg = Room_img::where('room_id', 'LIKE', $r_id)->get();
        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $services = Service::Orderby('id','desc')->get();
        return view('frontend.pages.room',compact('site','lo','menus','services','room','roomimg'));
        }
        else
            {
                return redirect()->back();
            }


    }


    public function booking(Request $request)
    {

        $menus = Menu::Orderby('id','desc')->get();
        $site = Hotel::Orderby('id','desc')->first();
        $lo = Logo::Orderby('id','desc')->first();
        $services = Service::Orderby('id','desc')->get();
        $id = $request->id;

        return view('frontend.pages.booking',compact('site','lo','menus','services','id'));
    }


  /*  public function send(Request $request)
    {
        Mail::send(['text'=>'mail'],['name','nischal'],function($message)
        {
             $message->to('evergreengulmi@gmail.com','To nischal')->subject('Test email');
             $message->from('bitfumes@gmail.com');
        });

    }*/



}
