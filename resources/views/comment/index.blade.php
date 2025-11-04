<x-layout :title="$pageTitle">
<h2 class = "text-2xl">Comments Explorer</h2>
@foreach ($comments as $comment )
<a>{{ $comment->post->title }}</a>
<h2>{{$comment->author}}</h2>
<p class = "text-2xl">{{"\t".$comment->content }}</p>
@endforeach
</x-layout>