<nav class="flex items-center bg-gray-800 p-3 flex-wrap">
    <a href="/" class="p-2 mr-4 inline-flex items-center">
      <span class="text-xl text-white font-bold uppercase tracking-wide"
        >Lararticles</span
      >
    </a>
    <button
      class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
      data-target="#navigation"
    >
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
    <div
      class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
      id="navigation"
    >
      <div
        class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto"
      >
        <a
          href="/"
          class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
        >
          <span>Home</span>
        </a>
        <a
          href="{{ route('posts.index') }}"
          class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
        >
          <span>Posts</span>
        </a>
        <a
          href="{{ route('posts.create') }}"
          class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
        >
          <span>Create New Post</span>
        </a>
        <a
          href="#"
          class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
        >
          <span>About</span>
        </a>
        <a
          href="#"
          class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
        >
          <span>Contact</span>
        </a>
      </div>
    </div>
  </nav>
