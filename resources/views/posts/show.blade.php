<x-layout>
  
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <x-card class="p-20 bg-green-600">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{ $Post->coverImage ? asset('storage/'. $Post->coverImage) : asset('images/no-image.png')}}"
                alt=""
            />

            <h3 class="text-2xl mb-2">{{$Post->title}}</h3>
            <div class="text-xl font-bold mb-4">
                {{$Post->body}}
            </div>
               <x-post-tags :tagsCsv="$Post->tags"/>
            
        </div>
    </x-card>
    {{-- <x-card class="mt-4 p-2 flex space-x-6 bg-white">
        <a href="/posts/{{$Post->id}}/edit">
            <i class="fa-solid fa-pencil"></i>Edit
        </a>
       <form method="POST" action="/posts/{{$Post->id}}">
      @csrf
        @method('DELETE')
         <button class="text-red-600"><i class="fa-solid fa-trash"></i>Delete</button>
      </form>
    </x-card> --}}
</div>
</x-layout>