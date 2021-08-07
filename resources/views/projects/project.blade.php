@extends("layout.app")

@section("title", $project[0]->title)

@section("content")
<section id="project-section">
    <h1>{{$project[0]->category}}</h1>
    <p>{{$project[0]->title}}</p>
</section>

@stop