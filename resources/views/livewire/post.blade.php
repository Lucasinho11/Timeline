<div>
    <li class="mb-2">
      <div class="flex items-center mb-1">
        <div class="bg-gray-500 rounded-full h-8 w-8"></div>
        <div class="flex-1 ml-4 font-medium"><strong style="font-size: 25px;">{{ $post->user->name }}</strong> - {{ $date }}</div>
      </div>
      <div class="ml-12">
        <p style="font-size: 20px;">{{ $post->body }}</p>
      </div>
    </li>
    
</div>
