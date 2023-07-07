<x-layout>
    <x-card class=" max-w-lg mx-auto mt-24 p-10 ">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a post
        </h2>
        <p class="mb-4">Post an article</p>
    </header>

    <form method="POST" action="/posts">
      @csrf

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Example: xyz fc beat abcd 4-3"
            />
            @error('title')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Example: football, kpl, kariobangi sharks, etc"
            />
            @error('tags')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        {{-- <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                 Cover image
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
            />
        </div> --}}

        <div class="mb-6">
            <label
                for="body"
                class="inline-block text-lg mb-2"
            >
                Body
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="body"
                rows="10"
                placeholder="Include tasks, requirements, salary, etc"
            ></textarea>
            @error('body')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Post
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
 </x-layout>
    
    