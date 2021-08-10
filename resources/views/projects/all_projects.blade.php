@extends("layout.app")

@section("title", "All projects")

@push("styles")
    <link href="/css/projects.css" rel="stylesheet"/>
@endpush

@section("content")
    <section id="all-projects-section">
        <section id="react-native-projects">

            <h2 class="project-type-title">React Native Projects</h2>

            @foreach($projects as $project)
                @if($project->category === "react_native")
                    @include("projects.display_project", array("project" => $project))
                @endif
            @endforeach

        </section>

        <section id="backend-projects">
            <h2 class="project-type-title">Full Stack Projects</h2>
            
            @foreach($projects as $project)
                @if($project->category === "full_stack")
                    @include("projects.display_project", array("project" => $project))
                @endif
            @endforeach
        </section>

        <section id="frontend-projects">
            <h2 class="project-type-title">Front end Projects</h2>

            @foreach($projects as $project)
                @if($project->category === "front_end")
                    @include("projects.display_project", array("project" => $project))
                @endif
            @endforeach
        </section>
    </section>
@stop