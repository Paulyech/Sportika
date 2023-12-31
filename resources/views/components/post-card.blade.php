@props(['Post'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ $Post->coverImage ? asset('storage/'. $Post->coverImage) : asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl font-bold">
                <a href="/posts/{{$Post -> id}} ">{{$Post->title}}</a>
            </h3>
            <div class="text-xl mb-4"> {{$Post->body}} </div>
            <x-post-tags :tagsCsv="$Post->tags"/>

            <small>Written on  {{$Post->created_at}} By <span class="font-bold">{{$Post->user->name}}</span>  </small>
            
            
        </div>
    </div>
</x-card>
