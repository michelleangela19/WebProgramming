@extends('layout.master')
@section('title', 'Home Page')

@section('content')
    <a href="/{{ $highlight->id }}">
        <div class="highlighted flex my-10 py-2 rounded-md hover:bg-gray-200">
            <img class="w-72 mr-12" src="{{ $highlight->image }}" alt="Sunset in the mountains">
            <div class=" flex flex-col justify-center">
                <h1 class="underline font-bold text-lg">HIGHLIGHT BOOK</h1>
                <h1 class="text-4xl font-black">{{ $highlight->title }}</h1>
                <h1>{{ $highlight->description }}</h1>
            </div>
        </div>
    </a>

    <div class="py-12">
        <h1 class="underline font-bold text-lg">LATEST BOOK REVIEW</h1>
        <div class="py-4 gap-4 grid grid-1 lg:grid-2 2xl:grid-cols-4">
            @foreach ($latests as $latest)
                <div class="bg-gray-100 hover:bg-gray-200 max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-10">
                        <img class="w-full" src="{{ $latest->image }}" alt="">
                        <div class="font-bold text-xl py-4">{{ $latest->title }}</div>
                        <a href="/{{ $latest->id }}" class="rounded-md bg-blue-600 p-2 text-white text-center">Read Post</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="py-12">
        <h1 class="underline font-bold text-lg">BOOK SERIES REVIEW</h1>
        <div class="py-4 gap-4 grid grid-1 lg:grid-2 2xl:grid-cols-4">
            @foreach ($books as $book)
                <div class="bg-gray-100 hover:bg-gray-200 max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-10">
                        <img class="w-full" src="{{ $book->image }}" alt="">
                        <div class="font-bold text-xl py-4">{{ $book->title }}</div>
                        <a href="/{{ $book->id }}" class="rounded-md bg-blue-600 p-2 text-white text-center">Read Post</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
