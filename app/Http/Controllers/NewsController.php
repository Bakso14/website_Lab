<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index(Request $request)
    {
        if(isset($request->search)){
            
            $search = $request->search;

            // Modifikasi query untuk pencarian berita
            $news = News::where('title', 'LIKE', "%{$search}%")
            ->limit(5)
            ->get();
            return view("pages.news", [
                "title" => "News",
                "news" => $news,
                "search" => $search,
            ]);

        } else {
            $news = News::limit(5)->get();
            $categories = NewsCategory::with(['news' => function ($query) {
                $query->limit(5);
            }])->get();

            return view("pages.news", [
                "title" => "News",
                "news" => $news,
                "categories" => $categories,
            ]);
        }

    }

    function detail(String $slug)
    {
        $news = News::where('slug', $slug)->get()->first();
        $top_3_news = News::where('id', '!=', $news->id)->limit(3)->get();
        return view('pages.news-detail', [
            "title" => $news->title,
            "news" => $news,
            "top_3_news" => $top_3_news,
        ]);
    }

    function category(String $id) 
    {
        $category = NewsCategory::find($id);
        $news = $category->news()->paginate(10);

            return view("pages.news-category", [
                "title" => $category->name,
                "news" => $news,
                "category" => $category,
            ]);
    }
}
