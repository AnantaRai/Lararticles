@extends('app')
@section('content')
<div class="grid-cols-1 container mx-auto my-auto">
  <!-- Card 1 -->
  @foreach ($posts as $post)
  <div class="lg:m-4 shadow-md h-64 overflow-hidden hover:shadow-lg hover:bg-gray-100 rounded-lg bg-white my-12 mx-8">
    <!-- Card Content -->
    <div class="p-4">
      <h3 class="font-bold text-gray-600 text-2xl my-2 uppercase">{{ $post->title }}</h3>
      <p class="text-justify">{{ Str::limit($post->body, 500) }}</p>
      <div class="flex justify-between items-center mt-5">
        <a href={{ route('posts.show', $post->id) }} class="hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-gray-800 text-gray-100">Read More</a>
        <div class="text-right text-sm mb-4 flex justify-end items-center">
          <img src="https://i.pravatar.cc/150" class="rounded-full w-8 h-8 mr-2" alt="author">
          <p class="text-sm text-gray-500"><span class="font-bold text-md text-black">Ananta Rai</span> {{ $post->created_at->diffForHumans() }}.</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
