<x-layout>
@include('partials._hero')
@include('partials._search')
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

  @unless (count($Posts)==0)
      
  
    @foreach ($Posts as $Post)
    <x-post-card :Post="$Post" />
    
    @endforeach

   
        
    @else
        <p class="text-capitalize">No posts found</p>

    @endunless

</div>
</x-layout>

