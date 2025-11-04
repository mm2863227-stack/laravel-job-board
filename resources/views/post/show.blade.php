<x-layout :title="$pageTitle">
<h2 class = "text-2xl">{{ $post->title }} :</h2>
<h3>{{$post->body}}</h3>
<p>{{  $post->author }}</p>
<ul>
@foreach ($post->comments as $comment)
<li>{{ $comment->author }},{{ $comment->content }}</li>

@endforeach


</ul>
</x-layout>