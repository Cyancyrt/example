
@extends('layout.main')

@section('container')
<article>
    <h2> {{$post["title"]}} </h2>
    <h5>{{$post["author"]}}</h5>
    <p>{{$post["isi"]}}</p>
</article>

<h2><a href="/Blog">back</a></h2>
@endsection