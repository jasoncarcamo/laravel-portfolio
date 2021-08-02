@extends("layout.app")

@section("title", "All projects")

@section("content")
    <section id="all-projects-section">
        @foreach($projects as $project)
            <section>
                <a href={{"/project/$project->id"}}><h1><strong>{{$project->title}}</strong></h1></a>
            </section>
        @endforeach
    </section>
@stop