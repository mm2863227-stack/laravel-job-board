<x-layout :title="$pageTitle">
<h2 class = "text-4xl">Blog And Posts :</h2>
@foreach ($posts as $post )
<h2 class = "text-3xl">{{$post->title}}</h2>
<p class = "text-1xl">{{"\t".$post->body }}</p>
<p class = "text-2xl">{{"\t".$post->author }}</p>
@endforeach
{{ $posts->links() }}
</x-layout>s