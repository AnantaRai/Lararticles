@extends('app')
@section('content')
<!-- component -->
<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
      <h1 class="text-4xl text-center font-semibold">Create a new post</h1>

      <form class="mt-6" action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title" class="block mt-2 text-sm font-semibold text-gray-600 uppercase">Title</label>
        <input id="title" type="text" name="title" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg" value="{{ old('title') }}" autocomplete="off"/>
        @error('title')
          <div class="text-xs text-red-500">{{ $message }}</div>
        @enderror

        <label for="body" class="block mt-2 text-sm font-semibold text-gray-600 uppercase">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="block resize-none w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg" autocomplete="off">{{ old('body') }}</textarea>
        @error('body')
          <div class="text-xs text-red-500">{{ $message }}</div>
        @enderror

        <button type="submit" class="w-full h-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
          Create
        </button>
      </form>
    </div>
  </div>
@endsection
