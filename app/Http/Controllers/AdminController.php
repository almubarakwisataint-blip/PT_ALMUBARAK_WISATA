<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Business;
use App\Models\Message;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Simple authentication - in production, use proper authentication
        if ($request->username === 'ptalmubarak@gmail.com' && $request->password === 'ALMUBARAK3311') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function dashboard()
    {
        $newsCount = News::count();
        $businessCount = Business::count();
        $teamCount = Team::count();
        $messagesCount = Message::count();
        $unreadMessagesCount = Message::where('is_read', false)->count();
        $recentMessages = Message::latest()->take(5)->get();
        return view('admin.dashboard', compact('newsCount', 'businessCount', 'teamCount', 'messagesCount', 'unreadMessagesCount', 'recentMessages'));
    }

    // News Management
    public function newsIndex()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function newsCreate()
    {
        return view('admin.news.create');
    }

    public function newsStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function newsEdit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function newsUpdate(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function newsDestroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus');
    }

    // Business Management
    public function businessIndex()
    {
        $businesses = Business::latest()->paginate(10);
        return view('admin.business.index', compact('businesses'));
    }

    public function businessCreate()
    {
        return view('admin.business.create');
    }

    public function businessStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string',
            'price' => 'nullable|numeric',
            'available_from' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('business', 'public');
        }

        Business::create($data);

        return redirect()->route('admin.business.index')->with('success', 'Bisnis berhasil ditambahkan');
    }

    public function businessEdit(Business $business)
    {
        return view('admin.business.edit', compact('business'));
    }

    public function businessUpdate(Request $request, Business $business)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string',
            'price' => 'nullable|numeric',
            'available_from' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($business->image) {
                Storage::disk('public')->delete($business->image);
            }
            $data['image'] = $request->file('image')->store('business', 'public');
        }

        $business->update($data);

        return redirect()->route('admin.business.index')->with('success', 'Bisnis berhasil diperbarui');
    }

    public function businessDestroy(Business $business)
    {
        if ($business->image) {
            Storage::disk('public')->delete($business->image);
        }
        $business->delete();

        return redirect()->route('admin.business.index')->with('success', 'Bisnis berhasil dihapus');
    }

    // Messages Management
    public function messagesIndex()
    {
        $messages = Message::latest()->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    public function messageShow(Message $message)
    {
        // Mark as read
        $message->update(['is_read' => true]);
        return view('admin.messages.show', compact('message'));
    }

    public function messageDestroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Pesan berhasil dihapus');
    }
}
