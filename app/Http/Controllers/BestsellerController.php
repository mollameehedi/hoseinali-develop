<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Bestseller;
use Image;

class BestsellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.bestseller',[
            'bestsellers' => Bestseller::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book_id = Bestseller::insertGetId([
            'book_name' => $request->book_name
        ]);
        $uploaded_photo = $request->file('book_photo');
        $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
        $new_photo_location ='public/uploads/best_seller/'.$new_photo_name;
               Image::make($uploaded_photo)->save(base_path($new_photo_location));
               Bestseller::find($book_id)->update([

              'book_photo' =>  $new_photo_name,
           ]);
        return back()->with('book_added', 'Book Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function bestsellerdelete($id)
    {
        $photo_name = Bestseller::find($id)->book_photo;
        $book_name = Bestseller::find($id)->book_name;
        Bestseller::find($id)->delete();
            $old_photo_location = 'public/uploads/best_seller/'.$photo_name;
             unlink(base_path($old_photo_location));

             return back()->with('book_delete', $book_name.' Book delete successfully');
    }
}
