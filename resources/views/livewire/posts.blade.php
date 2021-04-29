<div style="margin-top: 2%;">
    @if(session()->has('status'))
        <div style="color:green;">
            {{session('status')}}
        </div>
    @endif
    <div class="relative w-1/2 m-8">
  <div class="border-r-2 border-gray-500 absolute h-full top-0" style="left: 15px"></div>
  <ul class="list-none m-0 p-0">
  @foreach ($posts as $post)
        <livewire:post :post="$post" :key="$post->id" />
    @endforeach
    {{ $posts->links() }}
  </ul>
</div>
    
</div>
