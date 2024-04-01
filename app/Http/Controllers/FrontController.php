<?php

namespace App\Http\Controllers;

use App\inquiry;
use App\Models\Bikecheck;
use App\Models\Book;
use App\Models\Childsubcategory;
use App\Models\Distributor;
use App\Models\Faq;
use App\Models\GlobalMember;
use App\Models\History;
use App\Models\HowTo;
use App\Models\Job;
use App\Models\News;
use App\Models\RaceTeamMember;
use App\Models\Recycling;
use App\Models\Review;
use App\Models\UsMember;
use App\Page;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(Request $request)
    {

//       $page = DB::table('pages')->where('id', 1)->first();
        $page = Page::with('sections')->where('id', 1)->first();
        $popular_books = Book::all()->take(3);
        $reviews = Review::all()->take(3);

        $section = DB::table('section')->where('page_id', 1)->get();
        $banner = DB::table('banners')->get();

//        return view('welcome', compact('page', 'section', 'banner', 'blog', 'instagram', 'get_product', 'popular_categories', 'popular_specialty_materials', 'popular_heat_transfers', 'popular_books'));
        return view('welcome', compact('page', 'section', 'banner', 'popular_books', 'reviews'));

    }

    public function aShatteredSleep (Request $request)
    {
        return view('a-shattered-sleep');
    }

    public function about (Request $request)
    {
        $page = Page::where('id', 2)->first();

        return view('about', compact('page'));
    }

    public function books (Request $request)
    {
        $books = Book::paginate(10);

        return view('books', compact('books'));
    }

    public function bookDetail (Request $request, $id)
    {
        $book = Book::find($id);

        return view('book-detail', compact('book'));
    }

    public function castTheFirstStone (Request $request)
    {
        return view('cast-the-first-stone');
    }

    public function contact()
    {
        $page = DB::table('pages')->where('id', 1)->first();

        return view('contact', compact('page'));
    }

    public function contactSubmit (Request $request)
    {
        try {
            inquiry::create($request->all());

            return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you asap');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function notOnMyWatch()
    {
        $page = DB::table('pages')->where('id', 1)->first();

        return view('not-on-my-watch', compact('page'));
    }

    public function reviews()
    {
        $reviews = Review::all();

        return view('reviews', compact('reviews'));
    }

    public function yesterdayShadows()
    {
        $page = DB::table('pages')->where('id', 1)->first();

        return view('yesterday-shadows', compact('page'));
    }

    public function myAccount (Request $request)
    {
        return view('my-account');
    }

//    public function bikeChecks (Request $request)
//    {
//        $bike_checks = Bikecheck::paginate(10);
//
//        return view('bike-checks', compact('bike_checks'));
//    }
//
//    public function bikeCcheckDetail (Request $request, $id)
//    {
//        $bike_check = Bikecheck::find($id);
//
//        return view('bike-check-detail', compact('bike_check'));
//    }

}
