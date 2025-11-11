@extends('admin.layout')

@section('title', 'Edit Bisnis')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Edit Bisnis</h1>

        <form method="POST" action="{{ route('admin.business.update', $business) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Bisnis</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $business->title) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Tipe Bisnis</label>
                    <select name="type" id="type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        <option value="Umroh" {{ old('type', $business->type) == 'Umroh' ? 'selected' : '' }}>Umroh</option>
                        <option value="Haji" {{ old('type', $business->type) == 'Haji' ? 'selected' : '' }}>Haji</option>
                        <option value="Wisata" {{ old('type', $business->type) == 'Wisata' ? 'selected' : '' }}>Wisata</option>
                        <option value="Lainnya" {{ old('type', $business->type) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Bisnis</label>
                <textarea name="description" id="description" rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>{{ old('description', $business->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="available_from" class="block text-sm font-medium text-gray-700 mb-2">Tersedia Dari (Opsional)</label>
                    <input type="date" name="available_from" id="available_from" value="{{ old('available_from', $business->available_from ? $business->available_from->format('Y-m-d') : '') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('available_from')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Baru (Opsional)</label>
                    <input type="file" name="image" id="image" accept="image/*" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    @if($business->image)
                        <p class="mt-2 text-sm text-gray-600">Gambar saat ini: {{ basename($business->image) }}</p>
                    @endif
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6">
                <label for="button_text" class="block text-sm font-medium text-gray-700 mb-2">Teks Tombol</label>
                <select name="button_text" id="button_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="Pesan Travel" {{ old('button_text', $business->button_text) == 'Pesan Travel' ? 'selected' : '' }}>Pesan Travel</option>
                    <option value="Lihat Promo" {{ old('button_text', $business->button_text) == 'Lihat Promo' ? 'selected' : '' }}>Lihat Promo</option>
                    <option value="Pelajari Lebih Lanjut" {{ old('button_text', $business->button_text) == 'Pelajari Lebih Lanjut' ? 'selected' : '' }}>Pelajari Lebih Lanjut</option>
                    <option value="Hubungi Kami" {{ old('button_text', $business->button_text) == 'Hubungi Kami' ? 'selected' : '' }}>Hubungi Kami</option>
                    <option value="Daftar Sekarang" {{ old('button_text', $business->button_text) == 'Daftar Sekarang' ? 'selected' : '' }}>Daftar Sekarang</option>
                </select>
                @error('button_text')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('admin.business.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
                    Batal
                </a>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                    <i class="fas fa-edit mr-2"></i>Update Bisnis
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
