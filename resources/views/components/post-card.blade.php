@props(['Post'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ $post->coverImage ? asset('storage/'. $post->coverImage) : asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl font-bold">
                <a href="/posts/{{$Post -> id}} ">{{$Post->title}}</a>
            </h3>
            <div class="text-xl mb-4"> {{$Post->body}} </div>
            <x-post-tags :tagsCsv="$Post->tags"/>

            <small>Written on  {{$Post->created_at}} </small>
            
            
        </div>
    </div>
</x-card>
