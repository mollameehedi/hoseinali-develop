<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutbanner;
use App\Aboutbio;
use Image;


class AboutController extends Controller
{
    public function aboutbanner(){
        return view('admin.about.banner.index',[
            'aboutbanner' => Aboutbanner::find(1),
        ]);
    }
    public function aboutbannerupdate(Request $request){
        if ($request->hasFile('photo')) {
            $old_photo_location = 'public/uploads/about_banner/'.Aboutbanner::find(1)->photo;
                unlink(base_path($old_photo_location));

       $id = 1;

       $uploaded_photo = $request->file('photo');
        $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/about_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Aboutbanner::find($id)->update([
              'photo' =>  $new_photo_name,
           ]);
        }
        Aboutbanner::find(1)->update([
            'description' =>  $request->description,
         ]);

           return back()->with('about_banner', 'About Banner updated successfuly');
    }


    public function aboutmybio(){
        return view('admin.about.bio.index',[
            'aboutbio' => Aboutbio::find(1),
        ]);
    }
    public function aboutmybioupdate(Request $request){
        if ($request->hasFile('photo')) {
            $old_photo_location = 'public/uploads/about_bio/'.Aboutbio::find(1)->photo;
                unlink(base_path($old_photo_location));

       $id = 1;

       $uploaded_photo = $request->file('photo');
        $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/about_bio/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Aboutbio::find($id)->update([
            'photo' =>  $new_photo_name,
         ]);
        }

           Aboutbio::find(1)->update([
              'description1' =>  $request->description1,
              'description2' =>  $request->description2,
           ]);
           return back()->with('about_bio', 'Bio updated successfuly');
    }
}
