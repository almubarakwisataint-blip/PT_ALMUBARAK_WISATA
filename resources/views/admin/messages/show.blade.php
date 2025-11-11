@extends('admin.layout')

@section('title', 'Detail Pesan')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Detail Pesan</h1>
        <a href="{{ route('admin.messages.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
            Kembali
        </a>
    </div>

    <div class="space-y-6">
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama</label>
            <p class="mt-1 text-sm text-gray-900">{{ $message->name }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <p class="mt-1 text-sm text-gray-900">
                <a href="mailto:{{ $message->email }}" class="text-blue-600 hover:text-blue-800">{{ $message->email }}</a>
            </p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Telepon</label>
            <p class="mt-1 text-sm text-gray-900">{{ $message->phone ?? 'Tidak disediakan' }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Subjek</label>
            <p class="mt-1 text-sm text-gray-900">{{ $message->subject }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Pesan</label>
            <div class="mt-1 p-4 bg-gray-50 rounded-lg">
                <p class="text-sm text-gray-900 whitespace-pre-wrap">{{ $message->message }}</p>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Diterima</label>
            <p class="mt-1 text-sm text-gray-900">{{ $message->created_at->format('d M Y H:i:s') }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <p class="mt-1">
                @if($message->is_read)
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                        Dibaca
                    </span>
                @else
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                        Belum Dibaca
                    </span>
                @endif
            </p>
        </div>
    </div>

    <div class="mt-8 flex space-x-4">
        <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            Balas Email
        </a>
        @if($message->phone)
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $message->phone) }}" target="_blank" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                Hubungi WhatsApp
            </a>
        @endif
        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                Hapus Pesan
            </button>
        </form>
    </div>
</div>
@endsection
