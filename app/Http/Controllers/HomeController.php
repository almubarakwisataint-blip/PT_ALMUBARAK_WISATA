<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Business;
use App\Models\Message;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        // Get latest news from database
        $news = News::latest('published_at')->take(10)->get();

        return view('welcome', compact('news'));
    }

    public function about()
    {
        // Get latest news for footer
        $news = News::latest('published_at')->take(3)->get();

        return view('about', compact('news'));
    }

    public function business()
    {
        // Get all businesses from database
        $businesses = Business::all();

        // Get latest news for footer
        $news = News::latest('published_at')->take(3)->get();

        return view('business', compact('businesses', 'news'));
    }

    public function news()
    {
        // Get all news from database
        $news = News::latest('published_at')->paginate(10);

        // Get latest 3 news for hero section carousel
        $heroNews = News::latest('published_at')->take(3)->get();

        return view('news', compact('news', 'heroNews'));
    }

    /**
     * Search across news (title and content) and show results in the news view.
     */
    public function search(Request $request)
    {
        $query = trim($request->query('q', ''));

        $news = News::when($query !== '', function ($qBuilder) use ($query) {
            $qBuilder->where('title', 'like', "%{$query}%")
                ->orWhere('content', 'like', "%{$query}%");
        })->latest('published_at')->paginate(10)->withQueryString();

        return view('news', compact('news'));
    }

    public function newsDetail($id)
    {
        // Get news by ID from database
        $newsItem = News::findOrFail($id);

        // Get related news (excluding current news, latest 4)
        $relatedNews = News::where('id', '!=', $id)
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('news-detail', compact('newsItem', 'relatedNews'));
    }

    public function contact()
    {
        // Get latest news for footer
        $news = News::latest('published_at')->take(3)->get();

        return view('contact', compact('news'));
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }

    public function awards()
    {
        // Get latest news for footer
        $news = News::latest('published_at')->take(3)->get();

        return view('awards', compact('news'));
    }

    public function team()
    {
        // Get all team members from database
        $teams = Team::all();

        // Get latest news for footer
        $news = News::latest('published_at')->take(3)->get();

        return view('team', compact('teams', 'news'));
    }

    public function travelPromos()
    {
        return view('travel-promos');
    }
}
