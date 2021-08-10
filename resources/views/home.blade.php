@extends("layout.app")

@section("title", "Jason Carcamo - Web Developer")

@push("styles")
    <link href="/css/home.css" rel="stylesheet"/>
@endpush

@push("scripts")
    <script src="/js/home.js"></script>
@endpush

@section("content")
<section id="landing-page-section">
    <div id="landing-page-section-container">
        <h2>Full Stack Web Developer</h2>
        <p>I love solving problems big and small, for people and businesses.</p>
        <a href="./projects" id="view-more">View More</a>
    </div>
</section>
@stop