<?php

namespace App\Http\Controllers;

use App\Book;
use App\Dream;
use App\Event;
use App\Social;
use App\Aboutbio;
use App\Booklist;
use App\Bestseller;
use App\Homebanner;
use App\Aboutbanner;
use App\Homebannerimg;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class FrontendController extends Controller
{
    public function index(){


        return view('frontend.welcome',[
            'banner' => Homebanner::find(1),
            'homebannerimgs' => Homebannerimg::latest()->get(),
            'bestsellers' => Bestseller::latest()->get(),
            'dream' => Dream::find(1),
            'event' => Event::find(1),
            'aboutbio' => Aboutbio::find(1),
            'description1_first_letter' => substr(Aboutbio::find(1)->description1,0,1),
            'description1_other_content' => substr(Aboutbio::find(1)->description1,1),
            'book_lists' => Booklist::latest()->get(),
            'social_links' => Social::latest()->get(),
        ]);
    }
    public function books(){
        return view('frontend.books',[
            'book_lists' => Booklist::latest()->get(),
            'social_links' => Social::latest()->get(),
            'bestsellers' => Bestseller::latest()->get(),
            'books' => Book::latest()->get(),
        ]);
    }
    public function about(){
        return view('frontend.about',[
            'aboutbanner' => Aboutbanner::find(1),
            'social_links' => Social::latest()->get(),
            'bestsellers' => Bestseller::latest()->get(),
            'aboutbio' => Aboutbio::find(1),
            'dream' => Dream::find(1),
            'description1_first_letter' => substr(Aboutbio::find(1)->description1,0,1),
            'description1_other_content' => substr(Aboutbio::find(1)->description1,1),
        ]);
    }

    public function booklistdownload($id){
       return Storage::download(Booklist::find($id)->book_list_photo);
    }
}
