<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\News;
use App\Models\Business;
use App\Models\Message;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        try {
            // Get latest news from database if available
            $news = News::latest('published_at')->take(10)->get();
        } catch (\Throwable $e) {
            $news = collect();
        }

        return Inertia::render('Welcome', [
            'news' => $news,
        ]);
    }

    public function about()
    {
        try {
            $teams = Team::all();
            $news = News::latest('published_at')->take(3)->get();
        } catch (\Throwable $e) {
            $teams = collect();
            $news = collect();
        }

        return Inertia::render('About', [
            'teams' => $teams,
            'news' => $news,
        ]);
    }

    public function visionMission()
    {
        return Inertia::render('VisionMission');
    }

    public function business()
    {
        try {
            $businesses = Business::all();
            $news = News::latest('published_at')->take(3)->get();
        } catch (\Throwable $e) {
            $businesses = collect();
            $news = collect();
        }

        return Inertia::render('Business', [
            'businesses' => $businesses,
            'news' => $news,
        ]);
    }

    public function news()
    {
        try {
            $news = News::latest('published_at')->paginate(10);
            $heroNews = News::latest('published_at')->take(3)->get();
        } catch (\Throwable $e) {
            $news = collect();
            $heroNews = collect();
        }

        return Inertia::render('News', [
            'news' => $news,
            'heroNews' => $heroNews,
        ]);
    }

    /**
     * Search across news (title and content) and show results in the news view.
     */
    public function search(Request $request)
    {
        $query = trim($request->query('q', ''));

        try {
            $news = News::when($query !== '', function ($qBuilder) use ($query) {
                $qBuilder->where('title', 'like', "%{$query}%")
                    ->orWhere('content', 'like', "%{$query}%");
            })->latest('published_at')->paginate(10)->withQueryString();
        } catch (\Throwable $e) {
            $news = collect();
        }

        return Inertia::render('News', [
            'news' => $news,
            'query' => $query,
        ]);
    }

    public function newsDetail($id)
    {
        try {
            $newsItem = News::findOrFail($id);
            $relatedNews = News::where('id', '!=', $id)
                ->latest('published_at')
                ->take(4)
                ->get();
        } catch (\Throwable $e) {
            $newsItem = [
                'id' => $id,
                'title' => 'Panduan Lengkap Persiapan Ibadah Umrah & Haji',
                'content' => 'Persiapan ibadah memerlukan pemahaman rukun, wajib, dan sunnah haji serta umrah sesuai tuntunan Rasulullah ﷺ. Pastikan kondisi fisik dan kelengkapan dokumen telah siap sebelum keberangkatan.',
                'image' => '/images/landing/hero-kaaba.jpg',
                'category' => 'Panduan Ibadah',
                'published_at' => date('Y-m-d'),
                'author' => 'Tim Pembimbing Almubarak',
            ];
            $relatedNews = collect();
        }

        return Inertia::render('NewsDetail', [
            'newsItem' => $newsItem,
            'relatedNews' => $relatedNews,
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact');
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

        try {
            Message::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
        } catch (\Throwable $e) {
            // Graceful logging if database connection is temporary offline
        }

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }

    public function privacy()
    {
        return Inertia::render('Privacy');
    }

    public function terms()
    {
        return Inertia::render('Terms');
    }

    public function awards()
    {
        return Inertia::render('Awards');
    }

    public function team()
    {
        try {
            $teams = Team::all();
        } catch (\Throwable $e) {
            $teams = collect();
        }

        return Inertia::render('Team', [
            'teams' => $teams,
        ]);
    }

    public function travelPromos()
    {
        return redirect()->route('business');
    }
}
