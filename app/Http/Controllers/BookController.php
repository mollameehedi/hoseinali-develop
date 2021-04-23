<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Booklist;
use Illuminate\Support\Facades\Storage;
use Image;
use Barryvdh\DomPDF\PDF;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mybook(){
        return view('admin.book.mybook',[
            'books' => Book::latest()->get()
        ]);
    }
    public function mybookstore(Request $request){
        $book_id = Book::insertGetId([
            'book_name' => $request->book_name
        ]);
        $uploaded_photo = $request->file('book_photo');
        $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
        $new_photo_location ='public/uploads/books/'.$new_photo_name;
               Image::make($uploaded_photo)->save(base_path($new_photo_location));
                  Book::find($book_id)->update([

              'book_photo' =>  $new_photo_name,
           ]);
           return back()->with('book_added', 'Book Added Successfully');
    }

    public function mybookdelete($id){
        $photo_name = Book::find($id)->book_photo;
        $book_name = Book::find($id)->book_name;
        Book::find($id)->delete();
            $old_photo_location = 'public/uploads/books/'.$photo_name;
             unlink(base_path($old_photo_location));

        return back()->with('book_delete', $book_name.' Book delete successfully');
    }
    public function booklist(){
        return view('admin.book.booklist',[
            'book_lists' => Booklist::latest()->get()
        ]);
    }
    public function booklistview($id){

        return Storage::download(Booklist::find($id)->book_list_photo);
    }
    public function booklistdelete($id){
        Storage::delete(Booklist::find($id)->book_list_photo);
        Booklist::find($id)->delete();
        return back()->with('delete_status', 'Book list deleted successfully');
    }



    public function bookliststore(Request $request){
        $book_list_id = Booklist::insertGetId([
            'book_list_name' => $request->book_list_name,
            'book_no' => $request->book_no
        ]);
        $uploaded_file = $request->file('book_list_photo')->store('book_pdf');
               Booklist::find($book_list_id)->update([
              'book_list_photo' =>  $uploaded_file,
           ]);
           return back()->with('book_list_added', $request->book_list_name. ' Book  Added Successfully');
    }


}
