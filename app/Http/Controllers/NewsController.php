<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        // Validasi file upload
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:5120', // 5MB max
            'category' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Ambil nama file asli
            $originalName = $request->file('image')->getClientOriginalName();

            // Buat nama file unik dengan timestamp
            $timestamp = now()->timestamp;
            $uniqueName = $timestamp . '_' . $originalName;

            // Simpan file menggunakan storeAs() dengan disk 'news'
            $path = $request->file('image')->storeAs('', $uniqueName, 'news');

            // Simpan path relatif ke database
            $data['image'] = $path;
        }

        // Simpan data ke database (sesuaikan dengan model News Anda)
        // News::create($data);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        // Validasi file upload
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:5120', // 5MB max
            'category' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        // Ambil data berita yang akan diupdate
        // $news = News::findOrFail($id);

        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            // if ($news->image && Storage::disk('news')->exists($news->image)) {
            //     Storage::disk('news')->delete($news->image);
            // }

            // Ambil nama file asli
            $originalName = $request->file('image')->getClientOriginalName();

            // Buat nama file unik dengan timestamp
            $timestamp = now()->timestamp;
            $uniqueName = $timestamp . '_' . $originalName;

            // Simpan file menggunakan storeAs() dengan disk 'news'
            $path = $request->file('image')->storeAs('', $uniqueName, 'news');

            // Simpan path relatif ke database
            $data['image'] = $path;
        }

        // Update data ke database
        // $news->update($data);

        return redirect()->back()->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Ambil data berita
        // $news = News::findOrFail($id);

        // Hapus file jika ada
        // if ($news->image && Storage::disk('news')->exists($news->image)) {
        //     Storage::disk('news')->delete($news->image);
        // }

        // Hapus data dari database
        // $news->delete();

        return redirect()->back()->with('success', 'Berita berhasil dihapus');
    }
}
