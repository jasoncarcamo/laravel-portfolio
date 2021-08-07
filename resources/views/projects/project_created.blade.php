@extends("layout.app")

@section("title", "Created new Project")
@php
    var_dump($project)
@endphp
@section("content")
<section>
    <h1>Created new project</h1>
    <p>{{$project["title"]}}</p>
</section>
@stop