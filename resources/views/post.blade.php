@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus laborum, inventore cum magni, veniam ea officiis animi quasi cumque omnis minima aperiam, ut deserunt necessitatibus deleniti harum tenetur iste neque?</p>
</article>

<a href="/blog">Back to Posts</a>
@endsection