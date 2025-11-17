@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <article class="bg-white shadow-lg rounded-lg overflow-hidden">
            @if($news->image)
                <div class="relative">
                    @if(in_array(pathinfo($news->image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                        <img src="{{ Storage::disk('news')->url($news->image) }}" alt="{{ $news->title }}" class="w-full h-64 object-cover">
                    @else
                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <p class="mt-2 text-sm text-gray-500">File: {{ basename($news->image) }}</p>
                                <a href="{{ Storage::disk('news')->url($news->image) }}" target="_blank" class="mt-2 inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Download File
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">
                        {{ $news->category }}
                    </span>
                    @if($news->published_at)
                        <span class="ml-4 text-sm text-gray-500">
                            {{ $news->published_at->format('d M Y') }}
                        </span>
                    @endif
                </div>

                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $news->title }}</h1>

                <div class="prose max-w-none">
                    {!! nl2br(e($news->content)) !!}
                </div>
            </div>
        </article>

        <div class="mt-8">
            <a href="{{ route('news.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Berita
            </a>
        </div>
    </div>
</div>
@endsection
