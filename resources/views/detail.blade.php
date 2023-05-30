@extends('layout.master')
@section('title', 'Detail Page')

@section('content')
    <style>
        .fa {
            padding: 10px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 25px;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
            }

            .fa-twitter {
            background: #55ACEE;
            color: white;
            }

            .fa-google {
            background: #dd4b39;
            color: white;
            }

            .fa-linkedin {
            background: #007bb5;
            color: white;
            }

            .fa-youtube {
            background: #bb0000;
            color: white;
            }

            .fa-instagram {
            background: #125688;
            color: white;
            }
    </style>
    @php
        use Carbon\Carbon;
    @endphp

    <div class="py-10">
        <h1 class="text-4xl font-black mb-4">{{ $book->title }}</h1>
        <h1 class="text-md">{{ $book->description }}</h1>
        <h1 class="font-bold">by {{ $book->author }}</h1>
        <h1>{{ Carbon::parse($book->date)->format('d F, Y') }}</h1>

        @if($book->category == "Quick Reads")
            <span class="inline-block bg-green-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ $book->category }}
            </span>
        @elseif($book->category == "Medium Reads")
            <span class="inline-block bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ $book->category }}
            </span>
        @else
            <span class="inline-block bg-red-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ $book->category }}
            </span>
        @endif

        <img class="w-1/2 py-4" src="{{ $book->image }}" alt="">

        <div class="flex">
            <a href="https://id-id.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        </div>

        <h1 class="text-md py-4">{{ $book->body }}</h1>
    </div>
@endsection
