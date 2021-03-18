@extends('app')
@section('content')
<div class="container mx-auto my-auto mt-8">
    <h1 class="font-bold text-4xl mb-8 text-center">{{ $post->title }}</h1>
    <div class="flex justify-end items-center mb-4">
        <a href={{ route('posts.edit', $post->id) }} class="mr-4 text-sm flex items-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="text-sm flex items-center focus:outline-none"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>Delete</button>
        </form>
    </div>
    <p class="text-right text-sm mb-4">
        Posted {{ $post->created_at->diffForHumans() }}.
    </p>
    <div class="text-justify">
        <p>{{ $post->body }}</p>
    </div>
</div>
@endsection
