<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Homebanner;
use App\Homebannerimg;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.home',[
            'users' => User::all(),
        ]);
    }

    public function banner()
    {
        return view('admin.home.banner',[
            'banner' => Homebanner::find(1),
            'banner_photos' => Homebannerimg::all(),
            'homebannerimgs' => Homebannerimg::latest()->get(),
        ]);
    }
    public function banneredit()
    {
        return view('admin.home.banneredit',[
            'banner' => Homebanner::find(1),

        ]);
    }
    public function bannerupdate(Request $request,$id)
    {
        Homebanner::find(1)->update($request->except("_token"));
        return redirect('/home/banner')->with('update_status', 'Banner content updated !');
    }
    public function userdelete($id){

        if(User::find($id)->profile_photo != 'default.png'){
            $old_photo_location = 'public/uploads/profile/'.User::find($id)->profile_photo;
             unlink(base_path($old_photo_location));
         }
        User::find($id)->delete();
        return back()->with('user_delete_status', 'User Deleted successfuly');
    }

    public function homebanneradd(Request $request){

        $id = Homebannerimg::insertGetId($request->except('_token'));

        $uploaded_photo = $request->file('img');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/home/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Homebannerimg::find($id)->update([
              'img' =>  $new_photo_name,
           ]);
           return back()->with('banner_img_added', 'Banner photo added successfuly');

    }
    public function bannerimgdelete($id){
        $photo_name = Homebannerimg::find($id)->img;

            $old_photo_location = 'public/uploads/home/'.$photo_name;
             unlink(base_path($old_photo_location));
             Homebannerimg::find($id)->delete();
             return back()->with('book_delete', 'Banner photo deleted successfully');
    }
}
