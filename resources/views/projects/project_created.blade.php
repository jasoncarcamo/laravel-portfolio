@extends("layout.app")

@section("title", "Created new Project")

@section("content")
<section>
    <h1>Created new project</h1>
    <p>{{$created_project["title"]}}</p>
    <p>{{$created_project["id"]}}</p>
</section>
@stop